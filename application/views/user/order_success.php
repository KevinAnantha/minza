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
                        <h1>Check Out product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

        <!-- Checkout Section Begin -->
        <br>
    <div class="banner__text">
        <h2 style="text-align: center;">Order Status</h2><br>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($order)){ ?>
            <div class="col-lg-4 offset-lg-4">
                <div class="alert alert-success" style="text-align: center;">Your order has been placed successfully.</div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Order status & shipping info -->
    <div class="col-lg-6 offset-lg-3">
        <div class="cart__total__procced">
            <h6 style="text-align: center;">Order Info</h6><br>
            <ul>
                <li>Name <span><strong><?php echo $order['nama']; ?></strong></span></li>
                <li>Address <span><strong><?php echo $order['alamat']; ?></strong></span></li>
                <li>Phone <span><strong><?php echo $order['telepon']; ?></strong></span></li>
                <li>Total <span><strong><?php echo 'Rp '.$order['total_beli']; ?></strong></span></li>
            </ul>
        </div>
    </div>
    <!-- Order items -->
    <section class="cart_section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                <h4 style="text-align: center;">Order Detail</h4><br>
                    <div class="shop__cart__table">
                        <table style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(!empty($order['items'])){  
                                    foreach($order['items'] as $item){ 
                                ?>
                                <tr>
                                    <td><?php echo $item["nama_produk"]; ?></td>
                                    <td><?php echo 'Rp '.$item["harga_produk"]; ?></td>
                                    <td><?php echo $item["jml_beli"]; ?></td>
                                    <td><?php echo 'Rp '.$item["sub_total"]; ?></td>
                                </tr>
                                <?php } 
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

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