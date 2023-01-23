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
       

        return view('createProduct');
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
        $input = $request->all();
        if ($request->file('thumbnail')) {
            $thumbnailImage = $request->file('thumbnail');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
        }
        Product::create([
            'name' => $input['name'],
            'sku' => $input['sku'],
            'thumbnail' => $thumbnailImageName,
            'description' => $input['description'],
           
        ]);


        $notification = array(
            'message' => 'New Product added!',
            'alert-type' => 'success'
        );
        return redirect()->route('addProductPage')->with($notification);
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

    public function showProductList(Product $Product)
    {
        $products = Product::all();
        return view('productList', compact('products'));
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
        
        $id =  $request->get('update_productId');
        $sku = $request->get('update_sku');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $description = $request->get('update_description');
        
        
        if($request->file('update_thumbnail') || $description){
            $product = Product::find($id);
           
            $product['description'] = $description;
            

        if ($request->file('update_thumbnail')) {
            $thumbnail = $request->file('update_thumbnail');
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

        
        $notification = array(
            'message' => 'Product Updated!',
            'alert-type' => 'success'
        );
        return redirect()->route('productList')->with($notification);

       
        
        
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        
        $id = $request->product_id;
        Product::find($id)->delete();
        
        
        $notification = array(
            'message' => 'Product Deleted!',
            'alert-type' => 'success'
        );
        return redirect()->route('addProductPage')->with($notification);
        
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
