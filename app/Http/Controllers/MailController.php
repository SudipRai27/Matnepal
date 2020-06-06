<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Modules\Packages\Entities\PackageDetails;
use Session;

class MailController extends Controller
{
    public function sendMail()
   	{
   		//sending mail to 
   		$data = [   			
   			'description'=>"This message is sent from Mat Nepal"
   		];

		Mail::send('emails.email', $data, function($message) {
			$message->to('sudiprai277@gmail.com')->subject
			    ('Package PDF Mat Nepal');
			$message->attach('C:\xampp\htdocs\matnepal\public\images\package_files\5bb9ccdd67f42CRIT.docx');			 
			
		});

	    echo "Email Sent with attachment. Check your inbox.";

    }

    public function sendMailToFriend(Request $request)
    {
    	ini_set('max_execution_time', '300');

    	$package_id = $request->input('package_id');    	
    	$current_package_detail = \DB::table('package_details')->where('package_id',$package_id)->first();
    	$current_file = $current_package_detail->file;

    	$data = [
            'email'   => $request->input('email'), 
            'description' => $request->input('message'),
            'current_file' => $current_file, 
            'sender_email_name' => $request->input('sender_email_name')
            
        ];	

	  	Mail::send('emails.email', $data, function($message) use ($data)
	  	{
	    	$message->from('catchyroad@gmail.com',$data['sender_email_name']);
	    	if(strlen($data['current_file'])>0)
	    	{
	    		$message->attach(public_path().'/images/package_files/'. $data['current_file']);
	    	}

	    	$message->to($data['email'])->subject
			    ('Package PDF Mat Nepal');
	    });

	  	Session::flash('success-msg','Your Mail has been sent successfully.'); 
	  	return redirect()->back();

    }
}
