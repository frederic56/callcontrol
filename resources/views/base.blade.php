<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{$fav->logo}}" type="image/x-icon">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> --}}
    <title>Homepage</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/iconify-icon.min.js'])
    <!--<script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js" defer></script> -->

</head>
<body id="body">
    <header class="header" id="headerId">
        @include('page.header')
    </header>
        
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer>
        @include('page.footer')
    </footer>

</body>
</html>