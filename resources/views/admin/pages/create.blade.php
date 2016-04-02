@extends('admin.layout')
	@section('title')
	اضافة صفحة
	@endsection
	@section('content')
		{!! Form::open(['method' => 'POST', 'action' => 'PagesCtrl@store', 'class' => 'form-body']) !!}
			
			<?php
			 $securities = (object)['ct_id'=>0] ; 
			?>

		    @include('admin.pages._form',['ButtonText'=>'إضافه صفحه','securities'=>$securities])
		
		{!! Form::close() !!}
		
		<script>
			function sub() {	
				$('#sub').toggle('slow');
			}
		</script>
	@endsection
@stop
