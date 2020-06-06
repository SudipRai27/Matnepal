<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Slider\Entities\Slider;
use File;
use Image;
use Session; 

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public $image_path;

    public function __construct()
    {
        $this->image_path = 'images/slider_images/';
    }

    public function getListSlider()
    {
        $slider = Slider::orderBy('order_index')->paginate(6);
        return view('slider::list-slider')->with('slider', $slider);
    }

    public function getAddSlider()
    {
        return view('slider::add-slider');
    }

    public function postAddSlider(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096', 
            'description' => 'required',
            'order_index' => 'required|integer|unique:slider,order_index'
            ]);
        
        $input = request()->all();

        if($request->hasFile('image')) 
        {
            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        Slider::create($input);
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();
    }

    public function getDeleteSlider($id)
    {
        $slider = Slider::findorFail($id); 
        $image_path = public_path().'/'. $this->image_path . $slider->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $slider->delete(); 
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }

    public function getEditSlider($id)
    {   
        $slider = Slider::findorFail($id); 
        return view('slider::edit-slider')->with('slider', $slider);
    }

    public function postEditSlider(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'order_index' => 'required|integer|unique:slider,order_index,'.$id
            ]);

        $slider = Slider::findorFail($id); 
        $input = request()->all();
      
        if($request->hasFile('image')) 
        {
            $image_path = public_path().'/'. $this->image_path . $slider->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        $slider->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-slider');
    }
}
