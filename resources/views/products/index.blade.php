@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        @foreach ($home as $index => $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($home as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="home-slider" style="background-image: url({{ asset('storage/' . $item->bac_img) }})">
                    <div class="home-container">
                        <div class="home-item">
                            <img src="{{ asset('storage/' . $item->img) }}" alt="" class="home-item-img">
                            <span class="item-name">{{ $item->name }}</span>
                            <b class="item-price">{{ number_format($item->price) }} Kyats</b>
                            <a href="{{ route('detail', ['id' => $item->product_id]) }}" class="shop-now">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <div class="bestSeller-section custom-container" id="bestSellers">
        <h1 class="brand-text">Best Sellers</h1>
        <div class="best-seller-content">
            <div class="best-seller-items">
                @foreach ($bestSeller as $best)
                    <a href="{{ route('detail', ['id' => $best->product_id]) }}" class="best-seller-card">
                        <img src="{{ asset('storage/' . $best->best_seller_img) }}" alt="" class="best-seller-img">
                        <h3 class="cate-title">
                            {{ $best->name }}
                        </h3>
                        <h3 class="best-seller-card-price">
                            MMK {{ $best->price }}
                        </h3>
                    </a>
                @endforeach
            </div>
            <div class="two-categories">
                @foreach ($twoStyles as $style)
                    <div class="sport-poster"
                        style="background-image: url({{ asset('storage/' . $style->twostyles_img) }})">
                        <h4 class="sport-poster-title1">{{ $style->title1 }}</h4>
                        <h1 class="sport-poster-title2">{{ $style->title2 }}</h1>
                        <a href="" class="shop-now">Shop Now</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="third-section custom-container">
        <div class="categories-section">
            <h1 class="brand-text">Shop By Categories</h1>
            <div class="cate-circle-div">
                @foreach ($cate as $cate)
                    <a href="" class="cate-circle">
                        <img src="{{ asset('storage/' . $cate->cate_img) }}" alt="" class="tshirt-cate">
                        <h3 class="cate-title">{{ $cate->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="click-toshop">
            <div class="click-toshop-title">
                <h1 class="brand-text text-center">See Now</h1>
                <h3 class="cate-title">Click to shop the looks you love!</h3>
            </div>
            <div class="click-toshop-content">
                @foreach ($looks as $look)
                    <a href="{{ route('detail', ['id' => $look->product_id]) }}" class="click-toshop-card">
                        <img src="{{ asset('storage/' . $look->looks_img) }}" alt="{{ $look->model_name }}"
                            class="cts-img">
                        <h5 class="cate-title mt-2">{{ $look->model_name }}</h5>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('share.topBtn')
    @include('share.footer')
@endsection
