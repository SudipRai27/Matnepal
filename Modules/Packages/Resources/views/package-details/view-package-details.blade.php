@extends('backend.layouts.main')
@section('content')
<p align="right"><a href="{{ route('list-package-details')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4><b>Package Name: {{$package_details->package_name}}</b></h4>
<div class="row">
	<div class="col-sm-4">
		<p>Country: {{$package_details->country}}</p>
	</div>
	<div class="col-sm-4">
		<p>Duration: {{$package_details->duration}}</p>		
	</div>
	<div class="col-sm-4">
		<p>Altitude: {{$package_details->altitude}}</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<p>Trip Grade: {{$package_details->trip_grade}}</p>		
	</div>
	<div class="col-sm-4">
		<p>Accomodation: {{$package_details->accomodation}}</p>		
	</div>
	<div class="col-sm-4">
		<p>Total Trip Cost: {{$package_details->total_trip_cost}}</p>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<p>Group Size: {{$package_details->group_size}}</p>
	</div>
	<div class="col-sm-4">
		<p>Best Season: {{$package_details->best_season}}</p>
	</div>
	<div class="col-sm-4">
		@if($package_details->file)
		File / Brochure :
		<a href="{{ route('get-package-details-file', $package_details->file)}}" target="_blank"> {{$package_details->file}}</a>
		@else
		<p style = "color:red;">No File/Brochure Available. Please Upload.</p>
		@endif
	</div>
</div>

<br><br>
<p><b>Trip OverView:</b> <br>{{$package_details->trip_overview}}</p>
<br>
<b>Brief Itinerary:</b> </br>
<?php
$brief_itinerary = explode("*",$package_details->brief_itinerary);
?>
@foreach($brief_itinerary as $index => $d)
@if(strlen($d)>0)
<li>{{$d}}</li>
@endif
@endforeach
<br>
<b>Detail Trip Itinerary:</b> <br>
{!!$package_details->itinerary!!}

<?php
$cost_inclusion = explode("*",$package_details->cost_inclusion);
$cost_exclusion = explode("*",$package_details->cost_exclusion);
?>
<br>
<b>Cost Inclusion:</b>
@foreach($cost_inclusion as $index => $d)
@if(strlen($d)>0)
<li>{{$d}}</li>
@endif
@endforeach
<br>
<b>Cost Exclusion:</b>
@foreach($cost_exclusion as $index => $d)
@if(strlen($d)>0)
<li>{{$d}}</li>
@endif
@endforeach
<br><b>Package Dates:</b><br>
<div class="row">
	<div class="col-sm-4">
		Start Date
	</div>
	<div class="col-sm-4">
		End Date
	</div>
	<div class="col-sm-4">
		Price
	</div>
</div>
@foreach($package_dates as $dates)
<div class="row">
	<div class="col-sm-4">
		{{$dates->start_date}}
	</div>
	<div class="col-sm-4">
		{{$dates->end_date}}
	</div>
	<div class="col-sm-4">
		{{$dates->price}}
	</div>
</div>
@endforeach
<br>
<b>Group Discount:</b><br>
<div class="row">
	<div class="col-sm-6">
		Number of People
	</div>
	<div class="col-sm-6">
		Price
	</div>	
</div>
@foreach($package_group_discount as $discount)
<div class="row">
	<div class="col-sm-6">
		{{$discount->no_of_people}}
	</div>
	<div class="col-sm-6">
		{{$discount->price}}
	</div>	
</div>
@endforeach
<br>
<b>Package FAQ:</b> <br>
@foreach($package_faq as $faq)
<li>Question: {{$faq->question}}</li>
<li style="square">Answer: {{$faq->answer}}</li>
<br>
@endforeach
<br>
@if(count($package_images))
<div class="form-group">
	<h4>Current Gallery Images</h4>
	<div class="row">		  	    
		@foreach($package_images->chunk(3) as $photos)			
		  @foreach($photos as $image)
		    <div class="col-sm-8 col-sm-4">
		        <br>
	    		<img  src="{{ URL::to('public/images/package_gallery_images',$image->image)}}" width="300px" height="300px"> 
	    		<br><br>
	     		<a href = "{{route('delete-package-gallery-image', $image->id)}}" class="btn btn-danger btn-flat" data-title="Delete Photo" data-message="Are you sure you want to delete ?" onclick="return myconfirm()">
	 			 Delete Photo &nbsp; <i class="glyphicon glyphicon-trash"></i> &nbsp;</a>		     			
	    	</div>
	      @endforeach 		    
	 	@endforeach 			         
	</div>  
</div>
@endif
<br>
<b>Trip Map</b>
@if($package_details->trip_map)
	<br><br>
    <img src="{{URL::to('public/images/package_trip_map/', $package_details->trip_map)}}" height="200" width="200">
@else
<p style="color:red;">No Trip Map Available</p>
@endif
@endsection
