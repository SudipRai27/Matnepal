<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use File;
use Session;
use Modules\Page\Entities\Page;
use Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
   public function getPageSettings()
   {    
      $page_index = Page::all();
      $page_details = Page::first();
      return view('page::page-settings')->with('page_index', $page_index)
                                        ->with('page_details', $page_details);
   }



   public function postUpdatePageContent(Request $request, $id)
   {        
      
      $page = Page::findorFail($id);
      if($request->hasFile('photo'))
      {
          $photo_path = public_path()."/images/page_images/{$page->photo}";     
         
          if(File::exists($photo_path)) {
              File::delete($photo_path);
                } 
          $name = uniqid() . $request->photo->getClientOriginalName();
          $file = $request->photo->getClientOriginalExtension();
          $request->photo->move(public_path('images/page_images'), $name, $file);
          $page->photo = $name;

      }   
      $page->title = $request->title;
      $page->description = $request->description;
      $page->save();
      Session::flash('success-msg', 'Content Updated Successfully');
      return redirect()->back()->withInput();  
        
    }

   public function getDeletePagePhoto($id)
   {  
      $page = Page::find($id);

      $image_path = public_path()."/images/page_images/{$page->photo}";
      
      if(File::exists($image_path)) {
          File::delete($image_path);
      }

      /*$del_photo_name = pages::where('photo', 'like' , $page->photo)->first();*/
      $page->update(['photo' => null]);
      Session::flash('success-msg', 'Deleted Successfully');
      return redirect()->back();  

   }

// AJAX FUNCTION 
   public function getAjaxDynamicPageForm(Request $request)
   {
      $page_index_id = $request->page_index_id;
      if($page_index_id == 0)
      {
        return;
      }
      
      $page_details = Page::where('id', $page_index_id)->first(); 

      
      return view('page::update-page-content-form')
                                ->with('page_details', $page_details)
                                ->with('page_index_id', $page_index_id);
   }
}
