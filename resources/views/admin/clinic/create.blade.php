@extends('admin.layout')
	@section('title')
		اضافة شريك
	@endsection

	@section('content')
	{!! Form::open(['action'=>'ClinicCtrl@store','files'=>true])!!}
		<table class="table table-hover table-responsive">
			<tr>
				<td>الاسم بالعربى</td>
				<td><div class="form-group @if($errors->first('title_ar')) has-error @endif">
				    {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
				    <small class="text-danger">{{ $errors->first('title_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>الاسم بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('title_en')) has-error @endif">
				    {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
				    <small class="text-danger">{{ $errors->first('title_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>
					الصوره 
				</td>
				<td>
					<div class="form-group @if($errors->first('img')) has-error @endif">
					    {!! Form::file('img', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('img') }}</small>
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