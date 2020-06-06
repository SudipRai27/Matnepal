<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageGroupDiscount extends Model
{
    protected $fillable = ['package_id','no_of_people','price'];

    protected $table = 'package_group_discount';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
