<?php

namespace Modules\Gallery\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Session;
use Illuminate\Support\Facades\Input;
use File;
use Modules\Gallery\Entities\Gallery;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public $image_path;

    public function __construct()
    {
      $this->image_path = 'images/gallery_images/';
    }


    public function getList()
    {
      $gallery = Gallery::orderBy('created_at', 'DESC')->paginate(6);
      return view('gallery::list')->with('gallery', $gallery);
      
    }

    public function getCreate()
    {
      return view('gallery::create');
    }

    public function postUpload(Request $request)
    {            
      $input = request()->all();      
      $name = uniqid() . $request->file->getClientOriginalName();
      $ext = $request->file->getClientOriginalExtension();
      $request->file->move(public_path(). '/'. $this->image_path, $name,$ext);
      $input['file'] = $name;
      
      Gallery::create($input);      

    }

    public function getDeletePhotos($id)
    {
      $gallery = Gallery::findOrFail($id);

      $image_path = public_path().'/'. $this->image_path . $gallery->file;
      
      if(File::exists($image_path))
      {
          File::delete($image_path); 
      }
      $gallery->delete();
      Session::flash('success-msg', 'Deleted Successfully'); 
      return redirect()->back();

    }
}
