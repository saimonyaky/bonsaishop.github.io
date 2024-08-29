@extends('users.layouts.main')
<link rel="stylesheet" href="{{ url('') }}/css/sanphamchitiet.css">
@section('content')
    <div class="mid">
        <div class="container ">
            <div class="banner">
                <div class="row">
                    <div class="">
                        <!-- list -->
                        <div class="collapse list" id="list">
                            <div id="list-example" class="list-group">
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Cây trang trí trong nhà</span>
                                </a>
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Cây trang trí sân vườn</span>
                                </a>
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Cây phong thủy</span>
                                </a>
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Cây cổ thụ</span>
                                </a>
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Cây bóng mát</span>
                                </a>
                                <a class="list-group-item list-group-item-action" href="./sanpham.html">
                                    <img src="./img/icon_mnuL.png" alt="">
                                    <span class="ps-2">Dịch vụ vật tư</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <!-- direct -->
                        <div class="direct">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-2">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('product') }}">Sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="introduce">
                <div class="row">
                    <!-- slide -->
                    <div class="col-lg-5 h-100">
                        <section class="slide-ctsp">
                            @if (empty($data->product_images))
                                <div class="slider-for">
                                    @foreach ($data->product_images as $value)
                                        <div>
                                            <img src="{{ asset($value->image) }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="slider-nav">
                                    @foreach ($data->product_images as $key => $value)
                                        <div class="slide-img @if ($key == 0) selected @endif">
                                            <img src="{{ asset($value->image) }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p>
                                    <img class="img-fluid w-100" src="{{ asset($data->image) }}" alt="">
                                </p>
                            @endif
                        </section>
                    </div>
                    <!-- des -->
                    <div class="col-lg-7">
                        <div class="title">
                            <h4>{{ $data->name }}</h4>
                            <ul>
                                <li><b>Mã sản phẩm:</b></li>
                                <li><b>Tình trạng:</b>
                                    @if ($data->stock)
                                        còn hàng
                                    @else
                                        hết hàng
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <form action="{{ route('add-cart', $data->slug) }}" method="POST">
                                @csrf
                                <table>
                                    <tr class="title">
                                        <td>Giá bán:</td>
                                        <td>Số lượng:</td>
                                    </tr>
                                    <tr>
                                        <td class="price pe-4">
                                            <h3><b>{{ number_format($data->price) }} đ</b></h3>
                                        </td>
                                        <td class="pe-3"><input type="number" value="1" min="1"
                                                name="quanty"></td>
                                        <td><button class="btn" type="submit"><i
                                                    class='fas fa-shopping-cart px-2'></i><b class="pe-2">ĐẶT
                                                    HÀNG</b></button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="des">
                            <p><b>MÔ TẢ NGẮN</b></p>
                            <p>{{ $data->describe }}</p>
                        </div>
                        <div>
                            <p>Tags: </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <button class="nav-link active"><b>THÔNG TIN SẢN PHẨM</b></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link"><b>ĐÁNH GIÁ</b></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body active">
                        <p class="card-text">{{ $data->info }}</p>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-12 col-lg-6">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Đặc điểm của {{ $data->name }}</b></h5>
                                        <p class="card-text">{{ $data->features }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ url('') }}/img/display/ttsp01.png" alt="..."
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <img src="{{ url('') }}/img/display/ttsp02.png" alt="..."
                                        class="img-fluid rounded-start">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Cách chăm sóc và ý nghĩa của {{ $data->name }}</b>
                                        </h5>
                                        <p class="card-text">{{ $data->condition }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other">
                <!-- img-title -->
                <div class="img-title">
                    <div class="d-flex">
                        <div class="justify-content-start bg-green tree">
                            <img src="{{ url('') }}/img/display/cay.png" alt="">
                        </div>
                        <div class="bg-green content p-2">
                            <b>Sản phẩm liên quan</b>
                        </div>
                        <div class="icon flex-grow-1 bg-gray">
                            <img src="{{ url('') }}/img/display/icon_section1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="slide">
                    <section>
                        <div class="autoplay">
                            @if ($product)
                                @foreach ($product as $value)
                                    <div class="sp">
                                        <a href="{{ route('product_detail', $value->slug) }}">
                                            <div class="card px-1">
                                                <img src="{{ asset($value->image) }}" class="" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text name">{{ $value->name }}</p>
                                                    <p class="card-text price">{{number_format( $value->price )}}đ</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
