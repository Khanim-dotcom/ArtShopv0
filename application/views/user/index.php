<!--  <div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">-->
<!--    <div class="newsletter-popup"> <img class="offer" src="--><?php //echo base_url('public/user/') ?><!--images/newsbg.jpg" alt="offer">-->
<!--      <div class="newsletter-popup-static newsletter-popup-top">-->
<!--        <div class="popup-text">-->
<!--          <div class="popup-title">50% <span>off</span></div>-->
<!--          <div class="popup-desc">-->
<!--            <div>Sign up and get 50% off your next Order</div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <form onsubmit="return  validatpopupemail();" method="post">-->
<!--          <div class="form-group required">-->
<!--            <input type="email" name="email-popup" id="email-popup" placeholder="Enter Your Email" class="form-control input-lg" required />-->
<!--            <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Subscribe</button>-->
<!--            <label class="checkme">-->
<!--              <input type="checkbox" value="" id="checkme" />-->
<!--              Dont show again</label>-->
<!--          </div>-->
<!--        </form>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->


  <?php $this->load->view('user/includes/headerStyle'); ?>
  <?php $this->load->view('user/includes/navbar'); ?>
  <?php $this->load->view('user/includes/slider'); ?>
  <?php $this->load->view('user/includes/banner'); ?>
  <?php $this->load->view('user/includes/product'); ?>

  <div class="container">
    <div class="row text-center mt_50">
      <div class="services col-md-4 col-sm-6 mt_30">
        <div class="icon-top"><a href="#"><i class="icon ion-android-happy"></i></a></div>
        <h4 class="sub_title mtb_10">Big Savings</h4>
        <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui.</p>
      </div>
      <div class="services col-md-4 col-sm-6 mt_30">
        <div class="icon-top"><a href="#"><i class="icon ion-android-subway"></i></a></div>
        <h4 class="sub_title mtb_10">Free Shipping</h4>
        <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui.</p>
      </div>
      <div class="services col-md-4 col-sm-6 mt_30">
        <div class="icon-top"><a href="#"><i class="icon ion-android-call"></i></a></div>
        <h4 class="sub_title mtb_10">24/7 Support</h4>
        <p>At Vero Eos Et Accusamus Et Iusto Odio Dignissimos Ducimus Qui.</p>
      </div>
    </div>
  </div>

  <!-- =====  CLIENT START  ===== -->
    <!--  <div class="perellex-two mt_80 ptb_100">-->
    <!--    <div class="container">-->
    <!--      <div class="col-md-12">-->
    <!--        <div class="client owl-carousel text-center">-->
    <!--          <div class="item client-detail">-->
    <!--            <div class="client-avatar"> <img alt="" src="--><?php //echo base_url('public/user/') ?><!--images/t1.png"> </div>-->
    <!--            <div class="client-title mt_30"><strong>Janet Wilson</strong></div>-->
    <!--            <div class="client-designation mb_10">Web Developer</div>-->
    <!--            <p><i class="fa fa-quote-left" aria-hidden="true"></i>escolar dioxide qualify tampang effectuation firkin uncherished foreking machinofacture thrall thecoglossate enallachrome physiologus homecomer pinacocyte foxskin antherozoidal unfirmamented mismanagement romanticize overappraise unmeasured apocalyptical Pantastomatida.</p>-->
    <!--          </div>-->
    <!--          <div class="item client-detail">-->
    <!--            <div class="client-avatar"> <img alt="" src="--><?php //echo base_url('public/user/') ?><!--images/t2.png"> </div>-->
    <!--            <div class="client-title mt_30"><strong>Linda Howard</strong></div>-->
    <!--            <div class="client-designation mb_10">PHP Developer</div>-->
    <!--            <p><i class="fa fa-quote-left" aria-hidden="true"></i>macruroid atypical significant quodlibet unsteady epeeist hamulus aggrievement presbytership lubricative prearrestment unexplicitness subserviently schanz highlight transgredient injuredly catoptrical polytheistic involucellate Achromatiaceae nonimpregnated trass hematocolpus.</p>-->
    <!--          </div>-->
    <!--          <div class="item client-detail">-->
    <!--            <div class="client-avatar"> <img alt="" src="--><?php //echo base_url('public/user/') ?><!--images/t3.png"> </div>-->
    <!--            <div class="client-title mt_30"><strong>joseph Lui</strong></div>-->
    <!--            <div class="client-designation mb_10">Web Designer</div>-->
    <!--            <p><i class="fa fa-quote-left" aria-hidden="true"></i>gigmanity uremic stertorously postclassical phosphamide emblematicize Citrus cosymmedian newsmongering allassotonic Caribbean jaspery Ornithocephalus polydaemonistic septisyllable manomin titanaugite unexecrated Azelfafage ghoulishness pedantesque titmal citrated roddin.</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
  <!-- =====  CLIENT END  ===== --> 

  <div class="container">
    <div class="row">
      <div class="heading-part text-center mb_10 mt_80">
        <h2 class="main_title">Speial Products</h2>
      </div>
      <div id="speial">
        <div class="speial owl-carousel">
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <p class="tag">New</p>
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
          <div class="product-grid">
            <div class="item">
              <div class="product-thumb  mb_30">
                <div class="button-group text-center">
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                </div>
                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="<?php echo base_url('public/user/') ?>images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="<?php echo base_url('public/user/')?>images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                <div class="caption product-detail text-center">
                  <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">New Aviator Sunglasses</a></h6>
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                  <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span> </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('user/includes/partners'); ?>
  <?php $this->load->view('user/includes/footer'); ?>
  <?php $this->load->view('user/includes/footerStyle'); ?>
