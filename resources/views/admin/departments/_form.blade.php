<div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
		        {!! Form::label('name_ar', 'الإسم بالعربيه') !!}
		        {!! Form::text('name_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('name_ar') }}</small>
		    </div>
			<div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
			    {!! Form::label('name_en', 'الإسم بالإنجليزيه') !!}
			    {!! Form::text('name_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('name_en') }}</small>
			</div>		