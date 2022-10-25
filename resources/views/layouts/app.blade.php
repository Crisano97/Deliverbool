<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DELIVERBOOL</title>

    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="{{ asset('DElivebool.ico') }}">

    <!-- Scripts -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.bundle.js" integrity="sha512-Q9b0myMAI+IqHh5ldQJTh3ZXkVHwlcVF+H6+LF/QU3n0XmQp7w/kjapf+I3os0GhvJcZXCr5dAhhs5AbiZafwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('includes.header')
    <div id="app">
        <main>
            @yield('content')
            @yield('script')
        </main>
    </div>
    @include('includes.footer')
    
</body>
</html>
