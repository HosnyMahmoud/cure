<?php use App\Pages; ?>
@extends('admin.layout')
	@section('title')
	الصفخات
	@endsection

	@section('content')

	<a href="{!! Url('/') !!}/admin/pages/create"  data-container="body" data-placement="right" data-original-title="Create New Page" class="btn btn-icon-only green tooltips">
		<i class="fa fa-plus"></i>
	</a>
	<div class="logo">&ensp;
	</div>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-docs"></i>الصفحات 
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
				@if(count($securities)>0)
				
				
				{!! Form::open(['url'=>url('/').'/admin/pages/sort']) !!}
				<table class="table table-bordered table-striped table-condensed">
				<thead class="flip-content">
				<tr>
					<th>
						 #
					</th>
					<th width="75">
						 ترتيب
					</th>
					<th>
						 اسم الصفحه
					</th>
					<th class="numeric">
						 الصفحات الفرعيه
					</th>
					
					<th class="numeric">
						 خيايرات
					</th>
				</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($securities as $security)
					<?php $i++ ?>
				<tr>
					<td>
						 {!! $i !!}
					</td>
					
						<td width="75">{!! Form::input('number',$security->id,$security->sort,['class'=>'form-control', 'style' => 'width:75px;' ,'min'=>'0','max'=>'999'])!!}</td>
					
					<td>
						<a href="{!! Url('/') !!}/admin/pages/{!! $security->id !!}">
						 {!! str_limit($security->title_ar, $limit = 25, $end = ' ...') !!}
						</a>
					</td>
					
					<td class="numeric">
						<?php $subpages = Pages::where('ct_id', $security->id)->orderby('sort')->get() ?>
						@if(count($subpages)>0)
						<ol>
							@foreach($subpages->take(3) as $sp)
							<li><a href="{!! Url('/') !!}/admin/pages/{!! $sp->id !!}">
							 {!! str_limit($sp->title_ar, $limit = 25, $end = ' ...') !!}
							</a></li>
							@endforeach
							@if(count($subpages)>3)
								<a href="{!! Url('/') !!}/admin/pages/{!! $security->id !!}">
								 المزيد
								</a>
							@endif
						</ol>
						
						@else
						0
						@endif
					</td>
					<td class="numeric">
						<a href="{!!Url('/')!!}/admin/pages/{!! $security->id !!}/edit" class="btn btn-icon-only red">
							<i class="fa fa-edit"></i>
						</a>
						<a href="{!!Url('/')!!}/admin/pages/{!! $security->id !!}/delete" class="btn btn-icon-only purple" onClick="return confirm('متأكد من حذف الصفحه : {!! $security->title_ar !!} ؟')">
							<i class="fa fa-times"></i>
						</a>

					</td>
					
				</tr>
				@endforeach
				</tbody>
				</table>
					{!! Form::submit('رتب',['class'=>'btn btn-success']) !!}
				{!! Form::close() !!}
				{!! $securities->render(); !!}
				@else
				<h1 class="text-center" style="color:silver">لا توجد صفحات بعد</h1>
				@endif
			</div>
		</div>
	@endsection
@stop