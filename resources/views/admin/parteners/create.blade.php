@extends('admin.layout')
	@section('title')
		Create New Slide
	@endsection

	@section('content')
	{!! Form::open(['action'=>'PartenersCtrl@store','files'=>true])!!}
		<table class="table table-hover table-responsive">
			<tr>
				<td>الإسم بالعربى</td>
				<td><div class="form-group @if($errors->first('name_ar')) has-error @endif">
				    {!! Form::text('name_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('name_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>الإسم بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('name_en')) has-error @endif">
				    {!! Form::text('name_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('name_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>الرابط</td>
				<td><div class="form-group @if($errors->first('url')) has-error @endif">
				    {!! Form::url('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('url') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>
					الصوره 
				</td>
				<td>
					<div class="form-group @if($errors->first('image')) has-error @endif">
					    {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('image') }}</small>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary">إضافه</button>
				</td>
			</tr>	
		</table>
		{!! Form::close() !!}
	@endsection			
@stop	