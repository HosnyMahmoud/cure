<div class="col-lg-12">

<div class="form-group @if($errors->first('firstname')) has-error @endif">
    {!! Form::label('firstname', 'الاسم الأول') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('firstname') }}</small>
</div>
<div class="form-group @if($errors->first('lastname')) has-error @endif">
    {!! Form::label('lastname', 'الأسم الأخير') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('lastname') }}</small>
</div>

<div class="form-group @if($errors->first('password')) has-error @endif">
    {!! Form::label('password', 'كلمه السر') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('password') }}</small>
</div>

<div class="form-group @if($errors->first('phone')) has-error @endif">
    {!! Form::label('phone', 'الهاتف') !!}
    {!! Form::text('phone', null,['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('phone') }}</small>
</div>


<div class="form-group @if($errors->first('email')) has-error @endif">
    {!! Form::label('email', 'البريد الإلكترونى') !!}
    {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
    <small class="text-danger">{{ $errors->first('email') }}</small>
</div>




<div class="btn-group pull-right">
    {!! Form::submit('حفظ', ['class' => 'btn btn-success']) !!}
</div>
</div>