@extends('front.layout')
    @section('content')
	<section class="project">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/gallery.png">{!!Lang::get('menu.images_gallery')!!}</h3> 
            <br>
        	<div class="gallery-cursual">
                @foreach($abouts as $about)
                <div class="col-md-12">
                    <h1>{{ $about->name_en}}</h1>
                    <p>{{ $about->content_en}}</p>
                </div>
                @endforeach
        	</div>
        </div>      
    </section>
    @endsection
@stop