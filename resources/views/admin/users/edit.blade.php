@extends('admin.layout')
@section('title')
	تعديل الاعضاء
	@endsection
@section('content')


 			{!! Form::model($user,['method'=>'PATCH','action'=>['UsersCtrl@update',$user->id],'files'=>true])!!}
				@include('admin.users._form',['type'=>'edit'])
			{!! Form::close()!!}
		<!-- END FORM-->

@endsection
@stop