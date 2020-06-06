<?php
  $general_settings = Modules\Configurations\Entities\GeneralSettings::first();
?>
<?php
$about_us = Modules\AboutUs\Entities\AboutUs::orderBy('created_at','DESC')
                                              ->where('show_in_frontend','yes')
                                              ->get(); 
?>
<!-- Footer -->
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="{{route('frontend-home')}}">Home</a></li>
                        {{--<li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>--}}
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        @foreach($about_us as $index => $d)
                        <li><a href="{{route('frontend-about', $d->title)}}">{{$d->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li> 
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <!-- Here we use the Google Embed API to show Google Maps. -->
            <!-- In order for this to work in your project you will need to generate a unique API key.  -->
            <div class="container">
                <div class="row">

                    <div class="col-md-5 bg35">
                        <p>Recommended on</p>
                        <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d12095059-Reviews-Mountain_Adventure_Trekking_Pvt_Ltd-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Cent.html"
                           target="_blank"><img src="{{ asset('public/frontend/mat/img/tripadvisor.png') }}" class="img-fluid" style="top: 10px;">
                        </a>

                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('public/frontend/mat/img/aniversary.png') }}" class="img-fluid bg38" style="top: 10px;">
                    </div>
                </div>
            </div>

        </div>
        <div class="social-networks">
            <!-- <a href="#" class="twitter"><i class="fab fa-twitter"></i></i></a> -->
            <a href="{{$general_settings->fb_link}}" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="{{$general_settings->insta_link}}" class="google"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text </p>
        </div>
    </footer>

