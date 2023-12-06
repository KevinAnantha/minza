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
								<li><a href="<?php echo site_url('user/produk');?>">Produk</a></li>
								<li class="current-list-item"><a href="<?php echo site_url('user/cart');?>">Cart</a>
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

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Basic, But Better</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<form method="POST">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						      	<?php if(!empty($error_msg)){ ?>
						          <div class="col-md-12">
						            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
						          </div>
						          <?php } ?>
						        <div class="billing-address-form">
						        	
						        		<p>
						        			<input type="text" class="form-control" name="name" 
							                  value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" 
							                  placeholder="Enter nama" required>
							                  <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
						              	</p>
						        		<p>
						        			<input type="text" class="form-control" name="address" 
							                  value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" 
							                  placeholder="Enter alamat" required>
							                  <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
              							</p>
						        		<p>
						        			<input type="text" class="form-control" name="phone" 
							                  value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" 
							                  placeholder="Enter telepon" required>
							                  <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
						        		</p>
						        		
						        	
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
								</tr>
							</thead>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
									<td><?php echo '$'.$item["subtotal"]; ?></td>
									<?php } ?>
								</tr>
								<tr>
									<td>Total</td>
									<td><?php echo '$'.$this->cart->total(); ?></td>
								</tr>
							</tbody>
						</table>
						<button type="submit" class="site-btn" name="placeOrder" value="Place order">Place order</button>
					</div>
				</div>
				<?php } ?>
			</div>
			</form>
		</div>
	</div>
	<!-- end check out section -->

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