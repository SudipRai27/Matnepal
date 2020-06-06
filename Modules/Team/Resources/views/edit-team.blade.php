@extends('backend.layouts.main')
@section('content')
<h4>Edit Team</h4>
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
<form action="{{route('edit-team-post', $team->id)}}" method="POST" enctype="multipart/form-data">
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			Full Name
			<input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" value="{{$team->full_name}}">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			Designation
			<input type="text" name="designation" class="form-control" placeholder="Enter Designation" value="{{$team->designation}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			Email
			<input type="email" name="email_address" class="form-control" placeholder="Enter Email Address" value="{{$team->email_address}}">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			Contact Number
			<input type="text" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="{{$team->contact_number}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			Address
			<input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{$team->address}}">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			Facebook Link
			<input type="text" name="fb_link" class="form-control" placeholder="Enter Facebook Link" value="{{$team->fb_link}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			Instagram Link
			<input type="text" name="insta_link" class="form-control" placeholder="Enter Instagram Link" value="{{$team->insta_link}}">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			Image
			<input type="file" name="image" class="form-control">
			@if($team->image)
			<br>
			<img src="{{URL::to('public/images/team_images', $team->image)}}" height="100" width="100">
			@endif
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			Order Index
			<input type="text" name="order_index" class="form-control" value="{{$team->order_index}}">
		</div>
	</div>
</div>
<div class="form-group">
	<input type="submit" value="Edit" class="btn btn-primary">
</div>
</div>
{{csrf_field()}}
</form>
@endsection