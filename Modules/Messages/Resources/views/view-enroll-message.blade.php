@extends('backend.layouts.submain')
@section('content')
Sent By: {{$messages->full_name}} <br><br>
Sender Email : {{$messages->email_address}} <br><br>
Contact Number : {{$messages->contact_number}} <br><br>
Received Date: {{date('Y M d', strtotime($messages->created_at))}} <br><br>
Education Level : {{$messages->education}}<br><br>
Preferred Time : {{$messages->preferred_time}}<br><br>
Interested Course: {{$interested_course->course_name}}<br><br>
Employment Status : {{$messages->employment_status}}<br><br>
Information Receieved From : {{$messages->info_from}}<br><br>
Message : {{$messages->message}}
@endsection
