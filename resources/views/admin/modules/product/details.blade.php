@extends('admin.master')
@section('title','Details Product')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Product Details</h5>
                <a href="{{route('all-product')}}" class="btn btn-primary">All Product</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Product Name</td>
                        <td>{{ $product->product_name }}</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <td>Available Quantity</td>
                        <td>{{ $product->quantity }}</td>
                    </tr>
                    <tr>
                        <td>Product Description</td>
                        <td>{{ $product->product_short_des }}</td>
                    </tr>
                    <tr>
                        <td>Product Specification</td>
                        <td>{!! $product->product_long_des !!}</td>
                    </tr>
                    <tr>
                        <td>Product Image</td>
                        <td><img src="{{ asset($product->product_image) }}" alt="" width="350" height="250"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

