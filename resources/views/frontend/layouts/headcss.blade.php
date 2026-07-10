<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title')</title>
@yield('meta')
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="icon" href="{{ asset('fronted/shilpi-img/favicon.ico') }}" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fronted/shilpi-img/cropped-cropped-invest-logo-07-32x32.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('fronted/shilpi-img/cropped-cropped-invest-logo-07-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fronted/shilpi-img/cropped-cropped-invest-logo-07-180x180.png') }}">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
<link rel="stylesheet" href="{{ asset('fronted/css/app.css') }}?v={{ filemtime(public_path('fronted/css/app.css')) }}">
<link rel="stylesheet" href="{{asset('fronted/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('fronted/bootstarp/bootstrap.min.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
<link rel="stylesheet" href="{{asset('fronted/css/style.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
<link rel="stylesheet" href="{{asset('fronted/css/mobile.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
<link rel="stylesheet" href="{{asset('fronted/css/dr_shilpi_css.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
<link rel="stylesheet" href="{{asset('fronted/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/css/jquery.fancybox.min.css')}}">
<!-- work -->
<link rel="stylesheet" href="{{asset('fronted/css/super-classes.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
<link rel="stylesheet" href="{{asset('fronted/css/custom-style.css')}}?v={{ env('ASSET_VERSION', '1.0.0') }}">
  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5SSBF16EJK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5SSBF16EJK');
</script>
@stack('styles')