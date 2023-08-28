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
            <li class="breadcrumb-item active">Cart</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- Cart Main Area Start -->
<div class="cart-main-area adp_top adp_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!-- Form Start -->
                <form action="#">
                    <!-- Table Content Start -->
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Item Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/p1.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="product-details.html">Product Title Here 1</a>
                                    </td>
                                    <td class="product-price"><span class="amount">$215.00</span></td>
                                    <td class="product-quantity"><input type="number" min="1" value="1" /></td>
                                    <td class="product-subtotal">$105.00</td>
                                    <td class="product-remove"> <a href="#"><i class="icofont-delete-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/p2.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="product-details.html">Product Title Here 2</a>
                                    </td>
                                    <td class="product-price"><span class="amount">$100.00</span></td>
                                    <td class="product-quantity"><input type="number" min="1" value="1" /></td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-remove"> <a href="#"><i class="icofont-delete-alt"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Content Start -->
                    <div class="row cart_bottom_wrapper">

                        <!-- Cart Button Start -->
                        <div class="col-md-8 col-sm-12">
                            <div class="buttons-cart">
                                <input type="submit" value="Update Cart" />
                                <a href="#">Continue Shopping</a>
                                <a href="#">Clear Cart</a>
                            </div>
                        </div>
                        <!-- Cart Button Start -->

                        <!-- Cart Totals Start -->
                        <div class="col-md-4 col-sm-12">
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <br />
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">$315.00</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Shipping</th>
                                            <td><span class="amount">$10.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">$325.00</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Totals End -->

                    </div>
                    <!-- Row End -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Cart Main Area End -->
<?php
include('layouts/footer.php');
?>