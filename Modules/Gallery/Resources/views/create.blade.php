@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css">
@stop
@section('content')
<h4>Upload Images</h4>
<p align="right"><a href="{{ route('list-gallery') }}" class="btn btn-danger" type="button">Go Back</a></p>
<div class="row">
	<div class="col-xs-12">
	  <div class="box"> 
	    <div class="box-body">
	    	
			<div id="dropzone">

			<form action="{{ route('gallery-photo-upload') }}" class="dropzone " id="add-images" method="POST" enctype="multipart/form-data">

			{{ csrf_field() }}
			</form>

			</div>
	    </div>
	   </div>
   	</div>
</div>


@stop
@section('custom-js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">

</script>
@stop
