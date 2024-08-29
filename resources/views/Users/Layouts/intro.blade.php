<div class="intro container p-0">
    <div class="d-flex">
        <div class="logo col-3">
            <a class="nav-link" href="{{ route('index') }}">
                <img src="{{url('')}}/img/display/logo.png" alt="">
            </a>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-start">
                @guest
                    <a class="nav-link p-2" href="{{ route('login') }}">
                        Đăng nhập
                    </a>
                    <a class="nav-link p-2" href="{{ route('register') }}">
                        Đăng kí
                    </a>
                @else
                    <a class="nav-link p-2" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Đăng Xuất
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
            <div class="search d-flex align-items-center justify-content-between">
                <ul class="nav ">
                    <li class="d-flex p-0" role="search">
                        <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="nav-item d-flex ps-4">
                        <div class="pe-2">
                            <img src="{{url('')}}/img/display/hand1.png" alt="">
                        </div>
                        <div class="doc">
                            <span>CAM KẾT CHÂT LƯỢNG<br>SẢN PHẨM DỊCH VỤ</span>
                        </div>
                    </li>
                    <li class="nav-item d-flex ps-4">
                        <div class="pe-2 align-items-end">
                            <img src="{{url('')}}/img/display/hand2.png" alt="">
                        </div>
                        <div class="doc">
                            <span>VẬN CHUYỂN NỘI THÀNH<br>MIỄN PHÍ</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
