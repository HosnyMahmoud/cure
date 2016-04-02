@extends('admin.layout')
	@section('content')
	<section class="contact">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 contact-form">
			<h2 class="register-title">{{Lang::get('orders.request')}}</h2>
	        {!!Form::open(['action'=>['OrdersCtrl@store']])!!}
	        	<label for="title">{{Lang::get('orders.request_title')}}</label>
	        	<input class="form-control" name="title" type="text">

				<label for="service">{{Lang::get('orders.service_name')}}</label>
	        	{!! Form::select('service',$services,null,['class'=>'form-control']) !!}


				<label for="country">{{Lang::get('orders.country')}}</label>
				@include('countries.'.Session::get('local'))


	        	<label for="details">{{Lang::get('orders.request_details')}}</label>
	        	<textarea name="details" id="details" class="form-control" cols="30" rows="10"></textarea>
				

				<input class="btn btn-primary" type="submit" value="{{Lang::get('orders.request')}}">
	        {!!Form::close()!!}
         </div>

		</div>
</section>
	@endsection
@stop