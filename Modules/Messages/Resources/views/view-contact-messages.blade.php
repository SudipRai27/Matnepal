@extends('backend.layouts.submain')
@section('content')
Sent By: {{$messages->full_name}} <br><br>
Sender Email : {{$messages->email_address}} <br><br>
Received Date: {{date('Y M d', strtotime($messages->created_at))}} <br><br>
Message : {{$messages->message}} 

@endsection
