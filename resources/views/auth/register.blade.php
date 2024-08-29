@extends('users.layouts.main')
<link rel="stylesheet" href="css/form.css">
@section('content')
    <div class="mid">
        <div class="align-content-center">
            <a class="nav-link" href="./index.html">
                <img src="img/display/logo.png" class="rounded mx-auto d-block" alt="">
                <h4 class="text-center">NHÀ VƯỜN VÂN THỦY</h4>
            </a>
        </div>
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Đăng kí tài khoản</h3>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="key d-flex">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="user name" name="name" value="{{ old('name') }}">
                        <div class="clearfix"></div>
                    </div>
                    @if ($errors->any())
                        <span class="text-danger">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
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
                    <div class="key d-flex">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" name="password_confirmation">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng kí">
                    <div class="forg">
                        <a href="{{ route('login') }}" class="forg-right">Đã có tài khoản</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
