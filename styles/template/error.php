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
            <li class="breadcrumb-item active">Error 404</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- Error 404 Area Start -->
<div class="error_main_wrapper adp_top adp_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-wrapper text-center">
                    <div class="error-text">

                        <img src="img/404.png" alt="404-image">

                        <!-- 
                                <h1>404</h1>
								-->
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is
                            temporarily unavailable.</p>
                    </div>
                    <div class="find_error">
                        <form id="search-form" action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                        <div class="btn_error">
                            <a href="index.html">Back To Home Page</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error 404 Area End -->
<?php
include('layouts/footer.php');
?>