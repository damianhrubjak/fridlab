<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    @yield('styles')

    <link rel="stylesheet" href="{{ request()->getSchemeAndHttpHost() . mix('css/admin.css') }}">
</head>

<body>

    @include('admin.inc.side-menu')

    <main class="page-wrapper">
        @yield('page-content')
    </main>

    <div class="scripts">
        <script src="{{ request()->getSchemeAndHttpHost() . mix('js/admin.js') }}"></script>
        @yield('scripts')
    </div>
</body>

</html>
