@extends('backend.layouts.submain')
@section('content')
<h4 align="center">Booking</h4> <br>
Full Name : {{$booking->full_name}}<br>
Gender : {{$booking->gender}}<br>
Email : {{$booking->email}}<br>
Country : {{$booking->country}}<br>
City : {{$booking->city}}<br>
Zip Code : {{$booking->zip_code}}<br>
Date of Birth : {{$booking->dob}}<br>
Phone Number: {{$booking->phone_number}}<br>
Mobile Number: {{$booking->mobile_number}}<br>
Passport Number: {{$booking->passport_no}}<br>
Place of Issue: {{$booking->place_of_issue}}<br>
Issue Date: {{$booking->issue_date}}<br>
Expiry Date: {{$booking->expiry_date}}<br>
Departure Date: {{date('Y M d, h:i:s a', strtotime($booking->departure_date))}}<br>
Trip Start Date: {{date('Y M d, h:i:s a', strtotime($booking->trip_start_date))}}<br>
Number of Persons: {{$booking->number_of_persons}}<br>
Message : {{$booking->message}} <br>
Booking Date / Time : {{date('Y M d, h:i:s a', strtotime($booking->created_at))}}<br>
@endsection
