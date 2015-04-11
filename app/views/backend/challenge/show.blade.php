@extends('layouts.backend')
@section('main')
<div class="main" data-section="true">
	<div class="container-md">
		<h1 class="text-uppercase">{{{$challenge->title}}}</h1>
		<p>
			{{{$challenge->description}}}
		</p>

		<h3>Team</h3>
		<p>
			<b class="text-uppercase">{{$challenge->team}}</b>
		</p>
	</div>
</div>
@stop