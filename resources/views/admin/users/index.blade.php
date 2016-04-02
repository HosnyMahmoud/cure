 @extends('admin.layout')

	@section('title')
	الاعضاء
	@endsection

	@section('content')
	
	<a href="{!! Url('/') !!}/admin/users/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الأعضاء 
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
				@if(count($users)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						 اسم المستخدم
					</th>
					
					<th class="numeric">
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($users as $user)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
					<td>
						 {!! str_limit($user->firstname, $limit = 25, $end = ' ...') !!}
						 {!! str_limit($user->lastname, $limit = 25, $end = ' ...') !!}
					</td>
					
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['UsersCtrl@destroy', $user->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/users/{!! $user->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button href="{!!Url('/')!!}/admin/users/{!! $user->id !!}/delete" class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف المستخدم : {!! $user->username !!} ؟')">
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
				{!! $users->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا يوجد اعضاء بعد</h1>
				@endif
			</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script>
		
		</script>
	@endsection
@stop