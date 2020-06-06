@extends('backend.layouts.submain')
@section('content')
<h4>Add Team</h4>
<div id="loading" >
	<p align="center"><img src="{{asset('public/images/ajax-loader.gif')}}"></p>
</div>
<div id="input-div"> 
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
	<form action="{{route('add-team-post')}}" method="POST" enctype="multipart/form-data" id="input-form">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				Full Name
				<input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" value="{{Input::old('full_name')}}">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				Designation
				<input type="text" name="designation" class="form-control" placeholder="Enter Designation" value="{{Input::old('designation')}}">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				Email Address
				<input type="email" name="email_address" class="form-control" placeholder="Enter Email Address" value="{{Input::old('email_address')}}">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				Contact Number
				<input type="text" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="{{Input::old('contact_number')}}">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				Address
				<input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{Input::old('address')}}">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				Facebook Link
				<input type="text" name="fb_link" class="form-control" placeholder="Enter Facebook Link" value="{{Input::old('fb_link')}}">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				Instagram Link
				<input type="text" name="insta_link" class="form-control" placeholder="Enter Instagram Link" value="{{Input::old('insta_link')}}">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				Image
				<input type="file" name="image" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				Order
				<input type="text" name="order_index" class="form-control" value="{{Input::old('order_index')}}" placeholder="Enter Order Index">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" value="Add" class="btn btn-primary" id="add">
	</div>
	</div>
	{{csrf_field()}}
	</form>
</div>
@endsection
@section('custom-js')
<script type="text/javascript">
	$(document).ready(function() {
		$('#loading').hide(); 

		$('#add').click(function(e) {
			e.preventDefault();
			$('#loading').show(); 
			$('#input-form').submit();
		});

	});
</script>
@endsection