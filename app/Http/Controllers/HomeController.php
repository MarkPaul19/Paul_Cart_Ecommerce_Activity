<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\Shipping;
use App\Invoice;
use App\Payment;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Auth::user()->id;

        $products_item = Order::select('*')->where('user_id','=',$user)->get();
        $products = Product::All();
        
        return view('welcome', compact('products_item','products'));
    }
    public function cart()
    {   
        $user = Auth::user()->id;

        $products_item = Order::select('*')->where('user_id','=',$user)->get();
        $products = Product::All();
        
        return view('cart', compact('products','products_item'));
    }
    public function usercart()
    {
        return view('cart');
    }
    public function userbill()
    {
        return view('billing');
    }
    public function shipping()
    {
       return view('shipping');
    }
    public function invoice()
    {
        $user = Auth::user()->id;

        $products_item = Order::select('*')->where('user_id','=',$user)->get();
        $shipping_details = Shipping::select('*')->where('user_id','=',$user)->get();
        $payment_details = Payment::select('*')->where('user_id','=',$user)->get();

        return view('invoice', compact('shipping_details','payment_details','products_item'));
    }


    public function add(Request $request, $product_id) {
       
        $products = product::find($product_id);
        

        $id = $products->id;
        $name = $products->product_name;
        $price = $products->product_price;
        $desc = $products->product_description;

        $orders = new Order;
        
        $orders->user_id = Auth::user()->id;
        $orders->product_name = $name;
        $orders->product_price = $price;
        $orders->product_description = $desc;
        $orders->save();

        return redirect('/'); 
    }
     public function remove_product(Request $request, $id) {
        $item = Order::find($id);
        $item->delete();
       
        return redirect('/');
    }
    public function shipping_info(Request $request) {

        $Fullname = $request->Fullname;
        $age = $request->age;
        $gender = $request->gender;
        $Mobile_number = $request->Mobile_number;
        $nationality = $request->nationality;
        $email = $request->email;
        $address = $request->address;
        $municipality = $request->municipality;
        $message = $request->message;



        $shipping_details = new Shipping;
        $shipping_details->user_id = Auth::user()->id;
        $shipping_details->Fullname = $Fullname;
        $shipping_details->age = $age;
        $shipping_details->gender = $gender;
        $shipping_details->Mobile_number = $Mobile_number;
        $shipping_details->nationality = $nationality;
        $shipping_details->email = $email;
        $shipping_details->address = $address;
        $shipping_details->municipality = $municipality;
        $shipping_details->message = $message;
        $shipping_details->save();

        return redirect('/billing');   
    }
    public function payment(Request $request) {

        $payment_method = $request->type_of_payment;
      

        $payment_details = new Payment;
        $payment_details->user_id = Auth::user()->id;
        $payment_details->type_of_payment = $payment_method;
        $payment_details->save();

        return redirect('/invoice');  
    }
    public function typ()
    {
        return view('thankyoupage');
    }
}
