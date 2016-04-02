@extends('admin.layout')
	@section('title')
	 اضافة خبر
	@endsection
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::open(['method' => 'POST', 'action' => 'BlogCtrl@store', 'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.blog._form',['button'=>'اضافة خبر'])
		
		{!! Form::close() !!}
	</div>

	@endsection
@stop