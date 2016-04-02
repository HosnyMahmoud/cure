@extends('admin.layout')
@section('title')
	الفيديوهات
@endsection
	@section('content')
	<a href="{!!Url('/')!!}/admin/videos/create" class="btn btn-success">
		<i class="fa fa-plus"></i>
	</a>
	<table class="table table-responsive table-striped">
		<thead>
			<th>#</th>
			<th>اسم الفيديو</th>

			<th colspan="2">خيارات</th>
		</thead>
		<tbody>
			@foreach($videos as $video )
			<tr>

				<td>{!! $video->id !!}</td>
				<td>{!! $video->name_ar !!}</td>
				<td>
					{!! Form::open(['action' => ['VideosCtrl@destroy', $video->id], 'method' => 'delete']) !!}
					<a href="{!!Url('/')!!}/admin/videos/{!! $video->id !!}/edit" class="btn btn-icon-only red">
						<i class="fa fa-edit"></i>
					</a>
					<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف  الغيديو: {!! $video->name !!} ؟')">
							<i class="fa fa-times"></i>
					</button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	@endsection
@stop