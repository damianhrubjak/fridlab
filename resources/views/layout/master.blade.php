<!DOCTYPE html>

<html lang="en">

@include('inc.head')

<body>

    @include('inc.header')

    <main>
        @yield('page-content')
    </main>

    @include('inc.footer')

    @include('inc.scroll-up')

    <div class="scripts">
        <script src="{{ request()->getSchemeAndHttpHost() . mix('js/app.js') }}"></script>
        @yield('scripts')
    </div>
</body>

</html>
