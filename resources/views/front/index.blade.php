
@extends('front.layout')
    @section('content')
    <div class="clearfix"></div>
    <section class="main-slider">
        <ul id="main-sliders">
            <li> <a href="#slide1" class="over-bg"> <img src="{!!Url('front/')!!}/images/slider-1.jpg" alt="<div class='caption hidden-xs hidden-sm'> <span class='wow fadeInUp' data-wow-delay='0.6s'>The Best Hospitality IN EGYPT</span> <h3 class='wow bounceInDown' data-wow-delay='0.6s'>CARE FOR YOUR HEALTH </h3> <p class='lead wow bounceInRight' data-wow-delay='0.1s'>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about </p></div><div class='clearfix'></div><div class='non-after'> <a href='#' class='wow bounceInLeft hidden-xs hidden-sm ' data-wow-delay='0.3s'>More</a> </div>"> </a>
            </li>
            <li> <a href="#slide2" class="over-bg"> <img src="{!!Url('front/')!!}/images/slider-1.jpg" alt="<div class='caption hidden-xs hidden-sm'> <span class='wow fadeInUp' data-wow-delay='0.6s'>The Best Hospitality IN EGYPT</span> <h3 class='wow bounceInDown' data-wow-delay='0.6s'>CARE FOR YOUR HEALTH </h3> <p class='lead wow bounceInRight' data-wow-delay='0.1s'>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about </p></div><div class='clearfix'></div><div class='non-after'> <a href='#' class='wow bounceInLeft hidden-xs hidden-sm ' data-wow-delay='0.3s'>More</a> </div>"> </a>
            </li>
            <li> <a href="#slide3" class="over-bg"> <img src="{!!Url('front/')!!}/images/slider-1.jpg" alt="<div class='caption hidden-xs hidden-sm'> <span class='wow fadeInUp' data-wow-delay='0.6s'>The Best Hospitality IN EGYPT</span> <h3 class='wow bounceInDown' data-wow-delay='0.6s'>CARE FOR YOUR HEALTH </h3> <p class='lead wow bounceInRight' data-wow-delay='0.1s'>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about </p></div><div class='clearfix'></div><div class='non-after'> <a href='#' class='wow bounceInLeft hidden-xs hidden-sm ' data-wow-delay='0.3s'>More</a> </div>"> </a>
            </li>
            <li> <a href="#slide4" class="over-bg"> <img src="{!!Url('front/')!!}/images/slider-1.jpg" alt="<div class='caption hidden-xs hidden-sm'> <span class='wow fadeInUp' data-wow-delay='0.6s'>The Best Hospitality IN EGYPT</span> <h3 class='wow bounceInDown' data-wow-delay='0.6s'>CARE FOR YOUR HEALTH </h3> <p class='lead wow bounceInRight' data-wow-delay='0.1s'>Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about </p></div><div class='clearfix'></div><div class='non-after'> <a href='#' class='wow bounceInLeft hidden-xs hidden-sm ' data-wow-delay='0.3s'>More</a> </div>"> </a>
            </li>
        </ul>
        <div class="slide_control hidden-xs hidden-sm">
            <div class="next" id="slide_next"><i class="fa fa-angle-left"></i></div>
            <div class="prev" id="slide_prev"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section class="resrvation wow @if(Session::get('local')=='en') slideInLeft @else slideInRight @endif data-wow-delay='0.8s' ">
        <div class="container">
            <div class="bg-resv">
                <div class="row" id="result">
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="name">{!!Lang::get('index.patient_name')!!}</label>
                            <input type="text" class="form-control" id="name" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="number">{!!Lang::get('index.patient_number')!!}</label>
                            <input type="text" class="form-control" id="number" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="email">{!!Lang::get('index.patient_email')!!}</label>
                            <input type="email" class="form-control" id="email" placeholder=""> </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group">
                            <span style='font-size: 20px;color: #fff;'>{!!Lang::get('index.patient_date')!!}</span>
                                <input type="text" class="customs form-control" id="datepicker" name="date" size="40"> <i class="glyphicon glyphicon-calendar"></i> 
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <select class="form-control" id="depart">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-xs-12 sub">
                        <input class="form-control btn btn-default" type="submit" value="{!!Lang::get('index.reserv')!!}" id="reserv"> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="about_us">
        <div class="container">
            <div class="row">
                <h3><img src="{!!Url('front/')!!}/img/about-img.png">{!!Lang::get('menu.about')!!}</h3>
                <div class="col-md-12">
                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
                </div>
            </div>
        </div>
    </section>
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
                <div class="col-md-6">
                    <h4>{!!Lang::get('index.latest')!!}</h4>
                    <div class="right-slider">
                        <div id="slider-2" class="owl-carousel">
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                            <div class="item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indusLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>{!!Lang::get('index.comments')!!}</h4>
                    <div class="left-slider">
                        <div id="slider-3" class="owl-carousel">
                            <!-- <div class="cust-img"> <img class="img-responsive" src="img/user-face.jpg"> </div>-->
                            <div class="item">
                                <div class="detal">
                                    <h3>will smith</h3>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="detal">
                                    <h3>will smith</h3>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-slider">
                        <div id="client" class="owl-carousel">
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                            <div class="item">
                                <div class="detal"> <img src="{!!Url('front/')!!}/img/logo-cle.png"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@stop