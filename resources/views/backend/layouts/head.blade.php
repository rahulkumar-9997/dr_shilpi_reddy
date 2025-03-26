
    @yield('meta')
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />  
    <script> window.Laravel = { csrfToken: 'csrf_token() ' } </script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="shortcut icon" href="{{asset('backend/assets/shilpi-img/cropped-cropped-invest-logo-07-32x32.png')}}" type="image/x-icon" />  

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{asset('backend/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <link href="{{asset('backend/assets/plugins/messenger/css/messenger.css')}}" rel="stylesheet" type="text/css" media="screen"/>
		<link href="{{asset('backend/assets/plugins/messenger/css/messenger-theme-future.css')}}" rel="stylesheet" type="text/css" media="screen"/>
		<link href="{{asset('backend/assets/plugins/messenger/css/messenger-theme-flat.css')}}" rel="stylesheet" type="text/css" media="screen"/>    
		
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    

