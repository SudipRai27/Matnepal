<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Packages\Entities\Packages;
use Modules\Packages\Entities\PackageDetails;
use Modules\Packages\Entities\PackageDates;
use Modules\Packages\Entities\PackageImages;
use Modules\Packages\Entities\PackageGroupDiscount;
use Modules\Packages\Entities\PackageFaq;
use File;
use Session;

class FrontendController extends Controller
{

    public function getHome()
    {
    	$package_menu = $this->getListPackageTreeView();
    	return view('frontend.pages.home')->with('package_menu', $package_menu);
    }
    
    public function getListPackageTreeView()
    {
      
      $packages = Packages::where('parent_id', 0)->where('show_in_frontend','yes')->get();
      $tree = '';
      $url = url('/'); 
      
      
      foreach ($packages as $package) 
      {                 
                
        if(count($package->childs)) 
        {                   
          $tree .='<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="true">'.$package->package_name.'<span class="caret"></span></a>';
                   	
          $tree .=$this->childTreePackageView($package);
        }
        else
        {          
          $tree .='<li><a href="#">'.$package->package_name.'</a>';                    
        }
        
        $tree .= '</li>';
      }              

      return $tree;       
    }

    public function childTreePackageView($package)
    {
      $url = url('/');
      $html ='<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
      foreach ($package->childs as $arr) 
      {          	
      	if(count($arr->childs))
        {
		      $html .='<li class="dropdown-submenu">';    
      		//$html .= '<a href = "#">'.$arr->package_name.'</a>';
          $html .= '<a href = "'.$url.'/package/itinerary/'.$arr->package_name.'">'.$arr->package_name.'</a>';
      		$html .= $this->childTreePackageView($arr);
      		$html .= '</li>';
        }
        else
        {
          //$html .= '<a href = "#">'.$arr->package_name.'</a></li>';
          $html .= '<li><a href="'.$url.'/package/itinerary/'.$arr->package_name.'">'.$arr->package_name.'</a></li>';
                                    
        }
      }

      $html .='</ul>';
      return $html;
    }

    ////
    public function getPackageName($id)
    {
      $packages = Packages::get()->toArray();
      $root_id = $this->get_parent($packages, $id);
      $current_package = Packages::where('id', $id)->first(); 
      return $current_package->package_name;      

    }
     
    public function get_key($arr, $id)
    {
        foreach ($arr as $key => $val) {
            if ($val['id'] === $id) {
                return $key;
            }
        }
        return null;
    }

    public function get_parent($arr, $id)
    {
        $key = $this->get_key($arr, $id);
        if ($arr[$key]['parent_id'] == 0)
        {
            return $id;
        }
        else 
        {
            return $this->get_parent($arr, $arr[$key]['parent_id']);
        }
    }
    
    public function getPackageDetails($package_name)
    {      
      $package = Packages::where('package_name', $package_name)->first(); 
      
      $package_details = PackageDetails::where('package_id', $package->id)->first();

      if(!count($package_details))
      {
        return redirect()->route('package-details-without-itinerary', $package->package_name);
      }
      $package_dates = PackageDates::where('package_id', $package->id)->get();
      $package_images = PackageImages::where('package_id', $package->id)->get();
      $package_group_discount = PackageGroupDiscount::where('package_id', $package->id)->get();
      
      $package = Packages::findorFail($package->id);     
      $package->view_count++;
      $package->save();   

      $remaining_packages = \DB::table('package_details')
                ->join('packages','packages.id','=','package_details.package_id')
                ->select('packages.*','package_details.total_trip_cost','package_details.duration')
                ->where('is_featured','yes')
                ->where('parent_id','!=', 0)
                ->where('is_day_trip','no')
                ->where('show_in_frontend', 'yes')
                ->where('packages.id','!=', $package->id)     
                ->orderBy('view_count','DESC')                               
                ->take(6)
                ->get();      

      $total_trip_reviews = \DB::table('package_review')
                          ->where('package_id', $package->id)
                          ->count(); 

      
      $total_ratings = \DB::table('package_review')
                      ->where('package_id', $package->id)
                      ->sum('rating');

      if($total_trip_reviews > 0 )
      {
          $average_rating = round($total_ratings / $total_trip_reviews);
      }
      else
      {
          $average_rating = 0;
      }

      $package_faq = PackageFaq::where('package_id', $package->id)->get();

      return view('frontend.pages.package-details')->with('package', $package)
                                                   ->with('package_details', $package_details)
                                                   ->with('package_dates', $package_dates)
                                                   ->with('package_images', $package_images)
                                                   ->with('package_group_discount', $package_group_discount)
                                                   ->with('remaining_packages', $remaining_packages)
                                                   ->with('total_trip_reviews', $total_trip_reviews)  
                                                   ->with('average_rating', $average_rating)
                                                   ->with('package_faq', $package_faq);
        
    }

    public function getPackageDetailsWithoutItinerary($package_name)
    {
      $package = Packages::where('package_name', $package_name)->first(); 
      $child_packages = Packages::where('parent_id',$package->id)->where('show_in_frontend', 'yes')->get(); 

      return view('frontend.pages.package-without-itinerary')->with('package', $package)
                                                             ->with('child_packages', $child_packages);
    }

