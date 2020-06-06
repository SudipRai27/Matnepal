@extends('backend.layouts.main')
@section('content')
<div class="nav-tabs-custom">            
    <ul class="nav nav-tabs">
      <li><h4>Create Package Itinerary / Details</h4><br></li>     
      <p align="right"><a href= "{{route('list-package-details')}}" type="button" class="btn btn-danger">Go Back</a></p>
    </ul>
</div>
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
<p style="color:red;">* Marked Fields are required</p>
<form action="{{route('create-packages-details-post')}}" method="POST" enctype="multipart/form-data" id="input-form">

<div class="row">	
	<div class="col-sm-6">	
		<div class="form-group">
			<p style="color:red;">Package (*)</p>
			<select name="package_id" class="form-control">
				<option value="">Select</option>
				@foreach($packages as $index => $d)
				<option value="{{$d->id}}" @if(Input::old('package_id') == $d->id) selected @endif>{{$d->package_name}}</option>		
				@endforeach
			</select>
		</div>
	</div>		
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Country (*)</p>
			<input type="text" name="country" class="form-control" placeholder = "Enter Country" value="{{Input::old('country')}}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Duration (*)</p>
			<input type="text" name="duration" class="form-control" value="{{Input::old('duration')}}" placeholder="Enter Duration">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Altitude (*)</p>
			<input type="text" name="altitude" class="form-control" value="{{Input::old('altitude')}}" placeholder="Enter Altitude">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Trip Grade (*)</p>
			<input type="text" name="trip_grade" class="form-control" value="{{Input::old('trip_grade')}}" placeholder="Enter Trip Grade">
		</div>
	</div>
	<div class="col-sm-6">		
		<div class="form-group">
			<p style="color:red;">Group Size (*)</p>	
			<input type="text" class="form-control" name="group_size" value="{{Input::old('group_size')}}" placeholder="Enter Group size ">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Accomodation (*)</p>
			<input type="text" class="form-control" name="accomodation" value="{{Input::old('accomodation')}}" placeholder="Enter Accomodation ">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Best Season (*)</p>
			<input type="text" class="form-control" name="best_season" value="{{Input::old('best_season')}}" placeholder="Enter Best Season ">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<p style="color:red;">Total Trip Cost (*) in $</p>
			<input type="text" class="form-control" name="total_trip_cost" value="{{Input::old('total_trip_cost')}}" placeholder="Enter Total Trip Cost ">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<p>Brochure / File</p>
			<input type="file" class="form-control" name="file">			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<p>Discounted Price</p>
			<input type="text" name="discounted_price" class="form-control" placeholder="Enter Discounted Price">
		</div>
	</div>
</div>
<div class="form-group">
	<p style="color:red;">Trip Overview (*)</p>
	<textarea class="form-control" name="trip_overview" rows="8" placeholder="Enter trip overview">{{Input::old('trip_overview')}}</textarea>
</div>
<div class="form-group">
	<p style="color:red;">Brief Itinerary (*)</p>
	<textarea name ="brief_itinerary" class="form-control" rows = "7" cols = "140">{{ Input::old('brief_itinerary')}}</textarea>
</div>
<div class="form-group">
	<p style="color:red;">Itinerary (*)</p>
	<textarea id = "editor1" name ="itinerary" class="form-control" rows = "7" cols = "140">{{ Input::old('itinerary')}}</textarea>
</div>
<div class="form-group">
	Cost Inclusion<br>
	<textarea name="cost_inclusion" rows="5" placeholder="Place * if you want to display in list" class="form-control">{{Input::old('cost_inclusion')}}</textarea>
</div>
<div class="form-group">
	Cost Exclusion<br>
	<textarea name="cost_exclusion" rows="5" placeholder="Place * if you want to display in list" class="form-control">{{Input::old('cost_exclusion')}}</textarea>
</div>
<div class="form-group">
	<p>Trip Start and End Date (All fields start date, end date and price needs to be entered if you are to save information)</p>
	<div class="input_fields_wrap">  
	    <div class="row">
	    	<div class="col-sm-3">
	       		<input type="text" name="start_date[]" class="form-control" placeholder="Enter Start Date">
	    	</div>
	    	<div class="col-sm-3">
	    		<input type="text" name="end_date[]" class="form-control" placeholder="Enter End Date">
	    	</div>
	    	<div class="col-sm-3">
	    		<input type="text" name="price[]" class="form-control" placeholder="Enter Price">
	    	</div>	    	
	    	<div class="col-sm-2">
	    	<button class="btn btn-success add-more" type="button">Add Trip Start and End Date Section &nbsp;<i class="glyphicon glyphicon-plus"></i>
	    	</button>
	    	</div>
	    </div>
	</div>
 </div>
