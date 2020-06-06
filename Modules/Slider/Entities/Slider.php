<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'description', 'image', 'order_index'];

    protected $table = 'slider'; 

    protected $guarded = ['id', 'created_at', 'updated_at'];
}