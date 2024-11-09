@extends('layouts.app')
@section('content')
    <div class="cart-section custom-container">
        @foreach ($cartItems as $item)
        <ul>
            <img src="{{ asset('storage/' . $item->product_img) }}" alt="" style="width: 200px">
            <li>Name: {{ $item->product_name }}</li>
            <li>Quantity: {{ $item->quantity }}</li>
            <li>Price: MMK {{ $item->price }}</li>
        </ul>
        @endforeach
        <ul>
            <li> Total Price: MMK {{ $totalPrice }}</li>
        </ul>
    </div>
@endsection