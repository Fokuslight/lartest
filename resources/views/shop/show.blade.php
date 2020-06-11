@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h5>{{$product->title}}</h5>
                        <div class="p-2 card">

                            <div>
                                <img src="" alt="">
                            </div>
                            <div class="mb-2">
                                {{$product->description}}
                            </div>
                            <div class="mb-2">
                                {{$product->content}}
                            </div>
                            <div class="mb-2">
                                ${{$product->price}}
                            </div>
                            <div>
                                <a href="" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
        </div>
        <div class="col-md-4">
                @include('shop.sidebar', compact('categories', 'tags'))
        </div>
    </div>
@endsection
