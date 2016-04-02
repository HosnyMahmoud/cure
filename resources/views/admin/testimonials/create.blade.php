 @extends('admin.layout')

	@section('title')
	create testimonials
	@endsection

	@section('content')
	
	{!! Form::open(['method' => 'POST', 'action' => 'TestimonialsCtrl@store', 'class' => 'form-horizontal']) !!}
		@include('admin.testimonials._form')
	{!! Form::close() !!}

	@endsection
@stop