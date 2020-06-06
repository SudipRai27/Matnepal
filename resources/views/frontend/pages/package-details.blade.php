@extends('frontend.layouts.main')
@section('custom-seo')
    <title>{{$package->meta_title}}</title>
    <meta name="keywords" content="{{$package->meta_keyword}}"/>
    <meta name="description" content="{{$package->meta_description   }}"/>
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
@endsection
@section('content')
<section class="maintain-margin">
  	<div class="container">
	    <div class="row">
	      	<div class="col-md-9">
	      		<?php
	      			$url = url('/');
	      		?>
		        <div id="banner" style="background-image: url({{$url}}/public/images/package_images/{{$package->image}});">
		          	<div class="banner">
		          	</div>
		        </div>
		        <div class=" col-md-9 bg1">
		            <ul class="nav nav-tabs bg2">
		            	<li class="nav-item active">
		              		<a href="#trip" class="nav-link active" role="tab" data-toggle="tab"><i class="fas fa-file-alt bg3"></i><br>
		                	Trip Overview</a>
		            	</li>
		            	<li class="nav-item">
		              		<a href="#itenary" class="nav-link" role="tab" data-toggle="tab"><i class="fas fa-clipboard-list bg4"></i><br>Itinerary</a>
		            	</li>
		            	<li class="nav-item">
		              		<a href="#inclusion" class="nav-link" role="tab" data-toggle="tab"><i class="fas fa-check bg3"></i><br>What's Included</a>
		            	</li>
		            	<li class="nav-item">
		              		<a href="#date" class="nav-link" role="tab" data-toggle="tab"><i class="fas fa-database bg3"></i><br>Dates & Costs</a>
		            	</li>
		            	<li class="nav-item">
		              		<a href="#gallery" class="nav-link" role="tab" data-toggle="tab"><i class="far fa-images bg9"></i><br>Gallery</a>
		            	</li>
		            	<li class="nav-item">
		              		<a href="#faq" class="nav-link" role="tab" data-toggle="tab"><i class="fas fa-question bg10"></i><br>FAQ</a>
		            	</li>
		            </ul>
		          	<div class="tab-content">
		            	<div role="tabpanel" class="tab-pane fade in active" id="trip">
		              		<div class="col-md-6">
		                		<ul class="facts-holder">
		              				<li><span class="trip-facts__title"><i class="fas fa-suitcase"></i>Trip Name:</span> <span>{{$package->package_name}}</span></li>
		                  			<li><span class="trip-facts__title"><i class="fas fa-clock"></i>Duration:</span> 		                  			    
		                  				<span>
		                  				{{$package_details->duration}}
		                  				</span>
		                  			</li>
		                  			<li><span class="trip-facts__title"><i class="fas fa-signal"></i>Trip Grade:</span> <span>{{$package_details->trip_grade}}</span></li>
		                  			<li><span class="trip-facts__title"><i class="fas fa-bed"></i>Accomodation:</span> <span>{{$package_details->accomodation}}</span></li>
		                		</ul>
		              		</div>
		              	<div class="col-md-6">
		                	<ul class="facts-holder">
		                  		<li><span class="trip-facts__title"><i class="fas fa-globe-asia"></i>Country:</span> <span>{{$package_details->country}}</span></li>
		                  		<li><span class="trip-facts__title"><i class="fas fa-thermometer-empty"></i> Altitude:</span> <span>{{$package_details->altitude}}</span></li>
		                  		<li><span class="trip-facts__title"><i class="fas fa-users"></i>Group Size:</span> <span>{{$package_details->group_size}}</span></li>
		                  		<li><span class="trip-facts__title"><i class="fas fa-sun"></i>Best Season:</span> <span>{{$package_details->best_season}}</span><br></li>
		                	</ul>
		                </div>
		                <div class="paragraph">
		  		            <h3  class="bg11">Trip Introduction</h3>
			        		<p style="margin-top: 15px">{{$package_details->trip_overview}}</p>
			        	</div>
		        	</div>
        			<div role="tabpanel" class="tab-pane fade" id="itenary">
          				<div class="paragraph">
            				{!!$package_details->itinerary!!}
       					</div>
    				</div>
				    <div role="tabpanel" class="tab-pane fade" id="inclusion">
        				<div class="paragraph">
        					<?php
								$cost_inclusion = explode("*",$package_details->cost_inclusion);
								$cost_exclusion = explode("*",$package_details->cost_exclusion);
							?>
	    	    			<h3>Included in the Cost</h3>
	    	    			@foreach($cost_inclusion as $index => $d)
								@if(strlen($d)>0)
								<li>{{$d}}</li>
								@endif
							@endforeach
	            			
            				<h3>Excluded in the Cost</h3>
            				@foreach($cost_exclusion as $index => $d)
								@if(strlen($d)>0)
								<li>{{$d}}</li>
								@endif
							@endforeach
           				</div>
        			</div>
        			<div role="tabpanel" class="tab-pane fade" id="date">
            			<div class="paragraph">
            				<h3>Dates and Cost</h3>
            				<p>The given cost are per person and exclude international flights. Given below are the departure dates available for online booking. If the given date is not favorable then please contact us and we will happily customize your trip on dates more appropriate for you.</p>
            			</div>
                		<div class="table-responsive">
	                		<table class="table inner-table">
	                  			<thead>
	                  			<tr>
	                    			<th>Trip Start Date</th>
	                        		<th>Trip End Date</th>
	                    			<th>Price</th>
	                    			<th></th>
	                    			<th></th>
	                  			</tr>
	                    		</thead>
	                  			<tbody>
	                  			@foreach($package_dates as $dates)
	                  			<tr>
	                    			<td>{{$dates->start_date}}</td>
	                    			<td>{{$dates->end_date}}</td>
	                    			<td>{{$dates->price}}</td>
	                    			<td></td>
	                    			<td><a href="{{route('book-package', $package->package_name)}}" type="submit" class="btn btn-default">Book Now</button></td>
	                  			</tr>                   		
	                  			@endforeach
	                    		</tbody>
	                		</table>
		            	</div>
		        	</div>
   					<div role="tabpanel" class="tab-pane sfade" id="gallery">        		
        				<section class="gallery py-lg-5 py-3" id="gallery">
            				<div class="container-fluid">
                				<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
                    				<div class="gallery_grids row">
    	                				<div class="col-lg-3 header-info mt-5">
                        					<h3 class="heading">Photo Gallery</h3>                    
                        				</div>
                    					<div class="col-lg-9 gal-content">
                        					<ul class="clearfix demo">
                            					<li>
                            						@foreach($package_images as $index => $d)
	                            					<div class="gallery-grid1">
	                      	        						<img src="{{ URL::to('public/images/package_gallery_images',$d->image)}}" alt=" " class="img-fluid" />
	                        	    					<div class="p-mask">                 
	                        	    					</div>
	                            					</div>
	                            					@endforeach
                         						</li>
                          				    </ul>
                    					</div>
                					</div>
            					</div>
        					</div>
    					</section>
    				</div>    				
					<div role="tabpanel" class="tab-pane fade" id="faq">	
						@foreach($package_faq as $index => $d)
						<ul>
							<li>{{$d->question}}</li>
							Ans::{{$d->answer}}
						</ul>	
						@endforeach
					</div>	
    				<div class="card">
        				<div class="card-body text-center">
	        				<h3>You May also Like</h3><hr>
    	    				<div class="row">
    	    					@foreach($remaining_packages as $index => $d)
        	    				<div class="col-lg-4">
            						<h4 style="color:white;"><a href="{{ route('package-details', $d->package_name)}}" >{{$d->package_name}}</a></h4>
            					</div>
            					@endforeach            				
            				</div>
            			
        			</div>
    			</div>
    		</div>
		</div>
	</div>
	<div class="col-md-3">
    	<div class="find-trips-holder">
	        <h3>Total Trip Cost</h3>
    		    <h4 class="trip-title">US $ <span class="size-one">{{$package_details->total_trip_cost}}</span></h4>
        		<button type="submit" class="btn btn-default change-btn" data-toggle="modal"data-target="#myModal">
        		<i class="fas fa-hand-point-right" style="color: #666;"></i>
            	Check Group Discount</button>
	          <!-- Modal -->
	        <div class="modal fade" id="myModal" role="dialog">
	            <div class="modal-dialog">
	               <!-- Modal content-->
	                <div class="modal-content trip">
	                	<div class="modal-header">
	                  		<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
	                <div class="discount-list" style="display: block;">
	                	<table>
	                    	<thead>
	                    		<tr>
	                      		<th>No. of people</th>
	                      		<th>Price per person</th>
	                    		</tr>
	                    	</thead>
	                    	<tbody>
	                    	@foreach($package_group_discount as $discount)
	                    	<tr>
	                      		<td>{{$discount->no_of_people}}</td>
	                      		<td>{{$discount->price}}</td>
	                    	</tr> 
	                    	@endforeach	                   		                                
	                    	</tbody>
	                  	</table>
	                </div>
	                <div class="modal-footer">
	                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="find-trips-holder bg5" style="margin-top: 20px">
	    <a href="{{route('book-package', $package->package_name)}}" type="submit" class="btn btn-default bg6" >Book Now</a>
	    <a href="{{route('enquiry-now')}}" type="submit" class="btn btn-default bg6 change-tt">Enquire Now</a>
	</div>
	<div class="find-trips-holder bg8">
	    <div class="center maintain-threee">
	        <button data-toggle="modal" data-target="#squarespaceModal1" class="btn btn-primary center-block">
	        <a href="#"><i class="fas fa-file-pdf" style="color: white"></i>  PRINT TRIP DETAILS</a></button>            
	    </div>
	    <!-- line modal -->
	    <div class="modal fade" id="squarespaceModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	                  <h3 class="modal-title one" id="lineModalLabel">Trip Introduction</h3>
	                </div>
	            <div class="modal-body">
	     			<p>{{$package_details->trip_overview}}</p>
	     			<form action="{{route('download-package-file')}}" method="GET" target="_blank">
	                	<button type="submit" class="btn btn-default" style="margin-top: 10px">Download</button>
	                	<input type="hidden" value="{{$package_details->file}}" name="file">
	    				{{csrf_field()}}
					</form>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="center">
	    <button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">
	    FORWARD FILE TO A FRIEND</button>

	</div>
	          <!-- line modal -->
	<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	                  <h3 class="modal-title" id="lineModalLabel">{{$package->package_name}}</h3>
	            </div>
	            <div class="modal-body">
	                <form method="post" action="{{route('send-mail')}}">
	                    <div class="form-group">
	                       <label for="exampleInputEmail1">Email address</label>
	                       <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address to Send to" required>
	                    </div>
	                    <div class="md-form">
	  	                   <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Your Message" required style="color:#7a6363"></textarea>
	                    </div><br>
	                    <div class="form-group">	                       
	                       <input type="text" name="sender_email_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name or Email Address" required>
	                    </div>
	                    <div class="md-form">
	                    <br>
	                    @if($package_details->file)
						File / Brochure :
						<p style = "color:red;">{{$package_details->file}}</p>
						@else
						<p style = "color:red;">No File/Brochure Available. Please Upload.</p>
						@endif
	                    </div>
	                    <button type="submit" class="btn btn-default" style="margin-top: 10px">Send</button>
	                    <input type="hidden" value="{{$package_details->package_id}}" name="package_id">
	                    {{csrf_field()}}
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<div class="other-destination-holder">
	<h3>Trip Review</h3>
	<div class="star">
		<?php
    		for($i=0; $i<$average_rating; $i++)
    		{
    			echo "<i class='fas fa-star'></i>";
    		}
    	?>   
		Based on {{$total_trip_reviews}} Reviews
	</div>
    </div>
        <div class="find-trips-holder bg11 text-center">
           <h3>Trip Map</h3>
           @if($package_details->trip_map)
           <img src="{{ URL::to('public/images/package_trip_map/',$package_details->trip_map) }}" class="img-responsive">
           @else
           No Trip Map Available
           @endif
        </div>
        <div class="find-trips-holder bg11 text-center">
            <div class="customer-reviews-wrap sidebar-box">
                <h3 id="customerReviews">Customer reviews</h3>
                <div class="row">
                    <div class="col-md-12">
                 		<div class="total-avg-reviews">
                            <span class="stars">
                            	<?php
                            		for($i=0; $i<$average_rating; $i++)
                            		{
                            			echo "<i class='fas fa-star'></i>";
                            		}
                            	?>                                
                            </span>
                            <span class="rating">
                                {{$average_rating}} stars
                            </span>
                  			<br>
                            <span class="votes">
                                Based on {{$total_trip_reviews}} reviews
                            </span>
                        </div>
		                <style>
		                  .stars, .rr_star {
		                    color: #ffaf00;
		                  }
		                </style>
              		</div>
              	<div class="col-md-12">
                	<div class="add-new-review-wrap">
                  		<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    	Write a customer review
                  		</a>
                  		<div class="collapse" id="collapseExample">
                    		<div class="well">
                      			<div class="add-new-review-form">
                        			<span id="state"></span>
                        			<form action="{{route('package-review')}}" method="post" enctype="multipart/form-data" class="rr_review_form">                          				                      				
                          			<table class="form_table">
                           		 	<tbody>
                            		<tr class="rr_form_row">
                              			<td class="rr_form_input">
                                		<input class="rr_small_input" placeholder="Name.." type="text" name="name" required>
                              			</td>
                            		</tr>
                            		<tr class="rr_form_row">
		                                <td class="rr_form_input">
          			                    <input class="rr_small_input" type="email" placeholder="Email.." name="email" required>
                    			        </td>
                            		</tr>                            		
		                            <tr class="rr_form_row">
        		                        <td class="rr_form_input">
                	    	    	       <span class="form-err">Rating</span>
                    	    	           <select name="rating" required>
                    	    	           	 <option value="1">1</option>
                    	    	           	 <option value="2">2</option>
                    	    	           	 <option value="3">3</option>
                    	    	           	 <option value="4">4</option>
                    	    	           	 <option value="5">5</option>
                    	    	           </select>
                              			</td>
                            		</tr>
		                            <style>
		                              .stars, .rr_star {
		                                color: #ffaf00;
		                              }
		                            </style>
                            		<tr class="rr_form_row">
                              			<td class="rr_form_input">
                                		<textarea class="rr_large_input" name="review" rows="10" required placeholder="Review"></textarea>
                              			</td>
                            		</tr>
		                            <tr class="rr_form_row">
        		                       <td class="rr_form_input">
                  		               <input id="submitReview" class="btn btn-success" type="submit" value="Submit Review"></td>
                        		    </tr>
                            	</tbody>
                          	</table>
                          	<input type="hidden" name="package_id" value="{{$package->id}}">
                          	{{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('custom-js')
<script src="{{ asset('public/frontend/mat/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/mat/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/mat/js/easing.js') }}"></script>

<script src="{{ asset('public/frontend/mat/responsive-tabs.js') }}"></script>
    <script type="text/javascript">
      (function($) {
        fakewaffle.responsiveTabs(['xs', 'sm']);
      })(jQuery);
    </script>

@endsection

