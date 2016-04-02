		    <div class="form-group @if($errors->first('title_ar')) has-error @endif">
		        {!! Form::label('title_ar', 'العنوان بالعربيه') !!}
		        {!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
		        <small class="text-danger">{{ $errors->first('title_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('title_en')) has-error @endif">
		        {!! Form::label('title_en', 'العنوان بالإنجليزيه') !!}
		        {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
		        <small class="text-danger">{{ $errors->first('title_en') }}</small>
		    </div>
		    @if(@$type == 'edit')
		    <div class="form-group ">
				<img src="{{Url('/uploads/blog/'.$article->image)}}" style="width: 300px;height: 200px;margin-bottom: 10px;border: 4px solid #D0D0D0;"/>
		    </div>
		    @endif
		    <div class="form-group @if($errors->first('image')) has-error @endif">
		        {!! Form::label('image', 'صوره المقال') !!}
		        {!! Form::file('image') !!}
		        <small class="text-danger">{{ $errors->first('image') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('content_ar')) has-error @endif">
		        {!! Form::label('content_ar', 'المحتوى بالعربيه') !!}
		        {!! Form::textarea('content_ar', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
		        <small class="text-danger">{{ $errors->first('content_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('content_en')) has-error @endif">
		        {!! Form::label('content_en', 'المحتوى بالإنجليزيه') !!}
		        {!! Form::textarea('content_en', null, ['class' => 'form-control ckeditor']) !!}
		        <small class="text-danger">{{ $errors->first('content_en') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('tags_ar')) has-error @endif">
		        {!! Form::label('tags_ar', 'الكلمات الدلاليه بالعربيه') !!}
		        {!! Form::text('tags_ar', null, ['id'=>'tags_1','placeholder'=>'','class' => 'form-control tags_ar']) !!}
		        <small class="text-danger">{{ $errors->first('tags_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('tags_en')) has-error @endif">
		        {!! Form::label('tags_en', 'الكلمات الدلاليه بالإنجليزيه') !!}
		        {!! Form::text('tags_en', null, ['id'=>'tags_2','style'=>'width:100%','class' => 'form-control tags_en']) !!}
		        <small class="text-danger">{{ $errors->first('tags_en') }}</small>
		    </div>
		    <div class="btn-group pull-right">
		        {!! Form::submit($button, ['class' => 'btn btn-success']) !!}
		    </div>
		