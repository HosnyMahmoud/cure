@extends('front.layout')
    @section('content')
        <div id="page_videos">
            <div class="container">
                <div class="video">
                    <h3><img src="{!!Url('front/')!!}/img/play-hover.png">{!!Lang::get('menu.videos_gallery')!!}</h3>
                </div>
                <div class="row">
                    @foreach($videos as $vid)
                        @if($vid->type == 0)
                            <div class="col-md-3">
                                <div class="item">
                                    <img class="img-responsive" src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" alt="name">
                                    <div class="overall">

                                        <a href="{!!Url('/')!!}/uploads/videos/{{$vid->videos}}" data-lightbox-gallery="roadtrip">
                                            <img class="img-responsive" src="{!!Url('front/')!!}/img/search-after.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-3">
                                <div class="item">
                                    <img class="img-responsive" src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" alt="name">
                                    <div class="overall">

                                        <a href="{{$vid->link}}" data-lightbox-gallery="roadtrip">
                                            <img class="img-responsive" src="{!!Url('front/')!!}/img/search-after.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
@stop