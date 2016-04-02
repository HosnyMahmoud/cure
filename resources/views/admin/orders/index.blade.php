<?php use App\Services; ?>
@extends('admin.layout')
	@section('content')
		<section class="contact">
			<table class="table table-responsive">
				<thead>
					<th>#</th>
					<th>{{Lang::get('orders.request_title')}}</th>
					<th>{{Lang::get('orders.service_name')}}</th>
					<th>{{Lang::get('orders.country')}}</th>
					<th>{{Lang::get('orders.status')}}</th>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td>{!! $order->id !!}</td>
						<td>{!! $order->title !!}</td>
						<?php $services = Services::find($order->service); ?>
						<td>{!! $services['name_'.Session::get('local')] !!}</td>
						<td>{!! $order->country !!}</td>
						<td>
							{!!Form::select('status',[
								0=>'بالإنتظار',
								1=>'تمت الموافقه',
								2=>'جارى الشحن',
								3=>'تم التوصيل',
							],null,['class'=>'form-control','onChange'=>'update('.$order->id.',$(this).val())']) !!}
							
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!!$orders->render()!!}
		</section>
		<script type="text/javascript">
			function update(order,val) {
				$.get("{!!Url('admin/orders/stat/"+ order +"/"+ val +"')!!}", function( data ) {
				  alert( "تم التعديل بنجاح" );
				});
			}
		</script>
	@endsection
@stop