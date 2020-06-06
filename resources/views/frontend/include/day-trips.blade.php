<?php
$day_trips = \DB::table('package_details')
                  ->rightJoin('packages','packages.id','=','package_details.package_id')
                  ->select('packages.*','package_details.total_trip_cost','discounted_price')
                  ->where('is_featured','no')
                  ->where('parent_id','!=', 0)
                  ->where('is_day_trip','yes')
                  ->where('show_in_frontend', 'yes')
                  ->inRandomOrder()
                  ->take(3)
                  ->get();  
?>

<!--deals and discount-->
<div class="container">
  <div class="packages text-center bg6"><p>DAY TRIPS & ADVENTURES
      <hr>
      </p>
  </div>
  <div class="row">
    @foreach($day_trips as $index => $d)
    <div class="col-md-4 bg12">
      <div class="box1"><p> All inclusive packages</p>
      </div>
      <div class="card" style="width:auto;">
        <img class="card-img-top" src="{{ URL::to('public/images/package_images',$d->image)}}" alt="{{$d->package_name}}">
        <div class="card-body">
          <h5 class="card-title">{{$d->package_name}}</h5>          
            <div class="bg3 rot1">
              <h4>Total Cost<br>US ${{$d->discounted_price}}</h4>
            </div>
            <div class="bg40 rot2">
              <h4>Orginal cost<br><strike>${{$d->total_trip_cost}}</strike></h4>
            </div>
            <a href="{{route('package-details', $d->package_name)}}" class="btn btn-primary bg button-beside">Book Now</a>
         </div>
      </div>
    </div>
    @endforeach      
  </div>  
</div