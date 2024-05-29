@extends('layout')
@section('content')
    @if (isset($categories))
        <div class="col-12">
            <h3>Categories</h3>
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

    @include('_products', ['products' => $products])
@endsection