<?php

namespace Modules\Packages\Entities;

use Illuminate\Database\Eloquent\Model;

class PackageDetails extends Model
{
    protected $fillable = ['package_id','country','duration','altitude','trip_grade','group_size','accomodation',
    						'best_season','total_trip_cost','discounted_price','file', 'trip_overview','brief_itinerary', 'itinerary', 'cost_inclusion', 'cost_exclusion', 'trip_map'
	];

    protected $table = 'package_details';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
