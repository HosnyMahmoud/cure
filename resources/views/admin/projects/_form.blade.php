 <?php use App\Images; ?>

<div class="form-group @if($errors->first('title_ar')) has-error @endif">
			        {!! Form::label('title_ar', 'العنوان بالعربيه') !!}
			        {!! Form::text('title_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('title_ar') }}</small>
			    </div>

			    <div class="form-group @if($errors->first('title_en')) has-error @endif">
			        {!! Form::label('title_en', 'العنوان بالعربيه') !!}
			        {!! Form::text('title_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('title_en') }}</small>
			    </div>

			    <div class="form-group @if($errors->first('desc_ar')) has-error @endif">
			        {!! Form::label('desc_ar', 'الوصف بالعربيه') !!}
			        {!! Form::textarea('desc_ar', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('desc_ar') }}</small>
			    </div>

				<div class="form-group @if($errors->first('desc_en')) has-error @endif">
			        {!! Form::label('desc_en', 'الوصف بالإنجليزيه') !!}
			        {!! Form::textarea('desc_en', null, ['class' => 'form-control', 'required' => 'required']) !!}
			        <small class="text-danger">{{ $errors->first('desc_en') }}</small>
			    </div>
				
				<div class="form-group @if($errors->first('main_image')) has-error @endif">
			        {!! Form::label('صور المشروع (يمكنك اختيار اكثر من صوره)') !!}
			        <br>
			        	@if($has_images !== '')
							<?php $images = Images::where('project_id',$project->id)->get(); ?>
							@foreach($images as $image)
								{!! Html::image('uploads/projects/'.$image->name,null,['width'=>'100px','height'=>'100px'])!!}

							@endforeach
			        {!! Form::file('images[]', ['multiple'=>'multiple']) !!}
			        	@else
			        {!! Form::file('images[]', ['multiple'=>'multiple','required' => 'required']) !!}
			        	@endif
			        <small class="text-danger">{{ $errors->first('main_image') }}</small>
			    </div>
				
			    {!! Form::submit('إضافه',['class'=>'btn btn-success']) !!}
