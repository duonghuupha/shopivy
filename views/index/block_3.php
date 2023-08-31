<!-- collective product Area Start Here -->
<div class="collective-product adp_bottom">
    <div class="container">
        <!-- Section Title Start Here -->
        <div class="section-title">
            <span>#Hot Products</span>
            <h2>Collective Products</h2>
        </div>
        <!-- Section Title End Here -->
        <div class="feature-pro-active-wrapper">
            <div class="collective-product-active-4 row default_arrow small_arrow">
                <?php
                for($i = 1; $i <= 8; $i++){
                ?>  
                <!-- Single Product Start -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-template-product sold_out_grid">
                        <!-- Product Image Start -->
                        <div class="pro-img">

                            <span class="sticker-sale">-25%</span>
                            <span class="sticker-new">New</span>

                            <a href="product-details.html">
                                <img class="primary-img" src="<?php echo URL.'/styles/'?>img/products/p17.jpg" alt="single-product">
                            </a>

                            <ul class="grid_color_image">
                                <li>
                                    <div class="variant_img">
                                        <a class="active" href="<?php echo URL.'/styles/'?>img/products/p17.jpg">
                                            <img src="<?php echo URL.'/styles/'?>img/products/p17.jpg" alt="Varient Img">
                                        </a>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="variant_img">
                                        <a href="<?php echo URL.'/styles/'?>img/products/p18.jpg">
                                            <img src="<?php echo URL.'/styles/'?>img/products/p18.jpg" alt="Varient Img">
                                        </a>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="variant_img">
                                        <a href="<?php echo URL.'/styles/'?>img/products/p19.jpg">
                                            <img src="<?php echo URL.'/styles/'?>img/products/p19.jpg" alt="Varient Img">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <div class="item_quick_link">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" title="Quick View"><i
                                        class="icofont-search"></i></a>
                            </div>

                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="product_content_wrap">
                            <div class="product_content">
                                <h4><a href="product-details.html">Latest Product Title Here 9</a></h4>

                                <div class="product-rating">
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rating"></i>
                                    <i class="icofont-ui-rate-blank"></i>
                                    <i class="icofont-ui-rate-blank"></i>
                                </div>

                                <div class="product_grid_varient">

                                    <div class="grid_size">
                                        <span class="active">S</span>
                                        <span>M</span>
                                        <span>L</span>
                                        <span>XL</span>
                                        <span>XXL</span>
                                    </div>

                                    <div class="grid_color">
                                        <span class="active" style="background-color: #ffb2b0"></span>
                                        <span style="background-color: #0271bc"></span>
                                        <span style="background-color: #efc87c"></span>
                                        <span style="background-color: #00c183"></span>
                                        <span style="background-color: PowderBlue"></span>
                                    </div>

                                </div>

                                <div class="grid_price">
                                    <span class="regular-price">$100.50</span>
                                    <del class="discount_price">$75.50</del>
                                </div>

                            </div>
                            <div class="item_add_cart">
                                <a class="grid_compare" href="compare.html" title="Compare"><i
                                        class="icofont-random"></i></a>
                                <a class="grid_cart cart_disable" href="#" title="Sold Out">Sold Out</a>
                                <a class="grid_wishlist" href="wishlist.html" title="Wishlist"><i
                                        class="icofont-heart-alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                </div>
                <!-- Single Product End -->
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- collective product Area Start Here -->