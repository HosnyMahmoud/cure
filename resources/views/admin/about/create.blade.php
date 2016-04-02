@extends('admin.layout')
@section('title')
		اضافة معلومات 
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">اضافة معلومات</div>
				<div class="panel-body">
					@if(count($errors) > 0)
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
						تمت الاضافة بنجاح
					</div>
					@endif
					{!! Form::open(['action'=>'AboutCtrl@store','class'=>'form-horizontal']) !!}
						@include('admin.about._form',['text'=>'إنشاء'])
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
