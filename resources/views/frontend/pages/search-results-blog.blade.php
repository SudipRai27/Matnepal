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