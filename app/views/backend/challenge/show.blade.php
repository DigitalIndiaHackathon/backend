@extends('layouts.backend')
@section('main')
<div class="main" data-section="true">
	<div class="container-md">
		<h1 class="text-uppercase">{{{$challenge->title}}}</h1>
		<p>
		{{{$challenge->description}}}
		</p>
	</div>
</div>
@stop