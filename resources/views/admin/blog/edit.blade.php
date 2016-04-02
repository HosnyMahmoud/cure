@extends('admin.layout')
	@section('title')
	تعديا الخبر
	@endsection
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::model($article,['method' => 'PATCH', 'action' => ['BlogCtrl@update',$article->id],'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.blog._form',['button'=>'تعديل الخبر','type'=>'edit'])

		{!! Form::close() !!}
	</div>
	@endsection
@stop