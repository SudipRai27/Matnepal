@extends('backend.layouts.submain')
@section('content')

<div class="container">
 <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Member</h3>
                    </div>
                    <div class="panel-body table-responsive">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 ">
                          
                            </div>
                            
                            <div class=" col-md-9 col-lg-9 ">
                                <strong></strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    @if($team->image)
                                    <tr> 	
									<p align="center"><img src = "{{URL::to('public/images/team_images/', $team->image)}}"></p>    
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>Full Name:</td>
                                        <td>{{$team->full_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Designation:</td>
                                        <td>{{$team->designation}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$team->email_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact</td>
                                        <td>{{$team->contact_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{$team->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>FB Link</td>
                                        <td>{{$team->fb_link}}</td>
                                    </tr>
                                    <tr>
                                        <td>Insta Link</td>
                                        <td>{{$team->insta_link}}</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection
