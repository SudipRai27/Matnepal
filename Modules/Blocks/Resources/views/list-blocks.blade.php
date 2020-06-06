@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Blocks</h4>
<div class="row">
  <div class="col-sm-2">
    <a href="{{route('create-blocks')}}" class="btn btn-primary">Add Blocks</a>
  </div>
  <div class="col-sm-10">
    
  </div>
</div>
<div class="table-responsive" id="search-results">
 @if(count($blocks))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Title</th>    
    <th>Description</th>    
    <th>Frontend Publishable</th>        
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($blocks as $index => $d)  
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->title}}</td>    
    <td>{!! substr($d->description , 0 ,200) !!} {{ strlen($d->description )>200 ? "..." : "" }}</td>
    <td>{{$d->show_in_frontend}}</td>       
    <td>
      <a href = "{{route('view-blocks', $d->id)}}" data-lity><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View Blocks"><i class="fa fa-fw fa-file"></i></button></a>        
      <a href = "{{route('edit-blocks', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit Blocks"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-blocks', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO BLOCKS AVAILABLE</h4>
  </div>              
  @endif  
  </table>
</div>
  {{$blocks->render() }}       
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