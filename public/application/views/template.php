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
						<a class="nav-link scroll" href="#about">About</a>
						</li>
						<!-- <li class="nav-item dropdown mr-3">
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
							</div>3
						</li> -->
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>
						<?php if(!empty($_SESSION['username'])){ ?>
									<li class="nav-item dropdown mr-3">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
								Hi! <?php echo $this->session->userdata('username');?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="" href="<?php echo base_url('index.php/logout');?>">Logout</a>
								<div class="dropdown-divider"></div>
								<a href="<?=base_url()?>index.php/harga">List Harga</a>
							</li>
							 <!-- <a class="nav-link scroll" aria-pressed="false" > Hi! <?php echo $this->session->userdata('username');?> </a> -->
					<?php } else {?>
						<li class="nav-item">
							<a class="nav-link scroll" href="#" data-toggle="modal"  aria-pressed="false" data-target="#loginModal">Sign in</a>
						</li>
					<?php }?>
					</ul>
					<?php if(!empty($_SESSION['username'])){ ?>
						<div style="margin-right:15px"><a href="<?php echo base_url()?>index.php/cart"><img src="<?php echo base_url();?>assets/images/shopping-cart32.png" alt="logo"></a></div>
					<button type="button" class="btn btn-info btn-lg-block w3ls-btn px-4 text-uppercase font-weight-bold" data-toggle="modal"
					    aria-pressed="false" data-target="#exampleModal">
						order
					</button>

				<?php } else {}?>
				</div>
			</nav>
		</div>
	</header>
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text text-center">
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<h3 class="text-capitalize">Welcome to Laundry-O </h3>
								<a class="btn btn-primary  mt-4 text-capitalize scroll" href="#about" role="button">read more</a>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3 class="text-capitalize">Trust Us, We Save Your Time.</h3>
								<a class="btn btn-primary  mt-4 text-capitalize scroll" href="#about" role="button">read more</a>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3 class="text-capitalize">we offer the best laundry services</h3>
								<a class="btn btn-primary  mt-4 text-capitalize scroll" href="#about" role="button">read more</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<section class="about-w3ls" id="about">
		<div class="container">
			<div class="jumbotron text-center pt-0">
				<img src="<?=base_url()?>assets/images/.jpg" alt="" class="img-fluid rounded-circle">
				<br><br><br><br>
				<h1 class="ab-title my-5">About Us</h1>
				<h2 class="lead">We Promise Highest Quality Care</h2>
				<hr class="my-4">
				<p>Laundry-O adalah jasa laundry yang paling tepat untuk laundry pakaian sehari-hari, baik itu kaos,
					celana, kaos kaki, dll. Harganya juga sangat terjangkau, laundry-O menggunakan deterjen ramah lingkungan,
					proses pencucian 1 Mesin 1 Pelanggan (tidak dicampur dengan pelanggan lain) sehingga pakaian anda akan
					terjaga kebersihannya, tidak akan bau apek. Kami tidak melakukan proses jemur manual, kami menggunakan mesin
					pengering modern untuk memberikan hasil terbaik untuk laundry kiloan yang kami kerjakan.</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg mt-3 scroll" href="#services" role="button">Learn more</a>
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
	<section class="agile_stats text-center py-5">
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

	<!-- gallery -->
	<div class="gallery  py-md-5 py-3" id="gallery">
		<div class="container">
			<h3 class="w3ls-title text-center text-capitalize py-md-4 py-3">gallery</h3>
			<div class="gallery_gds row pt-md-5 pt-3">
				<div class="col-4 gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img class="img-responsive img-style row2" src="<?=base_url()?>assets/images/f1.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g2.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/g2.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/g3.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
			</div>
			<div class="gallery_gds row">
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g4.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
							<img src="<?=base_url()?>assets/images/g4.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/g5.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g6.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/g6.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
			</div>
			<div class="row pb-md-5 pb-3">
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g7.jpg" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
							<img src="<?=base_url()?>assets/images/g7.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/g8.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
				<div class="col-4  gal-w3l">
					<div class="agileits-img">
						<a href="<?=base_url()?>assets/images/g9.jpg" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
							<img src="<?=base_url()?>assets/images/f9.jpg" alt="" class="img-responsive img-style row2" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- pricing -->
	<section class="wthree-row py-md-5 pt-sm-5" id="pricing">
		<div class="container py-md-5 py-3">
			<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">Pricing Plans</h3>
			<div class="row pb-5">
				<div class="col-lg-3 col-md-6 text-center  pb-0 pt-3 px-3 agile-pricegrid">
					<!-- <div class="bg-price py-sm-3 rounded-top text-center">
						<h4>Basic</h4>
						<span class="mx-auto my-2"></span>
					</div>
					<div class="p-3">
						<h5 class="pt-2">
							<sup>$</sup>39</h5>
						<span>per month</span>
					</div>
					<ul class="list-group-flush">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
					</ul>
					<div class="py-3 px-2">
						<button type="button" class="btn btn-info btn-lg btn-block text-md-center" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">Get Started</button>
					</div> -->
				</div>
				<div class="col-lg-3 col-md-6 text-center pb-0 pt-3 px-3 agile-pricegrid">
					<div class="bg-price py-sm-3 rounded-top text-center">
						<h4>Regular</h4>
						<span class="mx-auto my-2"></span>
					</div>
					<div class="p-3">
						<h5 class="pt-2">
							<sup></sup>FREE</h5>
						<span></span>
					</div>
					<ul class="list-group-flush">
						<li class="list-group-item">Bersih</li>
						<li class="list-group-item">Wangi</li>
						<li class="list-group-item">Rapi</li>
						<li class="list-group-item">Praktis</li>
						<li class="list-group-item">Efisien</li>
					</ul>
					<div class="py-3 px-2">
						<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">Get Started</button>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center p-3  agile-pricegrid">
					<div class="bg-price py-sm-3 rounded-top text-center">
						<h4>Express</h4>
						<span class="mx-auto my-2"></span>
					</div>
					<div class="p-3">
						<h5 class="pt-2">
							<sup>Rp</sup>5000</h5>
						<span></span>
					</div>
					<ul class="list-group-flush">
						<li class="list-group-item">Cepat</li>
						<li class="list-group-item">Pengerjaan dalam 1 hari</li>
						<li class="list-group-item">Bersih</li>
						<li class="list-group-item">Wangi</li>
						<li class="list-group-item">Rapi</li>
					</ul>
					<div class="py-3 px-2">
						<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">Get Started</button>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center pb-0 pt-3 px-3 agile-pricegrid">
					<!-- <div class="bg-price py-sm-3 rounded-top text-center">
						<h4>Combo</h4>
						<span class="mx-auto my-2"></span>
					</div>
					<div class="p-3">
						<h5 class="pt-2">
							<sup>$</sup>199</h5>
						<span>per month</span>
					</div>
					<ul class="list-group-flush">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
					</ul>
					<div class="py-3 px-2">
						<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">Get Started</button>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //pricing -->
	<!-- testimonials -->
	<section class="wthree-row py-5 testi-agile" id="testimonials">
		<div class="container py-md-5 py-3">
			<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">testimonials</h3>
			<div class="w3_testimonials_grids w3_testimonials_grids">
				<div class="sreen-gallery-cursual">
					<div id="owl-demo" class="owl-carouselpb-5">
						<div class="item-owl text-center">
							<div class="img-agile">
								<i class="fas fa-user"></i>
								<h6 class="mt-3 text-white">Michael Paul</h6>
							</div>
							<div class="test-review test-tooltip1">
								<p class="mx-auto mt-3 text-white">
									<i class="fa fa-quote-left" aria-hidden="true"></i> sangat membantu, ditengah kesibukan saya sebagai pekerja kantoran.
									<i class="fa fa-quote-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>
						<div class="item-owl">
							<div class="img-agile">
								<i class="fas fa-user"></i>
								<h6 class="mt-3 text-white">Riya Allen</h6>
							</div>
							<div class="test-review test-tooltip1">
								<p class="mx-auto mt-3 text-white">
									<i class="fa fa-quote-left" aria-hidden="true"></i> sangat membantu saya yang tidak memiliki kendaraan untuk mengambil
									<i class="fa fa-quote-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>
						<div class="item-owl">
							<div class="img-agile">
								<i class="fas fa-user"></i>
								<h6 class="mt-3 text-white">Nabila Rahma</h6>
							</div>
							<div class="test-review test-tooltip1">
								<p class="mx-auto mt-3 text-white">
									<i class="fa fa-quote-left" aria-hidden="true"></i>cepat, bersih, dan rapi sangat memuaskan
									<i class="fa fa-quote-right" aria-hidden="true"></i>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //testimonials -->
	<!-- contact -->
	<section class="wthree-row py-5 w3-contact" id="contact">
		<div class="container py-md-5">
			<h3 class="w3ls-title text-center text-capitalize pb-md-5 pb-4">contact us</h3>
			<div class="row contact-form py-3">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form action="#" method="get" class="f-color">
							<div class="form-group">
								<label for="contactusername">Name</label>
								<input type="text" class="form-control" id="contactusername" required>
							</div>
							<div class="form-group">
								<label for="contactemail">Email</label>
								<input type="email" class="form-control" id="contactemail" required>
							</div>
							<div class="form-group">
								<label for="contactcomment">Your Message</label>
								<textarea class="form-control" rows="5" id="contactcomment" required></textarea>
							</div>
							<button type="submit" class="btn btn-info btn-block">Submit</button>
						</form>
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<!-- contact map grid -->
				<div class="col-lg-6  mt-lg-0 mt-5 map contact-right">
					<iframe class="h-50" src="https://maps.google.com/maps?q=smk%20telkom%20malang&t=&z=17&ie=UTF8&iwloc=&output=embed"
					    allowfullscreen></iframe>
					<div class="address mt-3">
						<h5 class="pb-3 text-capitalize">Contact info</h5>
						<address>
							<p class="c-txt">Jl. Danau Ranau, Sawojajar, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139</p>
							<p>
								+62 (0341) 712500</p>
							<p>
								<p>
									<a href="mailto:info@example.com">smktelkom@sch.id</a>
								</p>
						</address>
					</div>
				</div>
				<!--//contact map grid ends here-->
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
				 with Laundry-O, we guaranteed to provide the most professional service that you can get a good experience.
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
					<form action="<?php echo base_url() ?>index.php/login/proses" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="username" id="username" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name1" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password" required="">
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
					<form action="<?php echo base_url() ?>index.php/register/add" method="post" class="p-3">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Name</label>
							<input type="text" class="form-control" placeholder=" " name="nama_user" id="nama_user" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Telephone</label>
							<input type="telephone" class="form-control" placeholder=" " name="telepon" id="telepon" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="username" id="username" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name1" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password" required="">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="alamat" id="alamat" required="">
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
					<form action="<?php echo base_url() ?>index.php/cart/add" method="post" enctype="multipart/form-data">
						<div class="form-group">
							 <input type="hidden" name="id_transaksi" >
							<label for="recipient-name" class="col-form-label">Jenis Pakaian</label>
		          <select name="id_pakaian" id="id_pakaian" class="form-control" >
								<option value="disabled">-- None --</option>
							  <?php
		            foreach($data_pakaian as $d) {
		              echo "<option value='".$d->id_pakaian."'>".$d->jenis_pakaian."</option>";
		            }
		            ?></select>
		         <label for="recipient-name" class="col-form-label">Pilih Tempat Laundry</label>
		          <select name="id_laundry" id="id_laundry" class="form-control" >
								<option value="disabled">-- None --</option>
								<?php
		            foreach($data_laundry as $d) {
		              echo "<option value='".$d->id_laundry."'>".$d->nama_laundry."</option>";
		            }
		            ?></select>

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Jenis Paket</label>
								<select name="id_jenis_paket" id="id_jenis_paket" class="form-control" >
									<option value="disabled">-- None --</option>
									<?php
									foreach($data_paket as $d) {
										echo "
										<option value='".$d->id_jenis_paket."'>".$d->nama_paket."</option>";
									}
									?></select>
						<div class="form-group">
							<label class="mr-2 col-form-label">Jumlah</label>
							<input type="number" class="form-control" name="qty" id="qty"required="">
						</div>
						<div class="right-w3l">
							<input type="submit" name="simpan" value="Simpan"class="form-control" onclick="myFunction()">
						</div>
				</div>
					</form>
			</div>
		</div>
	</div>
	<?php if($this->session->flashdata('pesan')!=null): ?>
			 <div class= "alert alert-success"><?= $this->session->flashdata('pesan');?></div>
		<?php endif?>





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
		<!-- onclick -->
	<script type="text/javascript">
		function myFunction(){
			alert("Hasil Order tidak akan bisa diubah! Anda yakin?")
		}
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


	<!-- Cart-->
	<!-- <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('.add_cart').click(function(){
	var produk_id_transaksi   = $(this).data("produk_id_transaksi");
	var produk_id_pakaian  = $(this).data("produk_id_pakaian");
	var produk_id_laundry = $(this).data("produk_id_laundry");
	var produk_id_jenis_paket = $(this).data("produk_id_jenis_paket");

	var qty     = $('#' + produk_id).val();
	$.ajax({
	url : "<?php echo base_url();?>index.php/cart/add",
	method : "POST",
	data : {produk_id_transaksi: produk_id_transaksi, produk_id_pakaian: produk_id_laundry, produk_id_jenis_paket:  qty: qty},
	success: function(data){
	$('#detail_cart').html(data);
}
});
});

// Load shopping cart
$('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");

//Hapus Item Cart
$(document).on('click','.hapus_cart',function(){
var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
$.ajax({
url : "<?php echo base_url();?>cart/hapus_cart",
method : "POST",
data : {row_id : row_id},
success :function(data){
$('#detail_cart').html(data);
}
});
});
});
</script> -->
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>
