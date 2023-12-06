<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?php echo site_url('user/index');?>">
								<img src="<?php echo base_url('assets/img/logo.png');?>" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="<?php echo site_url('user');?>">Home</a></li>
								<li><a href="<?php echo site_url('user/about');?>">About</a></li>
								<li class="current-list-item"><a href="<?php echo site_url('user/produk');?>">Produk</a></li>
								<li><a href="<?php echo site_url('user/cart');?>">Cart</a>
									<ul class="sub-menu">
										<li><a href="<?php echo site_url('user/checkout');?>">Check Out</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<li><a href="<?php echo site_url('user/login');?>">Logout</a></li>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- end header -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Basic, But Better</p>
						<h1>Produk</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
				<div class="row product-lists">
				<?php foreach($produk as $item) { ?>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url(); ?>uploads/<?php echo $item->gambar; ?>" alt=""></a>
						</div>
						<h3><?php echo $item->nama_produk;?></h3>
						<h6><?php echo $item->deskripsi;?></h6>
						<p class="product-price"></span>Rp <?php echo $item->harga_produk;?></p>
						<a href="<?php echo site_url('user/addToCart/'.$item->id_produk);?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<?php } ?>
		</div>
	</div>
	<!-- end products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
