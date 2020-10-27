<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.lionode.com/focus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 07:05:37 GMT -->
<head>
    @yield('title','eshop')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

@include('frontend.partials.style')
@yield('styles')
</head>
<body>
    <div class="preloader loader" style="display: block;"> <img src="{{ asset('frontend/image/loader.gif') }}"  alt="#"/></div>
    <header>
        @include('frontend.partials.header')
        {{-- @include('frontend.partials.cart')      --}}
    </header>
    @include('frontend.partials.navbar')     

    <div class="conainer">
        @yield('breadcrumb')
        {{-- main --}}
            <div class="app">
                @include('frontend.partials.flash-massage')
            </div>
            @yield('shop-content')
        
        {{-- end-main --}}
    </div>
    @include('frontend.partials.footer')

    @yield('script')
    @include('frontend.partials.script')
{{-- </div>
</div> --}}
</body>

<!-- Mirrored from html.lionode.com/focus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 07:07:57 GMT -->
</html>
