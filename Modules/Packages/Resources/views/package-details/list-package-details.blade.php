@extends('backend.layouts.main')
@section('content')

<h4>List Package Itinerary / Details</h4>
<div class="row">
  <div class="col-sm-3">
    <a href="{{route('create-package-details')}}" class="btn btn-primary">Add Package Itinerary / Details</a>
  </div>
  <div class="col-sm-9">
    <input type="text" name="search_bar" id = "search_bar" class="form-control" placeholder="Search by package name">
  </div>
</div>
<div class="table-responsive" id="search-results">
 @if(count($package_details))
 <br>
 <table class="table table-bordered table-hover">        
  <thead>
    <tr style="background-color:#333; color:white;">
    <th>SN</th>
    <th>Package Name</th>
    <th>Country</th>
    <th>Duration</th>    
    <th>Altitude</th>   
    <th>Trip Grade</th>
    <th>Accomodation</th>
    <th>Total Trip Cost ($)</th>
    <th>Action</th>
    </tr>
  </thead>
  <?php
  $i = 1;
  ?>  
  <tbody>
  @foreach($package_details as $index => $d)  
    <tr>
    <td>{{$i++}}</td>
    <td>{{$d->package_name}}</td>
    <td>{{ $d->country }}</td>
    <td>{{ $d->duration }}</td>
    <td>{{$d->altitude}}</td>    
    <td>{{$d->trip_grade}}</td>
    <td>{{$d->accomodation}}</td>
    <td>{{$d->total_trip_cost}}</td>
    <td>
      <a href = "{{route('view-package-details', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View Package Itinerary / Details"><i class="fa fa-fw fa-file"></i></button></a>        
      <a href = "{{route('edit-package-details', $d->id)}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit Package Itinerary / Details"><i class="fa fa-fw fa-edit"></i></button></a>
      <a href = "{{route('delete-package-details', $d->id)}}" onclick="return myconfirm()"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"><i class= "fa fa-fw fa-trash"></i></button></a>         
    </td>
    </tr>
  @endforeach
  </tbody>
  @else
  <br>
  <div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO PACKAGE ITINERARY AVAILABLE</h4>
  </div>              
  @endif  
  </table>
</div>
  {{$package_details->render() }}       
@endsection
@section('custom-js')
<script>
function myconfirm()
{
    if(confirm('Confirm with the delete process ?'))
        return true;
    return false;
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search_bar').on('keyup', function() {
        var input = $('#search_bar').val(); 
        $('#search-results').html('<div><br><p align = "center"><img src = "{{asset('public/images/ajax-loader.gif')}}" ></p></div>')
        $.ajax({
            'method' : 'GET', 
            'url' : '{{route('ajax-get-search-package-details')}}', 
            'data' : {
                    'input' : input
                }

        }).done(function(data){
            $('#search-results').html(data);
        });
    });

  });
</script>
@endsection
