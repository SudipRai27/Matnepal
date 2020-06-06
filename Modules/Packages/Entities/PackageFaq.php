<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageFaq extends Model
{
    protected $fillable = ['package_id', 'question', 'answer'];

    protected $table = 'package_faq';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
