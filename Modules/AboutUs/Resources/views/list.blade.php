@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List About Us</h4>
<div class="row">
  <div class="col-sm-1">
    <a href="{{route('create-about-us')}}" class="btn btn-primary">Add About Us</a>
  </div>  
</div>
<div class="table-responsive" id="search-results">
  @if(count($about_us))
  <br>
  <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Title</th>
    <th>Content</th>
    <th>Frontend Publishable</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($about_us as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->title}}</td>
    <td>{!! substr($d->content , 0 ,200) !!} {{ strlen($d->content )>200 ? "..." : "" }}</td>    
    <td>{{$d->show_in_frontend}}</td>
    <td>
      @if($d->image)
      <img src="{{URL::to('public/images/about_us_images/',$d->image)}}" class="img-responsive" width="300px" height="200px">
      @else
      <img src="{{URL::to('public/images/no-img.png')}}" height="100" width="100" >
      @endif
    </td>
    <td>
      <a href = "{{route('view-about-us', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View About Us"><i class="fa fa-fw fa-file"></i></button></a>       
      <a href = "{{route('edit-about-us', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-about-us', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO DATA AVAILABLE</h4>
  </div>          
  @endif  
  </table>
</div>
  {{$about_us->render() }}       
@endsection
@section('custom-js')
<script type="text/javascript" src="{{asset('public/sms/assets/js/lity.min.js')}}"></script>
<script>
function myconfirm()
{
    if(confirm('Confirm with the delete process ?'))
        return true;
    return false;
}
</script>

@endsection
