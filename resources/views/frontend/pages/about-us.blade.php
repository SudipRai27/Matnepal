@extends('frontend.layouts.main')
@section('custom-seo')
    <title>{{$about_us->meta_title}}</title>
    <meta name="keywords" content="{{$about_us->meta_keyword}}"/>
    <meta name="description" content="{{$about_us->meta_description   }}"/>
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
@endsection
@section('content')
<?php
	$url = url('/');
?>
<section class="breadcrumb-area" data-overlay="5" style="background-image: url({{$url}}/public/frontend/mat/img/detail_img/detail-banner.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper text-center">
          <h3>About Us</h3>
          <ul class="breadcrumb">
          	<li class="breadcrumb-item">
              <a href="#">{{$about_us->title}}</a>
            </li>            
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class=" sec-pad">
  <div class="container">
    <div class="row information-margin">
      <div class="col-md-6">
        <div class="information-section">
          <div class="sec-title outer-stroke">
            <div class="inner">
              <span class="tag-line fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">Welcome to Matnepal</span>
              {{--<h2>Know About us</h2>--}}
              <span class="decor-line"></span>
            </div><!-- /.inner-->
          </div><!-- /.sec-title-->
          <div class="text-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
            {!!$about_us->content!!}
           <!-- <a href="#" class="thm-btn">GO TO ALL SERVICES</a>-->
          </div><!-- /.text-box -->
        </div><!-- /.left-text -->
      </div><!-- /.col-md-6 -->
      <div class="col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
      	@if($about_us->image)
        <img src="{{URL::to('public/images/about_us_images', $about_us->image)}}" alt="{{$about_us->title}}" class="img-responsive">
        @endif
      </div><!-- /.col-md-6 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
{{--<section class="back-change">
  <div class="container">
    <div class="row">
      <div class=" col-md-12 col-sm-12">
        <div class="text-center section-space80  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
          <h2>Our Vision &amp; Mission</h2>
          <p>Our goal at Insight Loan Advisors is to provide access to personal loans, car loan,
            at insight competitive interest raa timely mannerlorem ipsums  deconse resonescon at insight
            competitive interest raa timely mannerlorem ipsums.</p>
        </div>
      </div>
    </div>
  </div>
</section>--}}
@endsection