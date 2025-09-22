<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Isaac Yom | Mon Portefolio')</title>

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

        <!--====== LINK ALPINEJS ======-->

        <script src="https://unpkg.com/alpinejs" defer></script>

        <!-- Swiper CSS -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <!--====== LINK CSS ======-->

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <!--====== PRELOADER ======-->
        <div id="preloader">
            <div class="loader">
                <div class="box top-left"></div>
                <div class="box top-right"></div>
                <div class="box bottom-right"></div>
                <div class="box bottom-left"></div>
            </div>
        </div>

        <!--====== HEADER ======-->
        <nav>
            <div class="logo" translate="no">
                <a href="{{ route('home') }}" class="bouncy-text notranslate">
                    <span>I</span><span>s</span><span>a</span><span>a</span><span>c</span>
                    
                    <span class="y-letter">Y</span><span class="y-letter">o</span><span class="y-letter">m</span>    
                </a>
            </div>

            <ul class="nav_list">
                <li class="nav_item">
                    <a href="{{ route('home') }}" class="nav_link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                </li>

                <li class="nav_item">
                    <a href="{{ route('about') }}" class="nav_link">Sur moi</a>
                </li>

                <li class="nav_item">
                    <a href="{{ route('service') }}" class="nav_link">Mes services</a>
                </li>

                <li class="nav_item">
                    <a href="{{ route('contact') }}" class="nav_link">Contactez moi</a>
                </li>
            </ul>

            <!--===== LE MENU BAR =====-->
            <div id="menu-bar" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <!--====== MY_NAME ======-->

        <div class="name">
            <div class="vortex"></div>
            <div class="zone_name">
                <h1>Isaac Yom</h1>
                <p>Développeur fullstack passionné, au service de vos projets les plus ambitieux.</p>
            </div>
        </div>

        <!--====== PRESENTATION ======-->

        <div class="intro">
            <div class="intro-container">
                <div class="image">
                    <img src="{{ asset('images/remove.jpeg') }}" alt="ma_photo">
                </div>

                <div class="text-section">
                    <h1 class="title">Hi, je suis Isaac Yom</h1>
                    <p>
                        Développeur <span>fullstack</span> passionné, je conçois des <span>sites web</span> performants, sur mesure
                        et pensés pour durer. Que vous soyez une entreprise, un entrepreneur, une organisation
                        ou un particulier, je vous accompagne dans la réalisation de vos <span>projet web</span> avec sérieux
                        et créativité. Mon objectif : donner vie à vos idées à travers des solutions faibles, modernes
                        et parfaitement adaptés à vos besoins ✨.
                    </p>

                    <div class="button">
                        <a href="{{ route('contact') }}"><i class="fa-solid fa-envelope"></i> Contactez-moi</a>
                    </div>
                </div>
            </div>
        </div>  
        
        <!--====== LINE ======-->
        <div class="line">
            <div class="glow-line"></div>
        </div>
        
        <!---====== PROJECT ======-->
        <h1 class="titre">
            Voici mon <span class="aurora-text">projet</span> récent.
        </h1>

        <div class="project">
            <div class="project-container">
                <div class="description">
                    <h2><i class="fa-solid fa-building"></i> Site web d'une agence immoblière.</h2>
                    <p>
                        J'ai développé ce site pour une agence immobilière nommée <strong>Yom Service</strong>.
                        Il intègre un espace <strong>Frontend</strong> moderne et une partie <strong>Backend</strong> sécurisée.
                    </p>

                    <ul>
                        <li><i class="fa-solid fa-code"></i> Frontend : <span>HTML, CSS, Bootstrap, Alpine.js, JavaScript</span></li>
                        <li><i class="fa-solid fa-database"></i> Backend : <span>Laravel & MySQL</span></li>
                        <li><i class="fa-solid fa-lock"></i> Admin sécurisé : ajout, modification et suppression des biens</li>
                    </ul>

                    <a target="_blank" href="https://yomservice.com" class="btn-project">
                        <i class="fa-solid fa-paperclip"></i> Voir le projet
                    </a>
                </div>

                <div class="capture">
                  <img src="{{ asset('images/projet.png') }}" alt="capture d'écran">
                </div>
            </div>
        </div>

        <!--====== LINE ======-->
        <div class="line">
            <div class="glow-line"></div>
        </div>

        <!--====== TESTIMONIAL=====-->
        <div class="testimonial-header">
            <div class="testimonial-texts">
                <h2 class="testimonial-title">Avis de mes clients.</h2>

                <p class="testimonial-subtitle">
                    Ils m'ont fait confiance pour leurs projects et voici ce qu'ils en pensent.
                </p>
            </div> 
        </div>

        <section class="testimonials">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <img src="{{ asset('images/boss.jpeg') }}" alt="Boss" class="testimonial-img mx-auto"> 
                            <h2 class="testimonial-name">Mr Gérard LOKOSSOU ✨</h2>
                            <p class="testimonial-text">
                                “Grâce à lui, mon site est devenu professionnel et moderne. Je suis fier du résultat.”
                            </p>    
                        </div>
                    </div>    

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-center">
                                <img src="{{ asset('images/yom.jpg') }}" alt="yom" class="testimonial-img" mx-auto>
                            </div> 
                            <h2 class="testimonial-name">Yom Service ✨</h2>
                            <p class="testimonial-text">
                                “Il a compris mes besoins et livré un site qui dépasse mes attentes.”
                            </p>
                        </div>
                    </div>    

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <img src="{{ asset('images/friend.jpeg') }}" alt="friend" class="testimonial-img">
                            <h2 class="testimonial-name">Mr Brice ADOKO ✨</h2>
                            <p class="testimonial-text">
                                “Toujours disponible, sérieux et créatif. Je le recommande vivement.”
                            </p>
                        </div>
                    </div>
                </div>

                <!---====== Pagination ======--->
                <div class="swiper-pagination"></div>

                <!---====== button next et prev ======--->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        
        <!--===== FOOTER =====-->
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h2 class="footer-title">IsaacYom</h2>
                    <p class="footer_desc">
                        « Je conçois des expériences digitales modernes et élégantes pour donner vie à vos projets. » ✨
                    </p>
                    <div class="socials-footer">
                        <a href="https://api.whatsapp.com/send/?phone=%2B22958507828&text=Bonjour+monsieur/madame%0AJ%27esp%C3%A8re+que+vous+allez+tr%C3%A8s+bien" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h2 class="lien-rapide">Lien Rapide</h2>
                    <ul class="list_link">
                        <li class="list_li"><a class="list_a" href="{{ route('about') }}">À propos</a></li>
                        <li class="list_li"><a class="list_a" href="{{ route('service') }}">Services</a></li>
                        <li class="list_li"><a class="list_a" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h2 class="title-contact">Contactez-moi</h2>
                    <p class="footer-email"><strong>Email</strong>: isaacyomakou@gmail.com</p>
                    <a target="_blank" href="tel:0158507828" class="footer-contact"><strong>Phone</strong>: (+229) 01 58 50 78 28</a>
                </div>
            </div>

            <!--====== LINE ======-->
            <div class="line">
                <div class="glow-line"></div>
            </div>

            <div x-data class="footer-bottom">
                <p>&copy; <span x-text="new Date().getFullYear()"></span> IsaacYom. Tous droits réservés.</p>
            </div>
        </footer>

        <!--==== BUTTON SCROLL ====-->
        <div id="scrollToTop" class="scroll">
            <i class="fas fa-long-arrow-alt-up"></i>
        </div>

        <!--====== Swiper JS ======-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        <!--====== LINK JS ======-->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
