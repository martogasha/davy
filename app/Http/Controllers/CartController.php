<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserSystemInfoHelper;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.cart', ['products'=>$cart->item,'totalPrice'=>$cart->totalPrice]);
    }

    public function store(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cart',$cart);
    }
    public function cartOne(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cart',$cart);
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function storeOne(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cart',$cart);
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->item)>0) {
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
    public function addByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        if (count($cart->item)>0) {
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->item)>0) {
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED FROM CART');
    }
}
