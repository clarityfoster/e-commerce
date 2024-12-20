@if ($cartItems->isEmpty())
    @include('share.emptyCart');
@else
    @extends('layouts.app')
        @section('content')
            <div class="cart-section">
                @include('share.alerts')
                <h1 class="brand-text">Shopping Cart</h1>
                <form action="" class="check-out-form">
                    @csrf
                    <div class="cart-items">
                        @foreach ($cartItems as $item)
                            <div class="cart-item">
                                <img src="{{ asset('storage/' . $item->product_img) }}" alt="{{ $item->product_name }}" class="cart-img">
                                <div class="cart-content">
                                    <p class="cart-item-product">Product:<span
                                            class="cart-span">{{ $item->product_name }}</span>
                                    </p>
                                    <p class="cart-item-product">Quantity:<span
                                            class="cart-span">{{ $item->quantity }}</span>
                                    </p>
                                    {{-- <div class="cart-quantity">
                                    <p class="cart-item-quantity">Quantity:</p>
                                    <div class="quantity-selector">
                                        <button id="minus" class="btn btn-outline-secondary cart">-</button>
                                        <input id="quantity" type="number" class="form-control cart" name="quantity"
                                            min="1" value="{{ $item->quantity }}">
                                        <button id="plus" class="btn btn-outline-secondary cart">+</button>
                                    </div>
                                </div> --}}
                                    <p class="cart-item-price">Price:<span class="cart-span">MMK
                                            {{ number_format($item->price) }}</span></p>
                                </div>
                                <a href="{{ route('cartDelete', ['id' => $item->id]) }}" class="cart-remove"><i
                                        class="bi bi-trash3-fill"></i></a>
                            </div>
                        @endforeach
                    </div>
                    <p class="cart-item-product mt-3">Total Price:
                        <span class="cart-span"><b>MMK {{ number_format($totalPrice) }}</b></span>
                    </p>
                    {{-- <button class="cart-checkOut">Check Out</button> --}}
                </form>
            </div>
        @endsection
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById("quantity");
        const minusButton = document.getElementById("minus");
        const plusButton = document.getElementById("plus");

        minusButton.addEventListener("click", (event) => {
            event.preventDefault();
            let quantity = parseInt(quantityInput.value, 10);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        });

        plusButton.addEventListener("click", (event) => {
            event.preventDefault();
            let quantity = parseInt(quantityInput.value, 10);
            quantityInput.value = quantity + 1;
        });
    });
</script>
