@extends('admin.layout')
	@section('title')
	اضافة صورة
	@endsection
	@if(Session::has('msg'))
		<div class="alert alert-success">
			تمت الإضافه بنجاح
		</div>
	@endif
	@section('content')
		{!! Form::open(['method' => 'POST', 'action' => 'ImagesCtrl@store', 'class' => 'form-body', 'files'=>true ]) !!}

		    @include('admin.images._form',['ButtonText'=>'إضافه صورة'])
		
		{!! Form::close() !!}
	@endsection
@stop
