<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Session;
use Modules\User\Entities\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    protected function guard()
    {
        return auth()->guard('user');
    }

    public function getRegister()
    {
        return view('user::register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required', 
            'address' => 'required', 
            'contact' => 'required', 
            'photo' => 'mimes:jpg,jpeg,png'
        ]);


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->api_token = str_random(60);


        if($request->hasFile('photo')) 
        {
            $name = uniqid() . $request->photo->getClientOriginalName();
            $ext = $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path().'/images/user_photos',$name,$ext);
            $user->photo = $name;
        }

        $user->save();
        Session::flash('success-msg', 'Created Successfully');
        return redirect()->back();

    }

    public function getUserLogin()
    {
        return view('user::login');
    }

    public function postUserLogin(Request $request)
    {
        $auth = auth()->guard('user')->attempt(['email' => $request->email, 'password' => $request->password]);

        if($auth) 
        {
            return redirect()->route('user-home')->with('success-msg', 'Successfully Logged in');
        }
        else 
        {
            Session::flash('error-msg','Incorrect Credentials');
            return redirect()->back();
        }

    }

    public function getUserHome()
    {
        return view('user::dashboard');
    }

    public function getLogout()
    {
        auth()->guard('user')->logout();
        return redirect()->route('user-login')->with('success-msg', 'Logged Out Successfully');
    }

}
