<?php

namespace Modules\Packages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Packages\Entities\Packages;
use Modules\Packages\Entities\PackageDetails;
use Modules\Packages\Entities\PackageDates;
use Modules\Packages\Entities\PackageImages;
use Modules\Packages\Entities\PackageGroupDiscount;
use Modules\Packages\Entities\PackageFaq;
use DB;
use Session;
use File;

class PackagesDetailController extends Controller
{
 	public $image_path;
 	public $file_path;

    public function __construct()
    {
        $this->image_path = 'images/package_gallery_images/';
        $this->file_path = 'images/package_files/';
        $this->trip_map_path = 'images/package_trip_map/';
    }

    public function getListPackageDetails()
    {
    	$package_details = DB::table('package_details')
    							->join('packages','packages.id','=','package_details.package_id')
    							->select('package_name','package_details.*')
                                ->orderBy('package_details.created_at','DESC')
    							->paginate(6);

    	return view('packages::package-details.list-package-details')->with('package_details', $package_details);
    }

	public function getCreatePackageDetails()
	{
		$packages = Packages::select('id', 'package_name')->get();
		return view('packages::package-details.create-package-details')->with('packages', $packages);		
	}

	public function postCreatePackageDetails(Request $request)
	{	
		$request->validate([
			'package_id' => 'required', 
			'country' => 'required', 
			'duration' => 'required', 
			'altitude' => 'required', 
			'trip_grade' => 'required',
			'group_size' => 'required', 
			'accomodation' => 'required', 
			'best_season' => 'required',
			'total_trip_cost' => 'required', 
			'file' => 'mimes:doc,docx,pdf,txt|max:2048',
			'trip_overview' => 'required', 
            'brief_itinerary' => 'required',
			'itinerary' => 'required', 
			'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'trip_map' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
		]);

		DB::beginTransaction();
        try {

        	$input = request()->all();

        	//CHECK WHETHER PACKAGE DETAIL IS ALREADY CREATED FOR A GIVEN PACKAGE OR NOT

        	$package_details = PackageDetails::where('package_id', $input['package_id'])->get();
        	if(count($package_details))
        	{
        		Session::flash('error-msg', 'The package detail has already been created for the selected package. Please try again to create for the new one or edit existing information.');
        		return redirect()->back();
        	}

        	$data_to_store_in_package_details_table = [];
        	$data_to_store_in_package_details_table['package_id'] = $input['package_id'];
        	$data_to_store_in_package_details_table['country'] = $input['country'];
        	$data_to_store_in_package_details_table['duration'] = $input['duration'];
        	$data_to_store_in_package_details_table['altitude'] = $input['altitude'];
        	$data_to_store_in_package_details_table['trip_grade'] = $input['trip_grade'];
        	$data_to_store_in_package_details_table['group_size'] = $input['group_size'];
        	$data_to_store_in_package_details_table['accomodation'] = $input['accomodation'];
        	$data_to_store_in_package_details_table['best_season'] = $input['best_season'];
        	$data_to_store_in_package_details_table['total_trip_cost'] = $input['total_trip_cost'];
            $data_to_store_in_package_details_table['discounted_price'] = $input['discounted_price'];

        	if($request->hasFile('file')) 
            {
                $name = uniqid() . $request->file->getClientOriginalName();
                $ext = $request->file->getClientOriginalExtension();
                $request->file->move(public_path(). '/'. $this->file_path, $name,$ext);
                $data_to_store_in_package_details_table['file'] = $name;
            }

            if($request->hasFile('trip_map')) 
            {
                $name = uniqid() . $request->trip_map->getClientOriginalName();
                $ext = $request->trip_map->getClientOriginalExtension();
                $request->trip_map->move(public_path(). '/'. $this->trip_map_path, $name,$ext);
                $data_to_store_in_package_details_table['trip_map'] = $name;
            }

            $data_to_store_in_package_details_table['trip_overview'] = $input['trip_overview'];
            $data_to_store_in_package_details_table['itinerary'] = $input['itinerary'];
            $data_to_store_in_package_details_table['brief_itinerary'] = $input['brief_itinerary'];
            $data_to_store_in_package_details_table['cost_inclusion'] = $input['cost_inclusion'];
            $data_to_store_in_package_details_table['cost_exclusion'] = $input['cost_exclusion'];           
        	PackageDetails::create($data_to_store_in_package_details_table);

            //SAVING GALLERY IMAGE FOR PACKAGES

        	if($request->hasFile('image')) 
            {
                $image = $request->file('image');

                foreach($image as $file)
                {                
                    $name = uniqid() . $file->getClientOriginalName();
                    $ext = $file->getClientOriginalExtension();
                    $file->move(public_path(). '/'. $this->image_path, $name,$ext);
                    $package_image = new PackageImages;
                    $package_image->image = $name;
                    $package_image->package_id = $input['package_id'];
                    $package_image->save();
                }            
            }

            //SAVING START DATE AND END DATE FOR PACKAGES            
            $count = count($input['start_date']);
            	
        	for($i = 0; $i < $count; $i++)
        	{
        		if(isset($input['start_date'][$i]) && isset($input['end_date'][$i]) && isset($input['price'][$i]))
        		{
            		$package_dates = new PackageDates;
            		$package_dates->package_id = $input['package_id'];
            		$package_dates->start_date = $input['start_date'][$i];
            		$package_dates->end_date = $input['end_date'][$i];
            		$package_dates->price = $input['price'][$i];
            		$package_dates->save();
            	}
        	}      

            //SAVING GROUP DISCOUNT FOR PACKAGES
        	$people_count = count($input['no_of_people']);

        	for ($j = 0; $j < $people_count; $j++)
        	{
        		if(isset($input['no_of_people'][$j]) && isset($input['discount_price'][$j]))
        		{
        			$package_discount = new PackageGroupDiscount;
        			$package_discount->package_id = $input['package_id'];
        			$package_discount->no_of_people = $input['no_of_people'][$j];
        			$package_discount->price = $input['discount_price'][$j];
        			$package_discount->save();
        		}
        	}

            //SAVING FAQ FOR PACKAGES
            $faq_count = count($input['question']);

            for ($k = 0; $k < $faq_count; $k++)
            {
                if(isset($input['question'][$k]) && isset($input['answer'][$k]))
                {
                    $package_faq = new PackageFaq;
                    $package_faq->package_id = $input['package_id'];
                    $package_faq->question = $input['question'][$k];
                    $package_faq->answer = $input['answer'][$k];
                    $package_faq->save();
                }
            }
            
            DB::commit();
            Session::flash('success-msg', 'Package Created Successfully');
            return redirect()->back();
            
        } catch (Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error-msg',$e->getMessage());
        }    

	}

