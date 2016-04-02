			<div class="form-group @if($errors->first('title_ar')) has-error @endif">
		        {!! Form::label('title_ar', 'العنوان بالعربى') !!}
		        {!! Form::text('title_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('title_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('title_en')) has-error @endif">
		        {!! Form::label('title_en', 'العنوان بالإنجليزيه') !!}
		        {!! Form::text('title_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('title_en') }}</small>
		    </div>
			@if(count($pages)>0)
		   	<div id="type" class="form-group @if($errors->first('pagetype')) has-error @endif">
		   	    {!! Form::label('pagetype', 'نوع الصفحه') !!}
		   	    {!! Form::select('pagetype', ['رئيسيه','فرعيه'], $securities->ct_id > 0 ? 1 : 0 , ['id' => 'pagetype', 'class' => 'form-control', 'required' => 'required', 'OnChange'=>'sub()' ]) !!}
		   	    <small class="text-danger">{{ $errors->first('pagetype') }}</small>
		   	</div>
			@endif
		   	<div id="sub"  style="@if($securities->ct_id < 1) display:none; @endif" class="form-group @if($errors->first('pagetype')) has-error @endif">
		   	    {!! Form::label('main', 'الصفحه الرئيسيه') !!}
		   	    {!! Form::select('main',$pages, $securities->ct_id, ['id' => 'pagetype', 'class' => 'form-control',]) !!}
		   	    <small class="text-danger">{{ $errors->first('pagetype') }}</small>
		   	</div>

			{!! Form::hidden('ct_id', '') !!}

		    <div class="form-group @if($errors->first('content_ar')) has-error @endif">
		        {!! Form::label('content_ar', 'المحتوى العربى') !!}
		        {!! Form::textarea('content_ar', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('content_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('content_en')) has-error @endif">
		        {!! Form::label('content_en', 'المحتوى بالإنجليزيه') !!}
		        {!! Form::textarea('content_en', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('content_en') }}</small>
		    </div>
		    <div class="btn-group pull-right">
		        {!! Form::submit($ButtonText, ['class' => 'btn btn-success']) !!}
		    </div>



