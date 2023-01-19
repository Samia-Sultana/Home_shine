<?php

namespace App\Http\Controllers;

use App\Models\Productimage;
use App\Cart;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Purchase;
use Image;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;


use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSessionSession;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories = Catagory::all();
        $allProducts = Purchase::paginate(16);

        return view('product', compact('catagories', 'allProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        if ($request->file('thumbnail')) {
            $thumbnailImage = $request->file('thumbnail');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            //$thumbnailImage->move(public_path() . '/images', $thumbnailImageName);

            $insertedProduct = new Product;
            $insertedProduct['name'] = $request->productName;
            $insertedProduct['price'] = $request->price;
            
            $insertedProduct['catagory'] = $request->get('catagory');
            
            $insertedProduct['thumbnail'] = $thumbnailImageName;
            $insertedProduct['description'] = $request->description;
            $insertedProduct->save();
        }


        if ($request->file('images')) {
            $imageArray = [];
            foreach (($request->file('images')) as $image) {
                $file = $image;
                $filename = date('YmdHi') . $file->getClientOriginalName();
                Image::make($file)->save('photos/'.$filename);
                $save_url = 'photos/'.$filename;
                $imageArray = $filename;
                Productimage::create([
                    'product_id' => $insertedProduct['id'],
                    'image' => $imageArray
                ]);
            }
        }
        $notification = array(
            'message' => 'New product added!',
            'alert-type' => 'success'
        );

        return redirect()->route('product')->with($notification);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $barcode)
    {
        $stockDetail = Purchase::where('barcode',$barcode)->get();
        $productDetail = Product::find($stockDetail[0]->product_id);
        $images = Productimage::where('product_id',$stockDetail[0]->product_id)->get();
       
        
        
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();

        return view('product_details', compact('productDetail', 'stockDetail', 'images', 'catagories', 'logo', 'navigation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
 
        $barcode = $request->get('barcode');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $description = $request->get('editordata');
        $product = Purchase::where('barcode', $barcode)->get();
        $id = $product[0]->product_id;
        
        if($request->file('thumbnail') || $description){
            $product = Product::find($id);
           
            $product['description'] = $description;
            

        if ($request->file('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailImageName = date('YmdHi') . $thumbnail->getClientOriginalName();
            Image::make($thumbnail)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
            $product['thumbnail'] = $thumbnailImageName;

        }
        $product->save();
        }
        if ($request->totalImage > 0) {
            DB::table('productimages')->where('product_id', $id)->delete();
            for ($i = 0; $i < $request->totalImage; $i++) {
                if ($request->file('images' . $i)) {
                    $file = $request->file('images' . $i);
                    $imageArray = [];
                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    Image::make($file)->save('photos/'.$filename);
                    $save_url = 'photos/'.$filename;
                    $imageArray = $filename;

                } 
                Productimage::create([
                    'product_id' => $id,
                    'image' => $imageArray
                ]);

                
            }
        }

        if($price || $quantity ) {
            $stock = DB::table('purchases')->where('barcode',$barcode)->update([
                'selling_price'=> $price,
                'total_qty' => $quantity,
                'available_qty'=> $quantity,
              


            ]);
            

        }
        return response()->json(['success'=>'Product updated Successfully']); 

       
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        
        $barcode = $request->input('barcode');
        DB::table('purchases')->where('barcode',$barcode)->delete();

        $notification = array(
            'message' => 'product deleted successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('product')->with($notification);
        
    }

    public function updateStatus(Request $request){
        $id = $request->get('barcode');
        $status = $request->get('status');
        DB::table('purchases')->where('barcode',$barcode)->update([
            'status' => $status
        ]);
        return response()->json(['success'=>'Status Changed Successfully']); 
    }
    // Show all products
    public function showAllProducts()
    {
        $allProductsData = Product::paginate(12);
        $catagories = Catagory::all();
        $logo = Logo::get()->last();
        $navigation = Navbar::all();
        return view('allProducts', compact('allProductsData', 'catagories', 'logo', 'navigation'));
    }
}
