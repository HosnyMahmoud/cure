@extends('front.layout')
    @section('content')
	<section class="project">
        <div class="container">
            <h3><img src="{!!Url('front/')!!}/img/gallery.png">{!!Lang::get('menu.contact')!!}</h3> 
            <br>

        	<div class="gallery-cursual">
                <div class="col-md-12">
                    <br>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                           {{ Session::get('success')}} 
                        </div>
                    @endif
                    {!! Form:: open(array('action' => 'ContactCtrl@getContactUsForm')) !!} 
                    <ul class="errors">
                    @foreach($errors->all('<li>:message</li>') as $message)
                    {{ $message }}
                    @endforeach
                    </ul>
                        
                    <div class="form-group">
                    {!! Form::text('name', '', array('placeholder' => 'Name', 'class' => 'form-control', 'id' => 'name', 'rows' => '4' )) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form:: email ('email', '', array('placeholder' => 'Email', 'class' => 'form-control', 'id' => 'email', 'rows' => '4' )) !!}
                    </div>    
                    <div class="form-group">
                    {!! Form:: textarea ('msg', '', array('placeholder' => 'Message', 'class' => 'form-control', 'id' => 'message', 'rows' => '4' )) !!}
                    </div>



                    </div>
                    <div class="modal-footer">
                    {!!Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
                    {!! Form:: close() !!}

                     </div>
        	</div>
        </div>      
    </section>
    @endsection
@stop