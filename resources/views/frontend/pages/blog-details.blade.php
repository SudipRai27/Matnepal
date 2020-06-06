@extends('frontend.layouts.main')
@section('custom-seo')
    <title>{{$blog->meta_title}}</title>
    <meta name="keywords" content="{{$blog->meta_keyword}}"/>
    <meta name="description" content="{{$blog->meta_description}}"/>
@endsection
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/mat/details.css') }}">
@endsection
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=464546563994898&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	$url = url('/');
?>
<section class="breadcrumb-area" data-overlay="5" style="background-image: url({{$url}}/public/frontend/mat/img/detail_img/detail-banner.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
              <h3>BLOG</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('frontend-home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Blog</li>
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
            <div class="post">
              <figure class="image-container">
                <a href="#">
                  <img src="{{URL::to('public/images/blog_images/',$blog->image)}}" alt="">
                </a>
              </figure>
              <div class="details">
                <h1 class="entry-title">{{$blog->title}}</h1>
                <div class="post-content">
                  <p class="detail-paragraph">
                    {!!$blog->content!!}
                  </p>
                </div>
                <div class="post-meta">
                  <div class="entry-date">
                    <label class="date">{{date('d ', strtotime($blog->created_at))}}</label>
                    <label class="month">{{date('M Y', strtotime($blog->created_at))}}</label>
                  </div>

                </div>
              </div>
              <div class="single-navigation block">
                <div class="row">
                  <div class="col-xs-6">
                    @if(count($previous_blog))
                    <a rel="prev" href="{{route('frontend-blog-details', $previous_blog->title)}}" class="button btn-large prev full-width">
                      <span>Previous Post</span>
                    </a>
                    @endif
                  </div>
                  <div class="col-xs-6">
                    @if(count($next_blog))
                    <a rel="next" href="{{route('frontend-blog-details', $next_blog->title)}}" class="button btn-large next full-width">
                      <span>Next Post</span>
                    </a>
                    @endif
                  </div>
                </div>
              </div>
              {{--
              <div class="comments-container block">
                <h2>3 Comments</h2>
                <ul class="comment-list travelo-box">
                  <li class="comment depth-1">
                    <div class="the-comment">
                      <div class="avatar">
                        <img src="img/detail_img/professior.jpg" alt="" width="72" height="72">
                      </div>
                      <div class="comment-box">
                        <div class="comment-author">
                          <a href="#" class="button btn-mini pull-right">REPLY</a>
                          <h4 class="box-title"><a href="#">David Jhon</a><small>Nov, 12, 2013</small></h4>
                        </div>
                        <div class="comment-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                        </div>
                      </div>
                    </div>
                    <ul class="children">
                      <li class="comment depth-2">
                        <div class="the-comment">
                          <div class="avatar">
                            <img src="img/detail_img/professior.jpg" alt="" width="72" height="72">
                          </div>
                          <div class="comment-box">
                            <div class="comment-author">
                              <a href="#" class="button btn-mini pull-right">REPLY</a>
                              <h4 class="box-title"><a href="#">David Jhon</a><small>Nov, 12, 2013</small></h4>
                            </div>
                            <div class="comment-text">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="comment depth-1">
                    <div class="the-comment">
                      <div class="avatar">
                        <img src="img/detail_img/professior.jpg" alt="" width="72" height="72">
                      </div>
                      <div class="comment-box">
                        <div class="comment-author">
                          <a href="#" class="button btn-mini pull-right">REPLY</a>
                          <h4 class="box-title"><a href="#">Kyle Martin</a><small>Nov, 12, 2013</small></h4>
                        </div>
                        <div class="comment-text">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>--}}
              <div class="post-comment block">
                <h2 class="reply-title">Post a Comment</h2>
                <div class="fb-comments" data-href="{{$url}}/blog/{{$blog->title}}" data-numposts="5"></div>              
              </div>
            </div>
          </div>
          <br>          
          <div class=" col-sm-4 col-md-3">          
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
      </div>
    </section>    
<div class="clearfix"></div>

@endsection