<div class="top">
    <!-- menu-contact -->
    <div class="menu-contact">
        <div class="container ">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <div class="hotline">
                        <img src="img/display/phone.png" alt="">
                        <span>Hotline: <b>0123 456 789</b></span>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/Buoidienchinhhieu.vn/">
                        <img src="{{url('')}}/img/display/f.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{url('')}}/img/display/t.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{url('')}}/img/display/gmail.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{url('')}}/img/display/y.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @if ($_SERVER["REQUEST_URI"] != "/login" && $_SERVER["REQUEST_URI"] != "/register")
        <!-- intro -->
        @include('users.layouts.intro')
        <!-- main-menu -->
        @include('users.layouts.navbar')
    @endif
</div>
