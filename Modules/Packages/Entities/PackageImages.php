<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageImages extends Model
{
    protected $fillable = ['image', 'package_id'];

    protected $table = 'package_gallery_images';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
