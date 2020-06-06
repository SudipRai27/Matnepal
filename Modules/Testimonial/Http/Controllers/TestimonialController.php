<?php

namespace Modules\Testimonial\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Testimonial\Entities\Testimonial;
use Image;
use Session;
use File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public $image_path; 

    public function __construct()
    {
        $this->image_path =  'images/testimonial_images/';
    }

    public function getListTestimonial()
    {
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->paginate(4);
        return view('testimonial::list-testimonial')->with('testimonials', $testimonials);
    }

    public function getCreateTestimonial()
    {
        return view('testimonial::create-testimonial');
    }

    public function postCreateTestimonial(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'message' => 'required',
            'frontend_publishable' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            
            ]);
        
        $input = request()->all();
        if($request->hasFile('image')) 
        {
            $image= $request->file('image');
            $filename  = uniqid() . $image->getClientOriginalName();
            $path = public_path($this->image_path . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $input['image'] = $filename;
        }
        Testimonial::create($input);
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();
    }

    public function getEditTestimonial($id)
    {
        $testimonial = Testimonial::findorFail($id); 
        return view('testimonial::edit-testimonial')->with('testimonial', $testimonial);
    }

    public function postEditTestimonial(Request $request, $id)
    {
         $request->validate([
            'full_name' => 'required',
            'message' => 'required',
            'frontend_publishable' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);

        $testimonial = Testimonial::findorFail($id); 
        $input = request()->all();
        if($request->hasFile('image'))
        {
            $image_path = public_path().'/'. $this->image_path . $testimonial->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $image= $request->file('image');
            $filename  = uniqid() . $image->getClientOriginalName();
            $path = public_path($this->image_path . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $input['image'] = $filename;
        }

        $testimonial->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-testimonial');   
    }

    public function getDeleteTestimonial($id)
    {
        $testimonial = Testimonial::findorFail($id); 
        $image_path = public_path().'/'. $this->image_path . $testimonial->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $testimonial->delete(); 
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }

    public function getViewTestimonial($id)
    {
        $testimonial = Testimonial::findorFail($id); 
        return view('testimonial::view-testimonial')->with('testimonial', $testimonial);
    }
}
