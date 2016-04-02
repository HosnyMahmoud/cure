@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		
		{!! Form::model($article,['method' => 'PATCH', 'action' => ['BlogCtrl@update',$article->id],'class' => 'form-horizontal','files'=>true]) !!}
			
			@include('admin.blog._form',['button'=>'Update'])

		{!! Form::close() !!}
	</div>
	@endsection
@stop