@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::open(['method' => 'POST', 'action' => 'BlogCtrl@store', 'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.blog._form',['button'=>'Add New'])
		
		{!! Form::close() !!}
	</div>

	@endsection
@stop