@extends('front.layout')
    @section('content')
        <div class="clearfix"></div>
        <div id="page_videos">
            <div class="about-page">  
                <div class="container">
                <?php $i = 0; ?>
                @foreach($abouts as $about)
                @if($i == 0)
                    <div class="row">
                        <h3><img src="{!!Url('front')!!}/img/about-page.png">{!!Lang::get('menu.about')!!}</h3>
                        <div class="col-md-12">
                            <p>{{ $about['content_'.Session::get('local')]}}</p>
                        </div>
                    </div>
                @else
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                  {{ $about['name_'.Session::get('local')]}}
                                </a>
                              </h4>
                            </div>
                            <div id="collapse_{{$i}}" class="panel-collapse collapse {{$i == 1 ? 'in': ''}}" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                   {{ $about['content_'.Session::get('local')]}}
                              </div>
                            </div>
                        </div>
                    </div>
                @endif
                <?php $i++; ?>
                @endforeach
                </div>
            </div>
        </div>
    @endsection
@stop