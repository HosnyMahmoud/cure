@extends('admin.layout')
	@section('title')
		edit New Slide
	@endsection

	@section('content')
	{!! Form::model($slides,['method'=>'PATCH','action'=>['SliderCtrl@update',$slides->id],'files'=>true])!!}
		<table class="table table-hover table-responsive">
			<tr>
				<td colspan="2">{!! Html::image('uploads/slider/'.$slides->background,'',['width'=>'100%','height'=>'250px']) !!}</td>
			</tr>
			<tr>
				<td>
					تغير الصوره
				</td>
				<td>
					<div class="form-group @if($errors->first('background')) has-error @endif">
					    {!! Form::file('background', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('background') }}</small>
					</div>
				</td>
			</tr>
			<tr>
				<td>العنوان بالعربى</td>
				<td><div class="form-group @if($errors->first('head_ar')) has-error @endif">
				    {!! Form::text('head_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('head_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>العنوان بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('head_en')) has-error @endif">
				    {!! Form::text('head_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('head_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>النص بالعربى</td>
				<td><div class="form-group @if($errors->first('text_ar')) has-error @endif">
				    {!! Form::textarea('text_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('text_ar') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>النص بالإنجليزيه</td>
				<td><div class="form-group @if($errors->first('text_en')) has-error @endif">
				    {!! Form::textarea('text_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('text_en') }}</small>
				</div></td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary">تعديل</button>
				</td>
			</tr>	
		</table>
		{!! Form::close() !!}
	@endsection			
@stop	