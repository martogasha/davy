<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Digital Printing</title>
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
                                <li><a href="{{url('/')}}">Home <i class="fa fa-angle-right"></i></a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb-area end-->
</header>
<!--header-area end-->

<!--blog-details start-->
<div class="shop-area blog-details-area">
    <div class="container">
        <div class="row">
                <div class="blog-details">
                    <section class="container">
                        <div class="row gallery">
                            @foreach($images as $image)
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <a href="{{asset('uploads/product/'.$image->image)}}">
                                        <figure><img class="img-fluid img-thumbnail" src="{{asset('uploads/product/'.$image->image)}}" alt="Random Image"></figure>
                                    </a>
                                    <h4>{{$image->desc}}</h4>
                                </div>

                            @endforeach
                        </div>
                    </section>
                </div>
        </div>
    </div>
</div>
<style>
    /* Only for demo purposes. */
    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }
    .thumb:last-child {
        margin-bottom: 0;
    }
    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    .thumb
    figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .thumb
    figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

</style>
<!--brands-area start-->
<!--brands-area end-->
@include('clientPartial.footer')
<!--footer-area start-->
\<!--footer-area end-->

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
<!------ Include the above in your HEAD tag ---------->

</body>
<script>
    $(document).ready(function() {
        $(".gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    });

</script>
<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:57 GMT -->
</html>
