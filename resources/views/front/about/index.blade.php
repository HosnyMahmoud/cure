@extends('front.layout')
    @section('content')
        <div class="container">
            <h3>{!!Lang::get('menu.about')!!}</h3> 
        	<div class="gallery-cursual">
                @foreach($abouts as $about)
                <div class="col-md-12">
                    <h1>{{ $about['name_'.Session::get('local')]}}</h1>
                    <p>{{ $about['content_'.Session::get('local')]}}</p>
                </div>
                @endforeach
        	</div>
        </div>      
    @endsection
@stop