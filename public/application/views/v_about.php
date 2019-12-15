<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Laundry-O</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Go Laundry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- gallery css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/swipebox.css">
	<!-- Custom CSS -->
	<link href="<?=base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="<?=base_url()?>assets/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!--//webfonts-->
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.html">
				
					<img src="<?=base_url()?>assets/images/logo.png" width="80" heigth="80" href="<?=base_url()?>"> 
					
				</a>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="<?=base_url()?>index.php/dashboard">Home 
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about">about</a>
						</li>
						<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item scroll" href="#services">Services</a>
								<a class="dropdown-item scroll" href="#team">Team</a>
								<a class="dropdown-item scroll" href="#gallery">Gallery</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item scroll" href="#pricing">Pricing Plans</a>
								<a class="dropdown-item" href="<?=base_url()?>index.php/harga">List Harga</a>
								<a class="dropdown-item scroll" href="#testimonials">Testimonials</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#" data-toggle="modal"  aria-pressed="false" data-target="#loginModal">Sign</a>
						</li>
					</ul>
					<button type="button" class="btn btn-info btn-lg-block w3ls-btn px-4 text-uppercase font-weight-bold" data-toggle="modal"
					    aria-pressed="false" data-target="#exampleModal">
						order
					</button>

				</div>
			</nav>
		</div>
	</header>
	
	<!-- about -->
	<section class="about-w3ls2" id="about">
		<div class="container">
			<div class="jumbotron text-center pt-0">
				<img src="<?=base_url()?>assets/images/.jpg" alt="" class="img-fluid rounded-circle">
				<br><br><br><br>
				<h1 class="ab-title my-5"><b>About Us</b></h1>
				<h2 class="lead">We Promise Highest Quality Care</h2>
				<hr class="my-4">
				<p>Laundry-O adalah jasa laundry yang paling tepat untuk laundry pakaian sehari-hari, baik itu kaos, 
					celana, kaos kaki, dll. Harganya juga sangat terjangkau, laundry-O menggunakan deterjen ramah lingkungan, 
					proses pencucian 1 Mesin 1 Pelanggan (tidak dicampur dengan pelanggan lain) sehingga pakaian anda akan 
					terjaga kebersihannya, tidak akan bau apek. Kami tidak melakukan proses jemur manual, kami menggunakan mesin 
					pengering modern untuk memberikan hasil terbaik untuk laundry kiloan yang kami kerjakan.</p>
				<p class="lead">
				
				</p>
			</div>
		</div>
	</section>
	<!-- //about -->
	<!--services-->
	<div class="agileits-services py-md-5 py-3" id="services">
		<div class="container">
			<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">what we do</h3>
			<div class="agileits-services-row row py-md-5 pb-5">
			<div class="col-lg-3 col-md-6 agileits-services-grids">
					<span class="fab fa-uniregistry p-4"></span>
					<h4 class="mt-2 mb-3">Commercial Service</h4>
					<p>Professional Dry Cleaning Service at an Affordable price</p>
				</div>
				<div class="col-lg-3 col-md-6 agileits-services-grids mt-md-0 mt-3">
					<span class="fab fa-jenkins p-4"></span>
					<h4 class="mt-2 mb-3">Self Service</h4>
					<p>Wash, Dry, Fold/Iron and neatly package your laundry</p>
				</div>

				<div class="col-lg-3 col-md-6 agileits-services-grids mt-lg-0 mt-3">
					<span class="fab fa-schlix p-4"></span>
					<h4 class="mt-2 mb-3">Faster Service</h4>
					<p>Home Pick-up service at a push of a button via Mobile App or website</p>
				</div>
				<div class="col-lg-3 col-md-6 agileits-services-grids mt-lg-0 mt-3">
					<span class="fas fa-magic p-4"></span>
					<h4 class="mt-2 mb-3">Stain Removal</h4>
					<p>Door-step delivery upon completion at your convenience.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services-->
	<!-- stats -->
	<section class="agile_stats2 text-center py-5">
		<div class="container pt-sm-5">
			<div class="stats_agile mb-sm-5 mb-3">
				<h3 class="stat-title text-capitalize pb-md-5 pb-4">let us do your laundry</h3>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="counter pt-5 px-3 pb-3">
						<i class="far fa-smile fa-2x"></i>
						<div class="timer count-title count-number mt-2" data-to="5100" data-speed="1500"></div>
						<p class="count-text text-capitalize">happy customers</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-md-0 mt-sm-5 mt-3">
					<div class="counter  pt-5 px-3 pb-3">
						<i class=" fab fa-stack-overflow fa-2x"></i>
						<div class="timer count-title count-number mt-2" data-to="4783" data-speed="1500"></div>
						<p class="count-text text-capitalize">dry clean</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-5 mt-3">
					<div class="counter  pt-5 px-3 pb-3">
						<i class="fas fa-eraser fa-2x"></i>
						<div class="timer count-title count-number mt-2" data-to="2184" data-speed="1500"></div>
						<p class="count-text text-capitalize">ironing</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0  mt-sm-5 mt-3">
					<div class="counter  pt-5 px-3 pb-3">
						<i class="fas fa-exclamation fa-2x"></i>
						<div class="timer count-title count-number mt-2" data-to="1084" data-speed="1084"></div>
						<p class="count-text text-capitalize">stain removal</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //stats -->
	
	
	<!-- pricing -->
	<section class="wthree-row py-md-5 pt-sm-5" id="pricing">
		<div class="container py-md-5 py-3">
		<h1 class="ab-title my-5"><b>Who We Are</b></h1>
				
				<hr class="my-4">
				<p>We are team of delicated people who seek to revolutionise Laundry business by providing online 
					web and mobile app ordering service. With a touch of your finger we will provide door to door 
					pickup and delivery service at your convenience. Saving your precious time to do what really 
					matter to you.</p>
				<p class="lead">
				
				</p>
		</div>
	</section>
	<!-- //pricing -->
	
