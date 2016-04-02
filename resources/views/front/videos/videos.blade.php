@extends('front.layout')
    @section('content')
	<section class="project">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/gallery.png">{!!Lang::get('menu.videos_gallery')!!}</h3> 
            <br>
        	<div class="gallery-cursual">
                @foreach($videos as $vid)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
	                <div class="thumbnail">
	                	@if($vid->type == 0)
	                	<a class="various fancybox.iframe" href="{!!Url('/')!!}/uploads/videos/{{$vid->videos}}">
                            <img style="display: block;width: 312px;height: 312px;" src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" />
                        </a>
						@else
						<a class="various fancybox.iframe" href="{{$vid->link}}">
                            <img style="display: block;width: 312px;height: 312px;" src="{!!Url('/')!!}/uploads/videos/img/{{$vid->img}}" />
                        </a> 
						@endif


	                </div>
                </div>
                @endforeach
        	</div>
        </div>      
        		{!! $videos->render()!!}
    </section>
    @endsection
@stop