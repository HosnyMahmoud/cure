@extends('admin.layout')
@section('title')
		المديرين 
@endsection
	@section('content')
	<a href="{!!Url('/')!!}/admin/admins/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
	<br>
		<table class="table table-responsive table-striped">
			<thead>
				<th>#</th>
				<th>الاسم</th>
				<th>البريد الالكترونى</th>
				<th colspan="2">خيارات</th>
			</thead>
			<tbody>
				@foreach($admins as $admin)
				<tr>
					<td>{!! $admin->id !!}</td>
					<td>{!! $admin->full_name !!}</td>
					<td>{!! $admin->email !!}</td>
					<td><a href="{!!Url('/')!!}/admin/admins/{!! $admin->id !!}/edit" class="btn btn-warning">تعديل</a></td>
					<td><a href="{!!Url('/')!!}/admin/admins/{!! $admin->id !!}/delete" class="btn btn-danger @if($admin->id == Auth::admin()->get()->id)disabled @endif">حذف</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endsection
@stop