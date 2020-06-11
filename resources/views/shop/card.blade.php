
<div class="col-md-4 p-2 ">
    <div class="p-3 card">
        <h5 class="m-0"><a
                href="{{route('shop.category.show', ['category' => $product->category, 'product' => $product->id])}}">{{$product->title}}</a>
        </h5>
        <div>
            <img src="" alt="">
        </div>
        <div class="mb-2">
            {{$product->description}}
        </div>
        <div class="mb-2">
            ${{$product->price}}
        </div>
        <div>
            <form action="{{route('cart.update', ['product' => $product->id])}}" method="post">
            <button type="submit" class="btn btn-primary">Buy</button>
                @method('put')
                @csrf
            </form>
        </div>
    </div>
</div>
