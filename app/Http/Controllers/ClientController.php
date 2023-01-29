<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Cat;
use App\Contact;
use App\Gallery;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ClientController extends Controller
{
    public function index(){
        $larges = Product::where('product_category','large')->get();
        $digitals = Product::where('product_category','digital')->get();
        $corporates = Product::where('product_category','corporate')->get();
        $screens = Product::where('product_category','screen')->get();
        $promotions = Product::where('product_category','promotion')->get();
        $lats = Product::where('product_category','digital')->get();
        $uvs = Product::where('product_category','uv')->get();
        $dealOfTheWeek = Product::where('product_category','large')->first();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.index',[
            'larges'=>$larges,
            'digitals'=>$digitals,
            'corporates'=>$corporates,
            'screens'=>$screens,
            'promotions'=>$promotions,
            'uvs'=>$uvs,
            'lats'=>$lats,
            'dealOfTheWeek'=>$dealOfTheWeek,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function promotionalItems(){
        $lats = Product::where('product_category','promotion')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','promotion')->get();
        return view('client.promotionalItems',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function interiorDecor(){
        $lats = Product::where('product_category','interior')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','interior')->get();
        return view('client.interiorDecor',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function cashBookReceipt(){
        $lats = Product::where('product_category','book')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','book')->get();
        return view('client.cashReceipt',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function corporateBranding(){
        $lats = Product::where('product_category','corporate')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','corporate')->get();
        return view('client.corporateBranding',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function digitalOffsetPrinting(){
        $lats = Product::where('product_category','digital')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','digital')->get();
        return view('client.digitalOffsetPrinting',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function largeFormatPrinting(){
        $lats = Product::where('product_category','large')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','large')->get();
        return view('client.largeFormatPrinting',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function screenPrinting(){
        $lats = Product::where('product_category','screen')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','screen')->get();
        return view('client.screenPrinting',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function uvPrinting(){
        $lats = Product::where('product_category','uv')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','uv')->get();
        return view('client.uvPrinting',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function embroideryServices(){
        $lats = Product::where('product_category','embroidery')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::where('product_category','embroidery')->get();
        return view('client.embroideryServices',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function about(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.about',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function services(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.services',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function digitalMarketing(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.digital',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function corporate(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.corporate',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function graphic(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.graphic',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function large(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.large',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function gallery(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $images = Gallery::all();
        return view('client.gallery',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'images'=>$images
        ]);
    }
    public function promotional(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.promotional',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function signage(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.signage',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function digitalPrinting(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.digitalPrinting',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function offset(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.offset',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getProductDetail(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::find($request->product_id);
            $output = '
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tab-content">
                            <div id="product-1" class="tab-pane fade in show active">
                                <div class="product-details-thumb">
                                    <img src="uploads/product/'.$product->product_image.'" alt="" />
                                </div>
                            </div>
                            <div id="product-2" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/2.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-3" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/invoice.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="product-details-desc">
                                    <h2>'.$product->product_name.'</h2>
                                    <ul>
                                        <li>'.$product->product_desc.'</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-action stuck text-left">
                                    <div class="free-delivery">
                                        <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                    </div>
                                    <div class="product-price-rating">
                                        <div>
                                            <del>'.$product->product_cancel_price.'</del>
                                        </div>
                                        <span>Ksh '.$product->product_price.'</span>
                                        <div class="pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            ';
        }
        return response($output);
    }
    public function shop(){
        $lats = Product::where('product_category','digital')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::all();
        return view('client.shop',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function login(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('login',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function register(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('register',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }

    public function checkout(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.checkout',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function success(){
        return view('client.success');
    }
    public function productDetail($id){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $detail = Product::find($id);
        $relateds = Product::where('product_category',$detail->product_category)->get();
        return view('client.productDetail',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'detail'=>$detail,
            'relateds'=>$relateds
        ]);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $shops = Product::where('product_name','like',"%$search%")->get();
        $lats = Product::where('product_category','digital')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('client.search',[
            'shops'=>$shops,
            'lats'=>$lats,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice


        ]);
    }
    public function contact(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.contact',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function storeContact(Request $request){
        $contact = Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        return back()->with('success','FORM SUBMITTED SUCCESSFULLY');
    }
}
