<!DOCTYPE html>

<html lang="sk">

@include('inc.head')

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
