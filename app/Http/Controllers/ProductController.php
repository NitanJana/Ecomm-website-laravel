<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id) {
        $data = Product::find($id);
        return view('details',['product'=>$data]);
    }

    function search(Request $req) {
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req) {
        if($req->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
        
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartlist(){
        $user_id = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeItem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $user_id = Session::get('user')['id'];
        $total =  DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req){
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$user_id)->get();
        foreach ($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$user_id)->delete();
        }
        $req->input();
        return redirect('/');

    }

    function myOrders(){
        $user_id = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('myorders',['orders'=>$orders]);

    }
}