<div class="form-group">
	<p>Gallery Images (You can choose multiple image)</p>
	<input type="file" name="image[]" class="form-control" multiple>
</div> 
<div class="form-group">
	<p>Group Discount (All fields no of people and price needs to be entered if you are to save the information)</p>
	<div class="field_wrapper">
    	<div class="row">
	    	<div class="col-sm-4">
	       		<input type="text" name="no_of_people[]" value="" placeholder="Enter no. of people" class="form-control" />	       
	    	</div>
	    	<div class="col-sm-4">
	    		<input type="text" name="discount_price[]" value="" placeholder="Enter price" class="form-control" />
	    	</div>
	    	<div class="col-sm-4">
	    		<button class="btn btn-success add_button" title="Add field">Add Group Discout Section &nbsp;<i class="glyphicon glyphicon-plus"></i></button>
	    	</div>        
   		</div>
	</div>
</div>

<div class="input-group control-group after-add-more">
	<p>FAQ (All fields question and answer needs to be entered if you are to save the information)</p>
	<div class="row">
		<div class="col-sm-6">
			<textarea name="question[]" class="form-control" placeholder="Enter Question Here" rows="4"></textarea>
		</div>
		<div class="col-sm-6">
			<textarea name="answer[]" class="form-control" placeholder="Enter Answer Here" rows="4"></textarea>
		</div>	
	</div>
  	<div class="input-group-btn"> 
		<button class="btn btn-success add-more-button" type="button">Add FAQ Section &nbsp;<i class="glyphicon glyphicon-plus"></i></button>
  	</div>
</div>
 <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
<div class="copy-fields hide">
	<div class="control-group input-group" style="margin-top:10px">
		<div class="row">
			<div class="col-sm-6">
				<textarea name="question[]" class="form-control" placeholder="Enter Question Here" rows="4"></textarea>
			</div>
			<div class="col-sm-6">
				<textarea name="answer[]" class="form-control" placeholder="Enter Answer Here" rows="4"></textarea>
			</div>	
		</div>	
		<div class="input-group-btn"> 
			<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
		</div>
	</div>
</div>
<br>	
<div class="row">
	<div class="col-sm-6">	
	<p>Trip Map	</p>
	<input type="file" class="form-control" name="trip_map">
	</div>
</div>
<br>
<div class="form-group">
	<input type="submit" name="" value="Add" class="btn btn-primary flat" id="add">
</div>	
{{csrf_field()}}
</form>
<?php
$url =  url('/');
?>
@endsection
@section('custom-js')
<script src="{{asset('public/sms/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/sms/text-editor/ckeditor/ckeditor.js') }}"></script>
<script>
		$(document).ready(function()
		{
			var roxyFileman = "{{ $url}}/public/sms/text-editor/fileman/index.html?integration=ckeditor";
			$(function()
			{
				CKEDITOR.replace( "editor1",{filebrowserBrowseUrl:roxyFileman,
									filebrowserImageBrowseUrl:roxyFileman+"&type=image",
									removeDialogTabs: "link:upload;image:upload"});
			});
			
		});
</script>;
<script type="text/javascript">
	$(document).ready(function(){
		$('#loading').hide(); 
		$('#add').click(function(e){
			e.preventDefault();
			$('#loading').show(); 
			$('#input-form').submit();
		})
	})
</script>
<script type="text/javascript">
 $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add-more"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="col-sm-3"><br><input type="text" name="start_date[]" class="form-control" placeholder="Enter start date" required></div><div class="col-sm-3"><br><input type="text" name="end_date[]" class="form-control" placeholder="Enter end date" required></div><div class="col-sm-3"><br><input type="text" name="price[]" class="form-control" placeholder="Enter price" required></div><div class="col-sm-3"><br><button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove", function(e){ //user click on remove button
        e.preventDefault(); 
        $(this).parent().parent().remove(); 
        x--;
    })
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    /*var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><button class="btn btn-danger remove_button"><i class="glyphicon glyphicon-remove"></i></button></div>'; //New input field html */

    var fieldHTML = '<div class="row"><div class="col-sm-4"><br><input type="text" name="no_of_people[]" value="" placeholder="Enter no. of people" class="form-control" required/></div><div class="col-sm-4"><br><input type="text" name="discount_price[]" value="" placeholder="Enter price" class="form-control" required/></div><div class="col-sm-4"><br><button class="btn btn-danger remove_button"><i class="glyphicon glyphicon-remove"></i></button></div></div>';
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(e){
    	e.preventDefault();
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent().parent().remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
 
    $(document).ready(function() {
 
	//here first get the contents of the div with name class copy-fields and add it to after "after-add-more" div class.
      $(".add-more-button").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").after(html);
      });
//here it will remove the current value of the remove button which has been pressed
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
 
    });
 
</script>
@endsection