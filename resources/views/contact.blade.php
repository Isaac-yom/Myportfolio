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
                    <a href="{{ route('about') }}" class="nav_link {{ request()->routeIs('about') ? 'active' : '' }}">Sur moi</a>
                </li>

                <li class="nav_item">
                    <a href="{{ route('service') }}" class="nav_link {{ request()->routeIs('service') ? 'active' : '' }}">Mes services</a>
                </li>

                <li class="nav_item">
                    <a href="{{ route('contact') }}" class="nav_link {{ request()->routeIs('contact') ? 'active' : '' }}">Contactez moi</a>
                </li>
            </ul>

            <!--===== LE MENU BAR =====-->
            <div id="menu-bar" class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <div class="tel">
            <div class="tel-container">
                <h3 class="tel-title">Parlons de vos projets.</h3>
                <p class="tel-desc">
                    Vous avez une idée ou un projet en tête ?  
                    Je suis disponible <strong>24h/24</strong> par téléphone au  
                    <a target="_blank" href="tel:+2290158507828" class="tel-link">(+229) 01 58 50 78 28</a>  
                    ou directement sur <a href="https://wa.me/2290158507828" target="_blank" class="tel-wa">WhatsApp</a>.
                </p>
            </div>    
        </div>

        <!--====== LINE ======-->
        <div class="line">
            <div class="glow-line"></div>
        </div>

        <div class="contact">
            <h2 class="contact-title">Contactez-moi via le formulaire ✉️</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="contact-container">
                @csrf
                <div class="input-box">
                    <label for="name">Nom*</label>
                    <input type="text" name="name" id="name" placeholder="Entrez votre nom" required>
                </div>

                <div class="input-box">
                    <label for="firstname">Prénom*</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prénom" required>
                </div>

                <div class="input-box">
                    <label for="tel">Téléphone*</label>
                    <input type="tel" id="tel" name="tel" placeholder="+229 01 58 50 78 28" required>
                </div>

                <div class="input-box">
                    <label for="message">Message*</label>
                    <textarea name="message" id="message" placeholder="Décrivez votre projet..." required></textarea>
                </div>

                <button type="submit" class="btn-contact">
                    <i class="fas fa-paper-plane"></i> Envoyer
                </button>
            </form>
        </div>
        
        <!--===== FOOTER =====-->
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h2 class="footer-title">IsaacYom</h2>
                    <p class="footer_desc">
                        « Je conçois des expériences digitales modernes et élégantes pour donner vie à vos projets. »
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
        
        <!--====== LINK JS ======-->
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
