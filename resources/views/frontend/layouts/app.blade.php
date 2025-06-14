<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('frontend.layouts.header')
 
</head>

<body id="bg" class="theme-sharped">
    <!-- page start -->
    <div class="page">
        @include('frontend.layouts.nav')
        <div class="site-main">
            @yield('content')
            @include('frontend.layouts.footer')
        </div>
    </div>

    @yield('js')
</body>

</html>
