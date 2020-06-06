<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
            <?php
                $auth_id = auth()->guard('superadmin')->id();
                $current_user = DB::table('superadmin')->where('id', $auth_id)->first();     
            ?>
        @if($current_user->photo)
        <img src="{{ URL::to('public/images/superadmin_photos/',$current_user->photo)}}" class="img-circle" width="20" height="24">     
         @else
        <img src="{{ URL::to('public/images/default-user.png')}}" class="img-circle" width="20" height="20">     
        @endif
       
       </div>
      <div class="pull-left info">
        <p>{{ $current_user->name }}</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu scrollbar-dynamic">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="{{URL::route('superadmin-home')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

       <li class="treeview">
        <a href="#">
          <i class="fa fa-sliders"></i>
          <span>Slider Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-slider')}}"><i class="fa fa-circle-o"></i>List Slider</a></li>          
        </ul>
      </li> 
      {{--<li class="treeview">
        <a href="#">
          <i class="fa fa-server" aria-hidden="true"></i>
          <span>Services </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-services')}}"><i class="fa fa-circle-o"></i>List Services</a></li>        
        </ul>
      </li>
      --}} 
     
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-plus"></i>
          <span>Team Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-team')}}"><i class="fa fa-circle-o"></i>List Team</a></li>        
        </ul>
      </li>      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-globe"></i>
          <span>Blog / Article Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-category')}}"><i class="fa fa-circle-o"></i>List Category</a></li>        
        <li class="treeview-item"><a href="{{route('list-blog')}}"><i class="fa fa-circle-o"></i>List Blog</a></li>                      
        </ul>
      </li>  
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-image-o" aria-hidden="true"></i>
          <span>Gallery Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-gallery')}}"><i class="fa fa-circle-o"></i>List Images</a></li>        
        <li class="treeview-item"><a href="{{route('create-gallery')}}"><i class="fa fa-circle-o"></i>Upload Images</a></li>       
        </ul>
      </li> 
      <li class="treeview">
        <a href="#">
          <i class="fa fa-buysellads" aria-hidden="true"></i>
          <span>About Us Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-about-us')}}"><i class="fa fa-circle-o"></i>List About Us</a></li>        
        <li class="treeview-item"><a href="{{route('create-about-us')}}"><i class="fa fa-circle-o"></i>Create About Us</a></li>       
        </ul>
      </li>
     <li class="treeview">
        <a href="#">
          <i class="fa fa-pied-piper-pp" aria-hidden="true"></i>
          <span>Package Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-packages')}}"><i class="fa fa-circle-o"></i>List Packages</a></li>        
        <li class="treeview-item"><a href="{{route('create-packages')}}"><i class="fa fa-circle-o"></i>Create 
        Packages</a></li>   
        
        </ul>
      </li>
     <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-copy" aria-hidden="true"></i>
          <span>Package Itinerary / Details</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-package-details')}}"><i class="fa fa-circle-o"></i>List Package Itinerary / Details</a></li>        
        <li class="treeview-item"><a href="{{route('create-package-details')}}"><i class="fa fa-circle-o"></i>Create Package Itinerary / Details</a></li>   
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-buysellads" aria-hidden="true"></i>
          <span>Blocks Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-blocks')}}"><i class="fa fa-circle-o"></i>List Blocks</a></li>        
        <li class="treeview-item"><a href="{{route('create-blocks')}}"><i class="fa fa-circle-o"></i>Create Blocks</a></li>       
        </ul>
      </li>    
     {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-file"></i>
          <span>Page Content Settings </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{ route('page-settings') }}"><i class="fa fa-circle-o"></i>Pages</a></li>     
        </ul>
      </li>
      --}}    
          
  {{--<li class="treeview">
        <a href="#">
          <i class="fa fa-whatsapp"></i>
          <span>Messages</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('contact-messages')}}"><i class="fa fa-circle-o"></i>Contact Messages</a></li>
        
        </ul>
      </li> 
      --}}
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Testimonials Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-testimonial')}}"><i class="fa fa-circle-o"></i>List Testimonials</a></li>          
        </ul>
      </li>  
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Review Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-package-reviews')}}"><i class="fa fa-circle-o"></i>List Reviews</a></li>          
        </ul>
      </li>  

      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Enquiry Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-enquiry')}}"><i class="fa fa-circle-o"></i>List Enquiries</a></li>          
        </ul>
      </li>  
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Booking Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{route('list-bookings')}}"><i class="fa fa-circle-o"></i>List Bookings</a></li>          
        </ul>
      </li>  
       <li class="treeview">
        <a href="#">
          <i class="fa fa-cog fa-spin" style="font-size:18px"></i>
          <span>Configuration Manager</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li class="treeview-item"><a href="{{ route('update-general-settings') }}"><i class="fa fa-circle-o"></i>General Settings</a></li>
        <li class="treeview-item"><a href="{{ route('update-seo-settings') }}"><i class="fa fa-circle-o"></i>SEO Settings</a></li>
  {{-- <li class="treeview-item"><a href="{{ route('list-youtube-videos') }}"><i class="fa fa-circle-o"></i>Youtube Videos / Settings </a></li> --}}
      {{-- <li class="treeview-item"><a href="{{ route('map-view-settings') }}"><i class="fa fa-circle-o"></i>Map Settings </a></li>--}}
        <li class="treeview-item"><a href="{{ route('facebook-widget-view-settings') }}"><i class="fa fa-circle-o"></i>Facebook Settings </a></li> 
        </ul>
      </li> 
      
    </ul>

  </section>
  <!-- /.sidebar -->
</aside>