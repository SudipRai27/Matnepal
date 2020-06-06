@extends('backend.layouts.main')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     My Dashboard
    </h1>
  </section>
  <?php
  $slider = DB::table('slider')->count();
  $packages = DB::table('packages')->count();
  $team = DB::table('team')->count();
  $blocks = DB::table('blocks')->count();
  $blog = DB::table('blog')->count();
  $gallery_photos = DB::table('gallery')->count();
  $testimonials = DB::table('testimonials')->count();
  $about_us = DB::table('about_us')->count();
  ?>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$slider}}</h3>
            <p>Sliders</p>
          </div>
          <div class="icon">
            <i class="fa fa-sliders"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$packages}}</h3>
            <p>Packages</p>
          </div>
          <div class="icon">
            <i class="fa fa-server" aria-hidden="true"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$team}}</h3>
            <p>Team Members</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$blog}}</h3>
            <p>Blogs</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper-o"  ></i>
          </div>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->

    <div class="row">
      <section class="col-lg-6">              
        
        
        <div class="box box-info">
          <div class="box-header">
            
            
          
          </div>
          <div class="box-body">
           
          </div>
          
        </div>

      </section>
      <section class="col-lg-6 connectedSortable ui-sortable">
        
         <!-- quick email widget -->

        <div class="box box-success">
          <div class="box-header">
           
           
            
          </div>
        </div>
        <!-- quick email ends -->
       
      </section>
    </div><!-- row ends -->

     <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>{{$gallery_photos}}</h3>
            <p>Photos</p>
          </div>
          <div class="icon">
            <i class="fa fa-photo"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>{{$testimonials}}</h3>
            <p>Testimonials</p>
          </div>
          <div class="icon">
            <i class="fa fa-desktop"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{$blocks}}</h3>
            <p>Blocks</p>
          </div>
          <div class="icon">
            <i class="fa fa-smile-o"></i>
          </div>
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$about_us}}</h3>
            <p>About Us</p>
          </div>
          <div class="icon">
            <i class="fa fa-navicon"></i>
          </div>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->

    <div class="row">
      <section class="col-lg-6">              
        
        
        <div class="box box-warning">
          <div class="box-header">
            
            
          
          </div>
          <div class="box-body">
           
          </div>
          
        </div>

      </section>
      <section class="col-lg-6">
        
         <!-- quick email widget -->

        <div class="box box-danger">
          <div class="box-header">
           
           
            
          </div>
        </div>
        <!-- quick email ends -->
       
      </section>
    </div><!-- row ends -->

  </section><!-- /.content -->
@stop        

