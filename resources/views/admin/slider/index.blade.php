 @extends('admin.layout')

	@section('title')
	الإسلايدر
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/slider/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الإسلايدر 
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse" data-original-title="" title="">
					</a>
					<a href="{!! Request::url() !!}" class="reload">
					</a>
					<a href="javascript:;" class="remove" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				@if(count($slider)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						 العنوان
					</th>
					<th class="numeric">
						 الصوره
					</th>
					
					<th class="numeric">
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($slider as $slide)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
					
					<td>
						 {!! str_limit($slide->head_ar , $limit = 25, $end = ' ...') !!}
					</td>
					
					<td class="numeric">
						 {!! Html::image('uploads/slider/'.$slide->background,'',['width'=>'100px','height'=>'100px']) !!}
					</td>
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['SliderCtrl@destroy', $slide->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/slider/{!! $slide->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button href="{!!Url('/')!!}/admin/slider/{!! $slide->id !!}/delete" class="btn btn-icon-only purple" onClick="return confirm('Are you sure to delete slide : {!! $slide->name !!} ?')">
							<i class="fa fa-times"></i>
						</button>
						{!! Form::close() !!}
						</span>
					</td>
				</tr>
				@endforeach
				</tbody>
				</table>
				{!! Form::close() !!}
				{!! $slider->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا يوجد سلايدات بعد !</h1>
				@endif
			</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
		
		</script>
	@endsection
@stop