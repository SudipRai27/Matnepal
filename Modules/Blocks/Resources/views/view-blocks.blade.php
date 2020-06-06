@extends('backend.layouts.submain')
@section('content')
@if($blocks->image)
<p align="center"><img src = "{{URL::to('public/images/blocks_images/', $blocks->image)}}"></p>
@endif
<h4>{{$blocks->title}}</h4>
Description : {{$blocks->description}}<br><br>
Show in Frontend: {{$blocks->show_in_frontend}}<br>
Icon Class: {{$blocks->icon_class}}<br>
Meta Title : {{$blocks->meta_title}}<br>
Meta Keyowrd : {{$blocks->meta_keyword}} <br>
Meta Description : {{$blocks->meta_description}}
@endsection
