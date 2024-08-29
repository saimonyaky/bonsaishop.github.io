@extends('users.layouts.main')
<link rel="stylesheet" href="{{url('')}}/css/lienhe.css">
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

                        </div>
                        <!-- banner -->
                        <div class="banner-img">
                            <img src="/img/display/lien he.png" class="w-100" alt="">
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
                                        <b>Liên hệ</b>
                                    </div>
                                    <div class="icon flex-grow-1 bg-gray">
                                        <img src="img/display/icon_section1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- main-content -->
                            <div class="main-content pb-2">
                                <div class="row py-4">
                                    <!-- info -->
                                    <div class="info col-lg-6">
                                        @if (session()->has('mess'))
                                            <div class="m-0 callout callout-success">
                                                <i class="icon fa fa-check"> </i>
                                                {{ session()->get('mess') }}
                                            </div>
                                        @else
                                            Mọi ý kiến đóng góp xin vui lòng điền vào Form dưới đây và gửi cho chúng tôi.
                                            Xin
                                            chân thành cảm ơn!
                                            <form action="{{ route('send_contact') }}" method="POST">
                                                @csrf
                                                <table class="w-100">
                                                    <tr>
                                                        <td>Họ tên</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class='fas fa-address-book pe-1'></i></span>
                                                                <input type="text" class="form-control" name="name"
                                                                    @if ($errors->any()) placeholder="{{ $errors->first('name') }}" @endif>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class='far fa-envelope'
                                                                        style="font-size: 18px;"></i></span>
                                                                <input type="text" class="form-control" name="email"
                                                                    @if ($errors->any()) placeholder="{{ $errors->first('email') }}" @endif>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Địa chỉ</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class='fas fa-home'></i></span>
                                                                <input type="text" class="form-control" name="address">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Điện thoại</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class='fas fa-mobile-alt px-1'></i></span>
                                                                <input type="text" class="form-control" name="phone"
                                                                    @if ($errors->any()) placeholder="{{ $errors->first('phone') }}" @endif>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiêu đề</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class='far fa-edit'></i></span>
                                                                <input type="text" class="form-control" name="title"
                                                                    @if ($errors->any()) placeholder="{{ $errors->first('title') }}" @endif>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nội dung</td>
                                                        <td>
                                                            <div>
                                                                <textarea class="form-control" rows="3" name="content"
                                                                    @if ($errors->any()) placeholder="{{ $errors->first('content') }}" @endif></textarea>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <button type="submit" class="bg-orange"><b>GỬI ĐI</b></button>
                                                            <button type="reset" class="bg-secondary"><b>NHẬP
                                                                    LẠI</b></button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        @endif
                                    </div>
                                    <!-- des -->
                                    <div class="des col-lg-6 ps-4 align-content-center row bg-light">
                                        <div class="">
                                            <img src="img/display/logo.png" class="rounded mx-auto d-block" alt="">
                                            <h4 class="text-center">NHÀ VƯỜN VÂN THỦY</h4>
                                            <p class="text-center">Địa chỉ: Đường Phú Minh, Văn Trì, Minh Khai, Bắc Từ Liêm
                                                Hà Nội.</p>
                                            <p class="text-center">Hotline: 093 6596 425 (Mrs.Thủy)-097 6885 796(Mr.Lâm)</p>
                                            <p class="text-center">Email: buoidienvn@gmail.com</p>
                                            <p class="text-center">Website: buoidienvn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
