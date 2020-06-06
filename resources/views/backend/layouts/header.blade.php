<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <?php
      $general_settings = Modules\Configurations\Entities\GeneralSettings::first();
      
    ?>
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{$general_settings->name}}</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{$general_settings->name}}</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">             
      
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
                $auth_id = auth()->guard('superadmin')->id();
                $current_user = DB::table('superadmin')->where('id', $auth_id)->first();
            ?>
            @if($current_user->photo)
            <img src="{{ URL::to('public/images/superadmin_photos/',$current_user->photo)}}" class="img-circle" width="20" height="24">            
            <span class="hidden-xs"></span>
             @else
            <img src="{{ URL::to('public/images/default-user.png')}}" class="img-circle" width="20" height="20">     
            @endif
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
               @if($current_user->photo)
               <img src="{{ URL::to('public/images/superadmin_photos/',$current_user->photo)}}" class="img-circle" width="20" height="24">
               <span class="hidden-xs"></span>
               @else
               <img src="{{ URL::to('public/images/default-user.png')}}" class="img-circle" width="20" height="20">     
               @endif
             
              <p>
             {{ $current_user->name }}
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                
                  
                </a>
              </div>
              <div class="pull-right">
                <a href="{{ route('superadmin-logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

