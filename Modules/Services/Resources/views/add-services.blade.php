@extends('backend.layouts.submain')

@section('content') 
<h4 class="modal-title">Add Services</h4>
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
  <form enctype="multipart/form-data" method="POST" action="{{route('add-services-post')}}" id="input-form">
    <div class="form-group">
      Title
      <input type="text" name="title" class="form-control" placeholder="Enter Title" id="title" value="{{Input::old('title')}}">  
    </div>
    <div class="form-group">
      Description
      <textarea class="form-control" name="description" placeholder="Enter Description" rows="5" id="description">{{Input::old('description')}}</textarea>
    </div>
    <div class="form-group">
      Meta Title
      <textarea class="form-control" placeholder="Enter Meta Title" name="meta_title" rows="2">{{Input::old('meta_title')}}</textarea>
    </div>
    <div class="form-group">
      Meta Keyword
      <textarea class="form-control" placeholder="Enter Meta Keyword" name="meta_keyword" rows="2">{{Input::old('meta_keyword')}}</textarea>
    </div>
    <div class="form-group">
      Meta Description
      <textarea class="form-control" placeholder="Enter Meta Description" name="meta_description" rows="4">{{Input::old('meta_description')}}</textarea>
    </div>
    {{--<div class="form-group">
      Icon Class
      <input type="text" name="class" class="form-control" placeholder="Enter class" id="class" value="{{Input::old('class')}}">  
    </div>  --}}
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

    $('#add').click(function(e){
      e.preventDefault();
      $('#loading').show();
      $('#input-form').submit();

    });

  });
  </script>

@endsection
