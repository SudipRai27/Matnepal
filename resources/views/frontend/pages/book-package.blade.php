@extends('frontend.layouts.main')
@section('custom-css')

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
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
          <h3>Booking</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('frontend-home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Booking</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section role="main" id="main" class="inner-page">
  <div class="container-fluid size-maintain">
    <div class="row padding-section-one padding-booking">
      <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 form-padding ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
          <h2 class="title-pagee"> Travel Reservation Booking Form</h2>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
          <div class="tour-booking-form">
            <form class="form-booking"  id="register_form" method="post" action="{{route('post-book-package')}}"  enctype="multipart/form-data">                            
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                  <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                </div>
                <div class="col-sm-12">
                  <label class="control-label required" for="select">Trip Name</label>
                  <div class="form-group">
                    <input type="text" readonly class="form-control" value="{{$package->package_name}}">
                    <input type="hidden" name="package_id" value="{{$package->id}}">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label required" for="select">Departure Date</label>
                    <div class="selesct">
                      <div class="input-group">
                        <input id="datepicker" name="departure_date" type="text" placeholder="Date" class="form-control datepicker" required >
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="datepicker">Trip Start Date</label>
                    <div class="input-group">
                      <input id="datepicker" name="trip_start_date" type="text" placeholder="Date" class="form-control datepicker" required>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label required" for="select">Number of Persons:</label>
                    <div class="select">
                      <select id="select" name="number_of_persons" class="form-control" required>        
                        <option value="1-5">1-5</option>
                        <option value="5-10">5-10</option>
                        <option value="10+">10+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                  <h4 class="tour-form-title">Your Travel Plan Detail</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="name">Full Name</label>
                    <input id="name" name="full_name" type="text" placeholder="Full Name" class="form-control" required>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="form-group">
                      <h3 class="size1">Choose your gender</h3>
                      <label class="radio-inline">
                        <input type="radio" name="gender" checked value="male">Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="female">Female
                      </label>
                   </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="Phone">Phone Number</label>
                    <input id="Phone" placeholder="Phone Number" class="form-control" required type="text" name="phone_number">
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="mobile">Mobile Number</label>
                    <input id="mobile" placeholder="Mobile Number" name="mobile_number" class="form-control" type="text">
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="email"> Email</label>
                    <input id="email" type="email" name="email" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="country"> Country</label>
                    <input id="country" type="text" name="country" placeholder="Country" class="form-control" required>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="city">City/State</label>
                    <input id="city" type="text" name="city" placeholder="city/state" class="form-control" required>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="code">Zip/Postal Code</label>
                    <input id="code" type="text" placeholder="Zip/Postal Code" class="form-control" required name="zip_code">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="birth"> Date of birth</label>
                    <input id="birth" type="text" placeholder="DOB" class="form-control datepicker" required name="dob">
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="Passport"> Passport No:</label>
                    <input id="passport" type="text" placeholder="###" class="form-control" required name="passport_no">
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="city">Place of issue </label>
                    <input id="city" type="text" placeholder="Place of Issue" class="form-control" required name="place_of_issue">
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="issue"> Issue Date </label>
                    <input id="issue" name="issue_date" type="text" placeholder="Issue Date" class="form-control datepicker" required >
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="expire">Expiration Date </label>
                    <input id="expire" type="text" name="expiry_date" placeholder="Expiry Date" class="form-control datepicker" required>
                  </div>
                </div>                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="form-group">
                    <label class="control-label" for="textarea">Send Message</label>
                    <textarea class="form-control" id="textarea" name="message" rows="4" placeholder="Write Your Requirements"></textarea>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <button type="submit" name="singlebutton" class="btn btn-primary change-button">Send Enquiry</button>
                </div>
              </div>
              {{csrf_field()}}
            </form>
            <br>
            <br>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
  $(function () {
    $(".datepicker").datepicker({ 
        format: 'yyyy-mm-dd'
    });
  });

</script>
@endsection