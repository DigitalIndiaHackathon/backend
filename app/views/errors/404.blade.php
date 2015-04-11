@extends('layouts.main')
@section('main')
<div class="main" data-section="true">
	<div class="container text-center">
		<a href="{{url('/')}}" class="block"><img src="{{asset('/assets/images/logo.png')}}" alt="Logo"></a>
		<div class="error-page-box">
			<h1>404</h1>
			<div class="alert">
				<a href="{{url('/')}}" class="btn btn-primary btn-lg">Home</a>
			</div>
		</div>
	</div>
</div>
@stop