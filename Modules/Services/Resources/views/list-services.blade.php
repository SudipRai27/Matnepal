@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Services</h4>
<a href="{{route('add-services')}}" class="btn btn-primary" data-lity>Add Services</a>
<div class="table-responsive">
 @if(count($services))
 <br>
 <table class="table table-bordered table-hover" id="purchase-table" name="purchase-table">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Title</th>
    <th>Description</th>
    {{--<th>Class</th>--}}
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($services as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->title}}</td>
    <td>{!! substr($d->description , 0 ,220) !!} {{ strlen($d->description )>220? "..." : "" }}</td>
   {{--<td>{{$d->class}}</td>--}}
    <td>
      <a href = "{{route('view-services', $d->id)}}" data-lity><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View"><i class="fa fa-fw fa-file"></i></button></a>
      <a href = "{{route('edit-services', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-services', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
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
  {{$services->render() }}       
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
