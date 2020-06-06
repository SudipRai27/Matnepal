<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session; 
use App\PackageReview;


class ReviewController extends Controller
{
    public function postPackageReview(Request $request)
    {
    	PackageReview::create(request()->all()); 
    	Session::flash('success-msg', 'Thanks for your review !!');
    	return redirect()->back();   	
    }

    public function getListReviews()
    {
    	$reviews = \DB::table('packages')
    				->join('package_review','package_review.package_id','=','packages.id')
    				->select('package_name','package_review.*')
                    ->orderBy('package_review.created_at','DESC')
    				->paginate(6); 

    	return view('backend.reviews.list-review')->with('reviews',$reviews);

    }

    public function getViewReview($id)
    {
    	$review = \DB::table('packages')
    				->join('package_review','package_review.package_id','=','packages.id')
    				->select('package_name','package_review.*')
    				->where('package_review.id',$id)
    				->first(); 

    	return view('backend.reviews.view-review')->with('review', $review);
    }	

    public function getDeleteReview($id)
    {
    	$review = PackageReview::findorFail($id); 
    	$review->delete(); 
    	Session::flash('success-msg', 'Deleted Successfully');  
    	return redirect()->back();
    }
}
