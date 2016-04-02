@extends('admin.layout')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Update User</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(Session::has('msg'))
					<div class="alert alert-success">
						Added Successfuly
					</div>
					@endif
					{!! Form::model($admin,['method' => 'PATCH', 'action' => ['AdminsCtrl@update',$admin->id], 'class' => 'form-horizontal','files'=>true]) !!}
			

						@include('admin.admins._form',['help'=>'<small class="text-warning">Leave Blank to keep it</small>',
							'text'=>'تعديل المدير'
						])
					{!! Form::close() !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
