@extends('backend.layouts.main')
@section('content')<br>
<p align="right"><a href="{{route('list-packages')}}" type="button" class="btn btn-danger">Go Back</a></p>
<h4><b>{{$package->package_name}}</b></h4>
<i class="fa fa-calendar"></i> Created On:  {{date('Y M d', strtotime($package->created_at))}}, 
<br>
<b> Package Description: </b> {{ $package->package_description }}
<br>
<b>Parent Category: </b>
{{ $package->parent_id == 0 ? 'root' : Modules\Packages\Entities\Packages::where('id', $package->parent_id)->pluck('package_name')[0]  }}<br>
<b>Show in Frontend:</b> {{$package->show_in_frontend}}<br>
<b>Meta Title: </b>{{$package->meta_title}}<br>
<b>Meta Keyword :</b> {{$package->meta_keyword}}<br>
<b>Meta Description :</b> {{$package->meta_description}}<br>
@if($package->image)
<br>
Current Image
<br>
<img  src="{{ URL::to('public/images/package_images',$package->image)}}" width="200px" height="200px"> 
@endif
@endsection