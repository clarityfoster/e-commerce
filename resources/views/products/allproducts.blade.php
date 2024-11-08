@extends('layouts.app')
@section('content')
    <div class="allProduct-section custom-container" id="bestSellers">
        <div class="best-seller-content">
            <div class="best-seller-items">
                @foreach ($products as $product)
                    <a href="" class="best-seller-card">
                        <img src="{{ asset('storage/' . $product->product_img) }}" alt="" class="best-seller-img">
                        <h3 class="cate-title">
                            {{ $product->name }}
                        </h3>
                        <h3 class="best-seller-card-price">
                            MMK {{ $product->price }}
                        </h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('share.footer')
@endsection
