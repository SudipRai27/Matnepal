<?php
  $featured_trip = \DB::table('package_details')
                  ->join('packages','packages.id','=','package_details.package_id')
                  ->select('packages.*','package_details.total_trip_cost','package_details.duration')
                  ->where('is_featured','yes')
                  ->where('parent_id','!=', 0)
                  ->where('is_day_trip','no')
                  ->where('show_in_frontend', 'yes')
                  ->orderBy('created_at','DESC')
                  ->take(9)
                  ->get()
                  ->toArray();  
              
?>

<!--featured-trip -->
<div class="container">
  <div class="packages text-center bg6"><p>FEATURED TRIP</p>
      <hr>
  </div>    
  <div class="container">
    @foreach(array_chunk($featured_trip, 3) as $trips)
    <div class="row"> 
      @foreach($trips as $index => $d)
      <div class="col-md-4 bg12">
        <div class="box1"><p> All inclusive packages</p></div>
          <div class="card" style="width:auto;">
            <img class="card-img-top" src="{{ URL::to('public/images/package_images',$d->image)}}" alt="{{$d->package_name}}">
            <div class="card-body">
              <h5 class="card-title">{{$d->package_name}}</h5>
              
              <div class="bg3"><h4> Total Cost<br>US {{$d->total_trip_cost}} $</h4></div>
              <div class="bg37"><h4> Duration<br>{{$d->duration}}</h4></div>
              <a href="{{ route('package-details', $d->package_name)}}" class="btn btn-primary bg">View Details</a>
              <a href="{{ route('package-details', $d->package_name)}}" class="btn btn-primary bg4">View Dates</a>
          </div>
        </div>
      </div>                                      
      @endforeach
    </div>
    @endforeach
  </div>
</div>
<!--end-->