@extends('admin.layout')
@section('title')
	اضافة فيديو
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">إضافه فيديو</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>خطأ!</strong> يوجد بعض المشاكل عند الادخال.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(Session::has('msg'))
					<div class="alert alert-success">
						تمت الإضافه بنجاح
					</div>
					@endif
					{!! Form::open(['action'=>'VideosCtrl@store','class'=>'form-horizontal','files'=>true]) !!}
						@include('admin.videos._form',['text'=>'إضافه فيديو','type'=>'create'])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
