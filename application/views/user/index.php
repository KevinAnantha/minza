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
								<li class="current-list-item"><a href="<?php echo site_url('user');?>">Home</a></li>
								<li><a href="<?php echo site_url('user/about');?>">About</a></li>
								<li><a href="<?php echo site_url('user/produk');?>">Produk</a></li>
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

	<!-- hero area -->
	<div class="hero-area hero-bg">
		
		<img src="<?php echo base_url('assets/user/assets/img/bg.png');?>" alt="">
		
		<div class="container">
			<!-- <div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell"> -->
							<!-- <p class="subtitle">Indoor Plants</p> -->
							<!-- <h1>Indoor Plants For Your Home</h1> -->
							<!-- <div class="hero-btns">
								<a href="<?php echo site_url('user/produk');?>" class="boxed-btn">Product Collection</a>
							</div> -->
						<!-- </div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over Rp 200.000</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Product</span> Collection</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach($produk as $item) { ?>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="<?php echo base_url(); ?>uploads/<?php echo $item->gambar; ?>" alt=""></a>
						</div>
						<h3><?php echo $item->nama_produk;?></h3>
						<a href="<?php echo site_url('user/produk');?>" class="cart-btn">Shop Now</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                		<img src="<?php echo base_url('assets/user/assets/img/products/aglaonema.jpg');?>" alt="">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> until january
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Helwa Midi Dress</h4>
                    <div class="text">Helwa Midi Dress is a dress with an elegant model using textured Cringkel material with accents on the right and left hemispheres. The textured material makes it not easy to wrinkle & fall when worn, suitable for daily activities and formal events.</div>
                	
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/eonni.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Ahda Zulfaa <span>Customer from Magelang</span></h3>
								<p class="testimonial-body">
									"For TB/BB 164/54 it fits perfectly, the product also matches the picture on the website, the fabric is soft, comfortable to wear, overall I really like it, star ⭐⭐⭐⭐⭐."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/rani.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Setyarani Fajriyanti<span>Customer from Klaten</span></h3>
								<p class="testimonial-body">
									"The material is cool, stretchy, very comfortable to wear, never disappoints!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/user/assets/img/avaters/tiya.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Yuditiya Astri <span>Customer from Yogyakarta</span></h3>
								<p class="testimonial-body">
									"The clothes are nice, the material falls and is cool, the model is simple but I like it, it can be worn for formal or non-formal events, the price is also cheap for clothes as beautiful as this, highly recommended."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					
					<div class="abt-bg">
						<img src="<?php echo base_url('assets/img/helwa.jpg');?>" alt="">	
						<a href="https://www.tiktok.com/@shizaofficial_" class="video-play-btn popup-tiktok"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
					<p class="top-sub">Since Year 2020</p>
						<h2>We are <span class="orange-text">Shiza</span></h2>
						<p>says a lot more than just about our products. We always strive to be better, live better and give better. "The Best, to be Better" is a promise that we made to give all of our Shiza Women, whoever and wherever they are. </p>

						<p>What we wear defines our kind of beauty. Let your own beauty speaks its language, by wearing Lafiye.</p>
						
						<p>“Basic, But Better.”</p>
						<a href="<?php echo site_url('user/about');?>" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>New Year sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="<?php echo site_url('user/produk');?>" class="cart-btn btn-lg">Shop Now</a>
			<img src="assets/user/assets/img/avaters/logo_satu.jpg" alt="">
        </div>
    </section>
	<!-- end shop banner -->