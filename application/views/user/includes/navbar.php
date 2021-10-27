<div class="wrapper">
<header id="header">
<nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul id="cart-dropdown">
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-shopping-bag"></i> <span class="badge">3</span> </a>
                    <ul class="dropdown-menu cart-list">
                        <li> <a href="#" class="photo"><img src="<?php echo base_url('public/user/') ?>images/product/product1.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Lorem ipsum dolor nusquam at.</a></h6>
                            <p>2x - <span class="price">$99.00</span></p>
                        </li>
                        <li> <a href="#" class="photo"><img src="<?php echo base_url('public/user/') ?>images/product/product3.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Lorem ipsum dolor nusquam at.</a></h6>
                            <p>1x - <span class="price">$33.00</span></p>
                        </li>
                        <li> <a href="#" class="photo"><img src="<?php echo base_url('public/user/') ?>images/product/product2.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Lorem ipsum dolor nusquam at.</a></h6>
                            <p>2x - <span class="price">$56.00</span></p>
                        </li>
                        <li>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="text-right"><strong>Sub-Total</strong></td>
                                    <td class="text-right">$250.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                    <td class="text-right">$2.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>VAT (20%)</strong></td>
                                    <td class="text-right">$20.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class="total"> <span class="pull-right"><strong>Total</strong>: $322.00</span> <a href="#" class="btn btn-default btn-cart">Cart</a> </li>
                    </ul>
                </li>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="index-2.html"> <img src="<?php echo base_url('public/user/') ?>images/logo-white.png" class="logo logo-display" alt=""> <img src="<?php echo base_url('public/user/') ?>images/logo-black.png" class="logo logo-scrolled" alt=""> </a> </div>
        <!-- End Header Navigation -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left pull-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="active"><a href="index-2.html">Home</a></li>
                <li><a href="index-2.html">Collection</a></li>
                <li><a href="index-2.html">Shop</a></li>

                <!--            <li class="dropdown"> <a href="category_page_left.html" class="dropdown-toggle" data-toggle="dropdown">Shop</a>-->
                <!--              <ul class="dropdown-menu">-->
                <!--                <li> <a href="category_page.html">4colunm</a></li>-->
                <!--                <li> <a href="category_page_3col.html">3colunm</a></li>-->
                <!--                <li> <a href="category_page_left.html">3colunm Left Sidebar</a></li>-->
                <!--                <li> <a href="category_page_right.html">3colunm Right Sidebar</a></li>-->
                <!--                <li> <a href="product_detail_page.html">Product Detail Page</a></li>-->
                <!--                <li> <a href="product_detail_left.html">Product Detail Left Sidebar</a></li>-->
                <!--                <li> <a href="product_detail_right.html">Product Detail Right Sidebar</a></li>-->
                <!--              </ul>-->
                <!--            </li>-->

                <!--            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page</a>-->
                <!--              <ul class="dropdown-menu">-->
                <!--                <li> <a href="login.html">Login/Register</a></li>-->
                <!--                <li> <a href="contact_us.html">Contact us</a></li>-->
                <!--                <li> <a href="cart_page.html">My Cart</a></li>-->
                <!--                <li> <a href="checkout_page.html">Checkout</a></li>-->
                <!--                <li> <a href="wishlist.html">Wishlist</a></li>-->
                <!--              </ul>-->
                <!--            </li>-->
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- Start Side Menu -->
    <?php $this->load->view('user/includes/rightMenu'); ?>
    <!-- End Side Menu -->
</nav>
</header>