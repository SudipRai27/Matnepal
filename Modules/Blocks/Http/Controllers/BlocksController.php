<?php

namespace Modules\Blocks\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blocks\Entities\Blocks;
use Session;
use File;

class BlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public $image; 

    public function __construct()
    {
        $this->image_path = 'images/blocks_images/';
    }
    
    public function getListBlocks()
    {
        $blocks = Blocks::orderBy('created_at', 'DESC')->paginate(4);
        return view('blocks::list-blocks')->with('blocks',$blocks);
    }

    public function getCreateBlocks()
    {
        return view('blocks::create-blocks');
    }

    public function postCreateBlocks(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'description' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096', 

        ]);
        $input = request()->all();
        
        if($request->hasFile('image')) 
        {
            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        Blocks::create($input);
        Session::flash('success-msg', 'Created Successfully'); 
        return redirect()->back();

    }

    public function getEditBlocks($id)
    {
        $blocks = Blocks::findorFail($id);        
        return view('blocks::edit-blocks')->with('blocks', $blocks);
    }

    public function postEditBlocks(Request $request, $id)
    {

        $request->validate([
            'title' => 'required', 
            'description' => 'required', 
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096', 

        ]);
        
        $input = request()->all();
        $blocks = Blocks::findOrFail($id);
    
        if($request->hasFile('image')) 
        {
            $image_path = public_path().'/'. $this->image_path . $blocks->image;
            if(File::exists($image_path))
            {
                File::delete($image_path); 
            }

            $name = uniqid() . $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();
            $request->image->move(public_path(). '/'. $this->image_path, $name,$ext);
            $input['image'] = $name;
        }

        $blocks->update($input); 
        Session::flash('success-msg', 'Edited Successfully'); 
        return redirect()->route('list-blocks');
    }

    public function getDeleteBlocks($id)
    {   
        $blocks = Blocks::findOrFail($id);
        $image_path = public_path().'/'. $this->image_path . $blocks->image;
        if(File::exists($image_path))
        {
            File::delete($image_path); 
        }
        $blocks->delete();
        Session::flash('success-msg', 'Deleted Successfully'); 
        return redirect()->back();
    }

    public function getViewBlocks($id)
    {
        $blocks = Blocks::findOrFail($id);
        return view('blocks::view-blocks')->with('blocks', $blocks);
    }
}
