@extends('admin.layout')
	@section('title')
		تعديل الخدمات
	@endsection

	@section('content')
	{!! Form::model($services,['method'=>'PATCH','action'=>['ServicesCtrl@update',$services->id],'files'=>true])!!}
		<table class="table table-hover table-responsive">
			<tr>
				<td>العنوان بالعربى</td>
				<td><div class="form-group @if($errors->first('name_ar')) has-error @endif">
				    {!! Form::text('name_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('name_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>العنوان بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('name_en')) has-error @endif">
				    {!! Form::text('name_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('name_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>النص بالعربى</td>
				<td><div class="form-group @if($errors->first('desc_ar')) has-error @endif">
				    {!! Form::textarea('desc_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('desc_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>النص بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('desc_en')) has-error @endif">
				    {!! Form::textarea('desc_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('desc_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>
					الصوره 
				</td>
				<td>
					<div class="form-group @if($errors->first('image')) has-error @endif">
						 {!! Html::image('uploads/services/'.$services->image,'',['width'=>'100px','height'=>'100px']) !!} <br>
					    {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('image') }}</small>
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