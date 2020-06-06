@extends('backend.layouts.main')

@section('content') 
<h4 class="modal-title">Edit Slider</h4>
<p align="right"><a href="{{route('list-slider')}}" type="button" class="btn btn-danger">Go Back</a></p>
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
<form enctype="multipart/form-data" method="POST" action="{{route('edit-slider-post', $slider->id)}}">
  <div class="form-group">
    Title
    <input type="text" name="title" class="form-control" value="{{$slider->title}}">  
  </div>
  <div class="form-group">
    Description
    <textarea class="form-control" name="description" placeholder="Enter Description" rows="5" id="description">{{$slider->description}}</textarea>
  </div>
  <div class="form-group">
    Order
    <input type="text" name="order_index" class="form-control" value="{{$slider->order_index}}" placeholder="Enter Order to Display">
  </div>
  <div class="form-group">
    Image
    <input type="file" name="image" class="form-control" id="image"><br>
    @if($slider->image)
    <img src="{{URL::to('public/images/slider_images/', $slider->image)}}" height="100" width="100">
    @endif
  </div>
  <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-success" id="add">
  </div>
  {{csrf_field() }}
</form>
@endsection
