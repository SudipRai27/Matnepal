@extends('backend.layouts.main')
@section('content')
<h4>SEO Settings (Home / Landing Page)</h4>
<form method="POST" action = "{{route('update-seo-settings-post')}}">
	<div class="form-group">
	Meta Title:<br>
	<textarea name="meta_title" class="form-control" rows="5" required>{{$meta_title}}</textarea>
	</div>
	<div class="form-group">
	Meta Description:<br>
	<textarea name="meta_description" class="form-control" rows="5" required>{{$meta_description}}</textarea>
	</div>
	<div class="form-group">
	Meta Keyword:<br>
	<textarea name="meta_keyword" class="form-control" rows="5" required>{{$meta_keyword}}</textarea>
	</div>
	<div class="form-group">
	<input type="submit" name="" value="Update" class="btn btn-success">
	</div>
	{{csrf_field()}}
</form>
@endsection
