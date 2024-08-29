@extends('users.layouts.main')
<link rel="stylesheet" href="{{ url('') }}/css/trangchu.css">
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
                    <div class="col-lg-9 col-12 ps-0 slide">
                        <!-- banner -->
                        <section class="banner-slide">
                            <div>
                                <img src="/img/display/banner.png" class="" alt="">
                            </div>
                            <div>
                                <img src="/img/display/banner.png" class="" alt="">
                            </div>
                            <div>
                                <img src="/img/display/banner.png" class="" alt="">
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- sp ban chay -->
            <div>
                <!-- img-title -->
                <div class="img-title">
                    <div class="d-flex">
                        <div class="justify-content-start bg-green tree">
                            <img src="img/display/cay.png" alt="">
                        </div>
                        <div class="bg-green content p-2">
                            <b>Sản phẩm bán chạy</b>
                        </div>
                        <div class="icon flex-grow-1 bg-gray">
                            <img src="img/display/icon_section1.png" alt="">
                        </div>
                        <div class="bg-gray justify-content-end p-2">
                            <a href="{{ route('product') }}">
                                <span>Xem tất cả</span>
                                <img src="img/display/arrow-btn.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- content -->
                <div class="content">
                    <div class="row">
                        <div class="col-3 decor">
                            <img src="{{ url('') }}/img/display/sp-ban-chay.png" alt="" class="w-100 h-100">
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row d-flex justify-content-between">
                                <div class="col-xl-3 col-md-4 col-sm-6 sp">
                                    <a href="">
                                        <div class="card px-1">
                                            <img src="./img/Cay-kim-tien.png" class="" alt="...">
                                            <div class="card-body">
                                                <p class="card-text name">Cây Kim Tiền</p>
                                                <p class="card-text price">1.810.000đ</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($list as $val)
                <div>
                    <!-- img-title -->
                    <div class="img-title">
                        <div class="d-flex">
                            <div class="justify-content-start bg-green tree">
                                <img src="img/display/cay.png" alt="">
                            </div>
                            <div class="bg-green content p-2">
                                <b>{{ $val['category']->name }}</b>
                            </div>
                            <div class="icon flex-grow-1 bg-gray">
                                <img src="img/display/icon_section1.png" alt="">
                            </div>
                            <div class="bg-gray justify-content-end p-2">
                                <a href="{{ route('category', $val['category']->slug) }}">
                                    <span>Xem tất cả</span>
                                    <img src="img/display/arrow-btn.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content">
                        <div class="row">
                            <div class="col-3 decor">
                                <img src="{{ asset($val['category']->image) }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="row d-flex justify-content-between">
                                    @foreach ($val['product'] as $value)
                                        <div class="col-xl-3 col-md-4 col-sm-6 sp">
                                            <a href="{{ route('product_detail', $value->slug) }}">
                                                <div class="card px-1">
                                                    <img src="{{ asset($value->image) }}" class="img-fluid" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text name">{{ $value->name }}</p>
                                                        <p class="card-text price">{{number_format($value->price) }}đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- news -->
        <div class="news">
            <div class="name">
                <h4><b>TIN TỨC</b></h4>
            </div>
            <div class="container content">
                <div class="row d-flex justify-content-between">
                    @if ($news)
                        @foreach ($news as $new)
                            <div class="col-xl-3 col-sm-6 col-12">
                                <a href="{{ route('news') }}">
                                    <div class="card ">
                                        <img src="{{ asset($new->image) }}" class="" alt="...">
                                        <div class="card-body">
                                            <p class="card-text"><b>{{ $new->title }}</b></p>
                                            <p class="card-text">
                                                <img src="img/display/clock.png" alt="">
                                                <span class="opacity-75">
                                                    <i>{{date_format($new->updated_at,"d/m/Y")}}</i>
                                                </span>
                                            </p>
                                            <p class="card-text des">{{ $new->content }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="more-btn">
                    <a href="{{ route('news') }}">
                        <button type="button" class="btn btn-outline-success">
                            <span>Xem thêm</span>
                            <img src="img/display/arrow-btn.png" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- comment -->
        <div class="comment">
            <div class="name">
                <h4><b>Ý KIẾN KHÁCH HÀNG</b></h4>
            </div>
            <div class="h-100">
                <section class="slide-cmt container">
                    <div>
                        <div id="message" class="">
                            <div class="message-body">
                                <table>
                                    <tr>
                                        <td class="d-flex align-items-stretch"><i class='fas fa-quote-left'></i></td>
                                        <td>
                                            <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa
                                                luạ Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc
                                                sống hằng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho bạn mỗi lần tặng
                                                hoa...</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="arrow">
                                <div class="outer"></div>
                                <div class="inner"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="img col-3">
                                    <img src="./img/avt01.png" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-9">
                                    <div class="card-body p-0 ps-2">
                                        <p class="card-text m-0">Nguyễn Vân Anh</p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                Hà Nội
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="message" class="">
                            <div class="message-body">
                                <table>
                                    <tr>
                                        <td class="d-flex align-items-stretch"><i class='fas fa-quote-left'></i></td>
                                        <td>
                                            <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa
                                                luạ Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc
                                                sống hằng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho bạn mỗi lần tặng
                                                hoa...</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="arrow">
                                <div class="outer"></div>
                                <div class="inner"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="img col-3">
                                    <img src="./img/avt01.png" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-9">
                                    <div class="card-body p-0 ps-2">
                                        <p class="card-text m-0">Nguyễn Vân Anh</p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                Hà Nội
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="message" class="">
                            <div class="message-body">
                                <table>
                                    <tr>
                                        <td class="d-flex align-items-stretch"><i class='fas fa-quote-left'></i></td>
                                        <td>
                                            <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa
                                                luạ Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc
                                                sống hằng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho bạn mỗi lần tặng
                                                hoa...</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="arrow">
                                <div class="outer"></div>
                                <div class="inner"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="img col-3">
                                    <img src="./img/avt01.png" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-9">
                                    <div class="card-body p-0 ps-2">
                                        <p class="card-text m-0">Nguyễn Vân Anh</p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                Hà Nội
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="message" class="">
                            <div class="message-body">
                                <table>
                                    <tr>
                                        <td class="d-flex align-items-stretch"><i class='fas fa-quote-left'></i></td>
                                        <td>
                                            <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa
                                                luạ Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc
                                                sống hằng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho bạn mỗi lần tặng
                                                hoa...</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="arrow">
                                <div class="outer"></div>
                                <div class="inner"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="img col-3">
                                    <img src="./img/avt01.png" class="w-100 h-100" alt="...">
                                </div>
                                <div class="col-9">
                                    <div class="card-body p-0 ps-2">
                                        <p class="card-text m-0">Nguyễn Vân Anh</p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                Hà Nội
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
