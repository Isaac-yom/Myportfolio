<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Administration')</title>

        <!--====== GOOGLE FONT POUR LES POLICES D'ECRITURES ======-->

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">


        <!--====== BOOTSTRAP ======-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!--======= CSS =======-->

        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    </head>

    <body>
        <div class="container mt-5">
            @yield('content')
        </div> 
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
