<?php

namespace Modules\Team\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Team\Entities\Team; 
use Session; 
use File;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    public $image_path; 

    public function __construct()
    {
        $this->image_path = 'images/team_images/';
    }


    public function getListTeam() 
    {   
        $team = Team::orderBy('order_index')->paginate(6);
        return view('team::list-team')->with('team', $team);
    }
   
    public function getAddTeam()
    {
        return view('team::add-team');
    }

    public function postAddTeam(Request $request)
    {
        $request->validate([
            'full_name' => 'required', 
            'designation' => 'required', 
            'email_address' => 'required', 
            'contact_number' => 'required', 
            'address' => 'required', 
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'order_index' => 'required|integer|unique:team,order_index'
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

      Team::create($input); 
      Session::flash('success-msg', 'Created Successfully'); 
      return redirect()->back();
        
   }

   public function getViewTeam($id)
   {
      $team = Team::findOrFail($id); 
      return view('team::view-team')->with('team', $team);
   }

   public function getEditTeam($id)
   {
      $team = Team::findOrFail($id); 
      return view('team::edit-team')->with('team', $team);
   }

   public function postEditTeam(Request $request, $id)
   { 
      $request->validate([
              'full_name' => 'required', 
              'designation' => 'required', 
              'email_address' => 'required', 
              'contact_number' => 'required', 
              'address' => 'required', 
              'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
              'order_index' => 'required|integer|unique:team,order_index,'.$id
              ]);

      $team = Team::findorFail($id); 
      $input = request()->all();
      if($request->hasFile('image'))
      {
          $image_path = public_path().'/'. $this->image_path . $team->image;
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
      $team->update($input); 
      Session::flash('success-msg', 'Edited Successfully'); 
      return redirect()->route('list-team');
   }

   public function getDeleteTeam($id)
   {
      $team = Team::findorFail($id); 
      $image_path = public_path().'/'. $this->image_path . $team->image;
      if(File::exists($image_path))
      {
          File::delete($image_path); 
      }
      $team->delete(); 
      Session::flash('success-msg', 'Deleted Successfully'); 
      return redirect()->back(); 
   }
}
