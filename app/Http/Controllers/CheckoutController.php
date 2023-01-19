<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Catagory;
use App\Models\Customer;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkoutPage(Request $request){
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();
        $cart = $request->session()->get('cart');
        $subTotal = 0;
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            foreach($cart as $item){
                $subTotal = $subTotal + ($item->price * $item->qty);
            }
           
            return view('checkout',compact('catagories','logo','navigation','subTotal','cart'));
        }
        else{
            return view('checkout',compact('catagories','logo','navigation','subTotal','cart'));
        }
            
        
    }

    public function checkout(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('city');
        $zip = $request->input('zip');

        //storing order in order invoice table
        $invoice = new Order();
        $invoice['phone'] = $phone;
        $invoice['user_id'] = Auth::guard('web')->user()->id;
        $invoice['address'] = $address;
        $invoice['city'] = $city;
        $invoice['status'] = "pending";
        $invoice->save();
        
        
        $cart = $request->session()->has('cart')? $request->session()->get('cart') : [];
        if(count($cart) > 0){
            foreach($cart as $item){
                $orderDetail = new Orderdetail();
                $orderDetail['order_id'] = $invoice['id'];
                $orderDetail['barcode_no'] = $item->barcode;
                $orderDetail['quantity'] = $item->qty;
                $orderDetail['singlePrice'] = $item->price;
               
                $orderDetail->save();
            }
        }
        
        $request->session()->forget('cart');
        $notification = array(
            'message' => 'Order successfull!!',
            'alert-type' => 'success'
        );

        return redirect()->route('welcome')->with($notification);
        
    }

}
