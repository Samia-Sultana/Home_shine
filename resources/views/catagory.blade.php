@extends('masterAdmin')
@section('catagory')



<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Catagory</h4>
                <h6>Create new Catagory</h6>
            </div>
        </div>



        <form enctype="multipart/form-data" method="POST" action="{{ route('createCatagory') }}" class="d-flex">
            @csrf
            <div class="card">
                <div class="card-body">
                    <form action="" class="was-validated">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="validationServer03">Catagory Name</label>
                                    <input type="text" class="form-control is-invalid" id="catagoryName" name="catagoryName" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Catagory Thumbnail</label>

                                    <input type="file" class="form-control" aria-label="file example" id="image" name="image" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>


                            <div class="col-lg-12">
                                <button class="btn btn-submit me-2" type="submit">Upload</button>

                            </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Sub-catagory</h4>
                <h6>Create new sub-catagory</h6>
            </div>
        </div>


        <form enctype="multipart/form-data" method="POST" action="{{ route('createSubCatagory') }}" class="d-flex">
            @csrf
            <div class="card">
                <div class="card-body">
                    <form action="" class="was-validated">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="validationServer03">Catagory Name</label>
                                    <input type="text" class="form-control is-invalid" id="subCatagoryName" name="subCatagoryName" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Catagory Thumbnail</label>

                                    <input type="file" class="form-control" aria-label="file example" id="image" name="image" required>
                                    <div class="invalid-feedback"></div>

                                </div>
                            </div>
                            <div class="row g-3">

                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <select name="catagory" id="catagory">
                                                @foreach($catagories as $catagory)
                                                <option value="{{$catagory->id}}">{{$catagory->catagoryName}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-12">
                                <button class="btn btn-submit me-2" type="submit">Upload</button>

                            </div>
                    </form>
                </div>
            </div>
        </form>
    </div>

</div>


@endsection