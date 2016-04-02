@extends('admin.layout')
	@section('title')
	تعديل الصورة
	@endsection
	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>خطاء!</strong> يوجد بعض المشاكل عند الادخال<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@if(Session::has('msg'))
		<div class="alert alert-success">
			تم التعديل بنجلح
		</div>
	@endif
	@section('content')
		{!! Form::model($img,['method' => 'PATCH', 'action' => ['ImagesCtrl@update',$img->id], 'class' => 'form-horizontal','files'=>true]) !!}
		    @include('admin.images._form',['ButtonText'=>'تعديل الصروة','type'=>'edit'])
		
		{!! Form::close() !!}
	@endsection
@stop
