<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/slick.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/sal.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/green-audio-player.min.css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">

</head>

<body>
	<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
	<a href="#main-wrapper" id="backto-top" class="back-to-top">
		<i class="far fa-angle-double-up"></i>
	</a>

	<!-- Preloader Start Here -->
	<div id="preloader"></div>
	<!-- Preloader End Here -->

	<!-- <div class="my_switcher d-none d-lg-block">
		<ul>
			<li title="Light Mode">
				<a href="javascript:void(0)" class="setColor light" data-theme="light">
					<i class="fal fa-lightbulb-on"></i>
				</a>
			</li>
			<li title="Dark Mode">
				<a href="javascript:void(0)" class="setColor dark" data-theme="dark">
					<i class="fas fa-moon"></i>
				</a>
			</li>
		</ul>
	</div> -->

	<div id="main-wrapper" class="main-wrapper">

		<!--=====================================-->
		<!--=        Header Area Start       	=-->
		<!--=====================================-->
		<header class="header axil-header header-style-2">
			<div id="axil-sticky-placeholder"></div>
			<div class="axil-mainmenu">
				<div class="container-fluid">
					<div class="header-navbar">
						<div class="header-logo">
							<a href="index-1.html"><img class="light-version-logo" src="<?php echo base_url(); ?>assets/media/logo-2.svg" alt="logo"></a>
							<a href="index-1.html"><img class="dark-version-logo" src="<?php echo base_url(); ?>assets/media/logo-3.svg" alt="logo"></a>
						</div>
						<div class="header-main-nav">
							<!-- Start Mainmanu Nav -->
							<nav class="mainmenu-nav" id="mobilemenu-popup">
								<div class="d-block d-lg-none">
									<div class="mobile-nav-header">
										<div class="mobile-nav-logo">
											<a href="index-1.html">
												<img class="light-mode" src="<?php echo base_url(); ?>assets/media/logo-2.svg" alt="Site Logo">
												<img class="dark-mode" src="<?php echo base_url(); ?>assets/media/logo-3.svg" alt="Site Logo">
											</a>
										</div>
										<button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
									</div>
								</div>
								<ul class="mainmenu">
									<li class="menu-item">
										<a href="#services">Services</a>
										<!-- <ul class="axil-submenu">
											<li><a href="index-1.html">Digital Agency</a></li>
											<li><a href="index-2.html">Creative Agency</a></li>
											<li><a href="index-3.html">Personal Portfolio</a></li>
											<li><a href="index-4.html">Home Startup</a></li>
											<li><a href="index-5.html">Corporate Agency</a></li>
										</ul> -->
									</li>
									<li class="menu-item">
										<a href="#project">Project</a>
										<!-- <ul class="axil-submenu">
											<li><a href="service.html">Service</a></li>
											<li><a href="service-2.html">Service Two</a></li>
											<li><a href="service-design.html">Service Details</a></li>
										</ul> -->
									</li>
									<li class="menu-item">
										<a href="#testimonial">Testimonial</a>
										<!-- <ul class="axil-submenu">
											<li><a href="portfolio.html">Two Column</a></li>
											<li><a href="portfolio-2.html">Three Column</a></li>
											<li><a href="portfolio-3.html">Four Column</a></li>
											<li><a href="portfolio-4.html">Three Column Width</a></li>
											<li><a href="portfolio-5.html">Four Column Width</a></li>
											<li><a href="single-portfolio.html">Portfolio Details</a></li>
										</ul> -->
									</li>
									<li class="menu-item">
										<a href="#clients">Client</a>
										<!-- <ul class="axil-submenu">
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="our-office.html">Our Office</a></li>
											<li><a href="case-study.html">Case Study</a></li>
											<li><a href="single-case-study.html">Case Study Details</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="single-team.html">Team Details</a></li>
											<li><a href="our-clients.html">Our Clients</a></li>
											<li><a href="testimonial.html">Testimonial</a></li>
											<li><a href="pricing-table.html">Pricing Table</a></li>
											<li><a href="typography.html">Typography</a></li>
											<li><a href="404.html">404 Page</a></li>
											<li><a href="coming-soon.html">Coming Soon</a></li>
										</ul> -->
									</li>
									<li class="menu-item">
										<a href="#contact">Contact Us</a>
										<!-- <ul class="axil-submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="single-blog.html">Standard Post</a></li>
											<li><a href="single-blog-gallery.html">Gallery Post</a></li>
											<li><a href="single-blog-video.html">Video Post</a></li>
											<li><a href="single-blog-audio.html">Audio Post</a></li>
											<li><a href="single-blog-quote.html">Quote Post</a></li>
										</ul> -->
									</li>
									<!-- <li><a href="contact.html">Contact</a></li> -->
								</ul>
							</nav>
							<!-- End Mainmanu Nav -->
						</div>

					</div>
				</div>
			</div>
		</header>
		<!--=====================================-->
		<!--=        Banner Area Start         =-->
		<!--=====================================-->
		<section class="banner banner-style-2">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
							<h1 class="title">Technology &amp; design studio</h1>
							<a href="portfolio.html" class="axil-btn btn-fill-white btn-large">View Showcase</a>
						</div>
					</div>
				</div>
			</div>
			<ul class="list-unstyled shape-group-18">
				<li class="shape shape-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100"><img src="<?php echo base_url(); ?>assets/media/banner/banner-shape-1.png" alt="Shape"></li>
				<li class="shape shape-2" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"><img src="<?php echo base_url(); ?>assets/media/banner/banner-shape-2.png" alt="Shape"></li>
				<li class="shape shape-3" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Shape"></li>
				<li class="shape shape-4" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-15.png" alt="Shape"></li>
				<li class="shape shape-5" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-14.png" alt="Shape"></li>
				<li class="shape shape-6" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Shape"></li>
				<li class="shape shape-7" data-sal="slide-down" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-26.png" alt="Shape"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Service Area Start         =-->
		<!--=====================================-->
		<section id="services" class="section section-padding">
			<div class="container">
				<div class="section-heading heading-left mb--20 mb_md--70">
					<span class="subtitle">What We Can Do For You</span>
					<h2 class="title">Services we can <br> help you with</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 mt--200 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
						<div class="services-grid service-style-2">
							<div class="thumbnail">
								<img src="<?php echo base_url(); ?>assets/media/icon/icon-1.png" alt="icon">
							</div>
							<div class="content">
								<h5 class="title"> <a href="service-design.html">Design</a></h5>
								<p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
								<a href="service-design.html" class="more-btn">Find out more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt--100 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
						<div class="services-grid service-style-2 active">
							<div class="thumbnail">
								<img src="<?php echo base_url(); ?>assets/media/icon/icon-2.png" alt="icon">
							</div>
							<div class="content">
								<h5 class="title"> <a href="service-development.html">Development</a></h5>
								<p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
								<a href="service-development.html" class="more-btn">Find out more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
						<div class="services-grid service-style-2">
							<div class="thumbnail">
								<img src="<?php echo base_url(); ?>assets/media/icon/icon-6.png" alt="icon">
							</div>
							<div class="content">
								<h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
								<p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
								<a href="service-content-strategy.html" class="more-btn">Find out more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<ul class="shape-group-7 list-unstyled">
				<li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/circle-2.png" alt="circle"></li>
				<li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-2.png" alt="Line"></li>
				<li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-1.png" alt="Line"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Project Area Start         =-->
		<!--=====================================-->
		<section id="project" class="section section-padding-2 bg-color-light">
			<div class="container">
				<div class="section-heading heading-left">
					<span class="subtitle">Our Project</span>
					<h2 class="title">Some of our <br> finest work.</h2>
				</div>
				<div class="axil-isotope-wrapper">
					<!-- <div class="isotope-button isotope-project-btn"> -->
					<!-- <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button> -->
					<!-- <button data-filter=".branding"><span class="filter-text">Branding</span></button>
						<button data-filter=".mobile"><span class="filter-text">Mobile</span></button> -->
					<!-- </div> -->

					<div class="row row-35 isotope-list">
						<div class="col-md-6 col-lg-6 project branding">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-1.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
									<span class="subtitle">Full Branding, Website, App</span>
								</div>
							</div>
						</div>
						<div class="col-md-6  col-lg-6 project mobile">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-2.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
									<span class="subtitle">Logo, Website & Mobile App</span>
								</div>
							</div>
						</div>
						<div class="col-md-6  col-lg-6 project branding">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-3.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
									<span class="subtitle">Website, UI/UX</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 project mobile">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-4.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Social Engagement</a></h4>
									<span class="subtitle">Branding, Website, IOS App</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 project branding">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-5.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
									<span class="subtitle">Design, Development</span>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 project mobile">
							<div class="project-grid">
								<div class="thumbnail">
									<a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<img src="<?php echo base_url(); ?>assets/media/project/project-6.png" alt="project">
									</a>
								</div>
								<div class="content">
									<h4 class="title"><a href="single-portfolio.html">Web Application</a></h4>
									<span class="subtitle">Logo, Webapp, App</span>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
			<ul class="shape-group-7 list-unstyled">
				<li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/circle-2.png" alt="circle"></li>
				<li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-2.png" alt="Line"></li>
				<li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-1.png" alt="Line"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Counter Up Area Start      =-->
		<!--=====================================-->
		<section class="section section-padding bg-color-dark">
			<div class="container">
				<div class="section-heading heading-light">
					<span class="subtitle">Featured Case Study</span>
					<h2 class="title">Design startup movement</h2>
					<p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
						<div class="counterup-progress active">

							<div class="count-number h2">
								<span class="number count">15</span>
								<span class="symbol">+</span>
							</div>
							<h6 class="title">Years of operation</h6>
						</div>
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
						<div class="counterup-progress">
							<div class="count-number h2">
								<span class="number count">360</span>
								<span class="symbol">+</span>
							</div>
							<h6 class="title">Projects deliverd</h6>
						</div>
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
						<div class="counterup-progress">
							<div class="count-number h2">
								<span class="number count">600</span>
								<span class="symbol">+</span>
							</div>
							<h6 class="title">Specialist</h6>
						</div>
					</div>
					<div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
						<div class="counterup-progress">
							<div class="count-number h2">
								<span class="number count">64</span>
								<span class="symbol">+</span>
							</div>
							<h6 class="title">Years of operation</h6>
						</div>
					</div>
				</div>
			</div>
			<ul class="list-unstyled shape-group-10">
				<!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
				<li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-42.png" alt="Circle"></li>
				<li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-43.png" alt="Circle"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Testimonial Area Start      =-->
		<!--=====================================-->
		<section id="testimonial" class="section section-padding">
			<div class="container">
				<div class="section-heading heading-left">
					<span class="subtitle">Testimonial</span>
					<h2 class="title">From getting started</h2>
					<p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
				</div>
				<div class="row">
					<div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
						<div class="testimonial-grid active">
							<span class="social-media"><img src="<?php echo base_url(); ?>assets/media/icon/yelp-2.png" alt="Yelp"></span>
							<p>??? Donec metus lorem, vulputate
								at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ???</p>
							<div class="author-info">
								<div class="thumb">
									<img src="<?php echo base_url(); ?>assets/media/testimonial/testimonial-1.png" alt="Google Review">
								</div>
								<div class="content">
									<span class="name">Darrell Steward</span>
									<span class="designation">Executive Chairman</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
						<div class="testimonial-grid">
							<span class="social-media"><img src="<?php echo base_url(); ?>assets/media/icon/google-2.png" alt="google"></span>
							<p>??? Donec metus lorem, vulputate
								at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ???</p>
							<div class="author-info">
								<div class="thumb">
									<img src="<?php echo base_url(); ?>assets/media/testimonial/testimonial-2.png" alt="Google Review">
								</div>
								<div class="content">
									<span class="name">Savannah Nguyen</span>
									<span class="designation">Executive Chairman</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
						<div class="testimonial-grid">
							<span class="social-media"><img src="<?php echo base_url(); ?>assets/media/icon/fb-2.png" alt="Facebook"></span>
							<p>??? Donec metus lorem, vulputate
								at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ???</p>
							<div class="author-info">
								<div class="thumb">
									<img src="<?php echo base_url(); ?>assets/media/testimonial/testimonial-3.png" alt="Google Review">
								</div>
								<div class="content">
									<span class="name">Floyd Miles</span>
									<span class="designation">Executive Chairman</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<ul class="shape-group-4 list-unstyled">
				<li class="shape-1"><img src="<?php echo base_url(); ?>assets/media/others/bubble-1.png" alt="Bubble"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Brand Area Start       	=-->
		<!--=====================================-->
		<section id="clients" class="section section-padding bg-color-dark">
			<div class="container">
				<div class="section-heading heading-light-left">
					<span class="subtitle">Top Clients</span>
					<h2 class="title">We???ve built solutions for...</h2>
					<p>Design anything from simple icons to fully featured websites and applications.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12 d-flex justify-content-center" data-sal="slide-up" data-sal-duration="500">
						<div class="brand-grid active">
							<img src="<?php echo base_url(); ?>assets/media/brand/brand-1.png" alt="Brand">
						</div>
					</div>
					<div class="col-lg-4 col-12 d-flex justify-content-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
						<div class="brand-grid">
							<img src="<?php echo base_url(); ?>assets/media/brand/brand-2.png" alt="Brand">
						</div>
					</div>
					<div class="col-lg-4 col-12 d-flex justify-content-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
						<div class="brand-grid">
							<img src="<?php echo base_url(); ?>assets/media/brand/brand-3.png" alt="Brand">
						</div>
					</div>
				</div>
			</div>
			<ul class="list-unstyled shape-group-10">
				<li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/line-9.png" alt="Circle"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=     Call To Action Area Start     =-->
		<!--=====================================-->
		<section class="section call-to-action-area">
			<div class="container">
				<div class="call-to-action">
					<div class="section-heading heading-light">
						<span class="subtitle">Let's Work Together</span>
						<h2 class="title">Need a successful project?</h2>
						<a href="#contact" class="axil-btn btn-large btn-fill-white">Contact Us</a>
					</div>
					<div class="thumbnail">
						<div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
							<img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/chat-group.png" alt="Chat">
						</div>
						<ul class="list-unstyled small-thumb">
							<li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
								<img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/laptop-poses.png" alt="Laptop">
							</li>
							<li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
								<img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/bill-pay.png" alt="Bill">
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="list-unstyled shape-group-9">
				<li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/bubble-12.png" alt="Comments"></li>
				<li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
				<li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-13.png" alt="Comments"></li>
				<li class="shape shape-4"><img src="<?php echo base_url(); ?>assets/media/others/bubble-14.png" alt="Comments"></li>
				<li class="shape shape-5"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
				<li class="shape shape-6"><img src="<?php echo base_url(); ?>assets/media/others/bubble-15.png" alt="Comments"></li>
				<li class="shape shape-7"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
			</ul>
		</section>
		<!--=====================================-->
		<!--=        Footer Area Start       	=-->
		<!--=====================================-->
		<footer class="footer-area">
			<div class="container">
				<div class="footer-top">
					<div class="footer-social-link">
						<ul class="list-unstyled">
							<li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
							<li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
							<li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
							<li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="footer-main">
					<div class="row">
						<div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
							<div class="footer-widget border-end">
								<div id="contact" class="footer-newsletter">
									<h2 class="title">Get in touch!</h2>
									<p>Fusce varius, dolor tempor interdum tristique, dui urna bib
										endum magna, ut ullamcorper purus</p>
									<form>
										<div class="input-group mb-3">
											<input type="email" class="form-control" placeholder="Email address">
										</div>
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Subject">
										</div>

										<div class="textarea-group mb-3">
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Messages"></textarea>
										</div>
										<div class="success-condition">Request Sended!</div>

										<div class="text-end">
											<button class="subscribe-btn" type="submit">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
							<div class="row">
								<div class="col-sm-6">
									<div class="footer-widget">
										<h6 class="widget-title">Services</h6>
										<div class="footer-menu-link">
											<ul class="list-unstyled">
												<li><a href="service-design.html">Logo &amp; Branding</a></li>
												<li><a href="service-development.html">Website Development</a></li>
												<li><a href="service-development.html">Mobile App Development</a></li>
												<li><a href="service-marketing.html">Search Engine Optimization</a></li>
												<li><a href="service-marketing.html">Pay-Per-Click</a></li>
												<li><a href="service-marketing.html">Social Media Marketing</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="footer-widget">
										<h6 class="widget-title">Resourses</h6>
										<div class="footer-menu-link">
											<ul class="list-unstyled">
												<li><a href="blog.html">Blog</a></li>
												<li><a href="case-study.html">Case Studies</a></li>
												<li><a href="project.html">Portfolio</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="footer-widget">
										<h6 class="widget-title">Support</h6>
										<div class="footer-menu-link">
											<ul class="list-unstyled">
												<li><a href="contact.html">Contact</a></li>
												<li><a href="privacy-policy.html">Privacy Policy</a></li>
												<li><a href="terms-of-use.html">Terms of Use</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
					<div class="row">
						<div class="col-md-6">
							<div class="footer-copyright">
								<span class="copyright-text">?? 2021. All rights reserved by <a href="https://axilthemes.com/">Axilthemes</a>.</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-bottom-link">
								<ul class="list-unstyled">
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
									<li><a href="terms-of-use.html">Terms of Use</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>




		<!--=====================================-->
		<!--=       Offcanvas Menu Area       	=-->
		<!--=====================================-->
		<div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
			<div class="offcanvas-header">
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<form action="#" class="side-nav-search-form">
					<div class="form-group">
						<input type="text" class="search-field" name="search-field" placeholder="Search...">
						<button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
					</div>
				</form>
				<div class="row ">
					<div class="col-lg-5 col-xl-6">
						<ul class="main-navigation list-unstyled">
							<li><a href="index-1.html">Digital Agency</a></li>
							<li><a href="index-2.html">Creative Agency</a></li>
							<li><a href="index-3.html">Personal Portfolio</a></li>
							<li><a href="index-4.html">Home Startup</a></li>
							<li><a href="index-5.html">Corporate Agency</a></li>
						</ul>
					</div>
					<div class="col-lg-7 col-xl-6">
						<div class="contact-info-wrap">
							<div class="contact-inner">
								<address class="address">
									<span class="title">Contact Information</span>
									<p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
								</address>
								<address class="address">
									<span class="title">We're Available 24/7. Call Now.</span>
									<a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
										456-2790</a>
									<a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
										255-53333</a>
								</address>
							</div>
							<div class="contact-inner">
								<h5 class="title">Find us here</h5>
								<div class="contact-social-share">
									<ul class="social-share list-unstyled">
										<li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
										<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<!-- <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button> -->

				<div class="modal-body p-4">
					<img class="image-portofolio__modal mb-4" src="<?php echo base_url(); ?>assets/media/project/project-1.png" alt="project" />
					<h4 class="title mb-2">
						<div>Creative Agency</div>
					</h4>
					<span class="subtitle mb-3">Full Branding, Website, App</span>
					<div class="textbox">
						<p class="mb-2">We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification.</p>
						<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Jquery Js -->
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/counterup.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/slick.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/sal.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/js.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.style.switcher.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.countdown.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/tilt.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/green-audio-player.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.nav.js"></script>

	<!-- Site Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>

</html>