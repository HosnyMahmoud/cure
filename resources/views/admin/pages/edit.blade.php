@extends('admin.layout')

	@section('title')
	Edit Page
	@endsection

	@section('content')

	{!! Form::model($securities,['action' => ['PagesCtrl@update',$securities->id],'method' => 'PATCH']) !!}
		@include('admin.pages._form',['ButtonText'=>'تعديل صفحه'])
	{!! Form::close() !!}

<script>
			function sub() {	
				$('#sub').toggle('slow');

			}
		</script>
		
	@endsection
@stop