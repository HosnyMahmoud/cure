			<div class="form-group @if($errors->first('title_ar')) has-error @endif">
		        {!! Form::label('title_ar', 'العنوان بالعربى') !!}
		        {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
		        <small class="text-danger">{{ $errors->first('title_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('title_en')) has-error @endif">
		        {!! Form::label('title_en', 'العنوان بالإنجليزيه') !!}
		        {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
		        <small class="text-danger">{{ $errors->first('title_en') }}</small>
		    </div>




		    <div class="form-group @if($errors->first('content_ar')) has-error @endif">
		        {!! Form::label('content_ar', 'المحتوى العربى') !!}
		        {!! Form::textarea('content_ar', null, ['class' => 'form-control ckeditor']) !!}
		        <small class="text-danger">{{ $errors->first('content_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('content_en')) has-error @endif">
		        {!! Form::label('content_en', 'المحتوى بالإنجليزيه') !!}
		        {!! Form::textarea('content_en', null, ['class' => 'form-control ckeditor']) !!}
		        <small class="text-danger">{{ $errors->first('content_en') }}</small>
		    </div>
		    <div class="btn-group pull-right">
		        {!! Form::submit($ButtonText, ['class' => 'btn btn-success']) !!}
		    </div>



