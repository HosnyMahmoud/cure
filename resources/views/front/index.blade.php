
@extends('front.layout')
    @section('content')
    @if(Session::has('success'))
        <script>
            alert('{!!Lang::get("assets.success")!!}');
        </script>
    @endif
    <div class="clearfix"></div>
    @if(count($slider)>0)
    <section class="main-slider">
        <ul id="main-sliders">
            @foreach($slider as $slide)
            <li> <a class="over-bg"> <img src="{!!Url('uploads/')!!}/slider/{!!$slide->background!!}" alt="<div class='caption hidden-xs hidden-sm'> <span class='wow fadeInUp' data-wow-delay='0.6s'>{!!$slide['head_'.Session::get('local')]!!}</span> <p class='wow bounceInDown' data-wow-delay='0.6s'>{!!$slide['text_'.Session::get('local')]!!}</p></div><div class='clearfix'></div><div class='non-after'></div>"> </a>
            </li>
            @endforeach
        </ul>
        <div class="slide_control hidden-xs hidden-sm">
            <div class="next" id="slide_next"><i class="fa fa-angle-left"></i></div>
            <div class="prev" id="slide_prev"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="clearfix"></div>
    </section>
    @else
    <br><br><br><br><br>
    @endif
    <section class="resrvation wow @if(Session::get('local')=='en') slideInLeft @else slideInRight @endif data-wow-delay='0.8s' ">
    @if(Auth::client()->check() == true)
        {!!Form::open(['url'=>'reserv'])!!}
    @else
        {!!Form::open(['url'=>Url('login'),'method'=>'get'])!!}
    @endif
        <div class="container">
            <div class="bg-resv">
                <div class="row" id="result">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="name">{!!Lang::get('index.patient_name')!!}</label>
                            <input type="text" name="patient_name" class="form-control" id="name" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="number">{!!Lang::get('index.patient_number')!!}</label>
                            <input type="text" name="patient_phone" class="form-control" id="number" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="email">{!!Lang::get('index.patient_email')!!}</label>
                            <input type="email" name="patient_email" class="form-control" id="email" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <span style='font-size: 20px;color: #fff;margin-left: 25px;position: relative;'>{!!Lang::get('index.patient_date')!!}</span>
                                <input type="text" class="customs form-control" id="datepicker" name="date" size="40"> <i class="glyphicon glyphicon-calendar"></i> 
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                       {!!Form::select('department_id',$departments,null,['class'=>'form-control','id'=>'depart'])!!}
                    </div>
                    <div class="col-md-4 col-xs-12 sub">
                        <input class="form-control btn btn-default" type="submit" value="{!!Lang::get('index.reserv')!!}" id="reserv">
                    </div>
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </section>
    <div class="clearfix"></div>
     @if(count($about) > 0)
    <section class="about_us">
        <div class="container">
            <div class="row">
                <h3><img src="{!!Url('front/')!!}/img/about-img.png">{!!Lang::get('menu.about')!!}</h3>
                <div class="col-md-12">
                    <p>{{$about['content_'.Session::get('local')]}}</p>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(count($services)>0)
    <section class="services">
        <div class="container">
            <div class="row">
                <h3><img src="{!!Url('front/')!!}/img/serv.png"> {!!Lang::get('menu.service')!!} </h3>
                <?php $i=0;?>
                @foreach($services as $serv) 
                <div class="col-md-3 col-xs-12">
                    <div class="sec @if($i !== 3) after @endif"> <img src="{!!Url('/').'/uploads/services/'.$serv->image !!}" alt="first-img" title=""> 
                </div>
                 <div class="details text-center">
                        <h4>{{ $serv['name_'.Session::get('local')] }}</h4>
                        <p>{{ $serv['desc_'.Session::get('local')] }}</p><a href="#" class="hvr-bounce-to-bottom">More</a> </div>
                </div>
                <?php $i++; ?>
                @endforeach
                
            </div>
        </div>
    </section>
    @endif
    @if(count($images)>0)
    <section class="project">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/gallery.png">{!!Lang::get('menu.images_gallery')!!}</h3> </div>
        <div class="gallery-cursual">
            <div id="owl-demo" class="owl-carousel text-center">
                @foreach($images as $img)
                <div class="item"><img style="display: block;width: 312px;height: 312px;" class="lazyOwl img-responsive" data-src="{{Url('/')}}/uploads/images/{{$img->img}}" alt="name">
                    <div class="overall">
                        <a href="{{Url('/')}}/uploads/images/{{$img->img}}" data-lightbox="roadtrip"> <img class="img-responsive" src="{!!Url('front/')!!}/img/search-after.png"> </a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    @endif
    @if(count($videos)>0)
    <section class="video">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/play.png">{!!Lang::get('menu.videos_gallery')!!}</h3> </div>
        <div class="gallery-cursual">
            <div id="vido" class="owl-carousel text-center">
                @foreach($videos as $vid)
                @if($vid->type == 0)
                <div class="item">
                    <img class="lazyOwl img-responsive" data-src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" class="img-responsive" alt="name">                   
                    <div class="overall">
                        <a class="various fancybox.iframe" href="{!!Url('/')!!}/uploads/videos/{{$vid->videos}}">
                            <img src="{{Url('/')}}/front/img/play-hover.png" />
                        </a>                    
                    </div>
                </div>
                @else
                <div class="item">
                    <img class="lazyOwl img-responsive" data-src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" class="img-responsive" alt="name">                   
                    <div class="overall">
                        <a class="various fancybox.iframe" href="{{$vid->link}}">
                            <img src="{{Url('/')}}/front/img/play-hover.png" />
                        </a>                    
                    </div>
                </div>
                
                @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="pragraph">
        <div class="container">
            <div class="row">
                @if(count($blog)>0)
                <div class="col-md-6">
                    <h4>{!!Lang::get('index.latest')!!}</h4>
                    <div class="right-slider">
                        <div id="slider-2" class="owl-carousel">
                            @foreach($blog as $art)
                            <div class="item">{!!$art['content_'.Session::get('local')]!!}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if(count($testimonials)>0)
                <div class="col-md-6">
                    <h4>{!!Lang::get('index.comments')!!}</h4>
                    <div class="left-slider">
                        <div id="slider-3" class="owl-carousel">
                            <!-- <div class="cust-img"> <img class="img-responsive" src="img/user-face.jpg"> </div>-->
                            @foreach($testimonials as $test)
                            <div class="item">
                                <div class="detal">
                                    <h3>{!!$test['name_'.Session::get('local')]!!}</h3>
                                    <p>{!!$test['text_'.Session::get('local')]!!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    @if(count($clinic)>0)
    <section class="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-slider">
                        <div id="client" class="owl-carousel">
                            @foreach($clinic as $client)
                            <div class="item">
                                <div class="detal"> <img title="{!!$client['title_'.Session::get('local')]!!}" src="{!!Url('/')!!}/uploads/clinic/{!!$client->img!!}"> </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Latest compiled and minified CSS & JS -->
    
    @endsection
@stop