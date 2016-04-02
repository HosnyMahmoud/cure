@extends('front.layout')
    @section('content')
	<section class="services">
        <div class="container">
            <div class="row">
                <h3><img src="{!!Url('front/')!!}/img/serv.png"> {!!Lang::get('menu.service')!!} </h3>
                <?php $i=0;?>
                @foreach($services as $serv) 
                <div class="col-md-3 col-xs-12">
                    <div class="sec @if($i !== count($services)-1) @if($i !== 3) after @endif @endif"> <img src="{!!Url('/').'/uploads/services/'.$serv->image !!}" alt="first-img" title=""> 
                </div>
                 <div class="details text-center">
                        <h4>{{ $serv['name_'.Session::get('local')] }}</h4>
                        <p>{{ $serv['desc_'.Session::get('local')] }}</p><a href="#" class="hvr-bounce-to-bottom">More</a> </div>
                </div>
                <?php $i++; ?>
                @endforeach
                
            </div>
                {!! $services->render()!!}

        </div>
    </section>
    
@stop