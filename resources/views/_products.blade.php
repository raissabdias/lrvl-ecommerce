@if (isset($products))
    @foreach ($products as $product)
        <div class="col-3 px-2 pb-3">
            <div class="card d-flex align-items-center h-100">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; width: fit-content;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 100, '...') }}</p>
                </div>
                <div class="card-footer text-center text-body-secondary w-100">
                    <a href="{{ route('add_cart', ['product_id' => $product->id]) }}" class="btn btn-dark ms-4">
                        Add <b>$ {{ $product->value }}</b>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endif 