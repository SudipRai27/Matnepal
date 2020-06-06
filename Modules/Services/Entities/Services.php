<?php

namespace Modules\Services\Entities;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = ['title', 'description', 'image', 'meta_title', 'meta_keyword', 'meta_description', 'class'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'services';
}
