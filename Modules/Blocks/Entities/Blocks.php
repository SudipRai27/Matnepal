<?php

namespace Modules\Blocks\Entities;

use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    protected $fillable = ['title', 'description','show_in_frontend', 'image', 'icon_class', 'meta_title', 'meta_keyword', 
							'meta_description'
							];

    protected $table = 'blocks'; 

    protected $guarded = ['id', 'created_at'];

}