    public function getAboutUs($title)
    {
      $about_us = \Modules\AboutUs\Entities\AboutUs::where('title', $title)
                                                  ->where('show_in_frontend','yes')
                                                  ->first(); 
      return view('frontend.pages.about-us')->with('about_us',$about_us);
    }   

    public function getListBlogs()
    {
      $blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->orderBy('created_at', 'DESC')
            ->where('show_in_frontend', 'yes')
            ->paginate(6);

      $popular_blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->orderBy('view_count', 'DESC')
            ->where('show_in_frontend', 'yes')
            ->take(3)
            ->get();
            
      return view('frontend.pages.blogs')->with('blog', $blog)
                                         ->with('popular_blog', $popular_blog);
    }

    public function getBlogDetails($title)
    {
      $blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')            
            ->where('show_in_frontend', 'yes')
            ->where('title', $title)
            ->first(); 

      $current_blog = \Modules\Blog\Entities\Blog::findorFail($blog->id); 
      $current_blog->view_count++;
      $current_blog->save();

      $popular_blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->orderBy('view_count', 'DESC')
            ->where('show_in_frontend', 'yes')
            ->where('blog.id', '!=', $blog->id)
            ->take(6)
            ->get();

      $previous_blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->where('show_in_frontend','yes')
            ->where('blog.id', '<', $blog->id)
            ->orderBy('id','desc')
            ->first();      


      $next_blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->where('show_in_frontend','yes')
            ->where('blog.id', '>', $blog->id)
            ->orderBy('id')
            ->first(); 

      $general_settings = \Modules\Configurations\Entities\GeneralSettings::first();

      return view('frontend.pages.blog-details')->with('blog', $blog)
                                                ->with('popular_blog', $popular_blog)
                                                ->with('general_settings', $general_settings)
                                                ->with('previous_blog', $previous_blog)
                                                ->with('next_blog', $next_blog); 
    }

    public function getSearchBlog(Request $request)
    {
      $input = $request->input; 

      if($request->ajax())
      {
          $blog = \DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')                       
            ->Where('title', 'LIKE', '%'.$input.'%')
            ->get();

          return view('frontend.pages.search-results-blog')->with('blog', $blog);
      }
    }
    
    
    public function getDownloadPackageFile(Request $request)
    {
      $input = request()->all();
      
      if(strlen($input['file']) == 0)
      {
        Session::flash('error-msg','No File Found, Please contact the administrator'); 
        return redirect()->back();
      }
      else
      {
        $file_path = public_path().'/images/package_files/'.$input['file'];
        return response()->file($file_path);
      }
     
    }

    public function getSearchPackages(Request $request)
    {/*
        $term = $request->term;
    
        $results = array();
        
        $queries = Packages::where('package_name','LIKE','%'.$term."%")
                ->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->package_name ];
        }

        return response()->json($results);*/

      $url = url('/');
      if($request->get('query'))
      {
        $query = $request->get('query');
        $data = \DB::table('packages')
              ->where('package_name', 'LIKE', "%{$query}%")
              ->where('parent_id','!=',0)
              ->get();
        if(count($data))
        {
          $output = '<ul class="dropdown-menu" style="display:block; position:relative; margin-left:1026px;" >';
          foreach($data as $row)
          {
            $output .= '
            <li><a href="'. $url.'/package/itinerary/'.$row->package_name.'">'.$row->package_name.'</a></li>
            ';
          }
          $output .= '</ul>';
          echo $output;  
        }                 
      }
    }

    public function getChildPackages(Request $request)
    {
        $package_id = $request->package_id; 
        
        $child_packages = Packages::where('parent_id', $package_id)->get();
        if(!count($child_packages))
        {
          $output = '';
          $output .= '<option value="none"></output>'; 
          return $output;
        }


        $output = '';
        foreach($child_packages as $index => $d)
        {
            $output .= '<option value="'.$d->package_name.'">'.$d->package_name.'</option>"'; 
        }
        return $output;
    }

    public function getSearchIdealTrip(Request $request)
    {
      $input = request()->all();
      /*echo '<pre>';  
      print_r($input);*/
      
      if(array_key_exists("parent_package_id", $input))
      {
        if($input['child_package_id'] == 'none')
        {
          Session::flash('error-msg', 'Sorry no activities are available at the moment'); 
          return redirect()->back()->withInput();
        }
        else
        {

          if($input['duration'] == 'any')
          {
            $package = Packages::where('id', $input['parent_package_id'])->first(); 
            $child_packages = Packages::where('parent_id', $package->id)
                                      ->where('package_name', $input['child_package_id'])
                                      ->first();
            
            //$results = Packages::where('id', )
          }
          Session::flash('success-msg', 'Sorry no activities are available at the moment'); 
          return redirect()->back();
        }
        
      }
      else
      {
        Session::flash('error-msg','Please select search parameters');
        return redirect()->back()->withInput();
      }
    }
}


 