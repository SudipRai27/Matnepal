@extends('backend.layouts.main')
@section('content')<br>
<p align="right"><a href="{{route('list-blog')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>{{$blog->title}}</h4>
<i class="fa fa-calendar"></i> {{date('Y M d', strtotime($blog->created_at))}},
 <i class="fa fa-tags"></i> {{$blog->category_name}}
 <br><br>
@if($blog->image)
<p align="center"><img src="{{URL::to('public/images/blog_images', $blog->image)}}" height="300" width="500"></p>
@endif
Content: {!! $blog->content !!}
<br>
Meta Title: {{$blog->meta_title}}<br>
Meta Keyword : {{$blog->meta_keyword}}<br>
Meta Description : {{$blog->meta_description}}<br>
{{--<div class="row">
	<div class = "col-sm-3">
	</div>
	<div class = "col-sm-3">
		@if($previous_blog)
			
			Previous<br>
			@if($previous_blog->image)
			<img src="{{URL::to('public/images/blog_images',$previous_blog->image)}}" width="50px" height="50px"><br>
			@endif
			
			<a href="{{route('view-blog', $previous_blog->id)}}">{{substr($previous_blog->title, 0,20)}}...</a>
			
		
		@endif
	</div>
	<div class="col-sm-3">
		@if($next_blog)
			Next<br>
			@if($next_blog->image)
			<img src="{{URL::to('public/images/blog_images',$next_blog->image)}}" width="50px" height="50px"><br>
			@endif
			
			<a href="{{route('view-blog', $next_blog->id)}}">{{substr($next_blog->title, 0,20)}}....</a>
			
		@endif

	</div>
	<div class="col-sm-3">
	</div>
</div>--}}
@endsection