@extends('admin.layout')
@section('title')
	اضافة عضو
	@endsection
@section('content')

		<!-- BEGIN FORM-->
 			{!!Form::open(['action'=>['UsersCtrl@store'],'files'=>true])!!}
				@include('admin.users._form')
			{!!Form::close()!!}
		<!-- END FORM-->
	
@endsection
@stop