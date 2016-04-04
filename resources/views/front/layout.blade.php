<?php 
use App\Images;
use App\Videos;
use App\Services;
use App\About;
use App\Blog;
use App\Settings;
$about = About::count();
$images = Images::count();
$videos = Videos::count();
$services = Services::count();
$blog = Blog::count();
$settings = Settings::first();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!!$settings['siteName_'.Session::get('local')]!!}</title>
    {!!Html::style('front/css/bootstrap.css')!!}
    @if(Session::get('local') == 'ar')
        {!!Html::style('front/css/bootstrap-ar.css')!!}
    @endif
    {!!Html::style('front/css/font-awesome.min.css')!!}
    {!!Html::style('front/css/owl.carousel.css')!!}
    {!!Html::style('front/css/owl.theme.css')!!}
    {!!Html::style('front/css/lightbox.min.css')!!}
    {!!Html::style('front/css/slippry.css')!!}
    {!!Html::style('front/css/jquery-ui.css')!!}
    {!!Html::style('front/css/animate.css')!!}
    {!!Html::style('front/css/hover-min.css')!!}
    {!!Html::style('front/css/jquery-rebox.css')!!}


    
    @if(Session::get('local') == 'ar')
        {!!Html::style('front/css/style-ar.css')!!}
        {!!Html::style('front/css/media-ar.css')!!}
    @else
        {!!Html::style('front/css/style.css')!!}
        {!!Html::style('front/css/media.css')!!}
    @endif
    {!!Html::style('front/js/fancybox/jquery.fancybox.css?v=2.1.5')!!}
</head>

<body>
    <header>
        <div class="top-navs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-navs">
                            <p> <img src="{!!Url('front/')!!}/images/hand-md.png"> We believe every interaction with our patients is an opportunity! </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-navs">
                            <ul class="list-unstyled">
                                <li><a href="{!!$settings->google_plus!!}"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{!!$settings->youtube!!}"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="{!!$settings->linkedin!!}"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="{!!$settings->twitter!!}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{!!$settings->facebook!!}"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="center-navs hidden-xs">
            <div class="container">
                <div class="col-md-3 col-md-12">
                    <a href="index.html"> 
                    	{!!Html::image('front/images/logo-top.png',null,['class'=>'img-responsive'])!!}
                    </a>
                </div>
                <div class="col-md-3 col-md-12 col-md-offset-3">
                    <div class="location">
                        <p>{!! Html::image('front/images/location.png') !!} {!!Lang::get('index.our_location')!!}</p>
                        <p>{!!$settings['address_'.Session::get('local')]!!}</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-12 ">
                    <div class="location">
                        <p>{!!Html::image('front/images/call-us.png')!!}{!!$settings->phone!!}</p>
                        <p>{!!Lang::get('index.call_us')!!}</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{Url('')}}">{!!Lang::get('menu.home')!!}</a></li>
                        @if($services>0)
                        <li><a href="{{Url('/services')}}">{!!Lang::get('menu.service')!!}</a></li>
                        @endif
                        <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Your Visit <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#"> OUR Physicians </a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Videos </a></li>
                                <li><a href="#">One link</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="#"> OUR Physicians </a></li> -->
                        @if($about>0)
                        <li><a href="{{ Url('/about')}}">{!!Lang::get('menu.about')!!}</a></li>
                        @endif
                        @if($images>0)
                        <li><a href="{{Url('/images')}}">{!!Lang::get('menu.images_gallery')!!}</a></li>
                        @endif
                        @if($videos>0)
                        <li><a href="{{Url('/videos')}}">{!!Lang::get('menu.videos_gallery')!!}</a></li>
                        @endif
                        <li><a href="{{ Url('/contact')}}">{!!Lang::get('menu.contact')!!}</a></li>
                        @if(Session::get('local') == 'ar')
                        <li><a href="{!!Url('lang/en')!!}">{!!Lang::get('menu.lang')!!}</a></li>
                        @else
                        <li><a href="{!!Url('lang/ar')!!}">{!!Lang::get('menu.lang')!!}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

        @yield('content')
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="cust-logo"> <img class="img-responsive" src="{!!Url('front/')!!}/img/footer-logo.png" alt=" " title=" " /> </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h3><img src="{!!Url('front/')!!}/img/map-icon.png"> {!!Lang::get('menu.contact')!!} </h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4883.830513317301!2d31.399613736847847!3d30.054362894580635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1458768046635" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>all copy and right are reserved for<span><a href="#" > CURE HOSPITAL</a></span></p>
                </div>
                <div class="col-md-6 designed">
                    <p>design and devolped by
                        <a href="#"><img src="{!!Url('front/')!!}/images/logo-sawa.jpg"> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <a id="top" class="style1" href="#"></a>
    </section>
    {!! Html::script('front/js/jquery-1.12.2.min.js') !!}
    {!! Html::script('front/js/bootstrap.min.js') !!}
    {!! Html::script('front/js/owl.carousel.min.js') !!}
    {!! Html::script('front/js/jquery.nicescroll.min.js') !!}
    {!! Html::script('front/js/lightbox.js') !!}
    {!! Html::script('front/js/jquery.mixitup.min.js') !!}
    {!! Html::script('front/js/jquery-ui.min.js') !!}
    {!! Html::script('front/js/superplaceholder.min.js') !!}
    {!! Html::script('front/js/slippry.min.js') !!}
    {!! Html::script('front/js/wow.min.js') !!}
    {!! Html::script('front/js/jquery-rebox.js') !!}
    {!! Html::script('front/js/java.js') !!}
    {!! Html::script('front/js/fancybox/jquery.fancybox.pack.js?v=2.1.5') !!}
    <script>
        $(document).ready(function() {
            $(".various").fancybox({
/*                fitToView   : true,
                autoSize    : true,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none'*/
            });
        });
        new WOW().init();
		/*$('#reserv').on('click',function() {
        	$.get('{!!Url("/")!!}/api/reservation/reserve?secret=sawa4&patient_name='+ $('#name').val() +'&patient_phone='+ $('#number').val() +'&patient_email='+ $('#email').val() +'&department_id='+ $('#depart').val() +'&reservation_date='+ $('#datepicker').val(),function( data ){
        		$('#result').html('<h3>'+data.message+'</h3>')
        	});
        })*/
    </script>

</body>

</html>