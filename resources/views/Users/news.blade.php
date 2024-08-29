@extends('users.layouts.main')
<link rel="stylesheet" href="css/tintuc.css">
@section('content')
    <div class="mid">
        <div class="container p-0">
            <div class="banner">
                <div class="row">
                    <div class="col-3">
                        <!-- list -->
                        <div class="collapse list show" id="list">
                            @include('users.layouts.list')
                        </div>
                    </div>
                    <div class="col-lg-9 col-12 ps-0">
                        <!-- direct -->
                        <div class="direct">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-2">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- banner -->
                        <div class="banner-img">
                            <img src="/img/display/tin tuc.png" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="row">
                    <div class="col-3">
                        <!-- news -->
                        @include('users.layouts.hotnews')
                    </div>
                    <div class="col-lg-9 ps-0">
                        <div class="content">
                            <!-- img-title -->
                            <div class="img-title">
                                <div class="d-flex">
                                    <div class="justify-content-start bg-green tree">
                                        <img src="img/display/cay.png" alt="">
                                    </div>
                                    <div class="bg-green content p-2">
                                        <b>Tin tức</b>
                                    </div>
                                    <div class="icon flex-grow-1 bg-gray">
                                        <img src="img/display/icon_section1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- main-content -->
                            <div class="main-content">
                                @if ($news)
                                    @foreach ($news as $new)
                                        <a href="#">
                                            <div class="card">
                                                <div class="row g-0 py-4">
                                                    <div class="img col-4">
                                                        <img src="{{asset($new->image)}}" class="w-100 h-100" alt="...">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="card-body p-0 ps-2">
                                                            <p class="card-text m-0"><b>{{$new->title}}</b></p>
                                                            <p class="card-text text-content">
                                                                <small class="text-muted">
                                                                    <img src="img/display/clock.png" alt="">
                                                                    <span><i>28/6/2016</i></span>
                                                                </small>
                                                            </p>
                                                            <p class="card-text text-content">{{$new->content}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
