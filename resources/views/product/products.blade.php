@extends('master')
@section('title')
    Products
@endsection
@section('content')
{{--    <h1 class="text-center text-success">This is Products page</h1>--}}
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center fw-bolder">All Products</h3>
                    <hr>
                    <div class="row mt-3">
                        @foreach($products as $product)
                        <div class="col-md-4 mt-3">
                            <div class="card shadow">
                                <img src="{{ asset('/') }}assets/image/{{$product['image']}}" alt="" class="card-img-top" style="height: 250px"/>
                                <div class="card-body">
                                    <h2>{{$product['name']}}</h2>
                                    <p>Price: {{ $product['price'] }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('detail-products',['id' => $product['id']]) }}" class="float-end btn btn-outline-primary rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
