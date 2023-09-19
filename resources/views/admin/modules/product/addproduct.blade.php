@extends('admin.master')
@section('title','Add-Product')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Product Add</h5>
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
                <form action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-1">Product Name</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="product_name"
                                class="form-control"
                                id="basic-1"
                                placeholder="Product Name" />
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
                                placeholder="$100" />
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
                                placeholder="20" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-4">Product S.Description</label>
                        <div class="col-sm-10">
                            <textarea name="product_short_des" id="basic-4" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-5">Product L.Description</label>
                        <div class="col-sm-10">
                            <textarea name="product_long_des" id="editor" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-6">Category Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="product_category_id" id="basic-6" aria-label="Default select example">
                                <option selected>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-7">Subcategory Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="product_subcategory_id" id="basic-7" aria-label="Default select example">
                                <option selected>Select Subcategory</option>
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-8">Product Image</label>
                        <div class="col-sm-10">
                            <input
                                type="file"
                                name="product_image"
                                class="form-control"
                                id="basic-8" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">New Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
