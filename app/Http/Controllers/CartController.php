<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use App\Models\Productimage;
use App\Cart;

use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Purchase;
use Illuminate\Http\Request;

class CartController extends Controller
{
   
    
    
    public function viewCart(Request $request){       
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();

        $subTotal = 0;
        $shipping = 150;
        $grandTotal = 0;
        
        if($request->session()->has('cart')){
            
            $cart = $request->session()->get('cart');
            foreach($cart as $item){
                $subTotal = $subTotal + ($item->price * $item->qty);
            }
            $grandTotal = $subTotal + $shipping;
            return view('shopping_cart', compact('subTotal','shipping','grandTotal','catagories','logo','navigation'));
        }
        else{
            
            return view('shopping_cart', compact('subTotal','shipping','grandTotal','catagories','logo','navigation'));
        }
        
       
    }

    public function addToCart(Request $request){

        $barcode = $request->input('barcode');
        $product = Purchase::where('barcode', "=", $barcode)->get();
        $productDetail = Product::find($product[0]->product_id);
        $cartProduct = (object) array(
            'name' =>$productDetail->name,
            'thumbnail' => $productDetail->thumbnail,
            'barcode' =>$product[0]->barcode,
            'price' => $product[0]->selling_price,
            'qty' => 1
        );
        
        $oldCart  = $request->session()->has('cart')? $request->session()->get('cart'): null;
        if($oldCart){
            $inCart = false;
            foreach($oldCart as $item){
                if($item->barcode == $barcode){
                    $item->qty++;
                    $inCart = true;
                    break;
                }
            }
            if($inCart){
                $newCart = $oldCart;
            }
            else{
                $newCart = $oldCart;
                array_push($newCart,$cartProduct);
            }
        }
        else{
            $newCart = array($cartProduct);
        }
        $request->session()->put('cart', $newCart);
      
        $notification = array(
            'message' => 'Product Added to cart!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('shoppingCart')->with($notification);
        
    }
   
    public function updateCart(Request $request){
        $barcode = $request->input('barcode');
        $product = Purchase::where('barcode', "=", $barcode)->get();
        $quantity = $request->input('newQuantity');
        $cart  = $request->session()->get('cart');
        foreach($cart as $item){
            if($item->barcode == $barcode){
                $item->qty = $quantity ;
                break;
            }
        }
        $request->session()->put('cart', $cart);
        return response()->json(['cart'=>json_encode($cart)]);
        
    
    }

    public function removeCartProduct(Request $request){
        
        $barcode = $request->input('barcode');
        $product = Purchase::where('barcode', "=", $barcode)->get();
        $cart = $request->session()->get('cart');
        foreach($cart as $key=>$item){
            
            if($cart[$key]->barcode == $barcode ){
                unset($cart[$key]);
                $newcart = array_values($cart);
                $request->session()->put('cart', $newcart);
            }
        }

        //view cart
        $subTotal = 0;
        $grandTotal = 0;
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            foreach($cart as $item){
                $subTotal = $subTotal + ($item->price * $item->qty);
            }
            $grandTotal = $subTotal ;
            $notification = array(
                'message' => 'Product removed!',
                'alert-type' => 'success'
            );
            return redirect()->route('shoppingCart')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Product could not removed!',
                'alert-type' => 'success'
            );
            return redirect()->route('shoppingCart')->with($notification);
        }
            
        
    }
}