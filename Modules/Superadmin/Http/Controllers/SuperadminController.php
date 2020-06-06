<?php

namespace Modules\Superadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Superadmin\Entities\Superadmin;
use Session;
use Auth;
use DB;

class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    protected function guard()
    {
        return auth()->guard('superadmin');
    }

    public function getDashboard()
    {
        return view('superadmin::dashboard');
    }

    public function getCreate()
    {
        return view('superadmin::create');
    }

    public function postCreate(\Modules\Superadmin\Http\Requests\SuperadminRequest $request)
    {
        $superadmin = new Superadmin;
        $superadmin->name = $request->name;
        $superadmin->email = $request->email;
        $superadmin->password = bcrypt($request->password);
        $superadmin->temporary_address = $request->temporary_address;
        $superadmin->permanent_address = $request->permanent_address;
        $superadmin->contact = $request->contact;
        $superadmin->api_token = str_random(60);


        if($request->hasFile('photo')) 
        {
            $name = uniqid() . $request->photo->getClientOriginalName();
            $ext = $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path().'/images/superadmin_photos',$name,$ext);
            $superadmin->photo = $name;
        }

        $superadmin->save();
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();
    }


    public function getLogin()
    {
        return view('superadmin::login');
    }


    public function postLogin(\Modules\Superadmin\Http\Requests\SuperadminRequest $request)
    {   
            
        $auth = auth()->guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password]);

        if($auth) 
        {
            return redirect()->route('superadmin-home')->with('success-msg', 'Successfully Logged in');
        }
        else 
        {
            Session::flash('error-msg','Incorrect Credentials');
            return redirect()->back();
        }
    }


    public function getLogout()
    {
        auth()->guard('superadmin')->logout();
        return redirect()->route('superadmin-login')->with('success-msg', 'Logged Out Successfully');
    }
   
}
