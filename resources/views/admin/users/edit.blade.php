@extends('admin.layout')
@section('content')


 			{!! Form::model($user,['method'=>'PATCH','action'=>['UsersCtrl@update',$user->id],'files'=>true])!!}
				@include('admin.users._form')
			{!! Form::close()!!}
		<!-- END FORM-->

@endsection
@stop