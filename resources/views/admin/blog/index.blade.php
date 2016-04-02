 @extends('admin.layout')

	@section('title')
	الاخبار
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/blog/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الاخبار 
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
				@if(count($articles)>0)				
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
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					@foreach($articles as $art)
					<tr>
						<td>
							<strong>{!!$art->id!!}</strong>
						</td>
						<td>
							<a href="{!! Url('/')!!}/admin/blog/{!!$art->id!!}" class="btn btn-default ">{!!$art->title_ar!!}</a>
						</td>
						<td>
							{!! Form::open(['action' => ['BlogCtrl@destroy', $art->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/blog/{!! $art->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button href="{!!Url('/')!!}/admin/blog/{!! $art->id !!}/delete" class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الموضوع : {!! $art->title_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</button>
						{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $articles->render() !!}
				@else
				<h1 class="text-center" style="color:silver">لا يوجد أخبار بعد !</h1>
				@endif
			</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
		
		</script>
	@endsection
@stop