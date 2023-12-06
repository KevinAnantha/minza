<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shiza Official</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/all.min.css');?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/bootstrap/css/bootstrap.min.css');?>">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/owl.carousel.css');?>">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/magnific-popup.css');?>">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/animate.css');?>">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/meanmenu.min.css');?>">
	<!-- main style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/main.css');?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo base_url('assets/user/assets/css/responsive.css');?>">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<?= $contents ?>

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>says a lot more than just about our products. We always strive to be better, live better and give better. "The Best, to be Better" is a promise that we made to give all of our Shiza Women, whoever and wherever they are.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li><a href="https://maps.app.goo.gl/K2MXwvigDyPWECT38">Godean, Sleman, DI Yogyakarta</a></li>
							<li>Indonesia</li>
							<li>085 700 804 799</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="<?php echo site_url('guest');?>">Home</a></li>
							<li><a href="<?php echo site_url('guest/about');?>">About</a></li>
							<li><a href="<?php echo site_url('guest/produk');?>">Produk</a></li>
							<li><a href="<?php echo site_url('guest/about');?>">Loyalty Point</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to get the latest updates.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2023 - <a href="https://imransdesign.com/">Shiza Official</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/shizaofficial_/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="<?php echo base_url('assets/user/assets/js/jquery-1.11.3.min.js');?>"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url('assets/user/assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<!-- count down -->
	<script src="<?php echo base_url('assets/user/assets/js/jquery.countdown.js');?>"></script>
	<!-- isotope -->
	<script src="<?php echo base_url('assets/user/assets/js/jquery.isotope-3.0.6.min.js');?>"></script>
	<!-- waypoints -->
	<script src="<?php echo base_url('assets/user/assets/js/waypoints.js');?>"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url('assets/user/assets/js/owl.carousel.min.js');?>"></script>
	<!-- magnific popup -->
	<script src="<?php echo base_url('assets/user/assets/js/jquery.magnific-popup.min.js');?>"></script>
	<!-- mean menu -->
	<script src="<?php echo base_url('assets/user/assets/js/jquery.meanmenu.min.js');?>"></script>
	<!-- sticker js -->
	<script src="<?php echo base_url('assets/user/assets/js/sticker.js');?>"></script>
	<!-- main js -->
	<script src="<?php echo base_url('assets/user/assets/js/main.js');?>"></script>

</body>
</html>