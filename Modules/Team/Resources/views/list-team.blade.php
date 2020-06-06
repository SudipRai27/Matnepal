@extends('backend.layouts.main')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('public/sms/assets/css/lity.min.css')}}">
@endsection
@section('content')
<h4>List Team</h4>
<a href="{{route('add-team')}}" type="button" class="btn btn-primary" data-lity>Add Team</a>
<br><br>
@if(count($team))
<div class="table-responsive">
  <div class="col-xs-12">
    <div class="box"> 
      <div class="box-body">  
        <div class="row">
          <div class="col-md-12">       
              @foreach($team->chunk(3) as $d)
                @foreach($d as $p)
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        @if($p->image)
                        <img src="{{URL::to('public/images/team_images/',$p->image)}}" class="img-responsive" >
                        @else
                        <img src="{{URL::to('public/images/no-img.png')}}" width="100" height="100">
                        @endif
                        <div class="caption">
                        <h5><b> Name: {{ $p->full_name }} </b> </h3>
                        <p>Designation: {{ $p->designation }}</p>
                        <p>Order to display: {{ $p->order_index }}</p>
                        <a href = "{{ route('view-team', $p->id) }}" data-lity><button data-toggle="tooltip" title="" class="btn btn-primary btn-flat" type="button" data-original-title="View"> View  <i class="fa fa-fw fa-file"></i></button>  </a>
                        <a href = "{{ route('edit-team', $p->id )}}"><button data-toggle="tooltip" title="" class="btn btn-success btn-flat" type="button" data-original-title="Edit"> Edit <i class="fa fa-fw fa-edit"></i></button></a>
                        <a href = "{{ route('delete-team', $p->id) }}"><button data-toggle="tooltip" title="" class="btn btn-danger btn-flat" type="button" data-original-title="Delete"> Delete <i class="fa fa-fw fa-trash"></i></button></a>
                        </div>
                    </div>
                  </div>
                @endforeach 
               @endforeach 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@else
<div class="alert alert-danger alert-dismissable">
    <h4><i class="icon fa fa-warning"></i>NO TEAM MEMBERS AVAILABLE</h4>
</div>     
@endif
{{$team->render()}}
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