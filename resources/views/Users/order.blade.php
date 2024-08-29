@extends('users.layouts.main')
<link rel="stylesheet" href="/css/dathang.css">
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
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
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
                        <div class="content">
                            <!-- img-title -->
                            <div class="img-title">
                                <div class="d-flex">
                                    <div class="justify-content-start bg-green tree">
                                        <img src="img/display/cay.png" alt="">
                                    </div>
                                    <div class="bg-green content p-2">
                                        <b>Giỏ hàng</b>
                                    </div>
                                    <div class="icon flex-grow-1 bg-gray">
                                        <img src="img/display/icon_section1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- main-content -->
                            <div class="main-content">
                                @if ($products)
                                    <table class="table text-center bg-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Tổng</th>
                                                <th scope="col">Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($products as $value)
                                                <tr>
                                                    <th><img src="{{ asset($value['productInfo']->image) }}"
                                                            class="img-fluid" alt="..."></th>
                                                    <td>{{ $value['productInfo']->name }}</td>
                                                    <td>{{ $value['stock'] }}</td>
                                                    <td>{{ number_format($value['productInfo']->price) }}</td>
                                                    <td>{{ number_format($value['price']) }}</td>
                                                    <td><a href="{{ route('del-cart', $value['productInfo']->id) }}"><i
                                                                class="fa fa-times"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="des col-md-5 bg-light">
                                        <h4 class="text-center bg-orange py-2"><b>TỔNG THANH TOÁN</b></h4>
                                        <p>Tổng sản phẩm: {{ $totalStock }}</p>
                                        <p>Tổng tiền: {{ number_format($totalPrice) }}</p>
                                    </div>
                                    @else
                                    <div class="des bg-light">
                                        <h4 class="text-center py-5"><b>Gỏi hàng của bạn trống</b></h4>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
