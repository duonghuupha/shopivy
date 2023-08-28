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
            <li class="breadcrumb-item active">Wishlist</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->

<!-- Wish List Start -->
<div class="cart-main-area wish-list adp_top adp_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Form Start -->
                <form action="#">
                    <!-- Table Content Start -->
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Stock Status</th>
                                    <th class="product-subtotal">add to cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"> <a href="#"><i class="icofont-delete-alt"
                                                aria-hidden="true"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/p2.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="product-details.html">Product Title Here 1</a>
                                    </td>
                                    <td class="product-price"><span class="amount">$254.00</span></td>
                                    <td class="product-stock-status"><span>in stock</span></td>
                                    <td class="product-add-to-cart"><a href="#">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="product-remove"> <a href="#"><i class="icofont-delete-alt"
                                                aria-hidden="true"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/p3.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="product-details.html">Product Title Here 2</a>
                                    </td>
                                    <td class="product-price"><span class="amount">$250.00</span></td>
                                    <td class="product-stock-status"><span>in stock</span></td>
                                    <td class="product-add-to-cart"><a href="#">Add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Content Start -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Wish List End -->
<?php
include('layouts/footer.php');
?>