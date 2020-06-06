<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = ['category_name', 'alias'];

    protected $table = 'blog_category';	

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
