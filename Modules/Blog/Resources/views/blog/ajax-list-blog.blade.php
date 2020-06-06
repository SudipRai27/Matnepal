<div class="table-responsive" id="search-results">
 @if(count($blog))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Title</th>
    <th>Content</th>
    <th>Category</th>
    <th>Frontend Publishable</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($blog as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->title}}</td>
    <td>{!! substr($d->content , 0 ,100) !!} {{ strlen($d->content )>100 ? "..." : "" }}</td>
    <td>{{$d->category_name}}</td>
    <td>{{$d->show_in_frontend}}</td>
    <td>
      @if($d->image)
      <img src="{{URL::to('public/images/blog_images/',$d->image)}}" class="img-responsive" width="300px" height="200px">
      @else
      <img src="{{URL::to('public/images/no-img.png')}}" height="100" width="100" >
      @endif
    </td>
    <td>
      <a href = "{{route('view-blog', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View"><i class="fa fa-fw fa-file"></i></button></a>
       <a href = "{{route('view-blog-comments', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-warning btn-flat" type="button" data-original-title="View Comments"><i class="fa fa-fw fa-file"></i></button></a>
      <a href = "{{route('edit-blog', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-blog', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>  
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO BLOGS AVAILABLE</h4>
  </div>              
  @endif  
  </table>
</div>