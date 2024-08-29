<div class="main_menu" id="myTopnav">

    <div class="container menu px-0">
        <div class="row">
            <!-- menu -->
            <div class="list-item col-3 d-flex align-items-center category">
                <a class="list-btn ps-2" type="button" href="{{route('product')}}">
                    <i class="fa fa-bars" style="color: white;"></i>
                    <b class="ps-2">DANH MỤC SẢN PHẨM</b>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="container-fluid d-lg-block p-0">

                        <a class="navbar-brand d-none" href="{{route('index')}}"><b>TRANG CHỦ</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" style="color: white;"></i>
                        </button>
                        <div class="collapse navbar-collapse list_menu d-lg-block" id="navbarSupportedContent">
                            <ul class="nav justify-content-between flex-nowrap navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link index" href="{{route('index')}}"><b>TRANG CHỦ</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('introduce')}}"><b>GIỚI THIỆU</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product')}}"><b>SẢN PHẨM</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('order')}}"><b>DỊCH VỤ</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><b>HỖ TRỢ KHÁCH HÀNG</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('news')}}"><b>TIN TỨC</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}"><b>LIÊN HỆ</b></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>