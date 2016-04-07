@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::open(['method' => 'POST', 'action' => 'DepartmentsCtrl@store', 'class' => 'form-horizontal']) !!}
		
		    @include('admin.departments._form')
		    <div class="btn-group">
		        {!! Form::submit("إضافه", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop