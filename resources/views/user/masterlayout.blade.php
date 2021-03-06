<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <title>ReviewHub</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Loading Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    {{--W3 CSS--}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Edit CSS -->
    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/login-register.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,600,300,200" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    @yield ('custom-css')

</head>


<body>

@yield ('content')


<!--=== Load JS here for greater good ====-->
<script src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/login-register.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/isotope.pkgd.js')}}"></script>
<script src="{{URL::asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
<script src="{{URL::asset('js/jquery.nivo.slider.pack.js')}}"></script>
<script src="{{URL::asset('js/portfolio-custom1.js')}}"></script>
<script src="{{URL::asset('js/portfolio-custom2.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/matchPass.js')}}"></script>

@if (count($errors) > 0)
    @if (session('type') == 'reg')
        <script>
            openRegisterModal();
        </script>
    @endif
@endif

@if (count($errors) > 0)
    @if (session('type') == 'login')
        <script>
            openLoginModal();
        </script>
    @endif
@endif

@if (session()->has('status'))
    <script>
        openLoginModal();
    </script>
@endif

@yield ('custom-script')

@include ('user.partials.footer')

</body>

</html>
