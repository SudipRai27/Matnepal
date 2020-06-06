<?php

namespace Modules\Team\Entities;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['full_name', 
    						'designation', 
    						'email_address', 
    						'contact_number', 
    						'address', 
    						'fb_link', 
    						'insta_link', 
    						'image', 
                            'order_index'
    						];
   	protected $guarded = ['id', 'created_at', 'updated_at'];

   	protected $table = 'team';

}
