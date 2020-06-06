@extends('backend.layouts.main')
@section('content')
<p align="right"><a href="{{route('list-blocks')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>Create Blocks</h4><br>
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
<p style="color:red;">* Marked Fields are required</p>
<form action="{{route('create-blocks-post')}}" method="POST" enctype="multipart/form-data" id="input-form">
<div class="form-group">
	<p style="color:red;">Title (*)</p>
	<input type="text" name="title" class="form-control" placeholder="Enter title" value="{{Input::old('title')}}">
</div>

<div class="form-group">
	<p style="color:red;"> Description (*)</p>
	<textarea name ="description" class="form-control" rows = "7" cols = "140" placeholder="Enter Description">{{ Input::old('description')}}</textarea>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		Meta Title
		<textarea class="form-control" name="meta_title" rows="2" placeholder="Enter Meta Title">{{Input::old('meta_title')}}</textarea>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
		Meta Keyword
		<textarea class="form-control" name="meta_keyword" rows="2" placeholder="Enter Meta Keyword">{{Input::old('meta_keyword')}}</textarea>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		Meta Description
		<textarea class="form-control" name="meta_description" rows="4" placeholder="Enter Meta Description">{{Input::old('meta_description')}}</textarea>
		</div>
	</div>
	<div class="col-sm-6">		
		<div class="form-group">
			Show in Frontend
			<select class="form-control" name="show_in_frontend">
			<option value="yes" @if(Input::old('show_in_frontend') == 'yes') selected @endif>Yes</option>
			<option value="no" @if(Input::old('show_in_frontend') == 'no') selected @endif>No</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">		
		Image
		<div class="form-group">
		<input type="file" name="image" class="form-control" >
		</div>
	</div>
	<div class="col-sm-6">	
		Icon Class
		<input type="text" name="icon_class" class="form-control" placeholder="Enter icon class" value="{{Input::old('icon_class')}}">
	</div>
</div>	

<div class="form-group">
	<input type="submit" name="" value="Add" class="btn btn-primary flat" id="add">
</div>	
{{csrf_field()}}
</form>

@endsection
@section('custom-js')

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