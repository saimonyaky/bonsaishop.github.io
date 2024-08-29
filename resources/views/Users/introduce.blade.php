@extends('users.layouts.main')
<link rel="stylesheet" href="/css/gioithieu.css">
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
                                <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- banner -->
                    <div class="banner-img">
                        <img src="/img/display/gioithieu.png" class="w-100 " alt="">
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
                                    <b>Giới thiệu</b>
                                </div>
                                <div class="icon flex-grow-1 bg-gray">
                                    <img src="img/display/icon_section1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- main-content -->
                        <div class="main-content">
                            Nhà vườn Vân Thủy chúng tôi có bề dày lâu năm xây dựng và phát triển. Chúng tôi bắt đầu sản xuất, cung ứng các loại cây ăn quả, cây bóng mát từ năm 1995. Trải qua quá trình xây dựng và trưởng thành, chúng tôi đã tích lũy được nhiều kinh nghiệm trong lĩnh vực nông nghiệp. Năm 2001, nhà vườn Văn Thủy đã đi tiên phong chuyển cây bưởi Diễn và cây cam Canh, là những đặc sản địa phương trồng lên trên chậu làm cây cảnh. Với phương châm luôn luôn tìm tòi sáng tạo, sản phẩm của chúng tôi đã có mặt tại nhiều địa phương trong cả nước từ miền Bắc đến miền Trung và cả Nam Bộ. Khách hàng luôn yên tâm về chất lượng sản phẩm của chúng tôi. Đó chính là lý do vì sao nhà vườn Văn Thủy luôn phát triển trong gần 20 năm qua.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection