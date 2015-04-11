@extends('layouts.backend')
@section('main')
<div class="main" data-section="true">
	<div class="container">
		<div class="page-header clearfix">
			<a href="{{route('backend.challenges.create')}}" class="btn btn-success pull-right challenge-button">Create</a>
			<h1>Challenges</h1>
		</div>
		@if(count($challenges))
		@foreach($challenges as $challenge)
		<div class="media challenge">
			<div class="media-body">
				<h3 class="media-heading">
					<a href="{{route('backend.challenges.show', array($challenge->id))}}">{{{$challenge->title}}}</a>
				</h3>
				{{{$challenge->description}}}
			</div>
		</div>
		@endforeach
		@else
		<h2>No challenges found!</h2>
		@endif
	</div>
</div>
@stop