@extends('admin.layout')
	@section('title')
		إضافه قسم
	@endsection
	@section('content')
		
		{!! Form::model($departments,['method' => 'PATCH', 'action' =>['DepartmentsCtrl@update',$departments->id], 'class' => 'form-horizontal']) !!}
		
		    @include('admin.departments._form')
		    <div class="btn-group">
		        {!! Form::submit("إضافه", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}

	@endsection

@stop