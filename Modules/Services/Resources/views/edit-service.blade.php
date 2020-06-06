@extends('backend.layouts.main')

@section('content') 
<h4 class="modal-title">Edit Services</h4>
<p align="right"><a href="{{route('list-services')}}" type="button" class="btn btn-danger">Go Back</a></p>
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
<form enctype="multipart/form-data" method="POST" action="{{route('edit-services-post', $service->id)}}">
  <div class="form-group">
    Title
    <input type="text" name="title" class="form-control" value="{{$service->title}}">  
  </div>
  <div class="form-group">
    Description
    <textarea class="form-control" name="description" placeholder="Enter Description" rows="5" id="description">{{$service->description}}</textarea>
  </div>
  <div class="form-group">
    Meta Title
  <textarea class="form-control" name="meta_title" placeholder="Enter Meta Title" rows="2">{{$service->meta_title}}</textarea>
  </div>
  <div class="form-group">
    Meta Keyword
  <textarea class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword" rows="2">{{$service->meta_keyword}}</textarea>
  </div>
  <div class="form-group">
    Meta Description
  <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description" rows="4">{{$service->meta_description}}</textarea>
  </div>
  {{--<div class="form-group">
      Icon Class
      <input type="text" name="class" class="form-control" placeholder="Enter class" id="class" value="{{$service->class}}">  
    </div>--}}
  <div class="form-group">
    Image
    <input type="file" name="image" class="form-control" id="image"><br>
    @if($service->image)
    <img src="{{URL::to('public/images/service_images/', $service->image)}}" height="100" width="100">
    @endif
  </div> 
  <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-success" id="add">
  </div>
  {{csrf_field() }}
</form>
@endsection
