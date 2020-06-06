@extends('backend.layouts.submain')

@section('content') 
<h4 class="modal-title">Add Sliders</h4>
<br>
<div id="loading">
  <p align = "center"><img src="{{asset('public/images/ajax-loader.gif')}}"></p>
</div>
<div id="form-div">
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
  <form enctype="multipart/form-data" method="POST" action="{{route('add-slider-post')}}" id="input-form">
    <div class="form-group">
      Title
      <input type="text" name="title" class="form-control" placeholder="Enter Title" id="title" value="{{Input::old('title')}}">  
    </div>
    <div class="form-group">
      Description
      <textarea class="form-control" name="description" placeholder="Enter Description" rows="5" id="description">{{Input::old('description')}}</textarea>
    </div>
    <div class="form-group">
      Order
      <input type="text" name="order_index" class="form-control" value="{{Input::old('order_index')}}" placeholder="Enter Order to Display">
    </div>
    <div class="form-group">
      Image
      <input type="file" name="image" class="form-control" id="image">
    </div>
    <div class="form-group">
      <input type="submit" value="Add" class="btn btn-success" id="add">
    </div>
    {{csrf_field() }}
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
