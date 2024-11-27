<header class="site-header mo-left header header-transparent style-1">
    <!-- Top Header -->
    <div class="top-bar">
        <div class="container">
            <div class="dz-topbar-inner d-flex justify-content-between align-items-center">
                <div class="dz-topbar-left">
                    <ul>
                        <li><i class="fa-regular fa-envelope"></i> <a href="mailto:contact@ugbd.fr"> contact@ugbd.fr</a></li>
                    </ul>
                </div>
                <div class="dz-topbar-right">
                    <ul>
                        <li><i class="fa-regular fa-clock"></i>Ouvert : Lundi - Vendredi 9 h 30 à 13 h 30</li>
                        <li><i class="fa fa-phone"></i> <a href="tel:+33658826610">+33 6 58 82 66 10</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <div class="box-header clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header mostion logo-dark">
                        <a href="/"><img src="assets/images/logo.png" alt=""></a>
                    </div>

                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-skew collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- Extra Nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="header-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <a href="/contact" class="btn btn-primary btn-skew appointment-btn">
                                <span class="skew-inner"><span class="text">Contactez-nous</span></span>
                            </a>
                        </div>
                    </div>
                    <!-- Extra Nav -->

                    <!-- Search Form -->
                    <div class="dz-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Enter Your Keyword ...">
                            <span id="quik-search-remove"><i class="fa-solid fa-xmark"></i></span>
                        </form>
                    </div>

                    <!-- Header Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <!-- Accueil -->
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Accueil</a></li>
                            
                            <!-- UGBD -->
                            <li class="sub-menu-down {{ Request::is('about', 'activite', 'mission', 'bureau', 'partenaire', 'contact', 'temoignage', 'galerie', 'actualite') ? 'active' : '' }}">
                                <a href="javascript:void(0);">UGBD</a>
                                <ul class="sub-menu">
                                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">Qui sommes-nous ?</a></li>
                                    <li class="{{ Request::is('activite') ? 'active' : '' }}"><a href="/activite">Nos activités</a></li>
                                    <li class="{{ Request::is('mission') ? 'active' : '' }}"><a href="/mission">Missions & objectifs</a></li>
                                    <li class="{{ Request::is('bureau') ? 'active' : '' }}"><a href="/bureau">Membres du Bureau</a></li>
                                    <li class="{{ Request::is('partenaire') ? 'active' : '' }}"><a href="/partenaire">Partenaire</a></li>
                                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
                                    <li class="{{ Request::is('temoignage') ? 'active' : '' }}"><a href="/temoignage">Témoignages</a></li>
                                    <li class="{{ Request::is('actualite') ? 'active' : '' }}"><a href="/actualite">Actualités</a></li>
                                </ul>
                            </li>
                             

                            <!-- Pratiquer -->
                            <li class="sub-menu-down {{ Request::is('boxe', 'boxe-edu', 'boxe-ama', 'boxe-pro', 'formateur') ? 'active' : '' }}">
                                <a href="javascript:void(0);">Pratiquer</a>
                                <ul class="sub-menu">
                                    <li class="{{ Request::is('boxe') ? 'active' : '' }}"><a href="/boxe">La boxe</a></li>
                                    <li class="{{ Request::is('boxe-edu') ? 'active' : '' }}"><a href="/boxe-edu">Boxe éducative</a></li>
                                    <li class="{{ Request::is('boxe-ama') ? 'active' : '' }}"><a href="/boxe-ama">Boxe amateur</a></li>
                                    <li class="{{ Request::is('boxe-pro') ? 'active' : '' }}"><a href="/boxe-pro">Boxe Professionnelle</a></li>
                                    <li class="{{ Request::is('formateur') ? 'active' : '' }}"><a href="/formateur">Les formateurs</a></li>
                                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Inscription</a></li>
                                </ul>
                            </li>
                            
                            <!-- Actualités -->
                            
                            <li class="{{ Request::is('galerie') ? 'active' : '' }}"><a href="/galerie">Galerie</a></li>
                            <li class="{{ Request::is('actualite') ? 'active' : '' }}"><a href="/actualite">Actualités</a></li>
                        </ul>

                        <!-- Social Icons -->
                        <div class="dz-social-icon">
                            <ul>
                                <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
