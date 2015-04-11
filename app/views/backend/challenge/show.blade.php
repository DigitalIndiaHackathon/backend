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

		@if($currentUser->id === $challenge->user_id)
		{{Form::open(array('route' => array("backend.challenges.destroy", $challenge->id), 'method' => "DELETE"))}}
		<input type="submit" class="btn btn-default" value="Delete" onclick="return confirm('Delete challenge?');">
		{{Form::close()}}
		@endif
	</div>
</div>
@stop