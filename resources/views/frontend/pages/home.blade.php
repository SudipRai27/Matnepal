@extends('frontend.layouts.main')
@section('custom-seo')
<?php
    $controller = new Modules\Configurations\Http\Controllers\ConfigurationsController; 
    $seo = $controller->getSEOSEttings();     
?>
<title>{{$seo['meta_title']}}</title>
<meta name="keywords" content="{{$seo['meta_keyword']}}"/>
<meta name="description" content="{{$seo['meta_description']}}"/>  
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/style.css') }}">
@endsection
@section('content')

@include('frontend.include.slider')

@include('frontend.include.featured-trip')

@include('frontend.include.blocks')

@include('frontend.include.day-trips')

<!--video part-->
<section class="bottom">
<div class="container">
    <div class="row bottom-grids">
        <div class="col-md-6 grid1">
            <h4 class="mb-4">TRAVEL WITH US</h4>
            <h3 class="mb-4">Mountain Adventure is a Trekking & Tour company based in Kathmandu, Nepal. Mountain
                Adventure was registered in the Department of Industry and Department of Tourism of Government of
                Nepal in the year 1983. The company is run by Mr. Deepak Roka since its establishment and has been
                recognized as one of the highly professional tour and trekking companies in Nepal. Mountain
                Adventure has been featured in various magazines such as High Magazine, English Magazine & Zaobao.
                David Reed, the author of “The Rough Guide” published in a travel book entitled “Nepal” has highly
                recommended Mountain Adventure Trekking by adding “Mountain Adventure aims to provide the
                flexibility sought by independent travellers visiting Nepal”.</h3>
            <a href="#">Read More</a>
        </div>
        <div class="col-md-6 nopadding">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vr0qNXmkUJ8" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>    
</div>

<div class="container bg32">
    <div class="row">
        @include('frontend.include.blog') 

        @include('frontend.include.customer-review') 

        @include('frontend.include.gallery')                
        
    </div>
</div>
@endsection
   