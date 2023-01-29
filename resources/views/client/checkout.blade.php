<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/elegant.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/jquery.mmenu.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="assets/css/cssanimation.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- helper css -->
    <link rel="stylesheet" href="assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<header class="header-area pb-22">
    <div class="desktop-header">
    @include('clientPartial.nav')
    <!--breadcrumb-area start-->
    <div class="breadcrumb-area mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb-area end-->
</header>
<!--header-area end-->

<div class="shopping-cart-steps">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-steps">
                    <ul class="clearfix">
                        <li>
                            <div class="inner">
                                <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                            </div>
                        </li>
                        <li class="active">
                            <div class="inner">
                                <span class="step">02</span> <span class="inner-step">Checkout </span>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <span class="step">03</span> <span class="inner-step">Order Completed </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--checkout-area start-->
<div class="checkout-area mt-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Returning customer? <a href="#">Click here</a> to login</p>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-lg-8">
                <div class="billing-form">
                    <h4>Billing Address</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>FIRST NAME *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="first_name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>LAST NAME *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="last_name"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="address" placeholder="Street Address" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>EMAIL ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="email" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>PHONE *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="phone" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>ACCOUNT PASSWORD *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="password" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-details mt-30">
                    <h4>Your Order</h4>
                    <div class="order-details-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($products))
                                @foreach($products as $product)
                            <tr>
                                <td>{{$product['item']['product_name']}}</td>
                                <td><strong>Ksh {{$product['item']['product_price']*$product['quantity']}}</strong></td>
                            </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td>Shipping and Handling</td>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <td>ORDER TOTAL</td>
                                <td><strong>Ksh {{$totalPrice}}</strong></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="payment-gateways mt-30">
                            <div class="single-payment-gateway">
                                <input type="checkbox" id="system1" />
                                <label for="system1">Create an account?</label>
                                <div class="payment-gateway-desc">
                                    <p>Confirm you have <b>Ksh {{$totalPrice}}</b> in your Mpesa Account.</p>
                                </div>
                            </div>
                            <div class="single-payment-gateway">
                                <input type="radio" id="system2" />
                                <label for="system2">Mpesa</label>
                            </div>
                            <div class="single-payment-gateway">
                                <input type="radio" id="system3" />
                                <label for="system3">Paypal</label>
                            </div>
                        </div>
                        <div class="place-order text-center mt-60">
                            <a href="#" class="btn-common width-180">place porder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--checkout-area end-->

<!--brands-area start-->
<!--brands-area end-->

<!--footer-area start-->
@include('clientPartial.footer')
<!--footer-area end-->

<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-3.3.1 version -->
<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstra.min js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- mmenu js -->
<script src="assets/js/jquery.mmenu.js"></script>
<!-- easing js -->
<script src="assets/js/jquery.easing.min.js"></script>
<!---slick-js-->
<script src="assets/js/slick.min.js"></script>
<!---letteranimation-js-->
<script src="assets/js/letteranimation.min.js"></script>
<!-- jquery-ui js -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- jquery.countdown js -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- venobox js -->
<script src="assets/js/venobox.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:29 GMT -->
</html>
