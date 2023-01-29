<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:23:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Davix - Search Results</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home <i class="fa fa-angle-right"></i></a></li>
                            <li>Search Results</li>
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
                <div class="sidebar">
                    <div class="price_filter mt-40">
                        <div class="section-title">
                            <h3>Filter by price</h3>
                        </div>
                        <div class="price_slider_amount">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <div class="col-lg-6">
                                    <button>Filter</button>
                                </div>
                            </div>
                        </div>
                        <div id="slider-range"></div>
                    </div>
                    <!--latest-products-->
                    <div class="products-list mt-30">
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
                </div>
            </div>
            <div class="col-xl-10 col-lg-9">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6">
                        <div class="section-title">
                            <h3>Shop Grid</h3>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="products-sort">
                            <form>
                                <select>
                                    <option>Default Sorting</option>
                                    <option>Sort by A - Z</option>
                                    <option>Sort Price Low - High</option>
                                </select>
                            </form>
                        </div>
                        <div class="products-sort">
                            <form>
                                <label>Show :</label>
                                <select>
                                    <option>12</option>
                                    <option>8</option>
                                    <option>4</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="site-pagination pull-right">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li>of</li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-view-system pull-right" role="tablist">
                            <ul class="nav nav-tabs">
                                <li><a class="active" data-toggle="tab" href="#grid-products"><img src="assets/images/icons/icon-grid.png" alt="" /></a></li>
                                <li><a data-toggle="tab" href="#list-products"><img src="assets/images/icons/icon-list.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="grid-products" class="tab-pane active">
                        <div class="row">
                            @if(!empty($shops))
                            @foreach($shops as $shop)
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-single">
                                    <div class="product-title">
                                        <h4><a href="{{url('productDetail',$shop->id)}}">{{$shop->product_name}}</a></h4>
                                    </div>
                                    <div class="product-thumb">
                                        <a href="{{url('productDetail',$shop->id)}}"><img src="{{asset('uploads/product/'.$shop->product_image)}}" alt="" /></a>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" class="view" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-price-rating">
                                        <div class="pull-left">
                                            <span>Ksh {{$shop->product_price}}</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span class="rating-quantity">(0)</span>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                                <h5>No Results found</h5>
                            @endif

                        </div>
                    </div>
                    <div id="list-products" class="tab-pane">
                        <div class="product-single wide-style">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/shop/16.jpg" alt="" /></a>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                    <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                    <div class="product-title">
                                        <small><a href="#">Samsung</a></small>
                                        <h4><a href="#">Samsung Electronics UN55MU6500 Curved 55-Inch 4K Ultra HD Smart LED TV (2019 Model)</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="product-text">
                                        <p>- 4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</p>
                                        <p>- See vibrant and pure color for a realistic experience.</p>
                                        <p>- OneRemote automatically detects and controls all your connected devices and content with no manual
                                            programming required*.</p>
                                        <p>- Smooth action on fast-moving content with Motion Rate 120</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4">
                                    <div class="product-action stuck text-left">
                                        <div class="free-delivery">
                                            <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                        </div>
                                        <div class="product-price-rating">
                                            <div>
                                                <del>629.99</del>
                                            </div>
                                            <span>$495.00</span>
                                        </div>
                                        <div class="product-stock">
                                            <p>Avability: <span>In stock</span></p>
                                        </div>
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-single wide-style">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/shop/17.jpg" alt="" /></a>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                    <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                    <div class="product-title">
                                        <small><a href="#">Samsung</a></small>
                                        <h4><a href="#">Samsung Electronics QN55Q8C Curved 55-Inch 4K Ultra HD Smart QLED TV (2019 Model)</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="product-text">
                                        <p>- 4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</p>
                                        <p>- See vibrant and pure color for a realistic experience.</p>
                                        <p>- OneRemote automatically detects and controls all your connected devices and content with no manual
                                            programming required*.</p>
                                        <p>- Smooth action on fast-moving content with Motion Rate 120</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4">
                                    <div class="product-action stuck">
                                        <div class="free-delivery">
                                            <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                        </div>
                                        <div class="product-price-rating">
                                            <del>629.99</del>
                                            <span>$495.00</span>
                                        </div>
                                        <div class="product-stock">
                                            <p>Avability: <span>In stock</span></p>
                                        </div>
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-single wide-style">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/shop/18.jpg" alt="" /></a>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                    <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                    <div class="product-title">
                                        <small><a href="#">Samsung</a></small>
                                        <h4><a href="#">Samsung Electronics UN65MU8500 Curved 65-Inch 4K Ultra HD Smart LED TV (2017 Model)</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="product-text">
                                        <p>- 4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</p>
                                        <p>- See vibrant and pure color for a realistic experience.</p>
                                        <p>- OneRemote automatically detects and controls all your connected devices and content with no manual
                                            programming required*.</p>
                                        <p>- Smooth action on fast-moving content with Motion Rate 120</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4">
                                    <div class="product-action stuck">
                                        <div class="free-delivery">
                                            <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                        </div>
                                        <div class="product-price-rating">
                                            <del>629.99</del>
                                            <span>$495.00</span>
                                        </div>
                                        <div class="product-stock">
                                            <p>Avability: <span>In stock</span></p>
                                        </div>
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-single wide-style">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-thumb">
                                        <a href="#"><img src="assets/images/products/shop/19.jpg" alt="" /></a>
                                        <div class="product-quick-view">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                    <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                    <div class="product-title">
                                        <small><a href="#">Samsung</a></small>
                                        <h4><a href="#">Samsung CF791 Series 34-Inch Curved Widescreen Monitor (C34F791)</a></h4>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="product-text">
                                        <p>- 4X more pixels than Full HD means you’re getting 4X the resolution, so you’ll clearly see the difference.</p>
                                        <p>- See vibrant and pure color for a realistic experience.</p>
                                        <p>- OneRemote automatically detects and controls all your connected devices and content with no manual
                                            programming required*.</p>
                                        <p>- Smooth action on fast-moving content with Motion Rate 120</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4">
                                    <div class="product-action stuck">
                                        <div class="free-delivery">
                                            <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                        </div>
                                        <div class="product-price-rating">
                                            <del>629.99</del>
                                            <span>$495.00</span>
                                        </div>
                                        <div class="product-stock">
                                            <p>Avability: <span>In stock</span></p>
                                        </div>
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-30">
                    <div class="col-lg-6">
                        <div class="site-pagination">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li>of</li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-results pull-right">
                            <span>Showing 1–3 of 60 results</span>
                            <div class="products-sort ml-35 mr-0">
                                <form>
                                    <label>Show :</label>
                                    <select>
                                        <option>12</option>
                                        <option>8</option>
                                        <option>4</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--recently-viewed-products-start-->
                <!--recently-viewed-products-end-->
            </div>
        </div>
    </div>
</div>
<!--products-area end-->

<!--brands-area start-->
<div class="container-fluid mt-60">
    <div class="brands-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-items">
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/1.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/2.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/3.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/4.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/5.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/6.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/7.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="assets/images/brands/8.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
