@extends('backend.layouts.submain')
@section('content')
@if($service->image)
<p align="center"><img src = "{{URL::to('public/images/service_images/', $service->image)}}"></p>
@endif
<h4>{{$service->title}}</h4>
Description : {{$service->description}}<br><br>
Meta Title : {{$service->meta_title}}<br>
Meta Keyowrd : {{$service->meta_keyword}} <br>
Meta Description : {{$service->meta_description}}
@endsection
