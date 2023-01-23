<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrdercartController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/product/details/{barcode}', [ProductController::class, 'show'])->name('showProduct');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist'])->name('addToWishlist');
Route::get('/view-cart', [CartController::class, 'viewCart'])->name('shoppingCart');
Route::get('/view-wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('updateShoppingCart');
Route::get('/catagory/{id}', [CatagoryController::class, 'show'])->name('catagoryProducts');
Route::get('/checkout', [CheckoutController::class, 'checkoutPage'])->middleware(['auth'])->name('checkoutPage');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->middleware(['auth'])->name('checkout');
Route::get('/orders', [UserController::class, 'orders'])->middleware(['auth'])->name('orders');
Route::get('/address', [UserController::class, 'address'])->middleware(['auth'])->name('address');
Route::get('/details', [UserController::class, 'details'])->middleware(['auth'])->name('details');
Route::post('/dashboard/details', [UserController::class, 'changeDetails'])->middleware(['auth'])->name('accountDetails');
Route::post('/dashboard/password', [UserController::class, 'changePassword'])->middleware(['auth'])->name('changePassword');
Route::post('/wishlist/remove', [WishlistController::class, 'removeWishlistProduct'])->name('removeWishlistProduct');
Route::get('/allProducts', [ProductController::class, 'showAllProducts'])->name('allProducts');
Route::post('/remove/cart/product', [CartController::class, 'removeCartProduct'])->name('removeCartProduct');
Route::get('/dashboard', [UserController::class, 'viewDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/view/order/{id}', [UserController::class, 'viewOrder'])->middleware(['auth']);
Route::post('/address', [UserController::class, 'editAddress'])->middleware(['auth'])->name('editAddress');
Route::get('/all/blog', [BlogController::class, 'show'])->name('allBlog');
Route::get('/blog/{id}/view', [BlogController::class, 'viewBlog'])->name('viewBlog');
Route::get('/view/invoice/{id}', [InvoiceController::class, 'viewInvoice'])->middleware(['auth']);
Route::get('/invoice/{id}/generate', [InvoiceController::class, 'generateInvoice']);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', [FaqController::class, 'viewServices'])->name('services');

Route::post('/contact', [ContactController::class, 'store'])->middleware(['auth'])->name('contactCompany');
Route::post('/services', [FaqController::class, 'store'])->middleware(['auth'])->name('faqCompany');
// gallery
Route::get('/gallery', [GalleryController::class, 'viewPhotos'])->name('gallery');


require __DIR__ . '/auth.php';






Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Admin view
Route::prefix('admin')->group(function () {

    //nav   
    Route::get('/nav', [NavbarController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('navbar');
    Route::post('/nav', [NavbarController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createNav');
    Route::post('/delete/nav', [NavbarController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteNav');
    Route::post('/update/nav/status', [NavbarController::class, 'updateNavStatus'])->middleware(['auth:admin', 'verified'])->name('updateNavStatus');


    //social media
    Route::get('/socialMedia', [SocialmediaController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('socialMedia');
    Route::post('/socialMedia', [SocialmediaController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createSocialMedia');


    //logo
    Route::get('/logo', [LogoController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('logo');
    Route::post('/logo', [LogoController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createLogo');
    Route::post('/delete/logo', [LogoController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteLogo');
    Route::post('/update/logo/status', [LogoController::class, 'updateLogoStatus'])->middleware(['auth:admin', 'verified'])->name('updateLogoStatus');


    //slider
    Route::get('/slider', [SliderController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('slider');
    Route::post('/slider', [SliderController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createSlider');
    Route::post('/delete/slider', [SliderController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteSlider');
    Route::post('/update/slider/status', [SliderController::class, 'updateSliderStatus'])->middleware(['auth:admin', 'verified'])->name('updateSliderStatus');


    //catagory
    Route::get('/catagory', [CatagoryController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('catagory');
    Route::post('/catagory', [CatagoryController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createCatagory');
    Route::post('/delete/catagory', [CatagoryController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteCatagory');
    Route::post('/update/catagory/status', [CatagoryController::class, 'updateCatagoryStatus'])->middleware(['auth:admin', 'verified'])->name('updateCatagoryStatus');


    //blog
    Route::get('/blog', [BlogController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('blog');
    Route::post('/blog', [BlogController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createBlog');
    Route::post('/blog/delete', [BlogController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteBlog');
    Route::post('/blog/update', [BlogController::class, 'updateBlog'])->middleware(['auth:admin', 'verified'])->name('updateBlog');


    //contact
    Route::get('/view/contact/message', [ContactController::class, 'view'])->middleware(['auth:admin', 'verified'])->name('viewContact');
    Route::post('/delete/message', [ContactController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteMessage');

    //faq
    Route::get('/view/faq', [FaqController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('viewFaq');
    Route::post('/faq', [FaqController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('faq');
    Route::post('/faq/delete', [FaqController::class, 'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteFaq');

    //gallery
    Route::get('/photos', [GalleryController::class, 'index_photos'])->middleware(['auth:admin', 'verified'])->name('photos');
    Route::post('/photos', [GalleryController::class, 'addPhotos'])->middleware(['auth:admin', 'verified'])->name('addPhotos');
    Route::post('/photo/delete', [GalleryController::class, 'deletePhotos'])->middleware(['auth:admin', 'verified'])->name('deletePhoto');

    /* supplier CRUD */
    Route::get('/supplier', [SupplierController::class, 'index'])->name('addSupplierPage');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('addSupplier');
    Route::get('/supplier/list', [SupplierController::class, 'show'])->name('supplierList');
    Route::post('/update/supplier', [SupplierController::class, 'update'])->name('updateSupplier');
    Route::post('/delete/supplier', [SupplierController::class, 'destroy'])->name('deleteSupplier');
    /* supplier CRUD end */

    /* product CRUD */
    Route::get('/product', [ProductController::class, 'index'])->name('addProductPage');
    Route::post('/add/product', [ProductController::class, 'store'])->name('addProduct');
    Route::get('/product/list', [ProductController::class, 'showProductList'])->name('productList');
    Route::post('/update/product', [ProductController::class, 'update'])->name('updateProduct');
    Route::post('/delete/product', [ProductController::class, 'destroy'])->name('deleteProduct');
    /* product CRUD end */


    /* purchase CRUD */
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('addPurchasePage');
    Route::post('/add/purchase', [PurchaseController::class, 'store'])->name('addPurchase');
    Route::get('/purchase/list', [PurchaseController::class, 'show'])->name('purchaseList');
    Route::post('/update/purchase', [PurchaseController::class, 'update'])->name('updatePurchase');
    Route::post('/delete/purchase', [PurchaseController::class, 'destroy'])->name('deletePurchase');
    Route::post('/barcode', [PurchaseController::class, 'generateBarcode'])->name('generateBarcode');
    /* purchase CRUD end */

    /* orders CRUD */
    Route::get('/order', [OrderController::class, 'index'])->name('addOrderPage');
    Route::get('/order/list', [OrderController::class, 'show'])->name('orderList');
    Route::post('/add/order', [OrderController::class, 'store'])->name('addOrder');
    Route::post('/order', [OrdercartController::class, 'addToOrder'])->name('addToOrder');
    Route::post('/update-cart', [OrdercartController::class, 'updateOrderCart'])->name('updateOrderCart');
    Route::post('/remove/cart/product', [OrdercartController::class, 'removeOrderCartProduct'])->name('removeOrderCartProduct');
    Route::post('/checkout', [OrdercartController::class, 'checkoutOrder'])->name('checkoutOrder');
    

    //order list view
    Route::get('/order/list', [OrderController::class, 'show'])->name('orderList');
    Route::post('/orderStatus', [OrderController::class, 'statusUpdate'])->name('orderStatus');
    Route::post('/delete/order', [OrderController::class, 'destroy'])->name('deleteOrder');

    /* orders CRUD end */

    /*customer CRUD */
    Route::post('/add/customer', [CustomerController::class, 'store'])->name('addCustomer');

    /*customer CRUD */


    /* generate report */
    Route::get('/sale/report', [ReportController::class, 'sale'])->name('saleReport');
    Route::get('/purchase/report', [ReportController::class, 'purchase'])->name('purchaseReport');
    Route::get('/invoice/report', [ReportController::class, 'invoice'])->name('invoiceReport');
    /* generate report end*/

    /*generate barcode */

    Route::get('/barcode', [PurchaseController::class, 'barcode'])->name('barcode');
    Route::post('/barcode/generate', [PurchaseController::class, 'generateBarcode'])->name('generateBarcode');
    /*end generate barcode */
});

require __DIR__ . '/adminauth.php';
