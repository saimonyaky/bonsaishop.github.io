<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cây cảnh đẹp</title>
    <link rel="shortcut icon" type="image/png" href="{{url('')}}/dislpay/logo.png"/>
    <link rel="stylesheet" href="{{url('')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/css/slick.css">
    <link rel="stylesheet" href="{{url('')}}/css/slick-theme.css">
    <link rel="stylesheet" href="{{url('')}}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
    <!-- top -->
    @include('users.layouts.header')
    <div id="top-up" class="bg-green">
        <i class='fas fa-angle-up'></i>
    </div>
    <!-- mid -->
    @yield('content')
    <!-- bot -->
    @include('users.layouts.footer')

    <!-- script -->
    <script src="{{url('')}}/js/jquery-3.6.1.min.js"></script>
    <script src="{{url('')}}/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/js/slick.min.js"></script>
    <script src="{{url('')}}/js/script.js"></script>
</body>

</html>