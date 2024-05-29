@extends('layout')
@section('content')
    @if (isset($categories))
        <div class="col-2">
            <h4 class="text-center mb-3">Categories</h4>
            <div class="list-group">
                <a href="{{ route('category') }}" class="list-group-item list-group-item-action {{ !$id ? 'active' : '' }}">
                    All
                </a>
                @foreach ($categories as $category)
                    <a href="{{ route('category_by_id', ['category_id' => $category->id]) }}" 
                            class="list-group-item list-group-item-action {{ $id == $category->id ? 'active' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    <div class="col-10">
        <div class="row">
            @include('_products', ['products' => $products])
        </div>
    </div>
@endsection