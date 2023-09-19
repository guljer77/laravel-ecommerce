@extends('website.layouts.master')
@section('title','Add To Cart')
@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-info">Order Items</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Product Name</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart_item as $item)
                            <tr>
                                @php
                                  $product_name = \App\Models\Product::where('id',$item->product_id)->value('product_name');
                                @endphp
                                <td>{{ $product_name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="" class="btn btn-warning">Remove</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



