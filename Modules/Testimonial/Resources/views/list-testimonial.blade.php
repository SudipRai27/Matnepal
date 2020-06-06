@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Testimonials</h4>
<a href="{{route('add-testimonial')}}" class="btn btn-primary"  data-lity>Add Testimonial</a>
<div class="table-responsive">
 @if(count($testimonials))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Name</th>
    <th>Message</th>
    <th>Frontend Publishable</th>
    <th>Rating (Out of 5)</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($testimonials as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->full_name}}</td>
    <td>{!! substr($d->message , 0 ,200) !!} {{ strlen($d->message )>200 ? "..." : "" }}</td>
    <td>{{$d->frontend_publishable}}</td>
    <td>{{$d->rating}}</td>
    <td>
      @if($d->image)
      <img src="{{URL::to('public/images/testimonial_images/',$d->image)}}" class="img-responsive" width="150" height="150">
      @else
      <img src="{{URL::to('public/images/no-img.png')}}" width="100" height="100">
      @endif
    </td>
    <td>
      <a href = "{{route('view-testimonial', $d->id)}}" data-lity><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View"><i class="fa fa-fw fa-file"></i></button></a>
      <a href = "{{route('edit-testimonial', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-testimonial', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
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
  {{$testimonials->render()}}
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