<!-- team -->
<section class="wthree-row py-5" id="team">
		<div class="container py-md-5 py-3">
			<div class="py-md-5 py-3 bg-pricemain text-center">
				<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">meet our team</h3>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 team-grids">
					<div class="team-effect">
						<img src="<?=base_url()?>assets/images/a2.jpeg" alt="img" class="img-responsive">
					</div>
					<!-- team text -->
					<div class="footerv2-w3ls mt-3">
						<h4>Ardika Wahyu Pratama</h4>
						<p>Hustler</p>
						<ul class="social-iconsv2 agileinfo">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- //team text -->
				</div>
				<div class="col-lg-3 col-sm-6 team-grids mt-sm-0 mt-5">
					<div class="team-effect">
						<img src="<?=base_url()?>assets/images/a1.jpeg" alt="img" class="img-responsive">
					</div>
					<!-- team text -->
					<div class="footerv2-w3ls mt-3">
						<h4>Silvia Devita Rahmawati</h4>
						<p>Hipster</p>
						<ul class="social-iconsv2 agileinfo">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- //team text -->
				</div>
				<div class="col-lg-3 col-sm-6 team-grids mt-lg-0 mt-5">
					<div class="team-effect">
						<img src="<?=base_url()?>assets/images/a3.jpg" alt="img" class="img-responsive">
					</div>
					<!-- team text -->
					<div class="footerv2-w3ls mt-3">
						<h4>Refanxa Pradiptha</h4>
						<p>Hacker</p>
						<ul class="social-iconsv2 agileinfo">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- //team text -->
				</div>
				
					
			</div>
		</div>
	</section>
	<!-- //team -->

	<!-- contact -->
	<section class="wthree-row py-5 w3-contact" id="contact">
		<div class="container py-md-5">
			<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">Call Us</h3>
			<div class="row contact-form py-3">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" method="get" class="f-color">
							<section class="call-us" >
								<div class="call">CALL US</div>
								<div class="call">09458 181 990, 09458 181 980</div>
							</section>
			
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				
			</div>
			<!-- //contact details container -->
		</div>
	</section>
	<!-- //contact -->
	<!-- slide -->
	<section class="wthree-row py-sm-5 py-3 slide-bg bg-dark">
		<div class="container py-md-5 py-3">
			<div class="py-lg-5 bg-pricemain">
				<h3 class="agile-title text-capitalize text-white">go laundry!</h3>
				<span class="w3-line"></span>
				<h5 class="agile-title text-capitalize pt-4">trust us, we save your time.</h5>
				<p class="text-light py-sm-4 py-2">Laundry-O is the first-ever on-demand laundry App. We take care of your laundry and dry cleaning with a push of a button from your phone or through our website. We strive to make cleaning your clothes a seamless experience and we will cater to your schedule, come straight to your door to pick up and deliver your laundry at affordable prices. With exclusive partnership
				 with Shine Laundry, we guaranteed to provide the most professional service that you can experience in Myanmar.
				</p>
				<a href="#" class="text-uppercase serv_link align-self-center bg-light btn px-4">read more</a>
			</div>
		</div>
	</section>
	<!--//slide-->
	<!-- footer -->
	<footer class="py-md-5 pt-5 pb-4">
		<div class="container">
			<!-- footer grid top -->
			<div class="footerv2-w3ls text-center">
				<h4 class="w3ls-title text-capitalize pb-3">socialize with us</h4>
				<ul class="social-iconsv2 agileinfo mt-3">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="fv3-contact mt-3">
					<span class="fas fa-envelope-open mr-2"></span>
					<p>
						<a href="mailto:example@email.com" class="text-dark">info@example.com</a>
					</p>
				</div>
				<div class="fv3-contact">
					<span class="fas fa-phone-volume mr-2"></span>
					<p>+456 123 7890</p>
				</div>
			</div>
			<!-- copyright -->
			<div class="cpy-right text-center pt-5">
				<p>© 2018 Go Laundry. All rights reserved | Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->

