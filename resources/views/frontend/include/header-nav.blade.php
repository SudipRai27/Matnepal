<?php
  $general_settings = Modules\Configurations\Entities\GeneralSettings::first();
  $first_testimonial = Modules\Testimonial\Entities\Testimonial::where('frontend_publishable','yes')
                                                    ->orderBy('created_at','DESC')
                                                    ->first();
  $remaining_testimonial = Modules\Testimonial\Entities\Testimonial::where('frontend_publishable','yes')
                                                    ->orderBy('created_at','DESC')
                                                    ->where('id', '!=', $first_testimonial->id)
                                                    ->get();

  $controller = new App\Http\Controllers\FrontendController;
  $package_menu = $controller->getListPackageTreeView();
  $about_us = Modules\AboutUs\Entities\AboutUs::orderBy('created_at','DESC')
                                              ->where('show_in_frontend','yes')
                                              ->get(); 
?>


<div class="container" style="margin-bottom: 15px">
  <div class="col-md-4 col-sm-6">
    <div class="heading bg21">
      @if($general_settings->logo)
      <a href="{{route('frontend-home')}}"><img src="{{ URL::to('public/images/logo', $general_settings->logo) }}" class="img-responsive"></a>
      @else
      No Logo Found. Please update in backend.
      @endif
    </div>
  </div>
  
  <div class=" col-md-8 col-sm-6 bg16" style="padding: 0; margin: 0;">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner bg17">
        <div class="item active">
          <div class="bg18">
            <p class="testimonial_para">
              {{substr($first_testimonial->message,0,100) }} {{ strlen($first_testimonial->message) > 100 ? '...' : ''}}
            </p>
                <?php
                  for($i = 0; $i<$first_testimonial->rating; $i++)
                  {
                    echo "<i class='fas fa-star'></i>";
                  }

                ?>
                
            <div class="rating-point">
            <p> {{$first_testimonial->rating}}</p>
            </div>
          </div>
          <div class="footer-slider">
            <h5><i class="fa fa-user-circle change-fa"></i>
                {{$first_testimonial->full_name}}
            </h5>
          </div>
        </div>
        @foreach($remaining_testimonial as $index => $d)
        <div class="item">
          <div class="bg18">
            <p class="testimonial_para">
              {{substr($d->message,0,100) }} {{ strlen($d->message) > 100 ? '...' : ''}}
            </p>
                <?php
                  for($i = 0; $i<$d->rating; $i++)
                  {
                    echo "<i class='fas fa-star'></i>";
                  }

                ?>
            <div class="rating-point">
            <p> {{$d->rating}}</p>
            </div>
          </div>
          <div class="footer-slider">
            <h5><i class="fa fa-user-circle change-fa"></i>
              {{$d->full_name}}        
            </h5>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>    
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse changeNav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
          $current_route = \Request::route()->getName();          
        ?>
        <li @if($current_route == 'frontend-home') class = "active" @endif><a href="{{route('frontend-home')}}">Home</a></li>
        {!!$package_menu!!}
        @if($current_route == 'frontend-about')
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              @foreach($about_us as $index => $d)
              <li><a href="{{route('frontend-about', $d->title)}}">{{$d->title}}</a></li>
              @endforeach
          </ul>
        </li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              @foreach($about_us as $index => $d)
              <li><a href="{{route('frontend-about', $d->title)}}">{{$d->title}}</a></li>
              @endforeach
          </ul>
        </li>
        @endif
        <li @if($current_route == 'list-blog-frontend' || $current_route == 'frontend-blog-details') class = "active" @endif><a href="{{route('list-blog-frontend')}}">Blog</a></li>
        <li @if($current_route == 'contact-us') class = "active" @endif><a href="{{route('contact-us')}}">Contact Us</a></li> 
      </ul>
      <form class="navbar-form navbar-right change">
        <div class="form-group">
          <input type="text" class="form-control change-background" placeholder="Search" id="search">          
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="searchList" style="display:block; position:absolute;"></div>


