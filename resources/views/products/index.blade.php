@extends('layouts.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="home-slider" style="background-image: url({{ asset('img/home/home2.webp') }})">
                    <div class="home-container">
                        <div class="home-item">
                            <img src="{{ asset('img/home/home-item2.webp') }}" alt="" class="home-item-img">
                            <span class="item-name">Oversized Cotton Hoodie</span>
                            <b class="item-price">20,000 Kyats</b>
                            <a href="" class="shop-now">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-slider" style="background-image: url({{ asset('img/home/home1.avif') }})">
                    <div class="home-container">
                        <div class="home-item">
                            <img src="{{ asset('img/home/home-item1.avif') }}" alt="" class="home-item-img">
                            <span class="item-name">Oversized Cotton Hoodie</span>
                            <b class="item-price">20,000 Kyats</b>
                            <a href="" class="shop-now">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="bestSeller-section custom-container" id="bestSellers">
        <h1 class="brand-text">Best Sellers</h1>
        <div class="best-seller-content">
            <div class="best-seller-items">
                <a href="" class="best-seller-card">
                    <img src="{{ asset('img/bestSeller/sweater1.avif') }}" alt="" class="best-seller-img">
                    <h3 class="cate-title">
                        Polyester long coat
                    </h3>
                    <h3 class="best-seller-card-price">
                        30,000 Kyats
                    </h3>
                </a>
                <a href="" class="best-seller-card">
                    <img src="{{ asset('img/bestSeller/sweater2.avif') }}" alt="" class="best-seller-img">
                    <h3 class="cate-title">
                        Polyester long coat
                    </h3>
                    <h3 class="best-seller-card-price">
                        30,000 Kyats
                    </h3>
                </a>
                <a href="" class="best-seller-card">
                    <img src="{{ asset('img/bestSeller/sweater3.avif') }}" alt="" class="best-seller-img">
                    <h3 class="cate-title">
                        Polyester long coat
                    </h3>
                    <h3 class="best-seller-card-price">
                        30,000 Kyats
                    </h3>
                </a>
                <a href="" class="best-seller-card">
                    <img src="{{ asset('img/bestSeller/sweater4.avif') }}" alt="" class="best-seller-img">
                    <h3 class="cate-title">
                        Polyester long coat
                    </h3>
                    <h3 class="best-seller-card-price">
                        30,000 Kyats
                    </h3>
                </a>
                <a href="" class="best-seller-card">
                    <img src="{{ asset('img/bestSeller/sweater5.avif') }}" alt="" class="best-seller-img">
                    <h3 class="cate-title">
                        Polyester long coat
                    </h3>
                    <h3 class="best-seller-card-price">
                        30,000 Kyats
                    </h3>
                </a>
            </div>
            <div class="two-categories">
                <div class="sport-poster" style="background-image: url({{ asset('img/bestSeller/sport-poster.jpg') }})">
                    <h4 class="sport-poster-title1">Find your favourite</h4>
                    <h1 class="sport-poster-title2"> <span class="different-colors">S</span>port<span
                            class="different-colors">wears</span> </h1>
                    <a href="" class="shop-now">Shop Now</a>
                </div>
                <div class="sport-poster"
                    style="background-image: url({{ asset('img/bestSeller/streetstyle-poster.webp') }})">
                    <h4 class="sport-poster-title1">Find your favourite</h4>
                    <h1 class="sport-poster-title2">St<span class="different-colors">r</span>e<span
                            class="different-colors">e</span>t<span class="different-colors">St</span>yle </h1>
                    <a href="" class="shop-now">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="third-section custom-container">
        <div class="categories-section">
            <h1 class="brand-text">Shop By Categories</h1>
            <div class="cate-circle-div">
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/dress.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Dresses</h3>
                </a>
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/tshirt.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Tshirts</h3>
                </a>
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/top.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Tops</h3>
                </a>
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/underwear.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Underwears</h3>
                </a>
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/nightwear.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Nightwears</h3>
                </a>
                <a href="" class="cate-circle">
                    <img src="{{ asset('img/categories/pant.png') }}" alt="" class="tshirt-cate">
                    <h3 class="cate-title">Pants</h3>
                </a>
            </div>
        </div>
        <div class="click-toshop">
            <div class="click-toshop-title">
                <h1 class="brand-text text-center">See Now</h1>
                <h3 class="cate-title">Click to shop the looks you love!</h3>
            </div>
            <div class="click-toshop-content">
                <a href="" class="click-toshop-card">
                    <img src="{{ asset('img/cts/cts.avif') }}" alt="" class="cts-img">
                    <h5 class="cate-title mt-2">@brighter</h5>
                </a>
                <a href="" class="click-toshop-card">
                    <img src="{{ asset('img/cts/cts1.avif') }}" alt="" class="cts-img">
                    <h5 class="cate-title mt-2">@stella_sky</h5>
                </a>
                <a href="" class="click-toshop-card">
                    <img src="{{ asset('img/cts/cts2.avif') }}" alt="" class="cts-img">
                    <h5 class="cate-title mt-2">@elena</h5>
                </a>
                <a href="" class="click-toshop-card">
                    <img src="{{ asset('img/cts/cts3.avif') }}" alt="" class="cts-img">
                    <h5 class="cate-title mt-2">@sonia</h5>
                </a>
            </div>
        </div>
    </div>
    @include('share.footer')
@endsection