    public function getViewPackageDetails($id)
    {        
        $package_details = DB::table('package_details')
                            ->join('packages','packages.id','=','package_details.package_id')
                            ->select('package_name','package_details.*')
                            ->where('package_details.id',$id)
                            ->first();                            

        $package_dates = PackageDates::where('package_id', $package_details->package_id)->get();

        $package_group_discount = PackageGroupDiscount::where('package_id', $package_details->package_id)->get();

        $package_faq = PackageFaq::where('package_id', $package_details->package_id)->get();

        $package_images = PackageImages::where('package_id', $package_details->package_id)->get();
                               
        return view('packages::package-details.view-package-details')
                    ->with('package_details', $package_details)
                    ->with('package_dates', $package_dates)
                    ->with('package_group_discount', $package_group_discount)
                    ->with('package_faq', $package_faq)
                    ->with('package_images', $package_images);
    }

    public function getPackageDetailsFile($file_name)
    {
        $pathToFile = public_path().'/images/package_files/'. $file_name;        
        return response()->file($pathToFile);
    }

    public function getDeletePackageGalleryImage($id)
    {
        $package_image = PackageImages::findOrFail($id);
        $image_path = public_path().'/'. $this->image_path . $package_image->image;

        if(File::exists($image_path))
        {
          File::delete($image_path); 
        }
        $package_image->delete();
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }

    public function getDeletePackageDetails($id)
    {
        //$package_details = PackageDetails::where('id',$id)->select('package_id')->first();
        $package = PackageDetails::findOrFail($id);
        $package_id = $package->package_id;        
        
        $package_dates = PackageDates::where('package_id', $package_id)->get();
        //DELETE PACKAGE DATES
        if(count($package_dates))
        {
            PackageDates::where('package_id', $package_id)->delete();
        }
        
        $package_faq = PackageFaq::where('package_id', $package_id)->get();
        //DELETE PACKAGE FAQ
        if(count($package_faq))
        {
            PackageFaq::where('package_id', $package_id)->delete();
        }

        $package_group_discount = PackageGroupDiscount::where('package_id', $package_id)->get();
        //DELETE PACKAGE DISCOUNT
        if(count($package_group_discount))
        {
            PackageGroupDiscount::where('package_id', $package_id)->delete();
        }

        $package_gallery_images = PackageImages::where('package_id', $package_id)->get();
        //DELETE & REMOVE PACKAGE GALLERY IMAGES
        if(count($package_gallery_images))
        {
            foreach($package_gallery_images as $image)
            {
                $image_path = public_path().'/'. $this->image_path . $image->image;
                if(File::exists($image_path))   
                {
                File::delete($image_path); 
                }   
            }
            PackageImages::where('package_id', $package_id)->delete();
        }

        //REMOVE PACKAGE FILES/BROCHURE
        $package_file_path = PackageDetails::where('id',$id)->select('file')->first();
        $file_path = public_path().'/'. $this->file_path . $package_file_path->file;
        
        if(File::exists($file_path))
        {
            File::delete($file_path); 
        }   

        //REMOVE TRIP MAP
        $trip_map = PackageDetails::where('id',$id)->select('trip_map')->first(); 
        $trip_map_path = public_path().'/'. $this->trip_map_path . $trip_map->trip_map;    

        if(File::exists($trip_map_path))
        {
            File::delete($trip_map_path); 
        }       

        PackageDetails::where('id', $id)->delete();
        Session::flash('success-msg', 'Package Detail Deleted Successfully');
        return redirect()->back();
    }

