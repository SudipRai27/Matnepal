@extends('backend.layouts.main')
@section('content')
<p align="right"><a href="{{route('list-packages')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4>Create Package</h4><br>
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
<form action="{{route('create-packages-post')}}" method="POST" enctype="multipart/form-data" id="input-form">
<div class="form-group">
	<p style="color:red;">Package Name (*)</p>
	<input type="text" name="package_name" class="form-control" placeholder="Enter package name" value="{{Input::old('package_name')}}">
</div>
<div class="form-group">
	<p style="color:red;">Parent Category (*)</p>
	<?php
	echo '<select class="form-control" name="parent_id">';
	echo '<option value="0">Root</option>';
	echo $selectlist;
	echo '</select>'

	?>
</div>
<div class="form-group">
	<p style="color:red;">Package Description (*)</p>
	<textarea name ="package_description" class="form-control" placeholder = "Enter Package Description" rows = "7" cols = "140">{{ Input::old('package_description')}}</textarea>
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
		<br>
		<div class="form-group">
		<input type="file" name="image" class="form-control">
		</div>
	</div>
	<div class="col-sm-6">	
		Is Featured
		<select class="form-control" name="is_featured">
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>
	</div>
</div>	
<div class="row">
	<div class="col-sm-6">
		<p>Is Day trip</p>
		<select class="form-control" name="is_day_trip">  
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>		
	</div>
</div>
<br>
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