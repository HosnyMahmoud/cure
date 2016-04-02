@extends('admin.layout')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Section {!!$about->name!!}</div>
				<div class="panel-body">
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(Session::has('msg'))
					<div class="alert alert-success">
						created Successfuly
					</div>
					@endif
					<table class="table table-bordered table-striped">
						<thead>
							<th>Section Name</th>
							<th>Section content</th>
						</thead>
						<tbody>
							<tr>
								<td>{!! $about->name_ar !!}</td>
								<td><p>{!! $about->content_ar !!}</p></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
