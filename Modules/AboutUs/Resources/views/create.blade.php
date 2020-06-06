@extends('backend.layouts.main')

@section('content')
<p align="right"><a href="{{route('list-about-us')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>Create About Us</h4><br>
<div id="loading">
	<p align="center"><img src="{{asset('public/images/ajax-loader.gif')}}"></p>
</div>
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
<form action="{{route('about-us-create-post')}}" method="POST" enctype="multipart/form-data" id="input-form">
<div class="form-group">
	Title
	<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{Input::old('title')}}">
</div>
<div class="form-group">
	Content
	<textarea id = "editor1" name ="content" class="form-control" rows = "7" cols = "140">{{ Input::old('content')}}</textarea>
</div>
<div class="form-group">
	Meta Title
	<textarea class="form-control" name="meta_title" rows="2" placeholder="Enter Meta Title">{{Input::old('meta_title')}}</textarea>
</div>
<div class="form-group">
	Meta Keyword
	<textarea class="form-control" name="meta_keyword" rows="2" placeholder="Enter Meta Keyword">{{Input::old('meta_keyword')}}</textarea>
</div>
<div class="form-group">
	Meta Description
	<textarea class="form-control" name="meta_description" rows="4" placeholder="Enter Meta Description">{{Input::old('meta_description')}}</textarea>
</div>
<div class="form-group">
	Show in Frontend
	<select class="form-control" name="show_in_frontend">
	<option value="yes" @if(Input::old('show_in_frontend') == 'yes') selected @endif>Yes</option>
	<option value="no" @if(Input::old('show_in_frontend') == 'no') selected @endif>No</option>
	</select>
</div>
<div class="form-group">
	<input type="file" name="image" class="form-control">
</div>
<div class="form-group">
	<input type="submit" name="" value="Add" class="btn btn-primary flat" id="add">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#loading').hide(); 
		$('#add').click(function(e){
			e.preventDefault();
			$('#loading').show(); 
			$('#input-form').submit();
		})
	})
</script>
@endsection