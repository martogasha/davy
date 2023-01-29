<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:23:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - {{\Illuminate\Support\Str::of($detail->title)->words(3)}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mmenu.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="{{asset('assets/css/cssanimation.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
    <!-- helper css -->
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>{{\Illuminate\Support\Str::of($detail->title)->words(3)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb-area end-->
</header>
<!--header-area end-->

<!--products-area start-->
<div class="shop-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3">
                    <!--latest-products-->
                        <div class="section-title mb-30">
                            <h3>Latest Items</h3>
                        </div>
                        <div class="one-carousel dots-none">
                            <div>
                                <ul class="list-none">
                                    @foreach($lats as $lat)
                                        <li>
                                            <div class="product-single style-2">
                                                <div class="row align-items-center m-0">
                                                    <div class="col-lg-4 p-0">
                                                        <div class="product-thumb">
                                                            <a href="{{url('productDetail',$lat->id)}}"><img src="{{asset('uploads/product/'.$lat->product_image)}}" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 p-0">
                                                        <div class="product-title">
                                                            <h4><a href="#">{{$lat->product_name}}</a></h4>
                                                        </div>
                                                        <div class="product-price-rating">
                                                            <span>Ksh:{{$lat->product_price}}</span>
                                                            <del>Ksh:{{$lat->product_cancel_price}}</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div>
                                <ul class="list-none">
                                    @foreach($lats as $lat)
                                        <li>
                                            <div class="product-single style-2">
                                                <div class="row align-items-center m-0">
                                                    <div class="col-lg-4 p-0">
                                                        <div class="product-thumb">
                                                            <a href="{{url('productDetail',$lat->id)}}"><img src="{{asset('uploads/product/'.$lat->product_image)}}" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 p-0">
                                                        <div class="product-title">
                                                            <h4><a href="#">{{$lat->product_name}}</a></h4>
                                                        </div>
                                                        <div class="product-price-rating">
                                                            <span>Ksh:{{$lat->product_price}}</span>
                                                            <del>Ksh:{{$lat->product_cancel_price}}</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
            </div>
            <div class="col-lg-9">
                <div class="blog-details">
                    <div class="blog-title">
                        <h2>{{$detail->title}}</h2>
                    </div>
                    <img src="{{asset('uploads/product/'.$detail->image)}}" alt="" class="mb-20" />
                    <p>{{$detail->detail}} <a href="{{$detail->link}}" style="color: red">{{$detail->linkName}}</a> {{$detail->detailOne}}</p>
                    @if($detail->quote!=null)
                        <blockquote>"{{$detail->quote}}" <p>{{$detail->quoteAuthor}}</p></blockquote>
                    @endif
                    {{$detail->detailTwo}} <a href="{{$detail->linkOne}}" style="color: red">{{$detail->linkNameOne}}</a> {{$detail->detailThree}}
                    <h3>{{$detail->titleOne}}</h3>
                    <p><a href="{{$detail->detailTitleOneLink}}">{{$detail->titleOneLinkName}}</a> {{$detail->detailTitleOne}}</p>
                    <h3>{{$detail->titleTwo}}</h3>
                    <p><a href="{{$detail->titleTwoLink}}">{{$detail->titleTwoLinkName}}</a> {{$detail->detailTitleTwo}}</p>
                    <h3>{{$detail->titleThree}}</h3>
                    <p><a href="{{$detail->detailTitleThreeLink}}">{{$detail->titleThreeLinkName}}</a> {{$detail->detailTitleThree}}</p>
                    <h3>{{$detail->titleFour}}</h3>
                    <p><a href="{{$detail->detailTitleFourLink}}">{{$detail->titleFourLinkName}}</a> {{$detail->detailTitleFour}}</p>
                    <h3>{{$detail->titleFive}}</h3>
                    <p><a href="{{$detail->detailTitleFiveLink}}">{{$detail->titleFiveLinkName}}</a> {{$detail->detailTitleFive}}</p>
                    <h3>{{$detail->titleSix}}</h3>
                    <p><a href="{{$detail->detailTitleSixLink}}">{{$detail->titleSixLinkName}}</a> {{$detail->detailTitleSix}}</p>
                    <h3>{{$detail->titleSeven}}</h3>
                    <p><a href="{{$detail->detailTitleSevenLink}}">{{$detail->titleSevenLinkName}}</a> {{$detail->detailTitleSeven}}</p>
                    <h3>{{$detail->titleEight}}</h3>
                    <p><a href="{{$detail->detailTitleEightLink}}">{{$detail->titleEightLinkName}}</a> {{$detail->detailTitleEight}}</p>
                    <h3>{{$detail->titleNine}}</h3>
                    <p><a href="{{$detail->detailTitleNineLink}}">{{$detail->titleNineLinkName}}</a> {{$detail->detailTitleNine}}</p>
                    <h3>{{$detail->titleTen}}</h3>
                    <p><a href="{{$detail->detailTitleTenLink}}">{{$detail->titleTenLinkName}}</a> {{$detail->detailTitleTen}}</p>

                    <h2>{{$detail->titleConclusion}}</h2>
                    <p>{{$detail->detailConclusion}} <a href="{{$detail->linkConclusion}}" style="color: red">{{$detail->linkNameConclusion}}</a> {{$detail->detailOneConclusion}}</p>
                    @if($detail->quoteConclusion!=null)
                    <blockquote>"{{$detail->quoteConclusion}}" <p>{{$detail->quoteAuthorConclusion}}</p></blockquote>
                    @endif
                    {{$detail->detailTwoConclusion}} <a href="{{$detail->linkOneConclusion}}" style="color: red">{{$detail->linkNameOneConclusion}}</a> {{$detail->detailThreeConclusion}}
                </div>
                <div class="blog-tag-social mt-25">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <div class="social-icons style-5 text-right">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-area end-->

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

<!-- Modal -->
<div class="modal fade" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tab-content">
                            <div id="product-1" class="tab-pane fade in show active">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/1.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-2" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/2.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-3" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/3.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs products-nav-tabs horizontal quick-view mt-10">
                            <li><a class="active" data-toggle="tab" href="#product-1"><img src="assets/images/products/product-details/thumb-1.jpg" alt="" /></a></li>
                            <li><a data-toggle="tab" href="#product-2"><img src="assets/images/products/product-details/thumb-2.jpg" alt="" /></a></li>
                            <li><a data-toggle="tab" href="#product-3"><img src="assets/images/products/product-details/thumb-3.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="product-details-desc">
                                    <h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
                                    <ul>
                                        <li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
                                        <li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
                                        <li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
                                    </ul>
                                    <div class="product-meta">
                                        <ul class="list-none">
                                            <li>SKU: 00012 <span>|</span></li>
                                            <li>Categories:
                                                <a href="#">Tech</a>
                                                <a href="#">Macbook</a>
                                                <a href="#">Laptop</a>
                                                <span>|</span>
                                            </li>
                                            <li>Tags:
                                                <a href="#">Tech,</a>
                                                <a href="#">Apple</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-icons style-5">
                                        <span>Share Link:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-action stuck text-left">
                                    <div class="free-delivery">
                                        <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                    </div>
                                    <div class="product-price-rating">
                                        <div>
                                            <del>629.99</del>
                                        </div>
                                        <span>$495.00</span>
                                        <div class="pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-colors mt-20">
                                        <label>Select Color:</label>
                                        <ul class="list-none">
                                            <li>Red</li>
                                            <li>Black</li>
                                            <li>Blue</li>
                                        </ul>

                                    </div>
                                    <div class="product-quantity mt-15">
                                        <label>Quatity:</label>
                                        <input type="number" value="1" />
                                    </div>
                                    <div class="add-to-get mt-50">
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
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

</body>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:24:06 GMT -->
</html>
