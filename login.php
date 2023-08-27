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
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- Login Page Start Here -->
<div class="login_wrapper adp_top adp_bottom">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2">

                <div class="login-form">
                    <h3 class="login-header">Log in to your account </h3>
                    <form>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                <button class="btn show-btn" type="button">Show</button>
                            </div>
                        </div>
                        <div class="login-details text-center">
                            <a href="forgot-password.html">Forgot your password? </a>
                            <button type="submit" class="login-btn">Login Account</button>
                        </div>
                        <div class="login-footer text-center">
                            <p>No account? <a href="register.html">Create one here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Page End Here -->
<?php
include('layouts/footer.php');
?>