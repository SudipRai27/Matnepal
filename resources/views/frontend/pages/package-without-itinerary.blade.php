@extends('frontend.layouts.main')
@section('custom-seo')
    <title>{{$package->meta_title}}</title>
    <meta name="keywords" content="{{$package->meta_keyword}}"/>
    <meta name="description" content="{{$package->meta_description   }}"/>
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
@endsection
@section('content')
<?php
	$url = url('/'); 
?>
<section class="breadcrumb-area" data-overlay="5" style="background-image: url({{$url}}/public/frontend/mat/img/detail_img/detail-banner.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper text-center">
                    <h3>Package </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('frontend-home')}}">Home</a>
                		</li>
                		<li class="breadcrumb-item">
                  			<a href="#">Package</a>
                		</li>
                	<li class="breadcrumb-item active">{{$package->package_name}}</li>
              		</ul>
            	</div>
          	</div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
    	    <div class="col-lg-12 col-md-12">
        		<div class="border-boxx">
          			<h1 class="border-btm">{{$package->package_name}}</h1>
            		<div class="clearfix taxonomy-description">
              			{{$package->package_description}}
            		</div>
            	</div>
          	{{--<div class="filter-box">
            		<div class="price-filtering">
              			<div class="row">
                			<div class="col-md-4">
                				<div class=" onee filter">
                  					<label for="countryone">Sort By:</label>
                				</div>
                				<div class=" toww filter">
                  					<select id="countryone" class="countryone" name="country">
	                    				<option value="Popular">Popular</option>
    	                				<option value="Ascending">Name Ascending</option>
        	            				<option value="Desending">Name Desending</option>
            	        				<option value="maximum">Price maximum</option>
                	  				</select>
                				</div>
                  			</div>
                			<div class="col-md-4">
                  				<h2>Duration</h2>
                  				<div class="row">
                    				<div class="col-xs-12 col-lg-12 ">
                      					<div class="range">
                        					<input type="range" name="range" min="1" max="100" value="50" onchange="range.value=value">
                        					<output id="range">50</output>
                      					</div>
                    				</div>	
                  				</div>
                  			</div>
                			<div class="col-md-4">
                  				<h2>Price</h2>
                  				<div class="row">
                    				<div class="col-xs-12 col-lg-12 ">
                      					<div class="range range-primary">
                        					<input type="range" name="range" min="1" max="100" value="50" onchange="rangePrimary.value=value">
                        					<output id="rangePrimary">50</output>
                      					</div>
                    				</div>
                  				</div>
                			</div>
              			</div>
            		</div>
          		</div>--}}
          		<div class="clearfix">          			
          		</div>
          		<div class="package-listing">
            		<h2>Packages</h2>
            		@foreach($child_packages as $index => $d)
            		<div class="col-lg-4 col-md-4 col-sm-6 ">
              			<div class="border-box">
                			<div class="figure">
                  				<img src="{{ URL::to('public/images/package_images',$d->image)}}" alt="{{$d->package_name}}" class="img-responsive package-listing-image">
                  				<div class="hover-show">
                  					<a href="{{route('package-details', $d->package_name)}}" class="fancybox home-inq-btn btn btn-blue" data-title="{{$d->package_name}}">
                      				<strong>{{$d->package_name}}</strong></a>
			                  	</div>
            		    	</div>            		    
	               			<div class="border-box--content">
	                  			<h6><a href="{{route('package-details', $d->package_name)}}">{{$d->package_name}}</a></h6>
	                  			<div class="clearfix">
	                  				<p>{!! substr($d->package_description , 0 ,100) !!} {{ strlen($d->package_description )>100? "..." : "" }}</p>
	                    			<div class="trip-price__meta">
										<span class="border-box--trip-days">
											<a href="{{route('package-details', $d->package_name)}}" class="btn btn-primary package-listing-button">View Details</a>
										</span>										
				                    </div><!-- .trip-price__meta -->
	            			    </div><!-- .clearfix -->
	                		</div><!-- .border-box--content -->
              			</div><!-- .border-box -->
            		</div>   
            		@endforeach      
          		</div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection


