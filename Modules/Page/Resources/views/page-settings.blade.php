@extends('backend.layouts.main')
	
@section('content')

<b><h4>Update Contents  </h4></b>

<div class="box">
	<div class="box-body">	
		<div class="form-group">
			Page:
			<select class="form-control" name="page_index" id ="page_index">
				<option value="0">Select</option>
				@foreach($page_index as $index => $d)
				<option value="{{$d->id}}" @if($d->id == Input::old('page_index')) selected @endif>{{$d->page_index}}</option>
				@endforeach

			</select>
		</div>	

		<div id = "page-dynamic-content">		
		
		</div>
	</div>
</div>

@stop
@section('custom-js')
<script type="text/javascript">
	
	UpdateDynamicForm();

	$(document).ready(function(){
		
		$('#page_index').change(function(){

			UpdateDynamicForm();
			

		});

	});

	function UpdateDynamicForm()
	{
		var page_index_id = $('#page_index').val();


			$('#page-dynamic-content').html('<p align="center"><img src = "{{ asset('public/images/ajax-loader.gif')}}"></p>');
			  $.ajax( {
                      "url": "{{URL::route('ajax-get-dynamic-content-form')}}",
                      "data": {"page_index_id" : page_index_id,
                 	 },
                      "method": "GET"
                      } ).done(function(data) {
                  $('#page-dynamic-content').html(data);
                 
                });
	}
	

</script>


@stop