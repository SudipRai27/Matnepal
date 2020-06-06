@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Slider</h4>
<a href="{{route('add-slider')}}" class="btn btn-primary"  data-lity>Add Slider</a>
<div class="table-responsive">
 @if(count($slider))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Title</th>
    <th>Description</th>
    <th>Order</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($slider as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->title}}</td>
    <td>{!! substr($d->description , 0 ,220) !!} {{ strlen($d->description )>220? "..." : "" }}</td>
    <td>{{$d->order_index}}</td>
    <td>
      @if($d->image)
      <img src="{{URL::to('public/images/slider_images/',$d->image)}}" class="img-responsive" width="200" height="200">
      @else
      <img src="{{URL::to('public/images/no-img.png')}}" width="100" height="100">
      @endif
    </td>
    <td>
      <a href = "{{route('edit-slider', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-slider', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO SLIDER AVAILABLE</h4>
  </div>                 
  @endif  
  </table>       
  {{$slider->render()}}
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
