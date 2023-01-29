<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - About Us</title>
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

        <div class="breadcrumb-area mt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb-area end-->
</header>
<!--header-area end-->

<!--page-banner-area start-->
<!--banner-area end-->

<!--about-area start-->
<div class="about-area mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-100p" src="assets/images/sliders/slider1.JPG" alt="" STYLE="height: 300px;width: 600px" />
            </div>
            <div class="col-lg-6 mt-sm-30">
                <div id="accordion">
                    <div class="card single-faq">
                        <div class="card-header faq-heading" id="headingOne">
                            <h5 class="mb-0">
                                <a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    DAVIX DESIGN


                                    <i class="fa fa-plus-circle pull-right"></i>
                                    <i class="fa fa-minus-circle pull-right"></i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Davix Design is a creative design and branding company aimed at providing the best solutions to corporates, small businesses and other institutions to help them in advertising and marketing. We make sure that your brand always stands out in the highly competitive market. Grid Branding Solutions has a team of creative, motivated and passionate designers who work together to give you the solutions you need.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <br>
</div>
<div class="container">
    <div class="col-lg-6">
        <h3>Directions</h3>
        <hr>
    <div class="row">
    <div id="map" style="width:100%;height: 400px"></div>
</div>
    </div>
</div>
<!--about-area end-->
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
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyCm2jbUoX9T_MylOzVAaRiXKauyh2DXn_E"></script>

</body>
<script>
    x = navigator.geolocation;
    x.getCurrentPosition(success, failure);
    function success(position){
        var myLat = -1.244494;
        var myLong = 36.664079;
        var coords = new google.maps.LatLng(myLat,myLong);
        var mapOptions = {
            zoom:9,
            center: coords,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({map:map, position:coords});
    }
    function failure(){
    }

</script>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:30 GMT -->
</html>
