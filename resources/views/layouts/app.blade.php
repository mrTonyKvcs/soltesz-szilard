<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#333">
        <title>Soltesz Szilard</title>
        <meta name="description" content="Soltész Szilárd - Selfness és Coaching">
        <meta name="keywords" content="coaching Kecskemét,  coaching Budapest, vezetőfejlesztés Kecskemét, vezetőfejlesztés Budapest,  vezetőfejlesztés+coaching, vezetőfejlesztés tréning ,vezetők fejlesztése, vezető fejlesztő tréning, vezetői kompetenciák fejlesztése, munkahelyi mentalhigenia">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 Month">
        <meta name="distribution" content="global">
        <meta name="language" content="HU">
        <link rel="shortcut icon" href="/img/favicon.png?v=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body align="justify">
        <div id="ms-preload" class="ms-preload">
            <div id="status">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
        <div class="sb-site-container body-color">
            @include('partials.modal')
            @include('partials.header')
            @yield('content')
        </div>
        <!-- sb-site-container -->
        @include('partials.footer')
        @include('partials.sb-site-container')
        <script src="{{ elixir('js/all.js') }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123903820-1"></script>
        <script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-123903820-1');
        </script>

    </body>
</html>
