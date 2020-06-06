<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session; 
use App\Enquiry;

class EnquiryController extends Controller
{
    public function getEnquiryNow()
    {
      return view('frontend.pages.enquiry-now');
    }

    public function postEnquiryNow(Request $request)
    {
    	Enquiry::create(request()->all()); 
    	Session::flash('success-msg', 'Thanks for your enquiry. We will get in touch with you soon');
    	return redirect()->back();

    }

    public function getListEnquiry()
    {
        $enquiry = Enquiry::orderBy('created_at','DESC')->paginate(6); 
        return view('backend.enquiry.list-enquiry')->with('enquiry', $enquiry);
    }

    public function getViewEnquiry($id)
    {
        $enquiry = Enquiry::findorFail($id);  
        return view('backend.enquiry.view-enquiry')->with('enquiry', $enquiry);  
    }

    public function getDeleteEnquiry($id)
    {
        $enquiry = Enquiry::findorFail($id);
        $enquiry->delete(); 
        Session::flash('success-msg', 'Deleted Successfully');
        return redirect()->back();
    }
}
