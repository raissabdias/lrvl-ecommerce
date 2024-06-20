@extends('layout')
@section('content')
    <div class="col-12">
        <h4 class="text-center mb-3">Shopping Cart</h4>
        @if (isset($cart) && $cart)
           @foreach ($cart as $k => $product)
               <div class="card mt-4">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 80px; width: fit-content;">
                            <div class="ms-4 mt-2 w-100">
                                <h5>{{ $product->name }}</h5>
                                <p>{{ Str::limit($product->description, 100, '...') }}</p>
                            </div>
                            <div class="text-end">
                                <h3>${{ $product->value }}</h3>
                                <a href="{{ route('cart_delete', ['index' => $k]) }}"><i class="fa-solid fa-trash" style="color: red"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
           @endforeach 
        @else
            <p class="text-center mt-5">Your cart is empty. <a href="{{ route('category') }}">Click here</a> and start shopping!</p>
        @endif
    </div>
@endsection