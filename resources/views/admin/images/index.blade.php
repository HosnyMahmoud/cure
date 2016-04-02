@extends('admin.layout')
@section('title')
	الصور
@endsection
	@section('content')
	<a href="{!!Url('/')!!}/admin/images/create" class="btn btn-success">
		<i class="fa fa-plus"></i>
	</a>
	<table class="table table-responsive table-striped">
		<thead>
			<th>#</th>
			<th>الاسم </th>

			<th colspan="2">خيارات</th>
		</thead>
		<tbody>
			@foreach($images as $img )
			<tr>

				<td>{!! $img->id !!}</td>
				<td>{!! $img->name_ar !!}</td>
				<td>
					{!! Form::open(['action' => ['ImagesCtrl@destroy', $img->id], 'method' => 'delete']) !!}
					<a href="{!!Url('/')!!}/admin/images/{!! $img->id !!}/edit" class="btn btn-icon-only red">
						<i class="fa fa-edit"></i>
					</a>
					<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف  لصورة: {!! $img->name !!} ؟')">
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