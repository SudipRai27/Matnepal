<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContactUs()
    {
    	return view('frontend.pages.contact-us');
    }
}
