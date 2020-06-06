@extends('backend.layouts.main')
@section('content')
<h4>Blog Comments</h4>
<p align="right"><a href="{{route('list-blog')}}" class="btn btn-danger" type="button">Go Back</a></p>
<?php
$i = 1;
?>
@if(count($blog_comments))
@foreach($blog_comments as $index => $d)
SN : {{$i++}} <br>
Commented By: {{$d->full_name}}<br>
Email : {{$d->email_address}} <br>
Message: {{$d->message}}
<p align="right"><a href="{{route('delete-blog-comment', $d->id)}}" type="button" class="btn btn-danger">DELETE COMMENT</a></p>
@endforeach
@else
<p align="center" style="color:red;">No Comments Available</p>
@endif
@endsection