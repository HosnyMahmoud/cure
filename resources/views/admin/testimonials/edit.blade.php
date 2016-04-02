 @extends('admin.layout')

	@section('title')
	create testimonials
	@endsection

	@section('content')
	
	{!! Form::model($testimonials,['method' => 'PATCH', 'action' => ['TestimonialsCtrl@update',$testimonials->id], 'class' => 'form-horizontal']) !!}
		@include('admin.testimonials._form')
	{!! Form::close() !!}

	@endsection
@stop