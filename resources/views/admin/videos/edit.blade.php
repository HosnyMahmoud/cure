@extends('admin.layout')
@section('title')
	تعديل الفيديو
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">تعديل الفيديو</div>
				<div class="panel-body">
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
					{!! Form::model($video,['method' => 'PATCH', 'action' => ['VideosCtrl@update',$video->id], 'class' => 'form-horizontal','files'=>true]) !!}
						@include('admin.videos._form',['text'=>'تعديل الفيديو','type'=>'edit'])
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
