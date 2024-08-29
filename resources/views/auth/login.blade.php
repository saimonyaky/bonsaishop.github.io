@extends('users.layouts.main')
<link rel="stylesheet" href="css/form.css">
@section('content')
    <div class="mid">
        <div class="align-content-center">
            <a class="nav-link" href="{{route("index")}}">
                <img src="img/display/logo.png" class="rounded mx-auto d-block" alt="">
                <h4 class="text-center">NHÀ VƯỜN VÂN THỦY</h4>
            </a>
        </div>
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Đăng nhập</h3>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="key d-flex">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" placeholder="email" name="email" value="{{ old('email') }}">
                        <div class="clearfix"></div>
                    </div>
                    @if ($errors->any())
                        <span class="text-danger">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                    <div class="key d-flex">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" name="password">
                        <div class="clearfix"></div>
                    </div>
                    @if ($errors->any())
                        <span class="text-danger">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                    <input class="d-block" type="submit" value="Đăng nhập">
                </form>
            </div>
            <div class="forg">
                @if (Route::has('password.request'))
                    <a class="forg-left" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif
                <a href="{{ route('register') }}" class="forg-right">Đăng kí tài khoản mới</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
