@extends('admin.layout')
	@section('title')
	اضافة صورة
	@endsection
	

	@section('content')
		@if(Session::has('msg'))
			<div class="alert alert-success">
				تمت الإضافه بنجاح
			</div>
		@endif
		
		{!! Form::open(['method' => 'POST', 'action' => 'ImagesCtrl@store', 'class' => 'form-body', 'files'=>true ]) !!}

		    @include('admin.images._form',['ButtonText'=>'إضافه صورة'])
		
		{!! Form::close() !!}
	@endsection
@stop
