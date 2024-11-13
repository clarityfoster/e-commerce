@if (session('addWish'))
    <div class="alert alert-info">
        {{ session('addWish') }}
    </div>
@endif
@if (session('addToCart'))
    <div class="alert alert-info">
        {{ session('addToCart') }}
    </div>
@endif
@if (session('cartItemDeleted'))
    <div class="alert alert-danger">
        {{ session('cartItemDeleted') }}
    </div>
@endif
@if (session('wishRemove'))
    <div class="alert alert-danger">
        {{ session('wishRemove') }}
    </div>
@endif
