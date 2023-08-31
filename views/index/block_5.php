<!-- Featured Product Area Start Here -->
<div class="featured-product adp_bottom">
    <div class="container">
        <!-- Section Title Start Here -->
        <div class="section-title">
            <span>#Best Collection</span>
            <h2>Featured Product</h2>
        </div>
        <!-- Section Title End Here -->
        <div class="main-product-tab-area mt-50">
            <!-- Nav tabs -->
            <ul class="nav tabs-area pro-tabs-area" role="tablist">
                <li class="nav-item">
                    <a class="active" data-bs-toggle="tab" href="#cats_tab">Cat's</a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#dogs_tab">Dog's</a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#birds_tab">Bird's</a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#pets_tab">Pet's</a>
                </li>
            </ul>
            <!-- Tab Contetn Start -->
            <div class="tab-content">

                <div id="cats_tab" class="tab-pane fade show active">
                    <!-- Product Activation Start Here -->
                    <div class="feature-pro-active-4 default_arrow small_arrow row">
                        <?php
                        for($i = 1; $i <= 16; $i++){
                        ?>
                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="single-template-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">

                                    <span class="sticker-sale">-25%</span>
                                    <span class="sticker-new">New</span>

                                    <a href="product-details.html">
                                        <img class="primary-img" src="<?php echo URL.'/styles/'?>img/products/p1.jpg" alt="single-product">
                                    </a>

                                    <ul class="grid_color_image">
                                        <li>
                                            <div class="variant_img">
                                                <a class="active" href="<?php echo URL.'/styles/'?>img/products/p1.jpg">
                                                    <img src="<?php echo URL.'/styles/'?>img/products/p1.jpg" alt="Varient Img">
                                                </a>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="variant_img">
                                                <a href="<?php echo URL.'/styles/'?>img/products/p2.jpg">
                                                    <img src="<?php echo URL.'/styles/'?>img/products/p2.jpg" alt="Varient Img">
                                                </a>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="variant_img">
                                                <a href="<?php echo URL.'/styles/'?>img/products/p3.jpg">
                                                    <img src="<?php echo URL.'/styles/'?>img/products/p3.jpg" alt="Varient Img">
                                                </a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="item_quick_link">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                            title="Quick View"><i class="icofont-search"></i></a>
                                    </div>

                                    <div class="product-count-wrap">
                                        <div class="product-countdown" data-countdown="2022/06/01"></div>
                                    </div>
                                </div>
                                <!-- Product Image End -->

                                <!-- Product Content Start -->
                                <div class="product_content_wrap">
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Latest Product Title Here 1</a></h4>

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
                                        <a class="grid_cart" href="cart.html" title="Add to Cart">Add To
                                            Cart</a>
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
                <!-- #rooms End Here -->

            </div>
            <!-- Tab Content End -->
        </div>
        <!-- main-product-tab-area-->
    </div>
</div>
<!-- Featured Product Area End Here -->