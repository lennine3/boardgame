<html>

<head>
    @include('shop/partials/header')
</head>
<body>
    <a onclick="topFunction()" id="myBtn"><img src="{{ asset('Img/arrow-up.png') }}" width="50px" height="50px"></a>
    @include('shop.partials.header-content')
    <!--Content-->
    @include('register')
    @yield('content')
    <!--//Content-->
    <!--Footer-->
    @include('shop.partials.footer')
    <!--//Footer-->
</body>

</html>
