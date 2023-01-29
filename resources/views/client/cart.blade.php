<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Shopping Cart</title>
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
                            <li>Shopping Cart</li>
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
                        <li class="active">
                            <div class="inner">
                                <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                            </div>
                        </li>
                        <li>
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
@include('flash-message')
<!--shopping-cart area-->
<div class="shopping-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="cart-table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($products))
                            @foreach($products as $product)
                        <tr>
                            <td>
                                <div class="cart-product-thumb">
                                    <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="" /></a>
                                </div>
                            </td>
                            <td>
                                <div class="cart-product-name">
                                    <h5><a href="#">{{$product['item']['product_name']}}</a></h5>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">Ksh {{$product['item']['product_price']}}</span>
                            </td>
                            <td>
                                <div class="cart-quantity-changer">
                                    <a href="{{url('cartReduceByOne',$product['item']['id'])}}">-</a>
                                    <input type="text" value="{{$product['quantity']}}"/>
                                    <a href="{{url('addByOne',$product['item']['id'])}}">+</a>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">Ksh {{$product['item']['product_price'] * $product['quantity']}}</span>
                            </td>
                            <td>
                                <div class="product-remove">
                                    <a href="{{url('cartRemove',$product['item']['id'])}}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <div class="cart-update pull-right">
                    <a href="{{url('/')}}" class="btn-common">CONTINUE SHOPPING</a>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="cart-box cart-coupon fix">
                    <h5>Discount Codes</h5>
                    <div class="cart-box-inner">
                        <p>Enter your coupin if you have one</p>
                        <input type="text" />
                        <a href="#" class="btn-common">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-box cart-total">
                    <h5>Cart Total</h5>
                    <div class="cart-box-inner">
                        <table class="table">
                            <tr>
                                <td>SUB TOTAL:</td>
                                @if(isset($totalPrice))
                                <td><span>Ksh {{$totalPrice}}</span></td>
                                    @endif
                            </tr>
                        </table>
                        <div class="proceed-checkout">
                            <div class="col-lg-12">
                                <a href="#">Checkout with multiple address</a>
                            </div>
                            <div class="col-lg-12">
                                <a href="{{url('checkout')}}" class="btn-common">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shopping-cart end-->

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

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:26 GMT -->
</html>
