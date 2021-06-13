<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Legambiente Capannori')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
    
    <!-- Lato, Cabin -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">

    <link href="{{ asset('css/appPublic.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div id="app">
    <!-- Menu -->
    @include('layouts.guest.menu')

    <!-- Main section -->
    <section id="main-section" class="app-public">
        @yield('content')
    </section>

    <!-- Footer -->
    @include('layouts.guest.footer')
</div>

<script src="{{ asset('js/appPublic.js') }}" defer></script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
