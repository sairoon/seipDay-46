@extends('master')
@section('title')
    product-detail
@endsection
@section('content')
{{--    <h1>this is product detail</h1>--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="">
                        <img src="{{ asset('/') }}assets/image/{{$product['image']}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card card-body rounded-0">
                        <h3>{{$product['name']}}</h3>
                        <p>{{ $product['price'] }}</p>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
