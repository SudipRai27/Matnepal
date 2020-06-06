@extends('backend.layouts.main')

@section('content') 
<h4 class="modal-title">Edit Testimonial</h4>
<p align="right"><a href="{{route('list-testimonial')}}" class="btn btn-danger">Go Back</a></p>
<br>
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
<form enctype="multipart/form-data" method="POST" action="{{route('edit-testimonial-post', $testimonial->id)}}">
  <div class="form-group">
    Full Name
    <input type="text" name="full_name" class="form-control" placeholder="Enter full name" id="full name" value="{{$testimonial->full_name }}">  
  </div>
  <div class="form-group">
    Message
    <textarea class="form-control" name="message" placeholder="Enter message" rows="5" id="message">{{$testimonial->message}}</textarea>
  </div>
  <div class="form-group">
  Frontend Publishable
  <select name="frontend_publishable" class="form-control">
    <option value="yes" @if($testimonial->frontend_publishable == 'yes') selected @endif>Yes</option>
    <option value="no" @if($testimonial->frontend_publishable == 'no') selected @endif>No</option>
  </select>
  </div>
   <div class="form-group">
      Rating (Out of 5)
      <select class="form-control" name="rating">
        <option value="1" @if($testimonial->rating == 1) selected @endif>1</option>
        <option value="2" @if($testimonial->rating == 2) selected @endif>2</option>
        <option value="3" @if($testimonial->rating == 3) selected @endif>3</option>
        <option value="4" @if($testimonial->rating == 4) selected @endif>4</option>
        <option value="5" @if($testimonial->rating == 5) selected @endif>5</option>
      </select>
    </div>
  <div class="form-group">
    Image
    <input type="file" name="image" class="form-control" id="image">
    <br>
    @if($testimonial->image)
    <img src="{{URL::to('public/images/testimonial_images', $testimonial->image)}}" class="img-responsive" width="100" height="100">
    @endif
  </div>
  <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-success" id="Edit">
  </div>
  {{csrf_field() }}
</form>
@endsection
