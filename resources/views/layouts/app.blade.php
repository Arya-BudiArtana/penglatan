<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/webeyond/eartfarm/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 07:34:55 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dodol Penglatan - @yield('title')</title>
    <meta name="title" content="Dodol Penglatan">
    <meta name="description"
        content="Website Dodol Penglatan adalah website untuk mempromosikan UMKM usaha dodol di daerah Penglatan, Kab. Buleleng">
    <meta name="keywords" content="Dodol, Penglatan, Singaraja, Bali, Makanan">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Dodol Penglatan, Ganatech ID">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Iz-c9sI-ZfLuKHHK8HL7QIuXsdB11F3534dgVsl2Gj0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}" style="border-radius: 100%">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BV30Z0JTKM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-BV30Z0JTKM');
    </script>
    @include('layouts.header')
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

<!-- Mirrored from themebeyond.com/html/webeyond/eartfarm/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Nov 2021 07:34:57 GMT -->

</html>