@extends('admin.layout')
	@section('title')
		معلومات عنا 
	@endsection
	@section('content')
		<div class="portlet-body">
			<div class="table-responsive">
				<a href="{!! Url('/') !!}/admin/about/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
				<table class="table">
				<thead>
				<tr>
					<th>
						 #
					</th>
					<th>
						 الإسم
					</th>
					<th>
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					@foreach($abouts as $about)
					<tr>
						<td>
							<strong>{!!$about->id!!}</strong>
						</td>
						
						<td>
							<a href="{!! Url('/')!!}/admin/about/{!!$about->id!!}" class="btn btn-default ">{!!$about->name_ar!!}</a>
						</td>
						<td>
						{!! Form::open(['action' => ['AboutCtrl@destroy', $about->id], 'method' => 'delete']) !!}
							<a href="{!! Url('/')!!}/admin/about/{!!$about->id!!}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
							
							<button class="btn btn-danger" onclick="return confirm('متأكد من الحذف ؟');"><i class="fa fa-trash"></i></button>
						{!!Form::close()!!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $abouts->render() !!}
			</div>
		</div>
	@endsection
@stop