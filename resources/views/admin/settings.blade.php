@extends('admin.layout')
	@section('title')
		اعدادات الموقع
	@endsection
	@section('content')
		<div class="col-lg-10">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>خطأ!</strong> يوجد بعض المشاكل عند الادخال.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
				

		{!! Form::model($settings,['method' => 'PATCH', 'action' => ['SettingsCtrl@update',$settings->id], 'class' => 'form-horizontal','files'=>true]) !!}
		
		    <div class="form-group @if($errors->first('siteName_ar')) has-error @endif">
		        {!! Form::label('siteName_ar', 'اسم الموقع بالعربيه') !!}
		        {!! Form::text('siteName_ar', null, ['class' => 'form-control' ]) !!}
		        <small class="text-danger">{{ $errors->first('siteName_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('siteName_en')) has-error @endif">
		        {!! Form::label('siteName_en', 'اسم الموقع بالإنجليزيه') !!}
		        {!! Form::text('siteName_en', null, ['class' => 'form-control' ]) !!}
		        <small class="text-danger">{{ $errors->first('siteName_en') }}</small>
		    </div>

		    <div class="form-group @if($errors->first('siteDisc_ar')) has-error @endif">
		        {!! Form::label('siteDisc_ar', 'وصف الموقع بالعربيه') !!}
		        {!! Form::textarea('siteDisc_ar', null, ['class' => 'form-control' ]) !!}
		        <small class="text-danger">{{ $errors->first('siteDisc_ar') }}</small>
		    </div>

		    <div class="form-group @if($errors->first('siteDisc_en')) has-error @endif">
			    {!! Form::label('siteDisc_en', 'وصف الموقع بالإنجليزيه') !!}
			    {!! Form::textarea('siteDisc_en', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('siteDisc_en') }}</small>
			</div>

			<div class="form-group @if($errors->first('tags_ar')) has-error @endif">
		        {!! Form::label('tags_ar', 'الكلمات الدلاليه بالعربيه') !!}
		        {!! Form::text('tags_ar', null, ['id'=>'tags_1','class' => 'form-control tags_ar']) !!}
		        <small class="text-danger">{{ $errors->first('tags_ar') }}</small>
		    </div>
		    <div class="form-group @if($errors->first('tags_en')) has-error @endif">
		        {!! Form::label('tags_en', 'الكلمات الدلاليه بالإنجليزيه') !!}
		        {!! Form::text('tags_en', null, ['id'=>'tags_2','class' => 'form-control tags_en']) !!}
		        <small class="text-danger">{{ $errors->first('tags_en') }}</small>
		    </div>

			<div class="form-group">
		        <img src="{{Url('/uploads/logo.png')}}" style="width: 220px;height: 140px;border: 4px solid #CACACA;"  />
		    </div>
			<div class="form-group @if($errors->first('logo')) has-error @endif">
			    {!! Form::label('logo', 'اللوجو') !!}
			    {!! Form::file('logo', null , ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('logo') }}</small>
			</div>
			<div class="form-group @if($errors->first('phone')) has-error @endif">
			    {!! Form::label('phone', 'التليفون') !!}
			    {!! Form::text('phone', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('phone') }}</small>
			</div>

			<div class="form-group @if($errors->first('mobile')) has-error @endif">
			    {!! Form::label('mobile', 'موبايل') !!}
			    {!! Form::text('mobile', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('mobile') }}</small>
			</div>
			<div class="form-group @if($errors->first('fax')) has-error @endif">
			    {!! Form::label('fax', 'الفاكس') !!}
			    {!! Form::text('fax', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('fax') }}</small>
			</div>

			<div class="form-group @if($errors->first('email')) has-error @endif">
			    {!! Form::label('email', 'البريد الإلكترونى') !!}
			    {!! Form::email('email', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('email') }}</small>
			</div>


			<div class="form-group @if($errors->first('address_ar')) has-error @endif">
			    {!! Form::label('address_ar', 'العنوان بالعربيه') !!}
			    {!! Form::text('address_ar', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('address_ar') }}</small>
			</div>
			<div class="form-group @if($errors->first('address_en')) has-error @endif">
			    {!! Form::label('address_en', 'العنوان بالإنجليزيه') !!}
			    {!! Form::text('address_en', null, ['class' => 'form-control' ,'rows'=>'4']) !!}
			    <small class="text-danger">{{ $errors->first('address_en') }}</small>
			</div>
			
			<div class="form-group @if($errors->first('facebook')) has-error @endif">
			    {!! Form::label('facebook_page', 'فيس بوك') !!}
			    {!! Form::text('facebook', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('facebook') }}</small>
			</div>

			<div class="form-group @if($errors->first('twitter')) has-error @endif">
			    {!! Form::label('twitter', 'تويتر') !!}
			    {!! Form::text('twitter', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('twitter') }}</small>
			</div>

			<div class="form-group @if($errors->first('skype')) has-error @endif">
			    {!! Form::label('skype', 'سكايب') !!}
			    {!! Form::text('skype', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('skype') }}</small>
			</div>

			<div class="form-group @if($errors->first('google_plus')) has-error @endif">
			    {!! Form::label('google_plus', 'جوجل بلس') !!}
			    {!! Form::text('google_plus', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('google_plus') }}</small>
			</div>

			<div class="form-group @if($errors->first('youtube')) has-error @endif">
			    {!! Form::label('youtube', 'يوتيوب') !!}
			    {!! Form::text('youtube', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('youtube') }}</small>
			</div>
			<div class="form-group @if($errors->first('linkedin')) has-error @endif">
			    {!! Form::label('linkedin', 'لينكد إن') !!}
			    {!! Form::text('linkedin', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('linkedin') }}</small>
			</div>
			<div class="form-group @if($errors->first('instagram')) has-error @endif">
			    {!! Form::label('instagram', 'انستجرام') !!}
			    {!! Form::text('instagram', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('instagram') }}</small>
			</div>
				
			<div class="form-group @if($errors->first('pinterest')) has-error @endif">
			    {!! Form::label('pinterest', 'بينترست') !!}
			    {!! Form::text('pinterest', null, ['class' => 'form-control' ]) !!}
			    <small class="text-danger">{{ $errors->first('pinterest') }}</small>
			</div>

		    <div class="btn-group pull-right">
		        {!! Form::submit("تعديل", ['class' => 'btn btn-success']) !!}
		    </div>
		
		{!! Form::close() !!}
	</div>
	@endsection
@stop