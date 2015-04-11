@extends('layouts.backend')
@section('main')
<div class="main" data-section="true">
	<div class="container-md">
		<h1>Create Challenge</h1>
		{{Form::open(array('route' => "backend.challenges.store"))}}
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control input-lg" placeholder="Title" type="text" name="title" id="title" value="{{{ Input::old('title') }}}">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control input-lg" placeholder="Description" type="text" name="description" id="description" rows="10" value="{{{ Input::old('description') }}}"></textarea>
		</div>
		@if(Session::has('errors'))
		<div class="alert alert-danger alert-block">{{$errors->first()}}</div>
		@endif
		<div class="form-submit">
			<input type="submit" class="btn btn-success btn-block" value="CREATE">
		</div>
		{{Form::close()}}
	</div>
</div>
@stop