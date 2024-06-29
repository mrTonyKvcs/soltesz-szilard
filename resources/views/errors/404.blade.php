<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Soltesz Szilard</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="/img/favicon.png?v=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="ms-preload" class="ms-preload">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <div class="bg-full-page bg-primary back-fixed">
        <div class="mw-500 absolute-center">
            <div class="card animated zoomInUp animation-delay-7 color-primary withripple">
                <div class="card-block">
                    <div class="text-center color-dark">
                        <h1 class="color-primary text-big">Hiba 404</h1>
                        <h2>A keresett oldal nem található!</h2>
                        <p class="lead lead-sm">Lehet, hogy elgépelte az URL-t, ám az is elképzelhető, hogy az oldal
                            megszűnt.</p>
                        <a href="{{ route('pages.home') }}" class="btn btn-primary btn-raised">
                            <i class="zmdi zmdi-home"></i> Kezdőlap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="ms-preload" class="ms-preload"> --}}
    {{--    <div id="status"> --}}
    {{--        <div class="spinner"> --}}
    {{--            <div class="dot1"></div> --}}
    {{--            <div class="dot2"></div> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
    {{-- <div class="bg-full-page ms-hero-bg-primary back-fixed"> --}}
    {{--    <div class="mw-500 absolute-center"> --}}
    {{--        <header class="text-center mb-2"> --}}
    {{--            <span --}}
    {{--                class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">SZ</span> --}}
    {{--            <h1 --}}
    {{--                class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5"> --}}
    {{--                Soltész --}}
    {{--                <span>Szilárd</span> --}}
    {{--            </h1> --}}
    {{--        </header> --}}
    {{--        <div class="card animated zoomInUp animation-delay-7 color-primary withripple"> --}}
    {{--            <div class="card-block"> --}}
    {{--                <div class="text-center color-dark"> --}}
    {{--                    <h1 class="color-primary text-big">Hamarosan jön!</h1> --}}
    {{--                    <div id="ms-countdown"></div> --}}
    {{--                    <p class="lead lead-sm">Izgatottan várjuk, hogy hamarosan megnyithassuk Önnek weboldalunkat! --}}
    {{--                        Köszönjük a türelmét, amíg befejezzük a fejlesztést.</p> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </div> --}}
    <script src="{{ elixir('js/all.js') }}"></script>
</body>

</html>

