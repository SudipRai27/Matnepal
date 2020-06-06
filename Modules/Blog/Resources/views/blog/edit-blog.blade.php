@extends('backend.layouts.main')

@section('content')
<p align="right"><a href="{{route('list-blog')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>Update Blog</h4><br>
@if ($errors->any())
<div class = "alert alert-danger alert-dissmissable">
<button type = "button" class = "close" data-dismiss = "alert">X</button>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('edit-blog-post', $blog->id)}}" method="POST" enctype="multipart/form-data">
<div class="form-group">
	Title
	<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{$blog->title}}">
</div>
<div class="form-group">
	Content
	<textarea id = "editor1" name ="content" class="form-control" rows = "7" cols = "140">{!!$blog->content!!}</textarea>
</div>
<div class="form-group">
	Blog Category
	<select class="form-control" name="blog_category_id">
	@foreach($category as $index => $d)
	<option value="{{$d->id}}" @if($blog->blog_category_id == $d->id) selected @endif>{{$d->category_name}}</option>
	@endforeach
	</select>
</div>
<div class="form-group">
	Meta Title
	<textarea class="form-control" rows="2" placeholder="Enter Meta Title" name="meta_title">{{$blog->meta_title}}</textarea>
</div>
<div class="form-group">
	Meta Keyword
	<textarea class="form-control" rows="2" placeholder="Enter Meta Keyword" name="meta_keyword">{{$blog->meta_keyword}}</textarea>
</div>
<div class="form-group">
	Meta Description
	<textarea class="form-control" rows="4" placeholder="Enter Meta Description" name="meta_description">{{$blog->meta_description}}</textarea>
</div>
<div class="form-group">
	Show in Frontend
	<select class="form-control" name="show_in_frontend">
	<option value="yes" @if($blog->show_in_frontend == 'yes') selected @endif>Yes</option>
	<option value="no" @if($blog->show_in_frontend == 'no') selected @endif>No</option>
	</select>
</div>
<div class="form-group">
	<input type="file" name="image" class="form-control"><br>
	@if($blog->image)
	<img src="{{URL::to('public/images/blog_images', $blog->image)}}" width="150" height="100">
	@endif
</div>
<div class="form-group">
	<input type="submit" name="" value="Edit" class="btn btn-primary flat">
</div>
{{csrf_field()}}
</form>
<?php
$url =  url('/');
?>
@endsection
@section('custom-js')
<script src="{{asset('public/sms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/sms/text-editor/ckeditor/ckeditor.js') }}"></script>
<script>
		$(document).ready(function()
		{
			var roxyFileman = "{{ $url}}/public/sms/text-editor/fileman/index.html?integration=ckeditor";
			$(function()
			{
				CKEDITOR.replace( "editor1",{filebrowserBrowseUrl:roxyFileman,
									filebrowserImageBrowseUrl:roxyFileman+"&type=image",
									removeDialogTabs: "link:upload;image:upload"});
			});
			
		});
</script>;

@endsection