@extends('admin.layout')
	@section('content')
	<a href="{!!Url('/')!!}/admin/admins/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
	<br>
		<table class="table table-responsive table-striped">
			<thead>
				<th>#</th>
				<th>name</th>
				<th>email</th>
				<th colspan="2">options</th>
			</thead>
			<tbody>
				@foreach($admins as $admin)
				<tr>
					<td>{!! $admin->id !!}</td>
					<td>{!! $admin->full_name !!}</td>
					<td>{!! $admin->email !!}</td>
					<td><a href="{!!Url('/')!!}/admin/admins/{!! $admin->id !!}/edit" class="btn btn-warning">Edit</a></td>
					<td><a href="{!!Url('/')!!}/admin/admins/{!! $admin->id !!}/delete" class="btn btn-danger @if($admin->id == Auth::admin()->get()->id)disabled @endif">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endsection
@stop