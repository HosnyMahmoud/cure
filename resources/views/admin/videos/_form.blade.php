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

<div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
    <label class="col-md-1 control-label" style="text-align:right">النوع</label>
    <div class="col-md-11">
        {!! Form::select('type',['off'=>'اختر','فيديو','رابط الفيديو'],null,['id'=>'type','class'=>'form-control'])!!}
        <small class="text-danger">{{ $errors->first('type') }}</small>
    </div>
</div>

<div id="vid" class="form-group hidden {{ $errors->has('videos') ? ' has-error' : '' }}">
    <label class="col-md-1 control-label" style="text-align:right">الفيديو</label>
    <div  class="col-md-11">
            {!! Form::file('videos','',null,['class'=>'form-control'])!!}
            <small class="text-danger">{{ $errors->first('videos') }}</small>
    </div>
@if(@$type == 'edit')
    @if(@$video->type == 0)
    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label" style="text-align:right">الفيديو الحالى </label>
        <div class="col-md-10">
            <video width="320" height="240" controls>
              <source src="{{Url('/')}}/uploads/videos/{{$video->videos}}" type="video/mp4">
            </video>
        </div>
    </div>
    @endif
@endif
</div>
<div id="link" class="form-group hidden {{ $errors->has('link') ? ' has-error' : '' }}">
    <label class="col-md-1 control-label" style="text-align:right">رابط الفيديو</label>
    <div class="col-md-11">
        {!! Form::text('link',null,['class'=>'form-control'])!!}
        <small class="text-danger">{{ $errors->first('link') }}</small>
    </div>
</div>
@if(@$type == 'edit')
    <label for="">الصور الحاليه</label>
    <div class="form-group">
        <img src="{{Url('/')}}/uploads/videos/img/{{$video->img}}" style="height:100px;">
    </div>
@endif
<div id="img" class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
    <label class="col-md-2 control-label" style="text-align:right">صورة الفيديو</label>
    <div  class="col-md-10">
            {!! Form::file('img','',null,['class'=>'form-control'])!!}
            <small class="text-danger">{{ $errors->first('img') }}</small>
    </div>
</div
<div class="form-group">
	<div class="col-md-6 ">
		<button type="submit" class="btn btn-primary">
			{!! $text !!}
		</button>
	</div>
</div>




<script src="http://code.jquery.com/jquery.js"></script>
</script>
        <script type="text/javascript">
        $(document).ready(function () {
                var type = $('#type');
                if(type.val() == 0){
                        $('#vid').removeClass('hidden');
                        $('#image').addClass('hidden');

                    }else if(type.val() == 1){
                        $('#link').removeClass('hidden');
                        $('#vid').addClass('hidden');
                    }else if(type.val() == 'off'){
                        $('#link').addClass('hidden');
                        $('#vid').addClass('hidden');
                        
                    }
                type.on('change',function(){
                    if(type.val() == 0){
                        
                        $('#vid').removeClass('hidden');
                        $('#link').addClass('hidden');

                    }else if(type.val() == 1){
                        $('#link').removeClass('hidden');
                        $('#vid').addClass('hidden');
                    }else if(type.val() == 'off'){
                        $('#link').addClass('hidden');
                        $('#vid').addClass('hidden');
                        
                    }
                })
});
          
</script>