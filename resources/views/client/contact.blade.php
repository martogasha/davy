<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Contact Us</title>
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
        <!--header-top-->
     @include('clientPartial.nav')
    <!--breadcrumb-area start-->
    <div class="breadcrumb-area mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb-area end-->
</header>
<!--header-area end-->
@include('flash-message')
<!--contact-us-area start-->
<div class="contact-area mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="customer-supporter">
                    <h1>How can we help you?</h1>
                    <div class="single-supporter mt-35">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="supporter-desc mt-sm-20">
                                    <h3>Davix Designs</h3>
                                    <p>Phone No: <b>0727995279</b></p>
                                    <p>Phone No: <b>0734421552</b></p>
                                    <p>Headquarter located at kikuyu</p>
                                    <p>info.davixdesign.co.ke</p>
                                    <p>sales.davixdesign.co.ke</p>
                                    <p>Davixdesignsbg@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form mt-sm-30">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" placeholder="Name" name="name" required data-error="NEW ERROR MESSAGE" />
                            </div>
                            <div class="col-sm-12 mt-30">
                                <input type="text" placeholder="Phone Number" name="phone" required/>
                            </div>
                            <div class="col-sm-12 mt-30">
                                <input type="text" placeholder="Email" name="email" required/>
                            </div>
                            <div class="col-sm-12 mt-30">
                                <input type="text" placeholder="Subject" name="subject" required/>
                            </div>
                            <div class="col-sm-12 mt-30">
                                <textarea placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class="col-sm-12 mt-40">
                                <button type="submit" class="btn-common">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact-us-area end-->

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

<!--google-map-->

</body>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:25:01 GMT -->
</html>
