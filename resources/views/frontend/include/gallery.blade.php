<?php
    $gallery = Modules\Gallery\Entities\Gallery::orderBy('created_at', 'DESC')
                                                ->take(8)
                                                ->get();
?>

<div class="col-md-4 bg41  padding-side">
    <p class="p-title">Delighted Faces</p>
    <hr>
    <div class="clearfix">                
    </div>
    <div class="col-md-12 col-lg-12" style="padding: 0; margin: 0;">
        @foreach($gallery as $index => $d)
        <div class="box-image" >
            <img class="myimg thumbnail img-responsive" src="{{ URL::to('public/images/gallery_images',$d->file)}}" alt="" >
        </div>
        @endforeach        
    </div>
</div>