@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Category</h4>
<a href="{{route('add-category')}}" class="btn btn-primary"  data-lity>Add Category</a>
<div class="table-responsive">
 @if(count($category))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Category Name</th>
    <th>Alias</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($category as $index => $d)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->category_name}}</td>  
    <td>{{$d->alias}}</td>    
    <td>
      <a href = "{{route('edit-category', $d->id)}}" data-lity><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-category', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO CATEGORY AVAILABLE</h4>
  </div>              
  @endif  
  </table>       
  {{$category->render()}}
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
