@extends('frontend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/style.css') }}">
@endsection
@section('content')
<div class="container-contact100">
    <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="img/2.jpg" data-scrollwhell="0" data-draggable="1"><img src="{{asset('public/frontend/mat/img/2.jpg') }}" class="img-responsive"></div>

    <div class="wrap-contact100">
    	<?php
    		$url = url('/');
    	?>
        <div class="contact100-form-title" style="background-image: url({{$url}}/public/frontend/mat/img/1.jpg);">
        <span class="contact100-form-title-1">
          Enquiry Us
        </span>
        <span class="contact100-form-title-2">
          Feel free to drop us a line below!
        </span>
        </div>
        <form class="contact100-form validate-form" action="{{route('enquiry-post')}}" method="post">
            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Full Name:</span>
                <input class="input100" type="text" name="full_name" placeholder="Enter full name" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Email:</span>
                <input class="input100" type="email" name="email" placeholder="Enter email addess" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Phone is required">
                <span class="label-input100">Phone:</span>
                <input class="input100" type="text" name="phone_number" placeholder="Enter phone number" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <span class="label-input100">Message:</span>
                <textarea class="input100" name="message" placeholder="Your Comment..." required></textarea>
                <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
                </button>
            </div>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection