
	    <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
	        {!! Form::label('name_ar', 'الأسم بالعربيه') !!}
	        {!! Form::text('name_ar', null, ['class' => 'form-control']) !!}
	        <small class="text-danger">{{ $errors->first('name_ar') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
	        {!! Form::label('name_en', 'الأسم بالإنجليزيه') !!}
	        {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
	        <small class="text-danger">{{ $errors->first('name_en') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('text_ar') ? ' has-error' : '' }}">
	        {!! Form::label('text_ar', 'النص بالعربيه') !!}
	        {!! Form::textarea('text_ar', null, ['class' => 'form-control']) !!}
	        <small class="text-danger">{{ $errors->first('text_ar') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('text_en') ? ' has-error' : '' }}">
	        {!! Form::label('text_en', 'النص بالإنجليزيه') !!}
	        {!! Form::textarea('text_en', null, ['class' => 'form-control']) !!}
	        <small class="text-danger">{{ $errors->first('text_en') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        {!! Form::submit("حفظ", ['class' => 'btn btn-success']) !!}
	    </div>
	