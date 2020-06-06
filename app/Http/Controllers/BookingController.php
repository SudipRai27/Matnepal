<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Packages\Entities\Packages;
use App\Booking;
use Session;

class BookingController extends Controller
{
    public function getbookPackage($package_name)
    {
      	$package = Packages::where('package_name', $package_name)->first(); 
      	return view('frontend.pages.book-package')->with('package', $package);
    }

    public function postBookPackage(Request $request)
    {
    	Booking::create(request()->all()); 
    	Session::flash('success-msg','Booking Successfully Done. We will get in touch with you soon'); 
    	return redirect()->back();    	
    }

    public function getListBookings()
    {
    	$bookings = \DB::table('packages')
    					->join('booking','booking.package_id','=','packages.id')
    					->select('packages.package_name','booking.*')
    					->paginate(6);

    	return view('backend.bookings.list')->with('bookings',$bookings);
    }

    public function getDeleteBookings($id)
    {
    	$bookings = Booking::findorFail($id); 
    	$bookings->delete(); 
    	Session::flash('success-msg','Booking Deleted Successfully'); 
    	return redirect()->back();
    }

    public function getViewBooking($id)
    {
    	$booking = \DB::table('packages')
    					->join('booking','booking.package_id','=','packages.id')
    					->select('packages.package_name','booking.*')
    					->where('booking.id',$id)
    					->first();

    	return view('backend.bookings.view')->with('booking',$booking);
    }
}
