<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Go Laundry Laundry Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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

	<!-- Custom CSS -->
	<link href="<?=base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="<?=base_url()?>assets/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!--//webfonts-->
	<!--tabel-->
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url()?>assets2/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets2/css/main.css">
	<!--===============================================================================================-->
	<!--//tabel-->
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.html">

					<img src="<?=base_url()?>assets/images/logo.png" width="80" heigth="80">

				</a>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="<?=base_url()?>index.php/dashboard">Home</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about">about</a>
						</li>

						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>

							<a class="nav-link scroll" href="<?php echo base_url()?>index.php/transaksi">Transaksi</a>
							<li class="nav-item">
								<a class="nav-link scroll" href="<?=base_url()?>index.php/dashboard"> Hi! <?php echo $this->session->userdata('username');?></a>
							</li>

					</ul>


				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
	<!--services-->

	<div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Transaksi Saya</h2>
                            <button href="#tambah" class="" data-toggle="modal" style="margin-left:1000px; width: 100px"></button>
                             <?php
                                $notif = $this->session->flashdata('notif');
                                if($notif != NULL){
                                    echo ' <div class="alert alert-danger">'.$notif.'</div>';
                                }
                            ?>
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
																				<th>Transaksi</th>
                                        <th>Jenis Pakaian</th>
																					<th> Diambil Oleh</th>
																					<th> Tempat Laundry</th>
																				<th>Tanggal & Waktu Pesan</th>
																				<th>Jenis Paket</th>
                                        <th>Total Harga</th>

                                    </tr>
                                </thead>
                                <tbody>

                                <?php $no=0; foreach($arr as $t):
                                 $no++; ?>
                                <tr>

                                <td><?= $t->id_transaksi ?></td>
                                <td><?= $t->jenis_pakaian?></td>
																  <td><?= $t->nama?></td>
                                <td><?= $t->nama_laundry?></td>
																  <td><?= $t->tanggal_pesan?></td>
																	 <td><?= $t->nama_paket?></td>
                                <td><?= $t->qty * $t->harga_pakaian + $t->harga?></td>

                                <?php endforeach ?>


                                </tbody>
                            </table>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal tambah -->
<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('index.php/cart/nambah')?>" method="post" enctype="multipart/form-data">
            <label>Jenis Pakaian</label>
            <input type="text" name="nama_stok" placeholder="Isi Jenis Pakaian"  class="form-control">
            <label>Laundry</label>
            <input type="text" name="laundry" placeholder="laundry"  class="form-control">
						<label>Jumlah</label>
						<input type="text" name="jumlah" placeholder="jumlah"  class="form-control">
            <label>Harga</label>
            <input type="text" name="harga" placeholder="harga"  class="form-control">
            </select>
         <br><br>
             <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
      <div class="modal-footer">


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
 <!-- /.modal ubah -->
<div class="modal fade" id="ubah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Ubah Data</h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('index.php/cart/update')?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_stok" id="id_stok">
            <label>Jenis Pakaian</label>
            <input type="text" name="nama_stok" id="nama_stok" placeholder="nama stok"  class="form-control">
            <label>Laundry</label>
            <input type="text" name="laundry" id="laundry" placeholder="laundry"  class="form-control">
						<label>Jumlah</label>
            <input type="text" name="jumlah" id="jumlah" placeholder="jumlah"  class="form-control">
            <label>Harga</label>
            <input type="text" name="harga" id="harga" placeholder="harga"  class="form-control">
            Gambar
            <input type="file" name="gambar" id="gambar" class="form-control"><br>
            <label>Kategori</label>
            <select class="form-control" name="id_kategori" id="id_kategori">

            </select><br>
           <br>
             <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
      <div class="modal-footer">


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>


	<!-- //services-->
	<!-- slide -->
	<section class="wthree-row py-sm-5 py-3 slide-bg bg-dark">
		<div class="container py-md-5 py-3">
			<div class="py-lg-5 bg-pricemain">
				<h3 class="agile-title text-capitalize text-white">go laundry!</h3>
				<span class="w3-line"></span>
				<h5 class="agile-title text-capitalize pt-4">trust us, we save your time.</h5>
				<p class="text-light py-sm-4 py-2">Aliquam ac est vel nisl condimentum interdum vel eget enim. Curabitur mattis orci sed leo mattis, nec maximus nibh faucibus.
					Mauris et justo vel nibh rhoncus venenatis. Nullal condimentum interdum vel eget enim. Curabitur mattis orci sed le.
				</p>
				<a href="<?=base_url()?>index.php/about" class="text-uppercase serv_link align-self-center bg-light btn px-4">read more</a>
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
						<a href="mailto:example@email.com" class="text-dark">laundryO@gmail.com</a>
					</p>
				</div>
				<div class="fv3-contact">
					<span class="fas fa-phone-volume mr-2"></span>
					<p>+456 123 7890</p>
				</div>
			</div>
			<!-- copyright -->
			<div class="cpy-right text-center pt-5">
				<p>© Laundry-O. All rights reserved | Design by
					<a href="http://w3layouts.com"> W3layouts.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</footer>
	<!-- //footer -->
		<!-- js-->
		<script src="<?=base_url()?>assets/js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!--js tabel-->
	<!--===============================================================================================-->
	<script src="<?=base_url()?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>assets2/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url()?>assets2/js/main.js"></script>
	<!--//js tabel-->

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
