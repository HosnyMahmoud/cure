@extends('admin.layout')
	@section('content')
		<div class="portlet-body">
			<div class="table-responsive">
				<a href="{!! Url('/') !!}/admin/ads/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
						 الصوره
					</th>
					<th>
						 خيارات
					</th>
				</tr>
				</thead>
				<tbody>
					@foreach($ads as $ad)
					<tr>
						<td>
							<strong>{!!$ad->id!!}</strong>
						</td>
						
						<td>
							<a href="{!! Url('/')!!}/admin/ads/{!!$ad->id!!}" class="btn btn-default ">{!!$ad->title!!}</a>
						</td>
						<td>
							{!! Html::image(Url('/uploads/ads/').'/'.$ad->image,null,['width'=>"100",'height'=>'100']) !!}
						</td>
						<td>
							<a href="{!! Url('/')!!}/admin/ads/{!!$ad->id!!}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
							<a href="{!! Url('/')!!}/admin/ads/{!!$ad->id!!}/delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Paragraph ?');"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $ads->render() !!}
			</div>
		</div>
	@endsection
@stop