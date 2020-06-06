@extends('backend.layouts.submain')
@section('content')
@if($testimonial->image)
<p align="center"><img src = "{{URL::to('public/images/testimonial_images/', $testimonial->image)}}"></p>
@endif
<h4>{{$testimonial->full_name}}</h4>
Message : {{$testimonial->message}}<br><br>
Frontend Publishable : {{$testimonial->frontend_publishable}}<br>
Rating : {{$testimonial->rating}} <br>
@endsection
