@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		<h1>{{$ads->title}}</h1>
		{!! Html::image(Url('/uploads/ads/').'/'.$ads->image) !!}
		
	</div>
	@endsection
@stop