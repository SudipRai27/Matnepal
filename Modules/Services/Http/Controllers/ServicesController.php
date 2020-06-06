<?php

namespace Modules\Services\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Services\Entities\Services;
use Session;
use Image;
use File;
use Illuminate\Support\Facades\Input;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public $image_path;

    public function __construct()
    {
        $this->image_path = 'images/service_images/';
    }
    public function getListServices()
    {
        $services = Services::orderby('created_at', 'DESC')->paginate(4);
        return view('services::list-services')->with('services', $services);
    }

    public function getAddServices()
    {
        return view('services::add-services');
    }

    public function postAddServices(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);
        
        $input = request()->all();
        if($request->hasFile('image')) 
        {
            $image= $request->file('image');
            $filename  = uniqid() . $image->getClientOriginalName();
            $path = public_path($this->image_path . $filename);
            Image::make($image->getRealPath())->resize(150, 150)->save($path);
            $input['image'] = $filename;
        }
        Services::create($input);
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();
    }

    public function getViewServices($id)
    {
        $service = Services::findorFail($id); 
        return view('services::view-services')->with('service', $service);
    }


    public function getEditServics($id)
    {
        $service = Services::findorFail($id); 
        return view('services::edit-service')->with('service', $service);
    }

    public function postEditServices(Request $request, $id)
    {   
        $request->validate([
            'title' => 'required',
            'description' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);

        $service = Services::findorFail($id); 
        $input = request()->all();
        if($request->hasFile('image'))
        {
            $image_path = public_path().'/'. $this->image_path . $service->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $image= $request->file('image');
            $filename  = uniqid() . $image->getClientOriginalName();
            $path = public_path($this->image_path . $filename);
            Image::make($image->getRealPath())->resize(150, 150)->save($path);
            $input['image'] = $filename;
        }
        $service->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-services');
    }

    public function getDeleteServices($id)
    {
        $service = Services::findorFail($id); 
        $image_path = public_path().'/'. $this->image_path . $service->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $service->delete(); 
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }
}
