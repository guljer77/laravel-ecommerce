@extends('admin.master')
@section('title','All Product')
@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Manage Product</h5>
                <a href="{{route('add-product')}}" class="btn btn-primary">Add Product</a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                        <tr>
                            <th>Sl</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <img src="{{ asset($product->product_image) }}" alt="" width="80" height="60" class="d-block">
                                <a href="{{ route('image-product',$product->id) }}" class="btn btn-info">Update Image</a>
                            </td>
                            <td>
                                <a href="{{ route('details-product',$product->id) }}" class="btn btn-info btn-sm"><i class="bx bx-book-open me-1"></i></a>
                                <a href="{{ route('edit-product',$product->id) }}" class="btn btn-info btn-sm"><i class="bx bx-edit-alt me-1"></i></a>
                                <a href="{{ route('delete-product',$product->id) }}" class="btn btn-danger btn-sm"><i class="bx bx-trash me-1"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
