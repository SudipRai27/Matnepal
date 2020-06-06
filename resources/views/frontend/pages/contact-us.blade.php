@extends('frontend.layouts.main')
@section('custom-seo')
    <title>Contact Us / MatNepal</title>
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
@endsection
@section('content')
<?php
	$url = url('/');
  $general_settings = Modules\Configurations\Entities\GeneralSettings::first();
?>
<section class="breadcrumb-area" data-overlay="5" style="background-image: url({{$url}}/public/frontend/mat/img/detail_img/detail-banner.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper text-center">
          <h3>Contact Us</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('frontend-home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section role="main" id="main" class="inner-page">
  <div class="container-fluid size-maintain">
    <div class="row padding-section-one">
      <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="title-page">
              <h1>Contact Us</h1>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="page-content">
              <p>
                <strong>Enrollment Questions</strong>
                <br>
                <br>
                {{$general_settings->phone}}
                <br>
                <br>
                Operating Hours:
                <br>
              <ul class="time-maintain">
                <li>{{$general_settings->working_hours}}</li>                
              </ul>
              <strong>Existing Clients</strong><br>
              <br>
              Call Us: {{$general_settings->phone}}<br>
              <br>            
              Email: {{$general_settings->email}}<br>
              <br>             
              Address: {{$general_settings->address}}
              <br>
              <br>
              <br>                
              <a href="{{$general_settings->fb_link}}" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="{{$general_settings->insta_link}}" target="_blank"><i class="fab fa-instagram"></i></a>
              <br>              
              </p>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="content-image">
              <img src="{{ asset('public/frontend/mat/img/detail_img/travel.jpg') }}" class="img-responsive" alt="" title="" width="400px" border="0" >
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-clear side-pading ">
            <div class="map-locaton">
              <iframe class="iframe-size" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3088.5590145573924!2d-76.5687
              3184907506!3d39.275571237603025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c803f3a8fe1377%3A0x95088fa0a61be407!2s1st+Mariner+Tow
              er%2C+1501+S+Clinton+St%2C+Baltimore%2C+MD+21224!5e0!3m2!1sen!2sus!4v1416840390267"
              > </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection