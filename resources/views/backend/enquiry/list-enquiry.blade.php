@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Enquiry</h4>
<div class="table-responsive">
 @if(count($enquiry))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Enquiry Date / Time</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($enquiry as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->full_name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->phone_number}}</td>
    <td>{{date('Y M d, h:i:s a', strtotime($d->created_at))}}</td>
    <td>
      <a href = "{{route('view-enquiry', $d->id)}}" data-lity><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="View"><i class="fa fa-fw fa-file"></i></button></a>
      <a href = "{{route('delete-enquiry', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO ENQUIRY AVAILABLE</h4>
  </div>                 
  @endif  
  </table>       
  {{$enquiry->render()}}
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
