<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiry'; 

    protected $guarded = ['id','created_at','updated_at']; 

    protected $fillable = ['full_name','email','phone_number','message'];
}
