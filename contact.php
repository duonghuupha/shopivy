<?php
include('layouts/header.php');
?>
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumb-area" style="background-image: url(img/bg/breadcrumb_bg_2.jpg)">
    <div class="container text-center">
        <h3>Breadcrumb Title</h3>
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- Google Map Start -->
<div class="goole-map">
    <div id="map"></div>
</div>
<!-- Google Map End -->

<!-- Regester Page Start Here -->
<div class="register-area adp_top adp_bottom">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-4 col-12">
                <div class="area-details">
                    <div class="small-title">
                        <h3>Quick contact</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, autem.</p>
                    </div>
                    <ul>
                        <li class="single-quick-contact">
                            <h5>Contact Number</h5>
                            <p>
                                <a href="tel:+0987456321">+0987456321/+5101985475</a>
                                <a href="tel:+0655648945">+0655648945/+5101985475</a>
                            </p>
                        </li>
                        <li class="single-quick-contact">
                            <h5>Contact Email</h5>
                            <p>
                                <a href="mailto:examplemail@example.com">examplemail@example.com</a>
                                <a href="mailto:examplemail@example.com">examplemail@example.com</a>
                            </p>
                        </li>
                        <li class="single-quick-contact">
                            <h5>Contact Location</h5>
                            <p>27 Robinhod Road, Block #5 Barnigham City, London Park, UK</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                <div class="contact_wrapper clearfix">
                    <div class="small-title">
                        <h3>Message Box</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nisi assumenda aliquam ex,
                            unde quo hic nostrum voluptatum in. Voluptatibus laborum facere obcaecati fugiat error.</p>
                    </div>
                    <form id="contact-form" class="contact-form" action="mail.php" method="post">
                        <div class="address-wrapper row">
                            <div class="col-md-12">
                                <div class="address-fname">
                                    <input class="form-control" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address-email">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address-web">
                                    <input class="form-control" type="text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="address-subject">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="address-textarea">
                                    <textarea name="message" class="form-control"
                                        placeholder="Write your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer-content mail-content clearfix">
                            <div class="send-email float-md-right">
                                <button type="submit" class="login-btn">Submit Query</button>
                            </div>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Page End Here -->
<?php
include('layouts/footer.php');
?>