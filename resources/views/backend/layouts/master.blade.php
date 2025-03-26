<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.layouts.head')
        @yeild('morecss')
    </head>
    <body>
        <!-- leftbar-tab-menu -->
        @include('backend.layouts.header')
        <div class="page-container row-fluid">
            @include('backend.layouts.sidebar')
            @yield('main-content')
        </div>
        @include('backend.layouts.comman-modal') 
        @include('backend.layouts.footer-js')
        @yield('morescripts')
    </body>
</html>