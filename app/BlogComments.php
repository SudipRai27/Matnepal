<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    //
    protected $table = 'blog_comments';

    protected $fillable = ['blog_id','full_name','email_address','message'];

    protected $guarded = ['id','created_at','updated_at'];
}
