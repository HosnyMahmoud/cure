@extends('front.layout')
    @section('content')
	<section class="project">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/gallery.png">{!!Lang::get('menu.images_gallery')!!}</h3> 
            <br>
        	<div class="gallery-cursual">
                @foreach($images as $img)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
	                <div class="thumbnail">
	                	<a href="{{Url('/')}}/uploads/images/{{$img->img}}" data-lightbox="roadtrip"> <img style="display: block;width: 312px;height: 312px;" class="img-responsive" src="{{Url('/')}}/uploads/images/{{$img->img}}"> </a>

	                </div>
                </div>
                @endforeach
        	</div>
        </div>      
        		{!! $images->render()!!}
    </section>
    @endsection
@stop