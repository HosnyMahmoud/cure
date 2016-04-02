@extends('admin.layout')

	@section('title')
	projects
	@endsection
	
	@section('content')
			{!!Form::model($project,['action'=>['ProjectsCtrl@update',$project->id],'method'=>'PATCH','files'=>true])!!}
				@include('admin.projects._form',['has_images'=>true])
			{!!Form::close()!!}	
	@endsection
@stop