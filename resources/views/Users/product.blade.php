@extends('users.layouts.main')
<link rel="stylesheet" href="{{url('')}}/css/sanpham.css">
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
                                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- banner -->
                    <div class="banner-img">
                        <img src="/img/display/gioithieu.png" class="w-100" alt="">
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
                    <div class="main-content">
                        @foreach ($list as $val)
                        <div>
                            <!-- img-title -->
                            <div class="img-title">
                                <div class="d-flex">
                                    <div class="justify-content-start bg-green tree">
                                        <img src="{{url('')}}/img/display/cay.png" alt="">
                                    </div>
                                    <div class="bg-green content p-2">
                                        <b>{{ $val['category']->name }}</b>
                                    </div>
                                    <div class="icon flex-grow-1 bg-gray">
                                        <img src="{{url('')}}/img/display/icon_section1.png" alt="">
                                    </div>
                                    @if(count($list) != 1)
                                    <div class="bg-gray justify-content-end p-2">                        
                                        <a href="{{route('category',$val['category']->slug)}}">
                                            <span>Xem tất cả</span>
                                            <img src="{{url('')}}/img/display/arrow-btn.png" alt="">
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- content -->
                            <div class="row d-flex justify-content-between py-3">
                                @foreach($val['product'] as $value)
                                <div class="col-xl-3 col-md-4 col-sm-6 sp">
                                    <a href="{{route('product_detail',$value->slug)}}">
                                        <div class="card px-1">
                                            <img src="{{asset($value->image)}}" class="" alt="...">
                                            <div class="card-body">
                                                <p class="card-text name">{{$value->name}}</p>
                                                <p class="card-text price">{{number_format($value->price)}}đ</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection