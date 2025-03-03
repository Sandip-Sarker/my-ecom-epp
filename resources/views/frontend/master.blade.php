<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

    @include('frontend.include.meta')

    @include('frontend.include.style')

</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>


    @include('frontend.include.header')

    @yield('main')

    @include('frontend.include.footer')

<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>

    @include('frontend.include.script')
</body>

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 10:56:45 GMT -->
</html>
