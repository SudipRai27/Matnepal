@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>Instructor Mesages</h4>
<div class="table-responsive">
 <table class="table table-bordered table-hover" id="purchase-table" name="purchase-table">        
  <thead>
    <tr>
    <th>SN</th>
    <th>Full Name</th>
    <th>Email Address</th>
    <th>Contact Number</th>
    <th>Expertise</th>
    <th>Receieved Date</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>
  @if(count($messages))
  <tbody>
  @foreach($messages as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->full_name}}</td>
    <td>{{$d->email_address}}</td>
    <td>{{ $d->contact_number}}</td>
    <td>{{ $d->expertise}}</td>
    <td>{{date('Y M d', strtotime($d->created_at))}}</td>
    <td>
      @if($d->file)
      <a href = "{{ route('download-instructor-cv', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Download"><i class="fa fa-fw fa-download"></i></button></a>
      @endif
      <a href = "{{route('delete-instructor-message', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <p align="center" style="color:red;">No Instructor Messages Available</p>             
  @endif  
  </table>
  {{$messages->render() }}       
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
