@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::model($ads,['method' => 'PATCH', 'action' => ['AdsCtrl@update',$ads->id], 'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.ads._form',['button'=>'Update'])
		
		{!! Form::close() !!}
	</div>

	@endsection
@stop