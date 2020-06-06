<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageReview extends Model
{
    //
    protected $table = 'package_review';

    protected $guarded = ['id','created_at','updated_at'];

    protected $fillable = ['package_id','name', 'email', 'rating','review'];

}
