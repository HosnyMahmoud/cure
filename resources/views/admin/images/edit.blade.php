@extends('admin.layout')
	@section('title')
	تعديل الصورة
	@endsection
	@section('content')
	
		{!! Form::model($img,['method' => 'PATCH', 'action' => ['ImagesCtrl@update',$img->id], 'class' => 'form-horizontal','files'=>true]) !!}
		    @include('admin.images._form',['ButtonText'=>'تعديل الصروة','type'=>'edit'])
		
		{!! Form::close() !!}
	@endsection
@stop
