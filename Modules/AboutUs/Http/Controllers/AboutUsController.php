<?php

namespace Modules\AboutUs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AboutUs\Entities\AboutUs;
use Session;
use File;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public $image; 

    public function __construct()
    {
        $this->image_path = 'images/about_us_images/';
    }

    public function getListAboutUs()
    {
        $about_us = AboutUs::orderBy('created_at','DESC')->paginate(4);
        return view('aboutus::list')->with('about_us', $about_us);
    }

    public function getCreateAboutUs()
    {
        return view('aboutus::create');
    }

    public function postCreateAboutUs(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'content' => 'required',             
            'show_in_frontend' => 'required',  
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);

        $input = request()->all();
        if($request->hasFile('image')) 
        {
            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        AboutUs::create($input);
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();
    }

    public function getEditAboutUs($id)
    {
        $about_us = AboutUs::findOrFail($id);
        return view('aboutus::edit')->with('about_us', $about_us);
    }

    public function postEditAboutUs(Request $request, $id)
    {
        $request->validate([
            'title' => 'required', 
            'content' => 'required',             
            'show_in_frontend' => 'required',  
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);
        
        $input = request()->all();
        $about_us = AboutUs::findOrFail($id);
    
        if($request->hasFile('image')) 
        {
            $image_path = public_path().'/'. $this->image_path . $about_us->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        $about_us->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-about-us');
    }

    public function getViewAboutUs($id)
    {
        $about_us = AboutUs::findOrFail($id); 
        return view('aboutus::view')->with('about_us', $about_us);
    }

    public function getDeleteAboutUs($id)
    {    
        $about_us = AboutUs::findOrFail($id);
        $image_path = public_path().'/'. $this->image_path . $about_us->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $about_us->delete();
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }
}
