<?php use App\Images; ?>
 @extends('admin.layout')

	@section('title')
	Slides
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/projects/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الأعمال 
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
				@if(count($projects)>0)				
				<table class="table">
				<thead>
				<tr>
					<th>
						 #
					</th>
					<th>
						 العنوان
					</th>
					<th>
						 الصوره الرئيسيه
					</th>
					<th>
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					@foreach($projects as $project)
					<tr>
						<td>
							<strong>{!!$project->id!!}</strong>
						</td>
						<td>
						{!!$project->title_ar!!}
						</td>
						<td>
							<?php $images= Images::findOrFail($project->main_image); ?>
							{!! Html::image('uploads/projects/'.$images->name,null,['width'=>'100px','height'=>'100px'])!!}
						</td>
						<td>
						{!! Form::open(['action' => ['ProjectsCtrl@destroy', $project->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/projects/{!! $project->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button href="{!!Url('/')!!}/admin/projects/{!! $project->id !!}/delete" class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف المشروع : {!! $project->title_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</button>
						{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $projects->render() !!}
				@else
				<h1 class="text-center" style="color:silver">لا توجد اعمال بعد !</h1>
				@endif
			</div>
		</div>
	@endsection
@stop