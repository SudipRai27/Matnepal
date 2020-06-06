<?php
    $blog = DB::table('blog')
            ->join('blog_category', 'blog_category.id', '=', 'blog.blog_category_id')
            ->select('category_name', 'blog.*')
            ->orderBy('created_at', 'DESC')
            ->where('show_in_frontend','yes')
            ->take(3)
            ->get();

?>
<div class="col-md-4  padding-side">
    <p class="p-title">BLOG</p>
    <hr>
    <div class="row">
        @foreach($blog as $index => $d)
        <div class="col-md-12 post">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        <strong><a href="{{route('frontend-blog-details', $d->title)}}" class="post-title">{{$d->title}}</a></strong></h4>
                </div>
            </div>            
            <div class="row post-content">
                <div class="col-md-4">
                    <a href="{{route('frontend-blog-details', $d->title)}}">
                        <img src="{{URL::to('public/images/blog_images/',$d->image)}}" alt="{{$d->title}}" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-8">
                    <p class="paragraph3">
                        {!! substr($d->content , 0 ,50) !!} {!! strlen($d->content )>50 ? "..." : "" !!}
                    </p>                   
                    <a class="btn btn-read-more" href="{{route('frontend-blog-details',$d->title)}}">Read more</a>                    
                </div>
            </div>
        </div>
        @endforeach
    </div>                                
</div>