    public function getEditPackageDetails($id)
    {
        $package_details = PackageDetails::findorFail($id);
        $packages = Packages::select('package_name', 'id')->get();
        $package_dates = PackageDates::where('package_id', $package_details->package_id)->get();
        $package_images = PackageImages::where('package_id', $package_details->package_id)->get();
        $package_group_discount = PackageGroupDiscount::where('package_id', $package_details->package_id)->get();        
        $package_faq = PackageFaq::where('package_id', $package_details->package_id)->get();

        return view('packages::package-details.edit-package-details')->with('package_details', $package_details)
                                                                ->with('packages',$packages)
                                                                ->with('package_dates', $package_dates)
                                                                ->with('package_images', $package_images)
                                                                ->with('package_group_discount', $package_group_discount)
                                                                ->with('package_faq', $package_faq);
    }

    public function getDeletePackageDates($id)
    {
        $package_date = PackageDates::findOrFail($id);
        $package_date->delete();
        Session::flash('success-msg', 'Package Date Deleted Successfully'); 
        return redirect()->back();
    }

    public function getDeletePackageGroupDiscount($id)
    {
        $package_discount = PackageGroupDiscount::findorFail($id);
        $package_discount->delete();
        Session::flash('success-msg', 'Package Group Discount Deleted Successfully');
        return redirect()->back();
    }

    public function getDeletePackageFaq($id)
    {
        $package_faq = PackageFaq::findOrFail($id);
        $package_faq->delete();
        Session::flash('success-msg', 'Package FAQ deleted successfully');
        return redirect()->back();
    }

