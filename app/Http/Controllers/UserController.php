<?php

namespace App\Http\Controllers;


use App\Models\Orderdetail;
use App\Models\User;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\PasswordReset;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewDashboard(){
       
        $user_id = Auth::guard('web')->user()->id;
        
        $orders = Order::where('user_id',$user_id)->get();
        $multipleOrders = array();
       
        foreach($orders as $order){
            $orderInfo = array();
            $orderDetail = Orderdetail::where('order_id', $order->id)->get();
            foreach($orderDetail as $product){
                $productId = Purchase::where('barcode', $product->barcode_no)->get();
                $productInfo = Product::where('id', $productId[0]->product_id)->get();
                $productDetail = (object) array(
                    'id'=> $order->id,
                    'name' => $productInfo[0]->name,
                    'price' =>$productInfo[0]->price,
                    'status' => $order->status
                );
                array_push($orderInfo,$productDetail);

            }
            array_push($multipleOrders, $orderInfo);
            
        }
     
        return view('dashboard',compact('multipleOrders'));

    }



   
   
    public function changeDetails(Request $request)
    {
        
        $input = $request->all();
        $first_name = $input['first-name'];
        $last_name = $input['last-name'];
        $email = $input['email'];
        $phone = $input['phone'];

    
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);
        $user['name'] = $first_name;
        $user['lastname'] = $last_name;
        $user['email'] = $email;
        $user['phone'] = $phone;
        $user->save();
        
        return redirect('dashboard');
      
        
    }
    public function changePassword(Request $request){
        $input = $request->all();
        $current_pwd = $input['password'];
        $new_pwd = $input['new-password'];

        
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);
        $user['password'] = Hash::make($new_pwd);
        $user['remember_token'] = Str::random(60);
        $user->save();

        return redirect('dashboard');


    }
    

    public function viewOrder($id){

        $invoice = DB::table('orders')->find($id);
        $orderDetail = DB::table('orderdetails')->where('order_id', '=', $id)->get();
        $user_ids = DB::table('orderdetails')->select('user_id')->where('order_id', '=', $id)->get();
        $user = DB::table('users')->select('name')->where('id', '=', $user_ids[0]->user_id)->get();
        $products = [];
        $total = 0;
        foreach($orderDetail as $item){
           $product = DB::table('products')->find($item->product_id);
           array_push($products,$product);
           $total = $total + ($product->price * $item->quantity);
        }
        $data = array(
           "user"=>$user[0],
           "invoice"=>$invoice,
           "products"=>$products,
           "orderDetail"=>$orderDetail,
           "total"=>$total
       );
       return view('generate_invoice',compact('data'));
       
   }
   

}
