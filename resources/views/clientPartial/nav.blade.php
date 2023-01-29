<!--header-top-->
<div class="header-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="topbar-left">
                    <ul class="list-none">
                        <li>SHOP EVENTS & SAVE UP TO <span>15% OFF!</span></li>
                        <li>Call Us: <span>+254 727 995 279</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="topbar-right">
                    <div class="social-icons pull-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header-bottom-->
<div class="sticker header-bottom">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/LOGO.png')}}" alt="logo" /></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('shop')}}">
                                    <span class="text-label label-featured">New</span>
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{url('gallery')}}">
                                    Gallery
                                </a>
                            </li>
                            <li><a href="#">Services</a>
                                <ul class="submenu">
                                    <li><a href="{{url('services')}}">WEB DESIGN</a></li>
                                    <li><a href="{{url('digitalMarketing')}}">DIGITAL MARKETING</a></li>
                                    <li><a href="{{url('corporate')}}">CORPORATE IDENTITY</a></li>
                                    <li><a href="{{url('graphic')}}">GRAPHIC DESIGN</a></li>
                                    <li><a href="{{url('large')}}">LARGE FORMAT PRINTING</a></li>
                                    <li><a href="{{url('promotional')}}">PROMOTIONAL ITEMS</a></li>
                                    <li><a href="{{url('signage')}}">SIGNAGE SERVICE</a></li>
                                    <li><a href="{{url('digitalPrinting')}}">DIGITAL PRINTING</a></li>
                                    <li><a href="{{url('offset')}}">OFFSET PRINTING</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('blog')}}">
                                    Blog
                                </a>
                            </li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                            <li><a href="#">Track Order</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="col-lg-2">
                    <div class="register-login pull-right">
                        <a href="#" data-toggle="modal" data-target="#auth">{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</a>
                    </div>
                </div>
                <div id="auth" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header flex-column">
                                <div class="icon-box">
                                    <i class="material-icons">&#xE5CD;</i>
                                </div>
                                <h4 class="modal-title w-100">Are you sure?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Do you really want to Logout.</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">View Profile</button>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    body {
                        font-family: 'Varela Round', sans-serif;
                    }
                    .modal-confirm {
                        color: #636363;
                        width: 400px;
                    }
                    .modal-confirm .modal-content {
                        padding: 20px;
                        border-radius: 5px;
                        border: none;
                        text-align: center;
                        font-size: 14px;
                    }
                    .modal-confirm .modal-header {
                        border-bottom: none;
                        position: relative;
                    }
                    .modal-confirm h4 {
                        text-align: center;
                        font-size: 26px;
                        margin: 30px 0 -10px;
                    }
                    .modal-confirm .close {
                        position: absolute;
                        top: -5px;
                        right: -2px;
                    }
                    .modal-confirm .modal-body {
                        color: #999;
                    }
                    .modal-confirm .modal-footer {
                        border: none;
                        text-align: center;
                        border-radius: 5px;
                        font-size: 13px;
                        padding: 10px 15px 25px;
                    }
                    .modal-confirm .modal-footer a {
                        color: #999;
                    }
                    .modal-confirm .icon-box {
                        width: 80px;
                        height: 80px;
                        margin: 0 auto;
                        border-radius: 50%;
                        z-index: 9;
                        text-align: center;
                        border: 3px solid #f15e5e;
                    }
                    .modal-confirm .icon-box i {
                        color: #f15e5e;
                        font-size: 46px;
                        display: inline-block;
                        margin-top: 13px;
                    }
                    .modal-confirm .btn, .modal-confirm .btn:active {
                        color: #fff;
                        border-radius: 4px;
                        background: #60c7c1;
                        text-decoration: none;
                        transition: all 0.4s;
                        line-height: normal;
                        min-width: 120px;
                        border: none;
                        min-height: 40px;
                        border-radius: 3px;
                        margin: 0 5px;
                    }
                    .modal-confirm .btn-secondary {
                        background: #c1c1c1;
                    }
                    .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
                        background: #a8a8a8;
                    }
                    .modal-confirm .btn-danger {
                        background: #f15e5e;
                    }
                    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
                        background: #ee3535;
                    }
                    .trigger-btn {
                        display: inline-block;
                        margin: 100px auto;
                    }
                </style>
            @else
            <div class="col-lg-2">
                <div class="register-login pull-right">
                    <a href="{{url('Register')}}" data-toggle="modal" data-target="#auth">Register</a>
                    <span>/</span>
                    <a href="{{url('Login')}}">Sign in</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!--products-search-->
