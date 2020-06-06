@extends('backend.layouts.main')
@section('content')
<p align="right"><a href="{{route('list-blocks')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>Edit Blocks</h4><br>
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
<form action="{{route('edit-blocks-post', $blocks->id)}}" method="POST" enctype="multipart/form-data" id="input-form">
<div class="form-group">
	<p style="color:red;">Title (*)</p>
	<input type="text" name="title" class="form-control" placeholder="Enter title" value="{{$blocks->title}}">
</div>

<div class="form-group">
	<p style="color:red;"> Description (*)</p>
	<textarea name ="description" class="form-control" rows = "7" cols = "140" placeholder="Enter Description">{{ $blocks->description}}</textarea>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		Meta Title
		<textarea class="form-control" name="meta_title" rows="2" placeholder="Enter Meta Title">{{$blocks->meta_title}}</textarea>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
		Meta Keyword
		<textarea class="form-control" name="meta_keyword" rows="2" placeholder="Enter Meta Keyword">{{$blocks->meta_keyword}}</textarea>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
		Meta Description
		<textarea class="form-control" name="meta_description" rows="4" placeholder="Enter Meta Description">{{$blocks->meta_keyword}}</textarea>
		</div>
	</div>
	<div class="col-sm-6">		
		<div class="form-group">
			Show in Frontend
			<select class="form-control" name="show_in_frontend">
			<option value="yes" @if($blocks->show_in_frontend == 'yes') selected @endif>Yes</option>
			<option value="no" @if($blocks->show_in_frontend == 'no') selected @endif>No</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">		
		Image
		<div class="form-group">
		<input type="file" name="image" class="form-control">
		@if($blocks->image)
		<br>
		<img src="{{URL::to('public/images/blocks_images', $blocks->image)}}" width="150" height="150">
		@endif
		</div>
	</div>
	<div class="col-sm-6">	
		Icon Class
		<input type="text" class="form-control" placeholder="class" value="{{$blocks->icon_class}}" name="icon_class">
	</div>
</div>	

<div class="form-group">
	<input type="submit" name="" value="Edit" class="btn btn-primary flat" id="add">
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