

<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Learn Spanish Guayaquil Ecuador | Learn Spanish Online</title>
<meta charset="utf-8">
<link rel="icon" href="images/aula.ico" type="image/png" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/styles/responsive.css">

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138230129-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-138230129-1');
	</script>
	<!-- GOOGLE SEARCH CONSOLE-->
	<meta name="google-site-verification" content="djoo-TZQyYgl912H6sLEglcQf4MIgc04GiLLiO_rZSw" />
	<!-- GOOGLE ADS - Global site tag (gtag.js) - Google Ads: 868410845 --> 
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-868410845"></script> 
	<script> window.dataLayer = window.dataLayer || []; 
	function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); 
	gtag('config', 'AW-868410845'); 
	</script>

	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '406808274772562');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=406808274772562&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<!-- <div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>info.deercreative@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#">Register or Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div> -->

<!-- Header Content -->
<div class="header_container">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo_container">
						<!-- <a href="#">
							<div class="logo_text">Unic<span>at</span></div>
						</a> -->
						<a class="navbar-brand logo_h" href="{{route('index')}}">
					<img src="images/logo_aula.png" style="width: 77px;" id="logo" alt="logo-aula"/></a>
					</div>
					<nav class="main_nav_contaner ml-auto">
		
						<ul class="main_nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#courses">Courses</a></li>
							<li><a href="#upcoming">Upcoming</a></li>
							<li><a href="https://aula-ec.com/blog/">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="https://aula-ec-online.com/learn-spanish-online">Online</a></li>
						</ul>
						<!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

						<!-- Hamburger -->

						<!-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> -->
						<div class="hamburger menu_mm">
							<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<!-- <li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="about">About</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<li class="menu_mm"><a href="#">Blog</a></li>
				<li class="menu_mm"><a href="#">Page</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li> -->

				<li class="active"><a href="#">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#courses">Courses</a></li>
									<li><a href="#upcoming">Upcoming</a></li>
									<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Learn Spanish in Guayaquil Ecuador</div>
									<div class="home_slider_subtitle">With Quelified native teachers</div>
									<!-- <div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<!-- Home Slider Item -->
				<!-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title" id="about">Welcome To Latinamerica</h2>
						<div class="card-body">
                  <p class="card-text">Meet Spanish speakers from all over the world, join the second largest community of speakers around the world and connect with more people, expand your links and generate new opportunities wherever you go. Because of this and the quality of our teachers, learning Spanish in Aula-Español is an experience that you should not miss. Our courses are aimed to foreigners of all ages and countries around the world who are visiting the city.</p>
                <span id="dots">...</span><span id="more">Guayaquil is the second most populated city in Ecuador. Also known as the '' Perla del Pacifico '' is a city that holds a great history and tradition. In addition to this, it occupies a central place in the national economy, much of this economic advance is due to the location of it. We invite you to enjoy all the activities that this city offers, such as learning Spanish.
                  Our Spanish courses have a practical method where you can improve your oral expression and learn in a fun and entertaining way. There are several good options to learn Spanish in Guayaquil, however, we emphasize in the importance of personalization in the learning process of each student, with excellent results. All this with the confidence of more than 10 years of experience working in collaboration with the Ecuadorian-German Cultural Center of Guayaquil. Just write us and leave us your contact in our social networks or web page. Thank you for coming this far! Contact us!
                  </span></p>
                  <button onclick="myFunction()" id="myBtn">Read more</button>
              </div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
						<div class="icono">
						   <div class="feature_icon"><img src="images/icon-calendario.png" alt=""></div>
						</div>						
						<h3 class="feature_title">Schedule your classes</h3>
						<div class="feature_text"><p>Students can choose their own schedule and the starting date of the lessons according to their own availability, from Mondays to Fridays, starting at 09:30am to 17:30pm</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
					<div class="icono">
						<div class="feature_icon"><img src="images/icon-website.png" alt=""></div>
					</div>
						<h3 class="feature_title">Campus online</h3>
						<div class="feature_text"><p>Access hundreds of resources from any device, at any time. Do homework, access exercises, form a group with other students and live the experience of learning Spanish while having fun</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
					<div class="icono">
						<div class="feature_icon"><img src="images/icon-chat.png" alt=""></div>
					</div>
						<h3 class="feature_title">Start speaking</h3>
						<div class="feature_text"><p>There's no substitutes in the real life. If you're serious about learning Spanish, why not to start talking? To start Spanish classes speaking from the very first day is the fastest way to increase your confidence</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title" id="courses">Popular Presential Courses</h2>
						<div class="section_subtitle"><p>These are the face-to-face courses preferred by our students</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/c1.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">2 hours / day Monday to Friday</a></h3>
							<div class="course_teacher"><strong>- 40 Hours -</strong></div>
							<div class="course_text">
								<p>Group or individual Spanish courses with qualified teachers in Guayaquil</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto"><span>$350</span>$320</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/c2.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">3 hours / day Monday to Friday</a></h3>
							<div class="course_teacher"><strong>- 60 Hours -</strong></div>
							<div class="course_text">
								<p>Group or individual Spanish courses with qualified teachers in Guayaquil</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto"><span>$520</span>$480</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/c3.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">4 hours / day Monday to Friday</a></h3>
							<div class="course_teacher"><strong>- 80 Hours -</strong></div>
							<div class="course_text">
								<p>Group or individual Spanish courses with qualified teachers in Guayaquil</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto"><span>$690</span>$640</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<!-- <div class="col">
					<div class="courses_button trans_200"><a href="#">view all courses</a></div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- Counter -->

	<div class="counter">
		<div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Register Now</h2>
						<div class="counter_text"><p>Define in advance the date on which you want to start your Spanish classes.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="15">0</div>
								<div class="milestone_text">years</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="720" data-sign-after="">0</div>
								<div class="milestone_text">Students</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="25" data-sign-after="K">0</div>
								<div class="milestone_text">Hours</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="40" data-sign-after="+">0</div>
								<div class="milestone_text">Countries</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- <div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
							<div class="counter_form_title">courses now</div>
							<input type="text" class="counter_input" placeholder="Your Name:" required="required">
							<input type="tel" class="counter_input" placeholder="Phone:" required="required">
							<select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>Choose Subject</option>
								<option>Subject</option>
								<option>Subject</option>
								<option>Subject</option>
							</select>
							<textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea>
							<button type="submit" class="counter_form_button">submit now</button>
						</form>
					</div>
				</div>
			</div> -->

		</div>
							<!-- <div class="col-md-2" id="teacher">
								<img src="images/profedunn.png">
							</div> -->
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title" id="upcoming">Upcoming online courses</h2>
						<div class="section_subtitle"><p>These are the Spanish courses that are about to start in the coming months</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/curso1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">27</div>
									<div class="event_month trans_200">Feb</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href=""> February Spanish online course for beginers</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Guayaquil City</span></div>
									<div class="event_text">
										<!-- <p>Policy analysts generally agree on a need for reform, but not on which path...</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/curso2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">27</div>
									<div class="event_month trans_200">Mar</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">March Spanish online course for beginers</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Guayaquil City</span></div>
									<div class="event_text">
										<!-- <p>This Consumer Action News issue covers topics now being debated before...</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/curso3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">01</div>
									<div class="event_month trans_200">May</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">March Spanish online course for beginers</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Guayaquil City</span></div>
									<div class="event_text">
										<!-- <p>Policy analysts generally agree on a need for reform, but not on which path...</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Students say about us</h2>
						<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/usuario.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Jacke Masito</a></div>
							<!-- <div class="team_subtitle">Marketing & Management</div> -->
							<p>The one on one learning experience is amazing, the methodology really works</p>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/usuario.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">William James</a></div>
							<!-- <div class="team_subtitle">Designer & Website</div> -->
							<p>Learning Spanish in Guayaquil on Aula Español was a great decision</p>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/usuario.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">John Tyler</a></div>
							<!-- <div class="team_subtitle">Quantum mechanics</div> -->
							<p>It is really effective to learn Spanish with native language teachers</p>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/usuario.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Veronica Vahn</a></div>
							<!-- <div class="team_subtitle">Math & Physics</div> -->
							<p>Speaking in Spanish from the first class helped me a lot to gain confidence</p>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Latest News -->

	<!-- <div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest News</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					News Post Large
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing for the ACT and SAT</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
							<div class="news_post_text">
								<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take. Can America learn anything from other nations...</p>
							</div>
							<div class="news_post_link"><a href="blog_single.html">read more</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						News Posts Small
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Home-based business insurance issue (Spring 2017 - 2018)</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						News Posts Small
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit Card Comparison Site Survey (Summer 2018)</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						News Posts Small
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques gratuitas una encuesta de Consumer Action</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

						News Posts Small
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have fewer repayment or forgiveness options</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">november 11, 2017</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div> -->
<section class="mapa-google" id="contact">
	<h3 class="text-center">Find us in Centro Alemán Guayaquil</h3>
<div class="col-lg-12 m-6">
            <!-- Embedded Google Map -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.956882517339!2d-79.9032613862913!3d-2.1700971984181727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d7486b130dd%3A0xa0fb510e1ae248ae!2sAula+-+Spanish+Lessons!5e0!3m2!1ses-419!2sec!4v1537142896836" width="100%" height="270px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
</section>
	

	<!-- Newsletter -->

	<!-- <div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start"> -->

						<!-- Newsletter Content -->
						<!-- <div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div> -->

						<!-- Newsletter Form -->
						<!-- <div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text"></div>
											<img src="images/logo_aula.png" style="width: 70px;">
										</a>
									</div>
									<div class="footer_about_text">
										<!-- <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p> -->
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: info@aula-ec.com</li>
											<li>Phone:  +(593) 996937904</li>
											<li>Av. Francisco Boloña 719 y Av. Carlos Luis Plaza Dañin Guayaquil, Ecuador</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="courses.html">Courses</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<!-- <div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div> -->
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" target="_blank">Elemensoft</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<!-- <ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/leer-mas.js"></script>
</body>
</html>