<div class="products-search">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-2">
                <div class="collapse-menu mt-0">
                    <ul>
                        <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                            <ul class="vm-dropdown d-hidden">
                                <li><a href="{{url('promotionalItems')}}"><i class="fa fa-umbrella"></i>Promotional Items</a></li>
                                <li><a href="{{url('interiorDecor')}}"><i class="fa fa-indent"></i>Interior Decor</a></li>
                                <li><a href="{{url('cashBookReceipt')}}"><i class="fa fa-book"></i>Cash/Receipt Books</a></li>
                                <li><a href="{{url('corporateBranding')}}"><i class="fa fa-print"></i>Corporate Branding</a></li>
                                <li><a href="{{url('digitalOffsetPrinting')}}"><i class="fa fa-print"></i>Digital & Offset Printing</a></li>
                                <li><a href="{{url('largeFormatPrinting')}}"><i class="fa fa-print"></i>Large Format Printing</a></li>
                                <li><a href="{{url('screenPrinting')}}"><i class="fa fa-print"></i>Screen Printing</a></li>
                                <li><a href="{{url('uvPrinting')}}"><i class="fa fa-print"></i>UV Printing</a></li>
                                <li><a href="{{url('embroideryServices')}}"><i class="fa fa-print"></i>Embroidery Services</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{url('search')}}" method="post">
                    @csrf
                    <div class="search-box mt-sm-15">
                        <select>
                            <option>All Categories</option>
                            <option>Promotional Items</option>
                            <option>Screen Printing</option>
                            <option>Corporate Branding</option>
                            <option>UV Printing</option>
                        </select>
                        <input type="text" name="search" placeholder="What do you need?" />
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="mini-cart pull-right">
                    <ul>
                        <li><a href="#" title="Track Your Order"><i class="ti-truck"></i></a></li>
                        <li><a href="#"><i class="icon_heart_alt"></i><span></span></a></li>
                        <li><a href="javascript:void(0);" class="minicart-icon"><i class="icon_bag_alt"></i>Ksh {{$totalPrice}}<span>{{\Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty: ''}}</span></a>
                            <div class="cart-dropdown">
                                <ul>
                                    @if(isset($products))
                                        @foreach($products as $product)
                                    <li>
                                        <div class="mini-cart-thumb">
                                            <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="" /></a>
                                        </div>
                                        <div class="mini-cart-heading">
                                            <span>Ksh {{$product['item']['product_price']}} x {{$product['quantity']}}</span>
                                            <h5><a href="#">{{$product['item']['product_name']}}</a></h5>
                                        </div>
                                        <div class="mini-cart-remove">
                                            <a href="{{url('cartRemove',$product['item']['id'])}}"><button><i class="ti-close"></i></button></a>
                                        </div>
                                    </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <div class="minicart-total fix">
                                    <span class="pull-left">total:</span>
                                    @if(isset($totalPrice))
                                    <span class="pull-right">Ksh {{$totalPrice}}</span>
                                        @endif
                                </div>
                                <div class="mini-cart-checkout">
                                    <a href="{{url('cart')}}" class="btn-common view-cart">VIEW CART</a>
                                    <a href="{{url('checkout')}}" class="btn-common checkout mt-10">CHECKOUT</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--mobile-header-->
