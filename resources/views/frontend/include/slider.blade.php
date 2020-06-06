 <?php
    $first_slider = Modules\Slider\Entities\Slider::orderBy('order_index')->first();
    $sliders = Modules\Slider\Entities\Slider::orderBy('order_index')->where('id', '!=', $first_slider->id)->get();
    $packages = Modules\Packages\Entities\Packages::where('parent_id',0)->get();

 ?>

<!-- Carousel
  ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img class="first-slide img-responsive" src="{{ URL::to('public/images/slider_images/',$first_slider->image) }}" alt="First slide">
          <div class="container">
          </div>
      </div>
      @foreach($sliders as $index => $d)
      <div class="item">
          <img class="second-slide img-responsive" src="{{ URL::to('public/images/slider_images',$d->image)}}" alt="Second slide">
          <div class="container">
          </div>
      </div>
      @endforeach
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
<!--travel-box start-->
<form method="get" action="{{route('search-ideal-trip')}}">
<div class="container-fluid wrap-text">
  <h3> FIND YOUR IDEAL TRIP</h3>
  <div class="row bg23">
    <div class="col-md-3">
      <div class="form-group bg11">
        <label for="exampleFormControlSelect1 trip">Destination</label>
        <select class="form-control" id="parent_package" name="parent_package_id">        
          @foreach($packages as $index => $d)
          <option value="{{$d->id}}" @if(Input::old('parent_package_id') == $d->id) selected @endif>{{$d->package_name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group bg11">
        <label for="exampleFormControlSelect1">Activities</label>
        <select class="form-control" id="child_package" name="child_package_id">          
        </select>
      </div>
    </div>
    <div class="col-md-3 ">
      <div class="form-group bg11">
        <label for="exampleFormControlSelect1">Duration</label>
        <select class="form-control" id="duration" name="duration">
          <option value="any">Any</option>
          <option value="10">1-10 Days</option>
          <option value="20">10-20 Days</option>
          <option value="30">More than 30 days</option>          
        </select>
      </div>
    </div>
    <div class="bg11">
      <div class="col-md-3">        
        <button type="submit" class="btn btn-outline-dark bg30">Search</button>
      </div>
    </div>
  </div>
</div>

</form>
<!--travel-box end-->






