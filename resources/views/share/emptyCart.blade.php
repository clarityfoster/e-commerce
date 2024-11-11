<div class="empty-cart">
    <img src="{{ asset('img/common/Empty-cuate.svg') }}" alt="" class="empty-cart-img">
    <p class="wish-subtext">Your cart is empty.</p>
    <h1 class="brand-text">Add to <span class="add-color">Cart</span> now!</h1>
    <a href="{{ route('allProducts') }}" class="make-wish">Click</a>
</div>
@include('share.footer')