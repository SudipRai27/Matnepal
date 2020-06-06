@extends('backend.layouts.main')
@section('content')<br>
<p align="right"><a href="{{route('list-about-us')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>{{$about_us->title}}</h4>
<i class="fa fa-calendar"></i> {{date('Y M d', strtotime($about_us->created_at))}},
 
 <br><br>
@if($about_us->image)
<p align="center"><img src="{{URL::to('public/images/about_us_images', $about_us->image)}}" height="300" width="500"></p>
@endif
Content: {!! $about_us->content !!}
<br>
Meta Title: {{$about_us->meta_title}}<br>
Meta Keyword : {{$about_us->meta_keyword}}<br>
Meta Description : {{$about_us->meta_description}}<br>

@endsection