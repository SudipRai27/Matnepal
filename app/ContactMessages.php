<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessages extends Model
{
    //
    protected $table = 'contact_messages';

    protected $guarded = ['id','created_at','updated_at'];

    protected $fillable = ['full_name', 'message', 'email_address'];

}
