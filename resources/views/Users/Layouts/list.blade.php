<div id="list-example" class="list-group">
    @if($category)
        @foreach($category as $categories)
            <a class="list-group-item list-group-item-action" href="{{route('category',$categories->slug)}}">
                <img src="/img/display/icon_mnuL.png" alt="">
                <span class="ps-2">{{$categories->name}}</span>
            </a>
        @endforeach
    @endif
    <a class="list-group-item list-group-item-action" href="{{route('order')}}">
        <img src="/img/display/icon_mnuL.png" alt="">
        <span class="ps-2">Dịch vụ vật tư</span>
    </a>                        
</div> 