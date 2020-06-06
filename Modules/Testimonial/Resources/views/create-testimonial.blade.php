@extends('backend.layouts.submain')

@section('content') 
<h4 class="modal-title">Add Testimonial</h4>
<br>
<div id="loading">
  <p align = "center"><img src="{{asset('public/images/ajax-loader.gif')}}"></p>
</div>
<div id = "form-div">
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
  <form enctype="multipart/form-data" method="POST" action="{{route('create-testimonial-post')}}" id="input-form">
    <div class="form-group">
      Full Name
      <input type="text" name="full_name" class="form-control" placeholder="Enter full name" id="full name" value="{{Input::old('full_name')}}">  
    </div>
    <div class="form-group">
      Message
      <textarea class="form-control" name="message" placeholder="Enter message" rows="5" id="message">{{Input::old('message')}}</textarea>
    </div>
    <div class="form-group">
    Frontend Publishable
    <select name="frontend_publishable" class="form-control">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    </div>
    <div class="form-group">
      Rating (Out of 5)
      <select class="form-control" name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
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
$(document).ready(function(){
  
  $('#loading').hide();

  $('#add').click(function(e){
    e.preventDefault();
    $('#loading').show();
    $('#input-form').submit();
     
  });

});
</script>
@endsection
