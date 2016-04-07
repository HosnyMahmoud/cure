 @extends('admin.layout')

	@section('title')
	الشركاء
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/clinic/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i> الشركاء
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
				@if(count($clinics)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						الاسم
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
					@foreach($clinics as $clinic)
				<tr>

					<td>
						 {!! $clinic->id !!}
					</td>
					<td>
						 {!! $clinic->title_ar !!}
					</td>
					
					<td class="numeric">
						 {!! Html::image('uploads/clinic/'.$clinic->img,'',['width'=>'100px','height'=>'100px']) !!}
					</td>
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['ClinicCtrl@destroy', $clinic->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/clinic/{!! $clinic->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الشريك : {!! $clinic->title_ar !!} ؟')">
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
				@else
				<h1 class="text-center" style="color:silver">لا يوجد شركاء !</h1>
				@endif
			</div>
		</div>
	@endsection
@stop