    public function postEditPackageDetails(Request $request, $id)
    {
        $request->validate([
            'package_id' => 'required', 
            'country' => 'required', 
            'duration' => 'required', 
            'altitude' => 'required', 
            'trip_grade' => 'required',
            'group_size' => 'required', 
            'accomodation' => 'required', 
            'best_season' => 'required',
            'total_trip_cost' => 'required', 
            'file' => 'mimes:doc,docx,pdf,txt|max:2048',
            'trip_overview' => 'required', 
            'brief_itinerary' => 'required',
            'itinerary' => 'required', 
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'trip_map' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);

        DB::beginTransaction();
        try {

            $input = request()->all();                                    
            $package_details = PackageDetails::findOrFail($id);
            $data_to_update_in_package_details_table = [];
            $data_to_update_in_package_details_table['package_id'] = $input['package_id'];
            $data_to_update_in_package_details_table['country'] = $input['country'];
            $data_to_update_in_package_details_table['duration'] = $input['duration'];
            $data_to_update_in_package_details_table['altitude'] = $input['altitude'];
            $data_to_update_in_package_details_table['trip_grade'] = $input['trip_grade'];
            $data_to_update_in_package_details_table['group_size'] = $input['group_size'];
            $data_to_update_in_package_details_table['accomodation'] = $input['accomodation'];
            $data_to_update_in_package_details_table['best_season'] = $input['best_season'];
            $data_to_update_in_package_details_table['total_trip_cost'] = $input['total_trip_cost'];
            $data_to_update_in_package_details_table['discounted_price'] = $input['discounted_price'];

            if($request->hasFile('file')) 
            {
                $file_path = public_path().'/'. $this->file_path . $package_details->file;
                if(File::exists($file_path))
                {
                    File::delete($file_path); 
                }   
                $name = uniqid() . $request->file->getClientOriginalName();
                $ext = $request->file->getClientOriginalExtension();
                $request->file->move(public_path(). '/'. $this->file_path, $name,$ext);
                $data_to_update_in_package_details_table['file'] = $name;
            }

            if($request->hasFile('trip_map')) 
            {
                $trip_map_path = public_path().'/'. $this->trip_map_path . $package_details->trip_map;
                if(File::exists($trip_map_path))
                {
                    File::delete($trip_map_path); 
                }   
                $name = uniqid() . $request->trip_map->getClientOriginalName();
                $ext = $request->trip_map->getClientOriginalExtension();
                $request->trip_map->move(public_path(). '/'. $this->trip_map_path, $name,$ext);
                $data_to_update_in_package_details_table['trip_map'] = $name;
            }

            $data_to_update_in_package_details_table['trip_overview'] = $input['trip_overview'];
            $data_to_update_in_package_details_table['itinerary'] = $input['itinerary'];
            $data_to_update_in_package_details_table['brief_itinerary'] = $input['brief_itinerary'];
            $data_to_update_in_package_details_table['cost_inclusion'] = $input['cost_inclusion'];
            $data_to_update_in_package_details_table['cost_exclusion'] = $input['cost_exclusion'];           
            $package_details->update($data_to_update_in_package_details_table);

            //SAVING GALLERY IMAGE FOR PACKAGES

            if($request->hasFile('image')) 
            {
                $image = $request->file('image');

                foreach($image as $file)
                {                
                    $name = uniqid() . $file->getClientOriginalName();
                    $ext = $file->getClientOriginalExtension();
                    $file->move(public_path(). '/'. $this->image_path, $name,$ext);
                    $package_image = new PackageImages;
                    $package_image->image = $name;
                    $package_image->package_id = $input['package_id'];
                    $package_image->save();
                }            
            }

            //DELETING PREVIOUS START DATE AND END DATE RECORDS COMPLETELY AND SAVING WITH A NEW ONE

            $package_dates = PackageDates::where('package_id', $input['package_id'])->get();
            if(count($package_dates))
            {
                PackageDates::where('package_id', $input['package_id'])->delete();
            }

            //SAVING START DATE AND END DATE FOR PACKAGES            
            $count = count($input['start_date']);
                
            for($i = 0; $i < $count; $i++)
            {
                if(isset($input['start_date'][$i]) && isset($input['end_date'][$i]) && isset($input['price'][$i]))
                {
                    $package_dates = new PackageDates;
                    $package_dates->package_id = $input['package_id'];
                    $package_dates->start_date = $input['start_date'][$i];
                    $package_dates->end_date = $input['end_date'][$i];
                    $package_dates->price = $input['price'][$i];
                    $package_dates->save();
                }
            }      

            //DELETING PREVIOUS GROUP DISCOUNT COMPLETETLY AND SAVING WITH NEW SETS OF DATA

            $package_discount = PackageGroupDiscount::where('package_id', $input['package_id'])->get();

            if(count($package_discount))
            {
                PackageGroupDiscount::where('package_id', $input['package_id'])->delete();
            }

            //SAVING GROUP DISCOUNT FOR PACKAGES
            $people_count = count($input['no_of_people']);

            for ($j = 0; $j < $people_count; $j++)
            {
                if(isset($input['no_of_people'][$j]) && isset($input['discount_price'][$j]))
                {
                    $package_discount = new PackageGroupDiscount;
                    $package_discount->package_id = $input['package_id'];
                    $package_discount->no_of_people = $input['no_of_people'][$j];
                    $package_discount->price = $input['discount_price'][$j];
                    $package_discount->save();
                }
            }

            //DELETING PREVIOUS FAQ AND SAVING WITH A NEW SET OF DATA

            $package_faq = PackageFaq::where('package_id', $input['package_id'])->get();

            if(count($package_faq))
            {
                PackageFaq::where('package_id', $input['package_id'])->delete();
            }


            //SAVING FAQ FOR PACKAGES
            $faq_count = count($input['question']);

            for ($k = 0; $k < $faq_count; $k++)
            {
                if(isset($input['question'][$k]) && isset($input['answer'][$k]))
                {
                    $package_faq = new PackageFaq;
                    $package_faq->package_id = $input['package_id'];
                    $package_faq->question = $input['question'][$k];
                    $package_faq->answer = $input['answer'][$k];
                    $package_faq->save();
                }
            }
            
            DB::commit();
            Session::flash('success-msg', 'Package Updated Successfully');
            return redirect()->back();
            
        } catch (Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error-msg',$e->getMessage());
        }    
    }

    public function getSearchPackageDetails(Request $request)
    {
        $input = $request->input; 

        if($request->ajax())
        {
            $package_details = DB::table('package_details')
                                ->join('packages','packages.id','=','package_details.package_id')
                                ->select('package_name','package_details.*')
                                ->where('package_name', 'LIKE', '%'.$input.'%')
                                ->get();

            return view('packages::package-details.ajax-list-package-details')->with('package_details', $package_details);            
        }
    }
}
