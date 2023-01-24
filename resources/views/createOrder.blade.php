@extends('masterAdmin')
@section('createOrder')
<div class="page-wrapper ms-0">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 col-sm-12 tabs_wrapper">
                <div class="page-header ">
                    <div class="page-title">
                        <h4>Categories</h4>
                        <h6>Manage your purchases</h6>
                    </div>
                </div>
                <ul class=" tabs owl-carousel owl-theme owl-product  border-0 ">
                    @foreach($subcatagories as $subcatagory)
                    <li  id="{{'sub-cat'.$subcatagory->id}}">
                        <div class="product-details ">
                            <img src="{{url('photos/'.$subcatagory->image)}}" alt="img" height="20px;" width="30px;">
                            <h6>{{$subcatagory->subCatagoryName}}</h6>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <div class="tabs_container">
                    @foreach($subcatagories as $subcatagory)
                    <div class="tab_content " data-tab="{{'sub-cat'.$subcatagory->id}}">
                        <div class="row ">
                            @foreach($allProduct as $item)
                            <?php
                            $productDetail = App\Models\Product::find($item->product_id);
                            ?>
                            @if($productDetail->subcatagory_id == $subcatagory->id)
                            <div class="col-lg-3 col-sm-6 d-flex ">
                                <div class="productset flex-fill ">
                                    <div class="productsetimg">
                                        <img src="{{url('photos/'.$productDetail->thumbnail)}}" alt="img" style="height:150px;width:200px;">
                                        <h6>Qty: {{$item->available_qty}}</h6>
                                        <div class="check-product">
                                            <form action="{{route('addToOrder')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="barcode" id="barcode" value="{{$item->barcode}}">
                                                <button type="submit" class="btn btn-primary">add</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="productsetcontent">

                                        <h4>{{$productDetail->name}}</h4>
                                        <h6>SKU:{{$productDetail->sku}}</h6>

                                        <h6>{{$item->selling_price}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            <div class="col-lg-4 col-sm-12 ">
                <div class="order-list">
                    <div class="orderid">
                        <h4>Order List</h4>

                    </div>

                </div>
                <div class="card card-order">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'}}">
                                    + Add Customer
                                </button>
                                <div class="modal fade" id="{{'update_product_'}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update_product_lebel">Add Customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('addCustomer')}}" class="d-flex" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-1">
                                                        <fieldset>
                                                            <h2 class="login-title mb-3">Billing details</h2>
                                                            <div class="row">

                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="name">Name <span class="required-f">*</span></label>
                                                                    <input name="name" value="" id="name" type="text" required>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="email">Email <span class="required-f">*</span></label>
                                                                    <input name="email" value="" id="email" type="email" required>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="phone">Telephone <span class="required-f">*</span></label>
                                                                    <input name="phone" value="" id="phone" type="text" required>
                                                                </div>
                                                            </div>
                                                        </fieldset>


                                                        <fieldset>
                                                            <div class="row">

                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="address">Address </label>
                                                                    <input name="address" value="" id="address" type="text" required>
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                    <label for="city">City </label>

                                                                    <input type="text" name="city" id="city" required>

                                                                </div>


                                                            </div>
                                                        </fieldset>




                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary btn-update-product">Submit</button>
                                                    </div>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                    <div class="split-card">
                    </div>
                    @if(Session::get('cart'))
                    <div class="card-body pt-0 cart-detail-row">
                        <div class="totalitem">
                            <h4>Total items : {{count(Session::get('cart'))}} </h4>
                            <a href="javascript:void(0);">Clear all</a>
                        </div>
                        <div class="product-table">

                            @foreach( Session::get('cart') as $product)
                            <?php
                            $purchaseRow = App\Models\Purchase::where('barcode', $product->barcode)->get();
                            $productId = $purchaseRow[0]->product_id;
                            $productInfo =  App\Models\Product::where('id', $productId)->get();
                            ?>
                            <ul class="product-lists">
                                <li>
                                    <div class="productimg">
                                        <div class="productimgs">
                                            <img src="{{url('photos/' . $productInfo[0]->thumbnail)}}" alt="img" style="height:50px;width:80px;">
                                        </div>
                                        <div class="productcontet">
                                            <h4>{{$productInfo[0]->name}}
                                                <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="{{asset('adminFrontend/assets/img/icons/edit-5.svg')}}" alt="img"></a>
                                            </h4>
                                            <div class="productlinkset">
                                                <h5>{{$productInfo[0]->sku}}</h5>
                                            </div>
                                            <div class="increment-decrement">
                                                <div class="input-groups pro-quantity">

                                                    <form action="#" class="display-flex">
                                                        <input type="hidden" value="{{$product->barcode}}" id="barcode">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <button class="button-qty inc" type="button">
                                                                + </button>
                                                            <input type="text" value="{{$product->qty}}" readonly id="prod-qty">
                                                            <input type="hidden" value="{{$product->barcode}}" id="barcode">

                                                            <button class="button-qty dec" type="button">
                                                                -
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>{{$purchaseRow[0]->selling_price }}</li>
                                <li>
                                    <form action="{{route('removeOrderCartProduct')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="barcode" value="{{$product->barcode}}">
                                        <button type="submit" class="remove"><img src="{{asset('adminFrontend/assets/img/icons/delete-2.svg')}}" alt="img"></button>
                                    </form>
                                </li>
                            </ul>
                            @endforeach


                        </div>
                    </div>
                    @endif
                    <div class="card-body pt-0 pb-2">
                        <div class="setvalue">
                            <ul>
                                <li>
                                    <h5>Subtotal </h5>
                                    <h6 id="subtotal">{{$subTotal}}</h6>
                                </li>

                            </ul>
                        </div>
                        <form method="POST" action="{{route('checkoutOrder')}}" class="d-flex" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="select-split ">
                                    <div class="select-group w-100">
                                        <?php
                                        $customers = App\Models\Customer::all();
                                        ?>
                                        <select class="select" name="customer" id="customer">
                                            @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-totallabel">

                                <button type="submit">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Body Content-->
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div id="page-content">


                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">

                                <div class="solid-border">

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'}}">
                                        Place order
                                    </button>
                                    <div class="modal fade" id="{{'update_product_'}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="update_product_lebel">Billing info</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Body Content-->
    <script src="{{asset('adminFrontend/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/feather.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/jquery.slimscroll.min.js')}}"></script>




    <script src="{{asset('adminFrontend/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('adminFrontend/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset('adminFrontend/assets/js/script.js')}}"></script>


    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>
    <!-------end toaster cdn -------------->


    <script type="text/Javascript">

        $(".button-qty").click(function(e){
e.preventDefault();

var $button = $(this);
var oldQuantity = $button.parent().find("input:even").val();
var productBarcode = $button.parent().find("input:odd").val();

console.log(oldQuantity,productBarcode);
var newQuantity;
$button.blur();
if ($button.hasClass("inc")) {
    newQuantity = parseFloat(oldQuantity) + 1;
} 
else {
if (oldQuantity > 1) {
    newQuantity = parseFloat(oldQuantity) - 1;
} else {
    newQuantity = 1;
}
}


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    type:'POST',
    url:"{{ route('updateOrderCart') }}",
    data:{barcode:productBarcode, newQuantity:newQuantity},
    success:function(data){
        var productPrice = $button.parents(".pro-quantity").prev().text();
        $button.parent().find("input:even").val(newQuantity);
        $button.parents(".pro-quantity").next().text(newQuantity * productPrice);

        var cart = JSON.parse(data.cart);
        console.log(cart);
        var subTotal = cart.reduce(function(accumulator,currentItem){
            return accumulator + (currentItem.qty * currentItem.price);
        },0);
     
        //console.log(grandTotal);
        $button.parents(".cart-detail-row").next().find("#subtotal").text(subTotal);
        
        //$button.parents(".cart-detail-row").next().find("td.grand-total").text(grandTotal);
        
    }
});


});
</script>


    @endsection