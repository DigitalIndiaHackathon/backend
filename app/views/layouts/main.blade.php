<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.meta')
</head>
<body>
	<!-- Site -->
	<div class="site">
		{{--Main--}}
		@yield('main')
		{{--End: Main--}}

		{{--Footer--}}
		@include('partials.footer')
		{{--End: Footer--}}
	</div>
	<!-- End: Site -->
	<div class="overlay"></div>
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{asset('assets/javascripts/master.js')}}"></script>
</body>
</html>