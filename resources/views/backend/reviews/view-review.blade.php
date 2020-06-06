@extends('backend.layouts.submain')
@section('content')
<h4 align="center">Review</h4> <br>
Review By : {{$review->name}}<br>
Email : {{$review->email}}<br>
Review Done on Package: {{$review->package_name}}<br>
Rating : {{$review->rating}} <br>
Review : {{$review->review}}<br>
Review Date and Time: {{date('Y M d, h:i:s a', strtotime($review->created_at))}}
@endsection
