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
                                <td>Product Image</td>
                                <td>Product Name</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $total = 0;
                            @endphp
                            @foreach($cart_item as $item)
                            <tr>
                                @php
                                  $product_name = \App\Models\Product::where('id',$item->product_id)->value('product_name');
                                  $img = \App\Models\Product::where('id',$item->product_id)->value('product_image');
                                @endphp
                                <td><img src="{{ asset($img) }}" alt="" width="80" height="60"></td>
                                <td>{{ $product_name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}<span>৳</span></td>
                                <td>
                                    <a href="{{ route('delete-item',$item->id) }}" class="btn btn-warning">Remove</a>
                                </td>
                            </tr>
                            @php
                                $total = $total + $item->price;
                            @endphp
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total Price = </td>
                                <td>{{ $total }}<span>৳</span></td>
                                @if($total > 0)
                                    <td>
                                        <a href="" class="btn btn-info disabled">Checkout Now</a>
                                    </td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



