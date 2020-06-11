@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="row mb-5">
                @foreach($products as $product)

                    @include('shop.card', compact('product'))
                @endforeach
                {{$products->links()}}
            </div>
            <div class="pagination flex justify-content-center">
                {{$products->links()}}
            </div>
        </div>
        <div class="col-md-4">
            @include('shop.sidebar', compact('categories', 'tags'))
        </div>
    </div>
@endsection
