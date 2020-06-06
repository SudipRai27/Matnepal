<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;


class Packages extends Model
{
    protected $fillable = ['package_name', 'parent_id', 'package_description', 'meta_title', 'meta_keyword', 'meta_description', 'show_in_frontend', 'is_featured','image', 'is_day_trip','view_count'];

    protected $table = 'packages';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function childs()
    {
    	return $this->hasMany('Modules\Packages\Entities\Packages', 'parent_id', 'id');
    }

}