<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize" id="exampleModalLabel1">LOGIN</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name1" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control" value="sign in">
						</div>
					</form>
					<p>Not a member? <a href="#" data-toggle="modal"  aria-pressed="false" data-target="#signupModal">Sign up now</a><span class="fontawesome-arrow-right"></span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //login modal -->

	<!-- register modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize" id="exampleModalLabel1">SIGN UP</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Telephone</label>
							<input type="telephone" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name1" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control" value="sign up">
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //register modal -->

	<!-- order modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize" id="exampleModalLabel1">order your laundry</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Jenis Pakaian</label>
							<select type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
								<option value="">Jeans</option>
								<option value="">Non Jeans</option>
								<option value="">Selimut</option>
								<option value="">Sprei</option>
								<option value="">Handuk</option>
								<option value="">Boneka</option>
							</select>
						</div>
						<div class="form-group">
						<label for="recipient-name" class="col-form-label">Jenis Paket</label>
							<select type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required="">
								<option value="">Reguler</option>
								<option value="">Express</option>
							</select>
						</div>
						<div class="form-group">
							<label class="mr-2 col-form-label">Jumlah</label>
							<input type="number" class="form-control" name="Jumlah" required="">
						</div>
						<div class="form-group">
							<label class="mr-2 col-form-label">Delivery </label>
							<input id="datepicker2" name="check out" type="text" value="mm/dd/yyyy" class="form-control" required="">
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control" value="pick my laundry">
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- //order modal -->
	<!-- js-->
	<script src="<?=base_url()?>assets/js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- Banner text Responsiveslides -->
	<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //Banner text  Responsiveslides -->
	<!-- start-smooth-scrolling -->
	<script src="<?=base_url()?>assets/js/move-top.js "></script>
	<script src="<?=base_url()?>assets/js/easing.js "></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll ").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			 var defaults = {
				 containerID: 'toTop', // fading element id
				 containerHoverID: 'toTopHover', // fading element hover id
				 scrollSpeed: 1200,
				 easingType: 'linear' 
			 };
			 */

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="<?=base_url()?>assets/js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- gallery swipebox -->
	<script src="<?=base_url()?>assets/js/jquery.swipebox.min.js"></script>
	<script>
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	<script src="<?=base_url()?>assets/js/jquery.adipoli.min.js"></script>
	<!-- effect -->
	<script>
		$(function () {
			$('.row2').adipoli({
				'startEffect': 'overlay',
				'hoverEffect': 'sliceDown'
			});
		});
	</script>
	<!-- //swipe box js -->
	<!-- stats counter -->
	<script src="<?=base_url()?>assets/js/counter.js"></script>
	<!-- Date picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css" />
	<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker1,#datepicker2").datepicker();
		});
	</script>
	<!-- // Date picker -->
	<!-- testimonials -->
	<link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
	<script src="<?=base_url()?>assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: false,
				navigation: true,
				navigationText: true,
				pagination: true,
			});
		});
	</script>
	<!-- //for testimonials slider-js-script-->
	<!-- Bootstrap Core JavaScript -->
	<script src="<?=base_url()?>assets/js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>