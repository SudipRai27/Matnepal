<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'blog_category_id', 'meta_title', 'meta_keyword', 'meta_description','image', 'show_in_frontend', 'view_count'];

    protected $table = 'blog'; 

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
