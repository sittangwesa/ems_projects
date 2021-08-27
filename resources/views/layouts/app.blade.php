<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    
</head>
<body>
   
    <div id="app">
        @include('inc.navbar')
            <div class="container" >
                @include('inc.messages')
            @yield('content')
            </div>

        <main class="py-4">
        
        </main>
    </div>
    
     <!-- Footer -->
     <footer class="sticky-footer bg-white"  >
        <div class="container my-auto">
        <div class="text-center my-auto">
            
            <h1 style="color:rgb(158, 158, 238);">Contacts Us</h1>
            <i class="fab fa-twitter"><a class="nav-link " href="/https://www.twitter.com/ems"></a></i>
            <i class="fab fa-facebook"><a class="nav-link " href="/https://www.facebook.com/ems"></a></i>
            <i class="fab fa-whatsapp"><a class="nav-link " href="/https://www.whatsapp.com/ems"></a></i>
            <i class="fab fa-youtube"><a class="nav-link " href="/https://www.youtube.com/ems"></a></i>
            <i class="fab fa-instagram"><a class="nav-link " href="/https://www.instagram.com/ems"></a></i>
            <i class="fab fa-linkedin"><a class="nav-link " href="/https://www.linkedin.com/ems"></a></i>
        </div>
           
                    <div class="copyright text-center my-auto">
                        <span>Copyright 2021-2022. All rights reserved.</span>
                    </div>
                </div>
            </footer>

     
            @yield('js')
</body>
</html>

