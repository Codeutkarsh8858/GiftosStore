<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->role == 'user'){
            return view('dashboard');
        }
        else if(Auth::check() && Auth::user()->role == 'admin'){
             return view('admin.dashboard');
        }
    }

    public function indexPage(){
       // $cart_pro_count = ProductCart::where('user_id',Auth::id())->count();

        $products = Product::all();
        
        return view('index',compact('products'));
    }

    public function latestProduct(){
        $products = Product::latest()->limit(8)->get();
        return view('latest_product',compact('products'));
    }

    public function searchProductUser(Request $req){
        $search = Product::where('product_title','LIKE','%'.$req->search.'%')->get();
        return view('search_product',compact('search'));
    }   

    public function productDetails($id){
        $product = Product::findorFail($id);
        return view('product_details',compact('product'));
    }

    public function whyUs(){
        return view('why_us');
    }

    public function contactUs(){
        return view('contact_us');
    }

    public function contactPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000'
        ]);

        return redirect()->back()->with('contact_success', 'Thank you! Your inquiry has been received. Our team will get back to you shortly.');
    }

    public function addToCart($id){
        $product = Product::findorFail($id);
        $product_cart = new ProductCart();

        $product_cart->user_id = Auth::id();
        $product_cart->product_id = $product->id;
        $product_cart->save();
        return redirect()->route('user.viewcart')->with('product_addtocart_message',"Product add to  cart .");
        }

    public function viewCart(){
        $cart = ProductCart::with('user', 'product')->where('user_id', Auth::id())->get();

        return view('viewcart',compact('cart'));
    }

    public function deleteCartData($id){
        $cart = ProductCart::findorFail($id);
        $cart->delete();
        return redirect()->route('user.viewcart')->with('cart_delete_message','data deleted successfully.');
    }

    public function confirmOrder(Request $req){
        $cart_product_id = ProductCart::where('user_id',Auth::id())->get();
        $address = $req->reciever_address;
        $phone = $req->reciever_phone;
        foreach ($cart_product_id as $cart) {
            $order = new Order();
            $order->reciever_address = $address;
            $order->reciever_phone = $phone;
            $order->user_id = Auth::id();
            $order->product_id = $cart->product_id;
            $order->save();
        }

        $cart = ProductCart::where('user_id',Auth::id())->get();
        foreach($cart as $cart){
            $cart_id = ProductCart::findorFail($cart->id);
            $cart_id->delete();
        }
        return redirect()->back()->with('confirmOrder','Order successfully. you are do Enjoy.');
    }

    public function myOrder(){
        $order = Order::where('user_id',Auth::id())->get();
        return view('myorder',compact('order'));
    }

    public function stripe()
    {
        $cart = ProductCart::with('user', 'product')->where('user_id', Auth::id())->get();
        return view('stripe',compact('cart'));
    }

    public function  stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => 10 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
                
        return back()
                ->with('success', 'Payment successful!');
    }
    
}
