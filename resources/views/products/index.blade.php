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
                    <div class="custom-container">
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
                    <div class="custom-container">
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
    <div class="second" style="height: 100vh">

    </div>
@endsection
