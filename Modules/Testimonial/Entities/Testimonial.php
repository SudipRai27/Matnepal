<?php

namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['full_name', 'message', 'email', 'frontend_publishable', 'rating','image'];

    protected $table = 'testimonials';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}
