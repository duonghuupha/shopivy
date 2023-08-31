        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer_area_wrapper footer_color_bg footer_image_bg"
                style="background: url(<?php echo URL.'/styles/'?>img/bg/footer_bg.jpg)">
                <div class="container">
                    <!-- Footer Middle Start -->
                    <div class="footer-top adp_top adp_bottom">
                        <div class="row">
                            <!-- Single Footer Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="footer-title">Liên hệ</h4>
                                    <div class="footer-content">
                                        <p>Trung tâm thú cưng IVYVET</p>
                                        <ul class="footer_contact">
                                            <li>
                                                <i class="icofont-home"></i>
                                                <span>Địa chỉ :</span> 41, Đào Xuyên, Đa Tốn, Gia Lâm, HN
                                            </li>
                                            <li>
                                                <i class="icofont-ui-dial-phone"></i>
                                                <span>Điện thoại :</span> 0349 697 096
                                            </li>
                                            <li>
                                                <i class="icofont-fax"></i>
                                                <span>Hotline :</span> 0899 315 115</li>
                                            <li>
                                                <i class="icofont-email"></i>
                                                <span>Email :</span> pktyivyvet@gmail.com
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Start -->

                            <!-- Single Footer Start -->
                            <div class="col-lg-2 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="footer-title">Thông tin</h4>
                                    <div class="footer-content">
                                        <ul class="footer-list">
                                            <li><a href="#">Về chúng tôi</a></li>
                                            <li><a href="#">Liên hệ</a></li>
                                            <li><a href="#">Chính sách bảo mật</a></li>
                                            <li><a href="#">Điều khoản và điều kiện</a></li>
                                            <li><a href="#">Chính sách vận chuyển</a></li>
                                            <li><a href="#">Chính sách đổi trả</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Footer Start -->

                            <!-- Single Footer Start -->
                            <div class="col-lg-3 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="footer-title">Thư viện ảnh</h4>
                                    <div class="footer-content">
                                        <ul class="instagram-img">
                                            <?php
                                            for($i = 1; $i <= 6; $i++){
                                            ?>
                                            <li>
                                                <a class="img-popup" href="<?php echo URL.'/styles/'?>img/portfolio/inst_port_<?php echo $i ?>.jpg">
                                                    <img  src="<?php echo URL.'/styles/'?>img/portfolio/inst_port_<?php echo $i ?>.jpg" alt="instagram-img">
                                                </a>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer_widget">
                                    <h4 class="footer-title">Đăng ký nhận bản tin</h4>
                                    <p>Khi có sản phẩm mới hoặc khuyến mại.</p>
                                    <div class="subscribtion_form">
                                        <form method="post">
                                            <input type="email"
                                                name="mail" 
                                                class="form-control mail"
                                                placeholder="Địa chỉ email của bạn">
                                            <button type="button" class="submit">
                                                <i class="icofont-long-arrow-right"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="single_footer_apps">
                                        <div class="footer_heading">
                                            <h6>Tải ứng dụng cho thiết bị di động</h6>
                                        </div>
                                        <div class="apps_download">
                                            <a href="#">
                                                <img src="<?php echo URL.'/styles/'?>img/icons/play-store.png" alt="Play Store">
                                            </a>
                                            <a href="#">
                                                <img src="<?php echo URL.'/styles/'?>img/icons/app-store.png" alt="Apple Store">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="footer-copyright ">
                                    <p>Copyright @ <a href="#">IVYVET </a> All Rights Reserved</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="footer-bottom-right text-center">
                                    <ul class="footer-social-icon ">
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-brand-youtube"></i></a></li>
                                        <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="support_pay text-end">
                                    <a href="#"><img src="<?php echo URL.'/styles/'?>img/icons/payments.png" alt="Payments"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Quick View Content Start -->
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product-details product_details_1">
                                            <div class="product-details-img">
                                                <div class="tab-content main_large_img product-details-large">
                                                    <div id="shop-details-1" class="tab-pane large-img-style">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p1.jpg" alt="">
                                                    </div>
                                                    <div id="shop-details-2" class="tab-pane active large-img-style">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p2.jpg" alt="">
                                                    </div>
                                                    <div id="shop-details-3" class="tab-pane large-img-style">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p3.jpg" alt="">
                                                    </div>
                                                    <div id="shop-details-4" class="tab-pane large-img-style">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p4.jpg" alt="">
                                                    </div>

                                                    <span class="sticker-sale">-25%</span>
                                                    <span class="sticker-new">New</span>

                                                </div>

                                                <div class="shop-details-tab nav product-details-small">
                                                    <a class="shop-details-overly" href="#shop-details-1"
                                                        data-bs-toggle="tab">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p1.jpg" alt="">
                                                    </a>
                                                    <a class="shop-details-overly active" href="#shop-details-2"
                                                        data-bs-toggle="tab">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p2.jpg" alt="">
                                                    </a>
                                                    <a class="shop-details-overly" href="#shop-details-3"
                                                        data-bs-toggle="tab">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p3.jpg" alt="">
                                                    </a>
                                                    <a class="shop-details-overly" href="#shop-details-4"
                                                        data-bs-toggle="tab">
                                                        <img src="<?php echo URL.'/styles/'?>img/products/p4.jpg" alt="">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thumbnail Description Start -->
                                    <div class="col-md-6">
                                        <div class="thubnail-desc ">
                                            <h3 class="product-header"><a href="#">Details Product Name Here</a></h3>
                                            <ul class="rating-summary">
                                                <li class="rating-pro">
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                    <i class="icofont-ui-rate-blank"></i>
                                                </li>
                                                <li class="read-review"><a href="#">View Reviews (2)</a></li>
                                                <li class="write-review"><a href="#">Write Review</a></li>
                                            </ul>
                                            <div class="pro-thumb-price mt-20">
                                                <span class="regular-price">$98.25</span><del
                                                    class="discount_price">$72.00</del>
                                            </div>


                                            <div class="pro-desc-details">Lorem ipsum dolor sit amet, consectetur
                                                adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut
                                                enim ad minim venialo quis nostrud ullamco. Enim ad minim venialo quis
                                                nostrud ullamco.
                                            </div>

                                            <div class="product-varient-wrapper">
                                                <div class="product-color pv_class clearfix">
                                                    <label>Color :</label>
                                                    <select class="">
                                                        <option>Red</option>
                                                        <option>Green</option>
                                                        <option>Blue</option>
                                                        <option>Black</option>
                                                        <option>Yellow</option>
                                                        <option>Pink</option>
                                                    </select>
                                                </div>
                                                <div class="product-size pv_class clearfix">
                                                    <label>Size :</label>
                                                    <select class="">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>XXL</option>
                                                        <option>3XL</option>
                                                    </select>
                                                </div>
                                                <div class="product-tag pv_class clearfix">
                                                    <label>Tags :</label>
                                                    <select class="">
                                                        <option>Cat</option>
                                                        <option>Dog</option>
                                                        <option>Fish</option>
                                                        <option>Horse</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="details_action_wraper">
                                                <ul>

                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a class="details_cart" href="cart.html" title=""
                                                            data-original-title="Add to Cart" tabindex="0">Add To
                                                            Cart</a>
                                                    </li>
                                                    <li>
                                                        <a class="details_wishlist" href="wishlist.html" title=""
                                                            data-original-title="Wishlist" tabindex="0"><i
                                                                class="icofont-heart-alt"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="details_compare" href="compare.html" title=""
                                                            data-original-title="Compare" tabindex="0"><i
                                                                class="icofont-random"></i></a>
                                                    </li>

                                                </ul>
                                            </div>


                                            <div class="pro-details-social">
                                                <ul>
                                                    <li><a class="facebook" href="#" title="facebook"><i
                                                                class="icofont-facebook"></i> Like</a></li>
                                                    <li><a class="twitter" href="#" title="twitter"><i
                                                                class="icofont-twitter"></i> tweet</a></li>
                                                    <li><a class="pinterest" href="#" title="pinterest"><i
                                                                class="icofont-pinterest"></i> save</a></li>
                                                    <li><a class="google-plus" href="#" title="google +"><i
                                                                class="icofont-google-plus"></i> share</a></li>
                                                    <li><a class="linkedin" href="#" title="linkedin"><i
                                                                class="icofont-linkedin"></i> linked</a></li>
                                                </ul>
                                            </div>
                                            <div class="secure_pay">
                                                <h6>Guaranteed safe Pay :</h6>
                                                <img src="<?php echo URL.'/styles/'?>img/icons/secure_pay.jpg" alt="single-product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo URL.'/styles/'?>js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Mobile menu js -->
    <script src="<?php echo URL.'/styles/'?>js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="<?php echo URL.'/styles/'?>js/jquery.scrollUp.js"></script>
    <!-- Jquery nice select js -->
    <script src="<?php echo URL.'/styles/'?>js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="<?php echo URL.'/styles/'?>js/jquery-ui.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="<?php echo URL.'/styles/'?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo URL.'/styles/'?>js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="<?php echo URL.'/styles/'?>js/plugins.js"></script>
    <!-- Main activaion js -->
    <script src="<?php echo URL.'/styles/'?>js/main.js"></script>
</body>

</html>