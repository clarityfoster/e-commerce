<div class="empty-cart">
    <img src="{{ asset('img/common/wish.svg') }}" alt="" class="empty-cart-img">
    <p class="wish-subtext">You don't have any wish.</p>
    <h1 class="brand-text">Make a <span class="add-color">Wish</span> now!</h1>
    <a href="{{ route('allProducts') }}" class="make-wish">Click</a>
</div>
    @include('share.footer')