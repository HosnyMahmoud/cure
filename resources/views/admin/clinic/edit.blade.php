@extends('admin.layout')
	@section('title')
		تعديل الشريك
	@endsection

	@section('content')
	{!! Form::model($clinic,['method'=>'PATCH','action'=>['ClinicCtrl@update',$clinic->id],'files'=>true])!!}
		<table class="table table-hover table-responsive">
			<tr>
				<td>العنوان بالعربى</td>
				<td><div class="form-group @if($errors->first('title_ar')) has-error @endif">
				    {!! Form::text('title_ar', null, ['class' => 'form-control' ]) !!}
				    <small class="text-danger">{{ $errors->first('title_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>العنوان بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('title_en')) has-error @endif">
				    {!! Form::text('title_en', null, ['class' => 'form-control' ]) !!}
				    <small class="text-danger">{{ $errors->first('title_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>
					الصوره 
				</td>
				<td>
					<div class="form-group @if($errors->first('image')) has-error @endif">
						 {!! Html::image('uploads/clinic/'.$clinic->img,'',['width'=>'100px','height'=>'100px']) !!} <br>
					    <br>
					    {!! Form::file('img', null, ['class' => 'form-control' ]) !!}
					    <small class="text-danger">{{ $errors->first('img') }}</small>
					</div>
				</td>
			</tr>
		
			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary">تعديل</button>
				</td>
			</tr>	
		</table>
		{!! Form::close() !!}
	@endsection			
@stop	