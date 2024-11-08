@extends('layouts.app')
@section('content')
    <div class="detail-section custom-container">
        <div class="detail-div">
            <img class="detail-img" src="{{ asset('storage/' . $product->product_img) }}" alt="{{ $product->name }}">
            <div class="detail-content">
                <div>
                    <div class="detail-header">
                        <div class="detail-head">
                            <h3 class="detail-title">{{ $product->name }}</h3>
                            <h3 class="detail-price">MMK {{ $product->price }}</h3>
                        </div>
                        <a href="" class="btn btn-outline-secondary"><i class="bi bi-heart"></i></a>
                    </div>
                    <hr>
                    <p class="detail-des">{{ $product->description }}</p>
                    <span class="badge primary-color-bg">{{ $product->gender->gender }}</span>
                    @if ($product->category)
                        <span class="badge primary-color-bg">{{ $product->category->name }}</span>
                    @endif
                </div>
                <div>
                    <div>
                        <h5 class="detail-size-title">Size</h5>
                        <div class="detail-size">
                            @foreach (json_decode($product->size) as $size)
                                <label for="size_{{ $size }}" class="btn btn-outline-secondary">
                                    <input type="radio" id="size_{{ $size }}" name="size"
                                        value="{{ $size }}" class="detail-size-option">{{ $size }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="quantity-selector mt-3">
                        <button class="btn btn-outline-secondary" onclick="decrease">-</button>
                        <input type="number" class="form-control" min="1" value="1">
                        <button class="btn btn-outline-secondary" onclick="increase">+</button>
                    </div>
                    <a href="" class="btn btn-outline-secondary mt-4 text-white w-100">Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
    @include('share.footer')
@endsection
