
						<div class="form-group">
							<label class="col-md-1 control-label">الإسم بالعربيه</label>
							<div class="col-md-11">
								{!! Form::text('name_ar',null,['class'=>'form-control'])!!}
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">الإسم باإنجليزيه</label>
							<div class="col-md-11">
								{!! Form::text('name_en',null,['class'=>'form-control'])!!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-1 control-label">المحتوى بالعربيه</label>
							<div class="col-md-11">
								{!! Form::textarea('content_ar',null,['class'=>'form-control'])!!}
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-1 control-label">المحتوى بالإنجليزيه</label>
							<div class="col-md-11">
								{!! Form::textarea('content_en',null,['class'=>'form-control'])!!}
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-1">
								<button type="submit" class="btn btn-primary">
									{!! $text !!}
								</button>
							</div>
						</div>
					</form>