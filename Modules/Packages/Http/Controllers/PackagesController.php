<?php

namespace Modules\Packages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Packages\Entities\Packages;
use Modules\Packages\Entities\PackageImages;
use Modules\Packages\Entities\PackageDetails;
use DB;
use Session;
use File;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public $image_path;

    public function __construct()
    {
        $this->image_path = 'images/package_images/';
        $this->package_gallery_path = 'images/package_gallery_images/';
        $this->file_path = 'images/package_files/';
    }

    public function getViewPackage($id)
    {
        $package = Packages::findorFail($id);     
        /*$package->view_count++;
        $package->save(); */  
        return view('packages::packages.view-package')->with('package', $package);
        
    }

    public function getListPackage()
    {        
        $packages = Packages::orderBy('created_at', 'DESC')->paginate(6);
        return view('packages::packages.list-packages')->with('packages', $packages);
    }

    public function getListPackageTreeView()
    {
        $packages = Packages::where('parent_id', 0)->get();
        $tree='<ul>';
        foreach ($packages as $package) {
             $tree .='<li>'.$package->package_name.'</li>';
             $tree .= '</br>';                 
             if(count($package->childs)) {
                $tree .=$this->childTreePackageView($package);
            }
            $tree.= '<br>';
        }
        $tree .='</ul>';        
        
        return view('packages::packages.list-tree-packages')->with('tree', $tree);
    }

    public function childTreePackageView($package)
    {
        $html ='<ul>';
            foreach ($package->childs as $arr) {
                if(count($arr->childs)){
                $html .='<li>'.$arr->package_name.'</li>';    
                        $html .= '</br>';          
                        $html.= $this->childTreePackageView($arr);
                    }else{
                        $html .='<li>'.$arr->package_name;                                 
                        $html .="</li>";
                        $html .= '</br>';    
                    }
                                   
            }        
        $html .="</ul>";
        return $html;
    }

    public function getCreatePackage()
    {
        $packages =  Packages::get()->toArray();
        $tree = $this->buildTree($packages, $parent_id = 0);
        $selectlist = $this->toSelect($tree, $parent_id=0);
        

        return view('packages::packages.create-package')->with('selectlist', $selectlist);        
    }

    public function buildTree(array $elements, $parentId = 0)
    {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }

    public function toSelect($arr, $depth=0) 
    {    
        $html = '';
        foreach ( $arr as $v ) {           

            $html.= '<option value='.$v['id'].'>';
            $html .= str_repeat('-', $depth); // use the $depth value to create the --
            $html .= $v['package_name'] . '</li>' . PHP_EOL;

            if (array_key_exists('children', $v) ) {
                $html.= $this->toSelect($v['children'], $depth+1);
            }
        }

        $html.= '</option>' . PHP_EOL;
        return $html;
    }

    public function PostCreatePackages(Request $request)
    {
        $request->validate([
            'package_name' => 'required', 
            'package_description' => 'required', 
            'parent_id' => 'required',            
            'image*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'

        ]);

        DB::beginTransaction();
        try {

            $input = request()->all();       

            if($request->hasFile('image')) 
            {
                $name = uniqid() . $request->image->getClientOriginalName();
                $ext = $request->image->getClientOriginalExtension();
                $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
                $input['image'] = $name;
            }

            Packages::create($input);
            DB::commit();
            Session::flash('success-msg', 'Package Created Successfully');
            return redirect()->back();
            
        } catch (Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error-msg',$e->getMessage());
        }    
    }

    public function getEditPackage($id)
    {
        $package = Packages::findorFail($id);
        $packages =  Packages::where('id', '!=', $id)->get()->toArray();
        $tree = $this->buildTreeForPackageEdit($packages, $parent_id = 0);
        $selectlist = $this->toSelectForPackageEdit($tree, $parent_id=0, $current_parent_id = $package->parent_id);        
        return view('packages::packages.edit-package')->with('package', $package)
                                             ->with('selectlist', $selectlist);                                             
    }

    public function buildTreeForPackageEdit(array $elements, $parentId = 0)
    {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTreeForPackageEdit($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
            return $branch;
    }

    public function toSelectForPackageEdit($arr, $depth=0, $current_parent_id) 
    {    
        $html = '';        
        foreach ( $arr as $v ) {           

            $html.= '<option value='. $v['id'] ;
            if($v['id'] == $current_parent_id)
            {
                $html .= '';
                $html .= ' ';
                $html .= 'selected';
                $html .= '>';
            }
            else
            {
                $html .= '>'; 
            }
            
            $html .= str_repeat('-', $depth); // use the $depth value to create the --
            $html .= $v['package_name'] . '</li>' . PHP_EOL;

            if (array_key_exists('children', $v) ) {
                $html.= $this->toSelectForPackageEdit($v['children'], $depth+1, $current_parent_id);
            }
        }

        $html.= '</option>' . PHP_EOL;
        return $html;
    }

    public function postUpdatePackage(Request $request, $id)
    {
        $request->validate([
            'package_name' => 'required', 
            'package_description' => 'required', 
            'parent_id' => 'required',            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'

        ]);
        
        DB::beginTransaction();
        try {

            $input = request()->all();
            $package = Packages::findorFail($id);
            
            if($request->hasFile('image')) 
            {
                $image_path = public_path().'/'. $this->image_path . $package->image;
                if(File::exists($image_path))
                {
                    File::delete($image_path); 
                }

            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;

            }

            $package->update($input);
            DB::commit();
            Session::flash('success-msg', 'Updated Successfully'); 
            return redirect()->back();
           
        } catch (Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error-msg',$e->getMessage());
        }        

    }

    public function getDeletePackage($id)
    {
        $package = Packages::findorFail($id);
        $child_packages = Packages::where('parent_id', $id)
                            ->get();
        if(count($child_packages))
        {   
            //NOT ALLOWING TO DELETE PACKAGES THAT HAVE CHILD PACKAGES 
            Session::flash('error-msg', 'This package has children packages / elements. Please delete those first and try again');
            return redirect()->back();
        }   

        //DELETE PACKAGE IMAGE
        $image_path = public_path().'/'. $this->image_path . $package->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }

        //DELETE PACKAGE ITINERARY IMAGES IF A PACKAGE HAS ITINERARY
        $package_gallery_images = PackageImages::where('package_id', $package->id)->get();
        if(count($package_gallery_images))
        {
            foreach($package_gallery_images as $image)
            {
                $image_path = public_path().'/'. $this->package_gallery_path . $image->image;
                if(File::exists($image_path))
                {
                File::delete($image_path); 
                }   
            }            
        }        

        //DELETE PACKAGE ITINERARY FILE IF A PACKAGE HAS ITINERARY.
        $package_details = PackageDetails::where('package_id', $package->id)->first();
        if(count($package_details))
        {
            $file_path = public_path().'/'. $this->file_path . $package_details->file;
            if(File::exists($file_path))
            {
                File::delete($file_path); 
            }   
        }

        $package->delete();
        Session::flash('success-msg', 'Package Deleted Successfully');
        return redirect()->back();
    }


    public function getSearchPackage(Request $request)
    {
        $input = $request->input; 

        if($request->ajax())
        {
            $packages = Packages::where('package_name', 'LIKE', '%'.$input.'%')
                        ->get();

            return view('packages::packages.ajax-list-package')->with('packages', $packages);
        }

    }
}
