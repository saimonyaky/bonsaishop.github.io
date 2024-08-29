<div class="news">
    <div class="title pb-2">
        <p class="m-0"><b>TIN NỔI BẬT</b></p>
    </div>
    <div class="content">
        @if ($news)
            @foreach ($news as $new)
                <a href="{{ route('news') }}">
                    <div class="card">
                        <div class="row g-0 p-2">
                            <div class="img col-4">
                                <img src="{{asset($new->image)}}" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body p-0 ps-2">
                                    <p class="card-text m-0">{{$new->title}}</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <img src="img/display/clock.png" alt="">
                                            <span><i>{{date_format($new->updated_at,"d/m/Y")}}</i></span>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif

    </div>
</div>
