@extends('backend.layouts.main')

@section('content')
<h4>Available Images</h4>
<div class="row">
	<div class="col-xs-12">
	  <div class="box"> 
	    <div class="box-body">

	    @if(count($gallery))
			@foreach($gallery->chunk(3) as $photos)
			
			  @foreach($photos as $d)
				    <div class="col-sm-8 col-sm-4">
				        <br>
		        		<a href=""><img  src="{{ URL::to('public/images/gallery_images',$d->file)}}" width="150" height="150"> </a> 
		        		<br><br>
		         		<a href = "{{ route('delete-photos', $d->id) }}" class="btn btn-danger btn-flat" data-title="Delete Photo" data-message="Are you sure you want to delete ?" >
		     			 Delete Photo &nbsp; <i class="glyphicon glyphicon-trash"></i> &nbsp;</a>
		     			
		        	</div>
		      @endforeach 
		    
		 	@endforeach 
		@else
		<p align="center" style="color:red;">No Image Available</p>
		@endif	  
	    </div>
	  </div>
	  {{$gallery->render()}}
    </div>
</div>  
@stop