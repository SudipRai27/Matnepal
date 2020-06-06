@extends('frontend.layouts.main')
@section('custom-seo')
    <title>Blogs / MatNepal</title>
    
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">

@endsection
@section('content')
<?php
	$url = url('/');
  $general_settings = Modules\Configurations\Entities\GeneralSettings::first();
?>
<section class="breadcrumb-area" data-overlay="5" style="background-image: url({{$url}}/public/frontend/mat/img/detail_img/detail-banner.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper text-center">
          <h3>Blog</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{route('frontend-home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Blogs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div id="main" class="col-sm-8 col-md-9">
        <div class="blog-listing" id="search-results">
          @foreach($blog as $index => $d)
          <div class="well">
            <div class="media">
              <a class="pull-left" href="{{route('frontend-blog-details',$d->title)}}">
                <img class="media-object img-responsive" src="{{URL::to('public/images/blog_images/',$d->image)}}">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{$d->title}} </h4>
                <p class="text-right"><i class="glyphicon glyphicon-calendar"></i>
                  {{ \Carbon\Carbon::createFromTimeStamp(strtotime($d->created_at))->diffForHumans()}}, 
                  {{date('Y M d', strtotime($d->created_at))}}</p>
                {!! substr($d->content , 0 ,300) !!} {{ strlen($d->content )>300 ? "..." : "" }}
                <br><br>
                <a href="{{route('frontend-blog-details',$d->title)}}" class="btn btn-primary btn-listing ">Read Now</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class=" col-sm-4 col-md-3">
        <div class="travelo-box">
          <h5 class="box-title">Search Blog</h5>
          <div class="with-icon full-width">
            <input class="input-text full-width" placeholder="Search" type="text" id="search_bar">
            <button class="icon green-bg white-color"><i class="fas fa-search"></i></button>
          </div>
        </div>
        {{--<div class="travelo-box">
          <h5 class="box-title">About Travelo</h5>
          <p>Phasellus vehicula justo eget  sollicitudin eu tincidu ncurabitur ele
            sollicitu tincidu nulla curabitur magna ined and posuere lorem sollicitudin eu tin.</p>
        </div>--}}
        <div class="tab-container box box-back">
          <ul class="tabs full-width">           
            <li class="active">
              <a data-toggle="tab" href="#popular-posts">Popular</a>
            </li>          
          </ul>
          <div class="tab-content">
            <div id="recent-posts" class="tab-pane fade">
            </div>
            <div id="popular-posts" class="tab-pane fade in active">
              <div class="image-box style14">
                @foreach($popular_blog as $index => $d)
                <article class="box1">
                  <figure><a href="{{route('frontend-blog-details',$d->title)}}" title=""><img src="{{URL::to('public/images/blog_images/',$d->image)}}" alt="{{$d->title}}" width="63" height="59"></a></figure>
                  <div class="detailss">
                    <h5 class="box-title"><a href="{{route('frontend-blog-details',$d->title)}}">{{$d->title}}</a></h5> 
                  </div>
                </article>
                @endforeach                               
              </div>
            </div>
            <div id="new-posts" class="tab-pane fade">
            </div>
          </div>
        </div>
        <div class="travelo-box contact-box">
          <h4 class="box-title">Need MatNepal Help?</h4>
          <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
          <address class="contact-details">
            <span class="contact-phone"><i class="soap-icon-phone"></i> {{$general_settings->phone}}</span>
            <br>
            <a href="#" class="contact-email">{{$general_settings->email}}</a>
          </address>
        </div>
      </div>
    </div>
    {{$blog->render()}}
  </div>
</section>
<div class="clearfix"></div>
@endsection
@section('custom-js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#search_bar').on('keyup', function() {
        var input = $('#search_bar').val(); 
        $('#search-results').html('<div><br><p align = "center"><img src = "{{asset('public/images/ajax-loader.gif')}}" ></p></div>')
        $.ajax({
            'method' : 'GET', 
            'url' : '{{route('ajax-get-search-blog-frontend')}}', 
            'data' : {
                    'input' : input
                }

        }).done(function(data){
            $('#search-results').html(data);
        });
    });

  });
</script>
@endsection