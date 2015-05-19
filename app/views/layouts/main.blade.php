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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-62588599-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>