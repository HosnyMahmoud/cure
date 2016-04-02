<?php use Carbon\Carbon;?>
 @extends('admin.layout')

	@section('title')
	الحجز
	@endsection

	@section('content')
	
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-users"></i>الحجوزات 
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
				@if(count($reservations)>0)				
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th>
						 اسم الخدمه
					</th>
					<th class="numeric">
						 التاريخ
					</th>
					
					<th class="numeric">
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($reservations as $reserve)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
					
					<td>
						 {!! str_limit($reserve->patient_name, $limit = 25, $end = ' ...') !!}
					</td>
					<td class="numeric"> 
						{!! Carbon::parse($reserve->reservation_date)->formatLocalized('%A %d-%m-%Y') !!}
					</td>
				
					<td class="numeric">
						<span>
						{!! Form::open(['action' => ['ReservationCtrl@destroy', $reserve->id], 'method' => 'delete']) !!}
						<a href="{!!Url('/')!!}/admin/reservations/{!! $reserve->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<button class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الخدمه : {!! $reserve->name_ar !!} ؟')">
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
				{!! $reservations->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا يوجد خدمات بعد !</h1>
				@endif
			</div>
		</div>
	@endsection
@stop