@extends('layouts.app')
@section('content')
    <div class="detail-section custom-container">
        <div class="detail-div">
            <img class="detail-img" src="{{ asset('storage/' . $product->product_img) }}" alt="{{ $product->name }}">
            <div class="detail-content">
                @if (session('addToCart'))
                    <div class="alert alert-success">
                        {{ session('addToCart') }}
                    </div>
                @endif
                <div>
                    <div class="detail-header">
                        <div class="detail-head">
                            <h3 class="detail-title">{{ $product->name }}</h3>
                            <h3 id="price" class="detail-price">MMK {{ $product->price }}</h3>
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
                    <form action="{{ route('addToCart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="quantity-selector mt-3">
                            <button id="minus" class="btn btn-outline-secondary">-</button>
                            <input id="quantity" type="number" class="form-control detail" name="quantity" min="1"
                                value="1">
                            <button id="plus" class="btn btn-outline-secondary">+</button>
                        </div>
                        <button id="price-btn" type="submit" class="btn btn-outline-secondary mt-4 text-white w-100">Add To
                            Cart - MMK {{ $product->price }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('share.footer')
    @include('share.topBtn')
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById("quantity");
        const minusButton = document.getElementById("minus");
        const plusButton = document.getElementById("plus");
        const currentPrice = document.getElementById('price');
        const addToCart = document.getElementById('price-btn');

        const basePrice = parseFloat(currentPrice.textContent.replace('MMK', '').trim());

        function update() {
            const quantity = parseInt(quantityInput.value, 10);
            const totalPrice = basePrice * quantity;
            addToCart.textContent = `Add To Cart - MMK ${totalPrice}`;
        }

        minusButton.addEventListener("click", (event) => {
            event.preventDefault();
            let quantity = parseInt(quantityInput.value, 10);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                update();
            }
        });

        plusButton.addEventListener("click", (event) => {
            event.preventDefault();
            let quantity = parseInt(quantityInput.value, 10);
            quantityInput.value = quantity + 1;
            update();
        });
        update();
    });
</script>
