@extends('backend.layouts.submain')
@section('content')
<h4 align="center">Enquiry</h4> <br>
Full Name : {{$enquiry->full_name}}<br>
Email : {{$enquiry->email}}<br>
Phone Number: {{$enquiry->phone_number}}<br>
Message : {{$enquiry->message}} <br>
Enquiry Date / Time : {{date('Y M d, h:i:s a', strtotime($enquiry->created_at))}}<br>
@endsection
