@if ($wishes->isEmpty())
    @include('share.emptyWish')
@else
    @extends('layouts.app')
    @section('content')
        <div class="allProduct-section custom-container" id="bestSellers">
            <div class="best-seller-content">
                <div class="best-seller-items">
                    @foreach ($wishes as $product)
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <a href="{{ route('detail', ['id' => $product->product_id]) }}" class="best-seller-card">
                                <img src="{{ asset('storage/' . $product->img) }}" alt="{{ $product->name }}"
                                    class="best-seller-img">
                                <h3 class="cate-title">
                                    {{ $product->name }}
                                </h3>
                                <h3 class="best-seller-card-price">
                                    MMK {{ $product->price }}
                                </h3>
                            </a>
                            <form class="" action="{{ route('removeFromWish', ['id' => $product->id]) }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn"><i class="bi bi-trash text-danger"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
@endif
