@extends('backend.layouts.main')
@section('content')
@include('packages::tabs')
<h4>Packages (Tree View)</h4>
<b>{!!$tree!!}</b>
@endsection

	