@extends('masterAdmin')
@section('createProduct')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add</h4>
                <h6>Create new product</h6>
            </div>
        </div>
        <form enctype="multipart/form-data" method="POST" action="{{ route('addProduct') }}" class="d-flex">
            @csrf
            <div class="card">
                <div class="card-body">
                    <form action="" class="was-validated">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="validationServer03">Product Name</label>
                                    <input type="text" class="form-control is-invalid" id="name" name="name" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select class="select">
                                            <option>Choose Sub Category</option>
                                            <option>Fruits</option>
                                        </select>
                                    </div>
                                </div> -->
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="validationServer10">SKU</label>
                                    <input type="text" class="form-control is-invalid" name="sku" id="sku" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Product Thumbnail</label>

                                    <input type="file" class="form-control" aria-label="file example" id="thumbnail" name="thumbnail" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 catagoryRow">
                                    <div class="form-group">
                                        <label>Catagory</label>
                                        <select name="catagory" id="catagory" class="catagory">
                                            <option value="">Choose</option>
                                            @foreach($catagories as $catagory)
                                            <option value="{{$catagory->id}}">{{$catagory->catagoryName}}</option>
                                            @endforeach
                                        </select>



                                    </div>
                                </div>




                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Sub catagory</label>
                                        <select name="subCatagory" id="subCatagory" >
                                            <option value="" class="subCat">Choose</option>

                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-submit me-2" type="submit">Submit</button>

                            </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

</div>

<!-- Including Jquery -->
<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
<script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/instagram-feed.js')}}"></script>
<!-- Including Javascript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/cart.js')}}"></script>
<script src="{{asset('assets/alertifyjs/alertify.min.js')}}"></script>
<!--End Instagram Js-->

<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}"></script>
<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}"> </script>
<script src="{{ asset('http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-modal.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-transition.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> </script>
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



<!--=====CKeditor=====-->
<script src="{{asset('adminFrontend/assets/js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" >
    $(".catagory").on("change", function() {

var $button = $(this);
var catagoryId = $button.val();



$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

$.ajax({
        type:'POST',
        url:"{{ route('fetchSubcatagory') }}",
        data: {catagoryId:catagoryId},
        success:function(data){
            var subCatagories = JSON.parse(data.data);

            $button.parents('.catagoryRow').next().find("select")[0].innerHTML = null;
            for(var i=0; i<subCatagories.length; i++){
             
                const node = document.createElement("option");
                node.setAttribute("value", subCatagories[i].id);
                node.setAttribute("class", 'subCat');
                node.innerHTML = subCatagories[i].subCatagoryName;
                let e = document.querySelectorAll(".subCat");
                $button.parents('.catagoryRow').next().find("select")[0].appendChild(node);
            }
      }
   });

});
</script>

@endsection