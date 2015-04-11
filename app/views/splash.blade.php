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
								<h1 class="intro-main animated fadeInUp">Silicon Valley Comes to India.</h1>
								<!-- End: Intro Main -->
								<!-- Intro Tagline -->
								<h2 class="intro-tagline animated fadeInUp">
									We welcome students, faculty members, start-up aspirants, android, iOS, Word Press, HTML5, Facebook, and Chrome, Cloud developers / start-up / founders / Entrepreneurs / Executives.
								</h2>
								<!-- End: Intro Tagline -->
								<!-- Intro Dates -->
								<div class="intro-dates animated fadeInUp">
									APRIL 11TH - 12TH 2015
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
						We are hosting a 36hrs (two days - one night) hack-a-thon for entrepreneurs and domain professionals @ GTU Innovation Council, Ahmedabad. It will take you through the major steps in starting web &amp; mobile platforms, new business ideas, improving an existing idea, team building, wireframing, prototyping and pitching your idea live to investors and other stakeholders.
					</p>
					<p>
						Integrated throughout the day will be examples of disruptive ideas from around Gujarat and Pan India, many of which ‘Silicon Valley comes to India’ hasn't witnessed yet, as well as tips on taking the fear out of making the leap to entrepreneurship.
						Some leading mentors, technology experts/ trainers and advisers will be on hand throughout the day to answer your questions on challenges you’re facing. The areas we will cover: your business model, revenue model, social media and digital marketing strategy, selling to who and how, etc. and there will be plenty of networking with other start-ups.
					</p>
					<p>
						Ten years ago, mobile meant making phone calls on the go. It then became about texting and emailing from anywhere, anytime. Then taking, sending and sharing photos. And now videos and apps...and then there is the form factor to consider. Is it a smartphone? A tablet? A wearable? Are these all considered "mobile"?
						The specific behaviors and devices will keep evolving, but there are three basic, essential principles of mobile marketing that won't:
						<br>
						<p>
							<b>Portable</b>: Your idea must be able to go where the user goes. If it can’t follow the user through his or her day, it's not mobile.
						</p>
						<p>
							<b>Personal</b>: The promise of digital was always and will always be its potential for personapzation. Your idea must cater to the individual needs and desires of every user—and the experience must be unique to her.
						</p>
						<p>
							<b>Perpetual</b>: Your idea has to stand the test of time—24 hours a day, 365 days a year—because mobile is always on. The first thing you reach for in the morning is probably a mobile device. At the office. On your lunch break. Curled up on your couch at home. Even when you're sleeping, your mobile device is with you and on.
						</p>
					</p>
				</div>
				<!-- Container -->
			</div>
			<!-- Sponsors Section -->
			<div class="sponsors-section section" data-section="true" id="sponsors-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Title -->
					<h3 class="section-title">Sponsors</h3>
					<!-- Sponsor List -->
					<div class="sponsor-list row">
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<a href="http://www.gtuinnovationcouncil.ac.in/" target="_blank" class="sponsor">
								<img src="{{asset('assets/images/sponsors/gtu')}}.jpg" class="img-responsive" alt="sponsor">
							</a>
						</div>
					</div>
					<!-- End: Sponsor List -->
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
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<!-- Schedule Day One -->
								<div class="schedule-day-one schedule-table">
									<!-- Schedule Heading -->
									<h4 class="schedule-heading">Day 1 - Saturday, 11th April</h4>
									<!-- Schedule Blocks -->
									<div class="schedule-blocks">
										<div class="schedule">
											<span class="time">09:00 AM</span>
											<span class="title">Registration</span>
										</div>
										<div class="schedule">
											<span class="time">10:00 AM</span>
											<span class="title">Introduction to Web-Mobile Technology</span>
										</div>
										<div class="schedule">
											<span class="time">10:30 AM</span>
											<span class="title">Keynote by Chief Guest</span>
										</div>
										<div class="schedule">
											<span class="time">11:30 AM</span>
											<span class="title">Opening Remark (Mobile Knowledge Bank/Hackathon Challenges)</span>
										</div>
										<div class="schedule">
											<span class="time">01:00 PM</span>
											<span class="title">Lunch Break</span>
										</div>
										<div class="schedule">
											<span class="time">02:30 PM</span>
											<span class="title">Introduction to Mentors/How and where to find your co-founder.</span>
										</div>
										<div class="schedule">
											<span class="time">03:30 PM</span>
											<span class="title">Introduction to API Integration Team</span>
										</div>
										<div class="schedule">
											<span class="time">05:00 PM</span>
											<span class="title">Tea Break</span>
										</div>
										<div class="schedule">
											<span class="time">05:30 PM</span>
											<span class="title">Entrepreneurs Pitch ideas to participants</span>
										</div>
										<div class="schedule">
											<span class="time">07:30 PM</span>
											<span class="title">Idea Showcasing/Hackathon Challenge Team Formation</span>
										</div>
										<div class="schedule">
											<span class="time">08:00 PM</span>
											<span class="title">Dinner</span>
										</div>
										<div class="schedule">
											<span class="time">09:00 PM</span>
											<span class="title">Coding starts</span>
										</div>
									</div>
									<!-- End: Schedule Blocks -->
								</div>
								<!-- End: Schedule Day One -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<!-- Schedule Day Two -->
								<div class="schedule-day-two schedule-table">
									<!-- Schedule Heading -->
									<h4 class="schedule-heading">Day 2 - Sunday, 12th April</h4>
									<!-- Schedule Blocks -->
									<div class="schedule-blocks">
										<div class="schedule">
											<span class="time">09:00 AM</span>
											<span class="title">Workshops by Mentors</span>
										</div>
										<div class="schedule">
											<span class="time">01:00 PM</span>
											<span class="title">Lunch Break</span>
										</div>
										<div class="schedule">
											<span class="time">02:30 PM</span>
											<span class="title">Afternoon Session</span>
										</div>
										<div class="schedule">
											<span class="time">05:00 AM</span>
											<span class="title">Tea Break</span>
										</div>
										<div class="schedule">
											<span class="time">05:30 PM</span>
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
										<img src="{{asset('assets/images/map.png')}}" alt="Map" class="map img-responsive">
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
										126, GTU Student Startup Support System Co-Creation Center (S4-C3), ACPC Building, LDCE Complex, Ahmedabad- 380015
									</div>
									<!-- Map Link -->
									<a href="https://goo.gl/maps/LdN71" target="_blank" class="btn btn-default map-link"><i class="icon icon-map-marker icon-left"></i> View on Google Maps</a>
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
						Have Questions? Feel free to contact us directly at: <a href="mailto:enterpriseindia9@gmail.com"><b>enterpriseindia9@gmail.com</b></a>
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
									<a href="http://facebook.com/mobiletechnologypark" target="_blank" class="social-link facebook">
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
					<h3 class="section-title">Team</h3>
					<!-- Sponsor List -->
					<div class="sponsor-list team-members row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="https://twitter.com/Pravashdey" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/pravash')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="https://twitter.com/kunalvarma05" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/kunal')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/darshit')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="https://www.facebook.com/Nisarg2995" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/nisarg')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/meghal')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/riya')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/heeta')}}.jpg" class="img-responsive" alt="team-member">
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="#" target="_blank" class="team-member">
								<img src="{{asset('assets/images/team/malay')}}.jpg" class="img-responsive" alt="team-member">
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
							<a href="index.htm" class="copyright btn-block btn btn-link">Digital India Hackathon. 2015 - All rights reserved.</a>
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
</body>
</html>