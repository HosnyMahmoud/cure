
    <div class="form-group @if($errors->first('title')) has-error @endif">
        {!! Form::label('title', 'العوان') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
	<div class="form-group @if($errors->first('image')) has-error @endif">
	    {!! Form::label('image', 'الصوره') !!}
	    {!! Form::file('image') !!}
	    <p class="help-block">صوره الإعلان</p>
	    <small class="text-danger">{{ $errors->first('image') }}</small>
	</div>
    <div class="form-group @if($errors->first('url')) has-error @endif">
        {!! Form::label('url', 'الرابط') !!}
        {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('url') }}</small>
    </div>
    <div class="btn-group pull-right">
        {!! Form::submit($button, ['class' => 'btn btn-success']) !!}
    </div>
