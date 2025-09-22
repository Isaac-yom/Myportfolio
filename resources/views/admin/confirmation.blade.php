<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Page de confirmation')</title>

        <!--====== SEO POUR GOOGLE ======-->

        <meta name="description" content="Isaac Yom | Portefolio professionnel de développeur fullstack. Frontend et backend réalisés avec expertise et passion.">

        <meta name="robots" content="index, follow">

        <!--====== SEO POUR LES RESEAUX SOCIAUX (OPEN GRAPH) ======-->

        <meta property="og:title" content="Portefolio de Isaac Yom">

        <meta property="og:description" content="Je suis Isaac Yom, un développeur fullstack prêt à concrétiser vos projets web, côté frontend comme backend, avec sérieux et efficacité.">

        <meta property="og:image" content="{{ asset('images/isaac.jpeg') }}">

        <meta property="og:url" content="https://monportefolio.com">

        <meta property="og:type" content="website">

        <!--====== FAVICON (LOGO DANS L'ONGLET) ======-->

        <link rel="icon" type="image/jpg" href="{{ asset('images/isaac.jpeg') }}">

        <!--====== FONT AWESOME POUR LES ICONS ======-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!--====== GOOGLE FONT POUR LES POLICES D'ECRITURES ======-->

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">

        <!--====== BOOTSTRAP ======-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <!--====== LINK CSS ======-->

        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

        <style>
            body {
               background-color: #0a2a5e; 
            }
        </style>
    </head>

    <body>
        <div class="confirmation">
            <h2>Merci pour votre prise de contact.</h2>
            <p>Votre demande a bien été enregistrée et je reviendrai vers vous dans les plus brefs délais.</p>
            <a href="{{ route('home') }}" class="btn-confirmation">Retour à l'accueil</a>  
        </div>  
    </body>
</html>


