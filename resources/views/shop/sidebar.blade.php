<div class="mb-5">
    <h5>Categories:</h5>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item"><a href="{{route('shop.category', ['category' => $category->id])}}" class="text-dark">{{$category->title}}</a></li>
        @endforeach
    </ul>
</div>
<div class="text-left align-bottom ">
    <h5>Tags:</h5>
    @foreach($tags as $tag)
    <a href="#" class="btn btn-secondary float-left mb-2 mr-2">{{$tag->title}}</a>
    @endforeach
    <div class="clearfix"></div>
</div>
