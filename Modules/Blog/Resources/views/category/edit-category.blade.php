@extends('backend.layouts.submain')

@section('content') 
<h4 class="modal-title">Edit Category</h4>
<br>
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
<form enctype="multipart/form-data" method="POST" action="{{route('edit-category-post', $category->id)}}" id="input-form">
  <div class="form-group">
    Category Name
    <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" id="category" value="{{$category->category_name}}">  
  </div>
  <div class="form-group">
    Alias
    <input type="text" name="alias" class="form-control" placeholder="Enter Alias" id="category" value="{{$category->alias}}">  
  </div>
  <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-primary" id="add">
  </div>
  {{csrf_field() }}
</form>
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