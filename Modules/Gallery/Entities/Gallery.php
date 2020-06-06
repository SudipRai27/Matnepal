<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    protected $fillable = ['file'];

    protected $table = 'gallery';
}
