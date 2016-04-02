 @extends('admin.layout')

	@section('title')
	projects
	@endsection

	@section('content')
			{!!Form::open(['action'=>['ProjectsCtrl@store'],'files'=>true])!!}
				@include('admin.projects._form',['has_images'=>''])
			{!!Form::close()!!}	
	@endsection
@stop