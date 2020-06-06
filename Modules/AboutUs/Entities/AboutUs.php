<?php

namespace Modules\AboutUs\Entities;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = ['title', 'content', 'meta_title', 'meta_keyword', 'meta_description', 'show_in_frontend', 'image'];

    protected $table = 'about_us';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
