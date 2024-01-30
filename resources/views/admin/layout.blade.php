<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="shortcut icon" href="{{$fav->logo}}" type="image/x-icon"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> --}}
    <title>Homepage</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js',
    'resources/js/iconify-icon.min.js', 'resources/js/jQuery.js','resources/css/bootsrap.min.css'
    ])
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>
    <body>
    
        <div class="admin-section">
            @include('admin.navbar')
            @yield('content')
            
        </div>

    </body>
</html>