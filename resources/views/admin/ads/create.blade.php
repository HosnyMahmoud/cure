@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::open(['method' => 'POST', 'action' => 'AdsCtrl@store', 'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.ads._form',['button'=>'Add New'])
		
		{!! Form::close() !!}
	</div>

	@endsection
@stop