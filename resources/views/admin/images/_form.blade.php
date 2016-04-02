			<div class="form-group @if($errors->first('name_ar')) has-error @endif">
		        {!! Form::label('name_ar', 'العنوان بالعربى') !!}
		        {!! Form::text('name_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('name_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('name_en')) has-error @endif">
		        {!! Form::label('name_en', 'العنوان بالإنجليزيه') !!}
		        {!! Form::text('name_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('name_en') }}</small>
		    </div>

			@if(@$type == 'edit')
				<label for="">الصور الحاليه</label>
				<div class="form-group">
					<img src="{{Url('/')}}/uploads/images/{{$img->img}}" style="height:100px;">
				</div>
			@endif

		    <div class="form-group @if($errors->first('img')) has-error @endif">
		        {!! Form::label('img', 'الصورة') !!}
		        {!! Form::file('img', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('img') }}</small>
		    </div>

		    <div class="btn-group pull-right">
		        {!! Form::submit($ButtonText, ['class' => 'btn btn-success']) !!}
		    </div>



