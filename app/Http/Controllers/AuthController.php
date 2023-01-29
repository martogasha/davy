<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('auth.login',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function userLogin(Request $request){
        $user = User::where('user_email',$request->email)->first();
        if (Auth::attempt([
            'user_email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            if ($user->user_role==0){
                return redirect(url('admin'));
            }
            else{
                return redirect(url('checkout'));
            }
        }
        else{
            return redirect()->back()->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
    public function register(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('auth.register',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function userRegister(Request $request){
        $register = User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'user_email'=>$request->input('email'),
            'user_phone'=>$request->input('phone'),
            'password'=>Hash::make($request->input('password')),
            'user_role'=>1
        ]);
        return redirect(url('Login'))->with('success','Register Success Login');
    }
}
