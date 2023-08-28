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
            <li class="breadcrumb-item active">Register</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- Regester Page Start Here -->
<div class="register-area adp_top adp_bottom">
    <div class="container">

        <div class="row">
            <div class="offset-xl-1 col-xl-10">
                <div class="register-form login-form clearfix">
                    <h3 class="login-header">Create an account </h3>
                    <form action="#">
                        <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-3 col-md-3 col-form-label">Social title</label>
                            <div class="col-lg-9 col-md-9">
                                <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mr.</span>
                                <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mrs.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="f-name" class="col-lg-3 col-md-3 col-form-label">First Name</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="text" class="form-control" id="f-name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="l-name" class="col-lg-3 col-md-3 col-form-label">Last Name</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="text" class="form-control" id="l-name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="text" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="password" class="form-control" id="inputPassword">
                                <button class="btn show-btn" type="button">Show</button>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="birth" class="col-lg-3 col-md-3 col-form-label">Date Of Birth</label>
                            <div class="col-lg-9 col-md-9">
                                <input type="text" class="form-control" id="birth" placeholder="MM/DD/YYYY">
                            </div>
                        </div>
                        <div class="form-check row">
                            <div class="col-md-6 offset-md-3">
                                <input class="form-check-input" value="#" id="offer" type="checkbox">
                                <label class="form-check-label" for="offer">Receive offers from our partners</label>
                            </div>
                        </div>
                        <div class="form-check row">
                            <div class="col-md-8 offset-md-3">
                                <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                <label class="form-check-label" for="subscribe">Sign up for our newsletter</label>
                            </div>
                        </div>
                        <div class="register-box">
                            <button type="submit" class="login-btn float-end">Register Now</button>
                        </div>
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