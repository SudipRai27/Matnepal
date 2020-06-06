<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking'; 

    protected $guarded = ['id','created_at','updated_at']; 

    protected $fillable = ['package_id','departure_date','trip_start_date','number_of_persons',
    						'full_name', 'gender','phone_number','mobile_number','email','country', 'city','zip_code','dob','passport_no','place_of_issue','issue_date', 'expiry_date',
    						'message'
						  ];
}
	