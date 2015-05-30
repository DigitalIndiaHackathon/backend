<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Digital India Hackathon 2015</title>
	<meta name="description" content="Silicon valley comes to India.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('assets/stylesheets/master.css')}}">
</head>
<body>
	<!-- Site -->
	<div class="site">
		<!-- Main -->
		<div class="main">
			<!-- Main Section -->
			<div class="main-section section" data-section="true" id="main-section">
				<!-- Hero -->
				<div class="hero">
					<!-- Header -->
					<div class="header">
						<!-- Container -->
						<div class="container">
							<!-- Row -->
							<div class="clearfix">
								<div class="brand-logo clearfix">
									<a href="index.htm" class="animated zoomIn logo"><img src="{{asset('assets/images/logo.png')}}" class="img-responsive" alt="Digital India"></a>
								</div>
								<!--Nav-Toggle-->
								<a class="btn btn-default pull-right nav-toggle hidden-lg hidden-md"><i class="icon icon-reorder"></i></a>
								<!--End: Nav-Toggle-->
								<!-- Header Nav -->
								<div class="header-nav pull-right animated slideInRight visible-lg visible-md">
									<!-- Nav Main -->
									<ul class="nav nav-main">
										<li>
											<a href="#main-section">Home</a>
										</li>
										<li>
											<a href="#about-section">About</a>
										</li>
										<li>
											<a href="#sponsors-section">Sponsors</a>
										</li>
										<li>
											<a href="#schedule-section">Schedule</a>
										</li>
										@if(Auth::check())
										<li>
											<a href="{{route('backend.challenges.index')}}">Challenges</a>
										</li>
										@else
										<li>
											<a href="{{route('auth.login')}}">Log in</a>
										</li>
										@endif
										<li>
											<a href="#contact-section">Contact</a>
										</li>
									</ul>
									<!-- End: Nav Main -->
								</div>
								<!-- End: Header Nav -->
							</div>
							<!-- End: Row -->
						</div>
						<!-- End: Container -->
					</div>
					<!-- End: Header -->
					<!-- Intro -->
					<div class="intro">
						<!-- Container -->
						<div class="container">
							<!-- Intro Box -->
							<div class="intro-box">
								<!-- Intro Main -->
								<h1 class="intro-main animated fadeInUp">Build. Learn. Connect.</h1>
								<!-- End: Intro Main -->
								<!-- Intro Tagline -->
								<h2 class="intro-tagline animated fadeInUp">
									We welcome students, faculty members, start-up aspirants, android, iOS, Word Press, HTML5, Facebook, and Chrome, Cloud developers / start-up / founders / Entrepreneurs / Executives.
								</h2>
								<!-- End: Intro Tagline -->
								<!-- Intro Dates -->
								<div class="intro-dates animated fadeInUp">
									JUNE 12TH - 14TH 2015
								</div>
								<!-- End: Intro Dates -->
								<!-- Intro CTA -->
								<div class="intro-cta animated fadeInUp">
									@if(Auth::check())
									<a href="{{route('backend.challenges.index')}}" class="btn btn-success btn-lg animated tada">Challenges</a>
									@else
									<a href="{{route('auth.signup')}}" class="btn btn-success btn-lg animated tada">Register Now</a>
									@endif
								</div>
								<!-- End: Intro CTA -->
								<!-- Intro Extra -->
								<div class="intro-extra animated fadeInUp">
									<a href="#sponsors-section" class="btn">Interested in Sponsoring?</a>
								</div>
								<!-- End: Intro Extra -->
							</div>
							<!-- End: Intro Box -->
						</div>
						<!-- End: Container -->
					</div>
					<!-- End: Intro -->
				</div>
				<!-- End: Hero -->
			</div>
			<!-- End: Main Section -->
			<!-- About Section -->
			<div class="about-section section" data-section="true" id="about-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Title -->
					<h3 class="section-title">About</h3>
					<p>
						Digital India Hack-a-thon is about coding together to solve real world problems. Students, Developers,
						Entrepreneurs, Designers and Idea generators will come together to build amazing applications, in an
						effort to create world a better place. Participants will spend 48 hours building a solution to a problem
						they really want to solve.
					</p>
					<p>
						Integrated throughout the day will be examples of disruptive ideas from around Gujarat and Pan India,
						many of which ‘Silicon Valley comes to India’ hasn't witnessed yet, as well as tips on taking the fear
						out of making the leap to entrepreneurship. Some leading mentors, technology experts/ trainers and 
						advisers will be on hand throughout the span of the event to answer your questions on challenges
						you’re facing. The areas we will cover: your business model, revenue model, social media and digital
						marketing strategy, selling to who and how, etc and there will be plenty of networking with other
						start-ups.
					</p>
					<p>
						Pre-hackathon workshop will provide relevant support to develop business ideas and skills.
						On the 1st day, the participants will receive guidance on the concept of the Ideation Model, MVP
						(minimum viable product) and Technical Guidance. The Hack-a-thon will be conducted on day 2 and 3.
					</p>
					<!-- Section Title -->
					<h3 class="section-title">Our Goal</h3>
					<p>
						Our goal is to get developers, designers and entrepreneurs come together, form connections and
						apply their skills to create something of value. By creating a makerspace, creators are engaged and
						are able to collaborate to create a solution, on which they would go on to build a company. The
						hackathon will be in an intellectually stimulating environment that will spur innovation and
						collaboration.
					</p>
				</div>
				<!-- Container -->
			</div>
			<!-- Sponsors Section -->
			<div class="sponsors-section section" data-section="true" id="sponsors-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Title -->
					<h3 class="section-title">Supported by</h3>
					<!-- Sponsor List -->
					<div class="sponsor-list row">
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
							<a href="http://theinfocity.net/" target="_blank" class="sponsor">
								<img src="{{asset('assets/images/sponsors/infocity.png')}}" class="img-responsive" alt="sponsor">
							</a>
							<b>VENUE PARTNER</b>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 text-center">
							<a href="http://interestship.com" target="_blank" class="sponsor">
								<img src="{{asset('assets/images/sponsors/interestship.png')}}" class="img-responsive" alt="sponsor">
							</a>
							<b>OPPORTUNITY PARTNER</b>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 text-center">
							<a href="http://www.ldcealumni.net/" target="_blank" class="sponsor">
								<img src="{{asset('assets/images/sponsors/ld.jpg')}}" class="img-responsive" alt="sponsor">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
							<a href="http://gdgahmedabad.com" target="_blank" class="sponsor">
								<img src="{{asset('assets/images/sponsors/gdg.png')}}" class="img-responsive" alt="sponsor">
							</a>
						</div>
					</div>
					<!-- End: Sponsor List -->
					<!-- Section Title -->
					<h3 class="section-title">Interested in Sponsoring?</h3>
					<p>
						Technology entreprenurship has taken a whole new meaning in the last 5 years amongst the Indian youth community. Hackathons and incubators provide these entrepreneurs the much needed support to come together and build an application or a company around it.
					</p>
					<!-- Section CTA -->
					<div class="section-cta">
						<p>Download the sponsorship proposal.</p>
						<a href="https://db.tt/Bu1PakyQ" target="_blank" class="btn btn-success btn-lg">Download</a>
					</div>
					<!-- End: Section CTA -->
				</div>
				<!-- End: Container -->
			</div>
			<!-- End: Sponsors Section -->
			<!-- Schedule Section -->
			<div class="schedule-section section" data-section="true" id="schedule-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Title -->
					<h3 class="section-title">Schedule</h3>
					<!-- Schedule Tables -->
					<div class="schedule-tables">
						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<!-- Schedule Day One -->
								<div class="schedule-day-one schedule-table">
									<!-- Schedule Heading -->
									<h4 class="schedule-heading">Day 1 - Friday, 12th June</h4>
									<!-- Schedule Blocks -->
									<div class="schedule-blocks">
										<div class="schedule">
											<span class="time">09:00 AM</span>
											<span class="title">Registration</span>
										</div>
										<div class="schedule">
											<span class="time">10:00 AM</span>
											<span class="title">Keynote</span>
										</div>
										<div class="schedule">
											<span class="time">10:30 AM</span>
											<span class="title">Why Are Hack-a-thons Important?</span>
										</div>
										<div class="schedule">
											<span class="time">11:00 AM</span>
											<span class="title">Pitching Session</span>
										</div>
										<div class="schedule">
											<span class="time">12:00 AM</span>
											<span class="title">Team Formation</span>
										</div>
										<div class="schedule">
											<span class="time">01:00 PM</span>
											<span class="title">Lunch Break</span>
										</div>
										<div class="schedule">
											<span class="time">02:00 PM</span>
											<span class="title">Ideation Model</span>
										</div>
										<div class="schedule">
											<span class="time">04:00 PM</span>
											<span class="title">High Tea and Networking</span>
										</div>
									</div>
									<!-- End: Schedule Blocks -->
								</div>
								<!-- End: Schedule Day One -->
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<!-- Schedule Day One -->
								<div class="schedule-day-one schedule-table">
									<!-- Schedule Heading -->
									<h4 class="schedule-heading">Day 2 - Saturday, 13th June</h4>
									<!-- Schedule Blocks -->
									<div class="schedule-blocks">
										<div class="schedule">
											<span class="time">09:00 AM</span>
											<span class="title">Breakfast</span>
										</div>
										<div class="schedule">
											<span class="time">10:00 AM</span>
											<span class="title">Technical Workshop</span>
										</div>
										<div class="schedule">
											<span class="time">01:00 PM</span>
											<span class="title">Lunch Break</span>
										</div>
										<div class="schedule">
											<span class="time">02:00 PM</span>
											<span class="title">Coding Begins</span>
										</div>
										<div class="schedule">
											<span class="time">05:00 PM</span>
											<span class="title">Tea Break</span>
										</div>
										<div class="schedule">
											<span class="time">05:30 PM</span>
											<span class="title">Coding Continues</span>
										</div>
										<div class="schedule">
											<span class="time">08:30 PM</span>
											<span class="title">Dinner</span>
										</div>
										<div class="schedule">
											<span class="time">09:30 PM</span>
											<span class="title">Coding Continues</span>
										</div>
									</div>
									<!-- End: Schedule Blocks -->
								</div>
								<!-- End: Schedule Day One -->
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<!-- Schedule Day Two -->
								<div class="schedule-day-two schedule-table">
									<!-- Schedule Heading -->
									<h4 class="schedule-heading">Day 3 - Sunday, 14th June</h4>
									<!-- Schedule Blocks -->
									<div class="schedule-blocks">
										<div class="schedule">
											<span class="time">09:00 AM</span>
											<span class="title">Breakfast</span>
										</div>
										<div class="schedule">
											<span class="time">10:00 AM</span>
											<span class="title">Team Updates</span>
										</div>
										<div class="schedule">
											<span class="time">11:00 AM</span>
											<span class="title">Coding Continues</span>
										</div>
										<div class="schedule">
											<span class="time">01:00 PM</span>
											<span class="title">Lunch Break</span>
										</div>
										<div class="schedule">
											<span class="time">02:00 PM</span>
											<span class="title">Coding Continues</span>
										</div>
										<div class="schedule">
											<span class="time">05:00 PM</span>
											<span class="title">Tea Break</span>
										</div>
										<div class="schedule">
											<span class="time">06:00 PM</span>
											<span class="title">Pitching and Demo</span>
										</div>
									</div>
									<!-- End: Schedule Blocks -->
								</div>
								<!-- End: Schedule Day Two -->
							</div>
						</div>
						<!-- Row -->
					</div>
					<!-- End: Schedule Tables -->
					<!-- Venue Details -->
					<div class="venue-details">
						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<!-- Venue Map -->
								<div class="venue-map">
									<a href="#">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7334.836248626877!2d72.63033890000001!3d23.191428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1430394290764" frameborder="0"></iframe>
									</a>
								</div>
								<!-- End: Venue Map -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<!-- Venue Address -->
								<div class="venue-address">
									<!-- Title -->
									<h3 class="title">Venue</h3>
									<!-- Address -->
									<div class="address">
										Info City, Gandhinagar
									</div>
									<!-- Map Link -->
									<a href="https://www.google.co.in/maps/place/Infocity,+Gandhinagar,+Gujarat" target="_blank" class="btn btn-default map-link"><i class="icon icon-map-marker icon-left"></i> View on Google Maps</a>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
					<!-- End: Venue Details -->
				</div>
				<!-- End: Container -->
			</div>
			<!-- End: Schedule Section -->
			<!-- Contact Section -->
			<div class="contact-section section" data-section="true" id="contact-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Title -->
					<h3 class="section-title">Contact</h3>
					<p class="section-notice">
						Have Questions? Feel free to contact us directly at: <a href="mailto:info@digitalindiahack.org"><b>info@digitalindiahack.org</b></a>
					</p>
					<!-- Contact Area -->
					<div class="contact-area">
						<!-- Social Links -->
						<div class="social-links">
							<!-- Title -->
							<div class="title">Stay Updated</div>
							<!-- Row -->
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="http://facebook.com/digitalindiahack" target="_blank" class="social-link facebook">
										<i class="icon icon-facebook-square"></i>
										Like us on Facebook
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="http://twitter.com/DigitalIndHack" target="_blank" class="social-link twitter">
										<i class="icon icon-twitter"></i>
										Follow us on Twitter
									</a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<a href="http://github.com/DigitalIndiaHackathon" target="_blank" class="social-link github">
										<i class="icon icon-github"></i>
										Follow us on GitHub
									</a>
								</div>
							</div>
						</div>
						<!-- End: Row -->
						<!-- End: Social Links -->
					</div>
					<!-- End: Contact Area -->
					<!-- Section Title -->
					<h3 class="section-title">Partners-in-crime: The Team</h3>
					<!-- Sponsor List -->
					<div class="sponsor-list team-members row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/gunjan.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/jay.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/komal.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/kunal.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/pratima.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/pravash.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/mugshots/riya.png')}}" class="img-responsive" alt="team-member">
							</a>
						</div>
					</div>
					<!-- End: Sponsor List -->
				</div>
				<!-- End: Container -->
			</div>
			<!-- End: Contact Section -->
			<!-- Footer -->
			<div class="footer">
				<!-- Container -->
				<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-right">
							<a href="http://kunalvarma.in" class="btn btn-block btn-link">Designed by Kunal Varma.</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="index.htm" class="copyright btn-block btn btn-link">2015 - All rights reserved.</a>
						</div>
					</div>
					<!-- End: Row -->
				</div>
				<!-- End: Container -->
			</div>
			<!-- End: Footer -->
		</div>
		<!-- End: Main -->
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