@extends('layouts.backend')
@section('main')
<div class="main" data-section="true">
	<div class="container">
		<div class="page-header">
			<h1>Participants</h1>
		</div>
		@if(count($participants))
		@foreach($participants as $participant)
		<div class="media challenge">
			<div class="media-body">
				<h3 class="media-heading">
					{{{$participant->name}}}
				</h3>
				<b class="text-uppercase">{{{$participant->role}}}</b>
				<a href="{{{$participant->link}}}" class="btn-link btn" target="_blank">
					<b>{{{$participant->link}}}</b>
				</a>
			</div>
		</div>
		@endforeach
		@else
		<h2>No participants found.</h2>
		@endif
		{{$participants->links()}}
	</div>
</div>
@stop