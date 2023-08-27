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
            <li class="breadcrumb-item active">Checkout</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->


<!-- checkout-area start -->
<div class="checkout-area adp_top adp_bottom">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="coupon-area">
                    <div class="coupon-accordion">
                        <!-- Accordion Start -->
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text">If you have shopped with us before, please enter your details in
                                    the boxes below. If you are a new customer please proceed to the Billing & Shipping
                                    section.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text" />
                                    </p>
                                    <p class="form-row align-items-center">
                                        <input type="submit" value="Login" />
                                        <label>
                                            <input type="checkbox" />
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- Accordion End -->
                        <!-- Accordion Start -->
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" class="code" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6">
                <div class="checkbox-form mb-sm-40">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="country-select clearfix">
                                <label>Country <span class="required">*</span></label>
                                <select class="wide">
                                    <option>USA</option>
                                    <option>London</option>
                                    <option>Asutria</option>
                                    <option>Ghana</option>
                                    <option>Gremany</option>
                                    <option>Bahrain</option>
                                    <option>Colombia</option>
                                    <option>Dominican</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Company Name</label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" placeholder="Street address" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list mtb-30">
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" placeholder="Town / City" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>State / County <span class="required">*</span></label>
                                <input type="text" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Postcode / Zip <span class="required">*</span></label>
                                <input type="text" placeholder="Postcode / Zip" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Phone <span class="required">*</span></label>
                                <input type="text" placeholder="Postcode / Zip" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list create-acc">
                                <h5>
                                    <input id="cbox" type="checkbox" />
                                    <label>Create an account?</label>
                                </h5>
                            </div>
                            <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                <p class="mb-10">Create an account by entering the information below. If you are a
                                    returning customer please login at the top of the page.</p>
                                <label>Account password <span class="required">*</span></label>
                                <input type="password" placeholder="password" />
                            </div>
                        </div>
                    </div>
                    <div class="different-address">
                        <div class="ship-different-title">
                            <h5>
                                <input id="ship-box" type="checkbox" />
                                <label>Ship to a different address?</label>
                            </h5>
                        </div>
                        <div id="ship-box-info">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="wide">
                                            <option value="volvo">Bangladesh</option>
                                            <option value="saab">Algeria</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">Ghana</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Product Title Here Top <span class="product-quantity"> × 1</span>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">$154.00</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        Product Title Here Wrapper <span class="product-quantity"> × 1</span>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">$170.00</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">$245.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Grand Total</th>
                                    <td><span class=" total amount">$564.00</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingone">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Direct Bank Transfer
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingone"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference. Your order won’t be shipped until the funds have
                                            cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingtwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Cheque Payment
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingtwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingthree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            PayPal
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingthree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                            account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Cash on Delivery
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingfour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Cash on Delivery: you can pay with your credit card if you don’t have a
                                            PayPal account.</p>
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
<!-- checkout-area end -->
<?php
include('layouts/footer.php');
?>