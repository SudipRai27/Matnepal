<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageDates extends Model
{
    protected $fillable = ['package_id','start_date','end_date','price'];

    protected $table = 'package_dates';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
