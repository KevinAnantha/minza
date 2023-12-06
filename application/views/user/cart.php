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
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Basic, But Better</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- Include jQuery library -->
	<script src="<?php echo base_url('assets/user/js/jquery-1.11.3.min.js'); ?>"></script>
	<script>
	function updateCartItem(obj, rowid){
		$.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
			if(resp == 'ok'){
				location.reload();
			}else{
				alert('Cart update failed, please try again.');
			}
		});
	}
	</script>

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
								<tr class="table-body-row">
									<td class="product-remove"><button type="button" class="close" aria-label="Close" onclick="return confirm
                                    ('Are you sure to delete item?')?window.location.href='<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>'
                                    :false;">
                                    <span aria-hidden="true">&times;</span>
                                    </button></td>
									<td class="product-image"><?php $imageURL = !empty($item["image"])?base_url('uploads/'.$item["image"]):base_url('uploads/'); ?>
                                    <img src="<?php echo $imageURL; ?>" alt="" style="height: 100px; width: 100px;"></td>
									<td class="product-name"><?php echo $item["name"]; ?></td>
									<td class="product-price"><?php echo '$'.$item["price"]; ?></td>
									<td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" 
                                    onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
									<td><?php echo 'Rp '.$item["subtotal"]; ?></td>
								</tr>
							</tbody>
							<?php } }else{ ?>
                                      <tr>
                                        <td colspan="6">
                                          <p>Your cart is empty.....</p>
                                        </td>
                                      </tr>
                                    <?php } ?>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<?php if($this->cart->total_items() > 0){ ?>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td><?php echo 'Rp '.$this->cart->total(); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="<?php echo site_url('user/checkout');?>" class="boxed-btn black">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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