<div class="sticker mobile-header">
    <div class="container-fluid">
        <!--logo and cart-->
        <div class="row align-items-center">
            <div class="col-sm-4 col-6">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/LOGO.png')}}" alt="logo" /></a>
                </div>
            </div>
            <div class="col-sm-8 col-6">
                <div class="mini-cart text-right">
                    <ul>
                        <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                        <li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>{{\Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty: ''}}</span></a>
                            <div class="cart-dropdown">
                                <ul>
                                    @if(isset($products))
                                        @foreach($products as $product)
                                            <li>
                                                <div class="mini-cart-thumb">
                                                    <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="" /></a>
                                                </div>
                                                <div class="mini-cart-heading">
                                                    <span>Ksh {{$product['item']['product_price']}} x {{$product['quantity']}}</span>
                                                    <h5><a href="#">{{$product['item']['product_name']}}</a></h5>
                                                </div>
                                                <div class="mini-cart-remove">
                                                    <a href="{{url('cartRemove',$product['item']['id'])}}"><button><i class="ti-close"></i></button></a>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <div class="minicart-total fix">
                                    <span class="pull-left">total:</span>
                                    @if(isset($totalPrice))
                                        <span class="pull-right">Ksh {{$totalPrice}}</span>
                                    @endif
                                </div>
                                <div class="mini-cart-checkout">
                                    <a href="{{url('cart')}}" class="btn-common view-cart">VIEW CART</a>
                                    <a href="{{url('checkout')}}" class="btn-common checkout mt-10">CHECKOUT</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--search-box-->
        <div class="row align-items-center">
            <div class="col-sm-12">
                <form action="{{url('search')}}" method="post">
                    @csrf
                <div class="search-box mt-sm-15">
                    <select>
                        <option>All Categories</option>
                        <option>Promotional Items</option>
                        <option>Screen Printing</option>
                        <option>Corporate Branding</option>
                        <option>UV Printing</option>
                    </select>
                    <input type="text" name="search" placeholder="What do you need?" />
                    <button type="submit">Search</button>
                </div>
                </form>
            </div>
        </div>
        <!--site-menu-->
        <div class="row mt-sm-10">
            <div class="col-lg-12">
                <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                <div class="mainmenu">
                    <nav id="my-menu">
                        <ul>
                            <li><a href="index-2.html">Home <b class="caret"></b></a>
                                <ul class="submenu">
                                    <li><a href="index-2.html">Home Version 1</a></li>
                                    <li><a href="index-3.html">Home Version 2</a></li>
                                    <li><a href="index-4.html">Home Version 3</a></li>
                                    <li><a href="index-5.html">Home Version 4</a></li>
                                    <li><a href="index-6.html">Home Version 5</a></li>
                                    <li><a href="index-7.html">Home Version 6</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text-label label-featured">Featured</span>
                                    Shop
                                    <b class="caret"></b>
                                </a>
                                <ul>
                                    <li>
                                        <span class="mega-menu-title">Shop Page</span>
                                        <ul>
                                            <li><a href="shop.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-list-col-3.html">Shop Column 3</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="poduct-details-sidebar.html">Product Details Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-menu-title">Features</span>
                                        <ul>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="shop-compare.html">Shop Compare</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-menu-title">Pages</span>
                                        <ul>
                                            <li><a href="about.html">About </a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-menu-title">Blog</span>
                                        <ul>
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="text-label label-hot">Hot</span>
                                    Pages
                                    <b class="caret"></b>
                                </a>
                                <ul class="submenu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="404.html">404 Eror</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog <b class="caret"></b></a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                            <li><a href="#">Purchase Theme</a></li>
                        </ul>
                    </nav>
                </div>

                <!--category-->
                <div class="collapse-menu mt-0 pull-right">
                    <ul>
                        <li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Departments</span></a>
                            <ul class="vm-dropdown d-hidden">
                                <li><a href="#"><i class="fa fa-laptop"></i>Computer <b class="caret"></b></a>
                                    <ul class="mega-menu">
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Shop Page</span>
                                            <ul>
                                                <li><a href="#">Products Block Top</a></li>
                                                <li><a href="#">Products Block Bottom</a></li>
                                                <li><a href="#">Shop Grid 5 Column</a></li>
                                                <li><a href="#">Shop List</a></li>
                                                <li><a href="#">Shop width Normal</a></li>
                                                <li><a href="#">Shop List Normal</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Featured</span>
                                            <ul>
                                                <li><a href="#">Thumbnails Left</a></li>
                                                <li><a href="#">Thumbnails Right</a></li>
                                                <li><a href="#">Thumbnails Bottom</a></li>
                                                <li><a href="#">Thumbnails Full</a></li>
                                                <li><a href="#">Single 2 Colums</a></li>
                                                <li><a href="#">Tabs Content</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Shop Page</span>
                                            <ul>
                                                <li><a href="#">Simple Product</a></li>
                                                <li><a href="#">Grouped Product</a></li>
                                                <li><a href="#">Variable Product</a></li>
                                                <li><a href="#">External Product</a></li>
                                                <li><a href="#">My account</a></li>
                                                <li><a href="#">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Features</span>
                                            <ul>
                                                <li><a href="#">Detail with Video</a></li>
                                                <li><a href="#">Variations Swatches</a></li>
                                                <li><a href="#">With Countdown Timer</a></li>
                                                <li><a href="#">Catalog Mode</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-desktop"></i>TV & Smart box <b class="caret"></b></a>
                                    <ul class="mega-menu">
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Shop Page</span>
                                            <ul>
                                                <li><a href="#">Products Block Top</a></li>
                                                <li><a href="#">Products Block Bottom</a></li>
                                                <li><a href="#">Shop Grid 5 Column</a></li>
                                                <li><a href="#">Shop List</a></li>
                                                <li><a href="#">Shop width Normal</a></li>
                                                <li><a href="#">Shop List Normal</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-single">
                                            <span class="mega-menu-title">Featured</span>
                                            <ul>
                                                <li><a href="#">Thumbnails Left</a></li>
                                                <li><a href="#">Thumbnails Right</a></li>
                                                <li><a href="#">Thumbnails Bottom</a></li>
                                                <li><a href="#">Thumbnails Full</a></li>
                                                <li><a href="#">Single 2 Colums</a></li>
                                                <li><a href="#">Detail with Accessories</a></li>
                                                <li><a href="#">Tabs Content</a></li>
                                                <li><a href="#">Accordion Tabs</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-camera"></i>Camera & Photography</a></li>
                                <li><a href="#"><i class="fa fa-headphones"></i>Headphones</a></li>
                                <li><a href="#"><i class="fa fa-music"></i>Musical Instruments</a></li>
                                <li><a href="#"><i class="fa fa-mobile"></i>Smart phone & Tablets</a></li>
                                <li><a href="#"><i class="fa fa-flash"></i>Accessories</a></li>
                                <li><a href="#"><i class="fa fa-microphone"></i>Home Audio & Theater</a></li>
                                <li><a href="#"><i class="fa fa-print"></i>Printer</a></li>
                                <li><a href="#"><i class="fa fa-fax"></i>Fax machine</a></li>
                                <li><a href="#"><i class="fa fa-spoon"></i>Household goods</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i>Watch</a></li>
                                <li><a href="#"><i class="fa fa-random"></i>Other</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auth Modal -->
<div class="modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('storeProduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="customModalTwoLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">
                            <!-- Tabs Titles -->

                            <!-- Icon -->
                            <div class="fadeIn first">
                                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                            </div>

                            <!-- Login Form -->
                            <form>
                                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                                <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                                <input type="submit" class="fadeIn fourth" value="Log In">
                            </form>

                            <!-- Remind Passowrd -->
                            <div id="formFooter">
                                <a class="underlineHover" href="#">Forgot Password?</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer custom">

                    <div class="left-side">
                        <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <button type="submit" class="btn btn-link success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

