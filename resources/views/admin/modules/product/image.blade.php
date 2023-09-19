@extends('admin.master')
@section('title','ImageUpdate-Product')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Product Image Update</h5>
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
                <form action="{{ route('update-image',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-8">Product Image</label>
                        <div class="col-sm-10">
                            <input
                                type="file"
                                name="product_image"
                                class="form-control"
                                id="basic-8" />
                            <img src="{{ asset($product->product_image) }}" alt="" width="80" height="60">
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

