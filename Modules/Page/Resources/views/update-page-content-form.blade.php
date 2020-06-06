<div id="page-dynamic-content">
<form action="{{route('update-page-content', $page_details->id)}}" method="POST" enctype="multipart/form-data">
	<div class="box-body">
	   <div class="form-group">
		Title: <input type="text" name="title" class="form-control" value="{{ $page_details->title}}" id="title">
		<div id="msg" style="color:red;">{{ $errors->first('title') }}</div>
	   </div>
	   <div class="form-group">
		Description:  <textarea id = "editor1" name= "description" class="form-control" rows = "10" cols = "140" name="description">{{ $page_details->description }}</textarea>
		<div id="msg" style="color:red;">{{ $errors->first('description') }}</div>
	   </div>     
	    Photo:
		<input type="file" name="photo" class="form-control">
		@if($page_details->photo)
		<br>
		<img src="{{URL::to('public/images/page_images', $page_details->photo)}}" height="100" width="100"><br><br>
		<a href="{{route('delete-page-photo', $page_details->id)}}" type="button" class="btn btn-danger">Remove Current Photo</a>
		@endif
		<div id="msg" style="color:red;">{{ $errors->first('photo') }}</div>
	   <div class="box-footer">
		<input type="submit" name="Submit" value="Update" class="btn btn-primary">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="page_index" value="{{$page_index_id}}">
	   </div>
	</div>
	{{ csrf_field() }}
</form>
</div>

