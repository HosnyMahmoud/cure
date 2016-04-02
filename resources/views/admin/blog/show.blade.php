@extends('admin.layout')
	@section('content')
	<div class="col-lg-10">
		<h1>{{$article->title_ar}}</h1>
		{!! Html::image(Url('/uploads/blog/').'/'.$article->image) !!}
		<p>{!! $article->content_ar !!}</p>
		<p>{{$article->tags_ar}}</p>

	</div>
	@endsection
@stop