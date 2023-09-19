@extends('admin.master')
@section('title','Edit-Product')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Product</h5>
                <a href="{{route('all-product')}}" class="btn btn-primary">All Product</a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('update-product',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-1">Product Name</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="product_name"
                                class="form-control"
                                id="basic-1"
                                value="{{ $product->product_name }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-2">Product Price</label>
                        <div class="col-sm-10">
                            <input
                                type="number"
                                name="price"
                                class="form-control"
                                id="basic-2"
                                value="{{ $product->price }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-3">Product Quantity</label>
                        <div class="col-sm-10">
                            <input
                                type="number"
                                name="quantity"
                                class="form-control"
                                id="basic-3"
                                value="{{ $product->quantity }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-4">Product S.Description</label>
                        <div class="col-sm-10">
                            <textarea name="product_short_des" id="basic-4" cols="30" rows="5" class="form-control">{{ $product->product_short_des }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-5">Product L.Description</label>
                        <div class="col-sm-10">
                            <textarea name="product_long_des" id="editor" cols="30" rows="5" class="form-control">{{ $product->product_long_des }}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

