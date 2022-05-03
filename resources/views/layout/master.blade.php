<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;700&family=Press+Start+2P&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ request()->getSchemeAndHttpHost() . mix('css/app.css') }}">
</head>

<body>

    <main>
        @yield('page-content')
    </main>
    <div class="scripts">
        <script src="{{ request()->getSchemeAndHttpHost() . mix('js/app.js') }}"></script>
        @yield('scripts')
    </div>
</body>

</html>
