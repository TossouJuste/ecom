<!-- Header -->
<header class="header header-four">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img src="assets/img/logo-white.svg" class="img-fluid white-logo" alt="Logo">
                    <img src="assets/img/logo.svg" class="img-fluid dark-logo" alt="Logo">
                </a>
                <a href="/" class="navbar-brand logo-small">
                    <img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/" class="menu-logo">
                        <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="/">Home <i class=""></i></a>

                    </li>
                    <li class="has-submenu">
                        <a href="#">vehicles <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="/vehicule">Used vehicles</a></li>
                            <li><a href="/vehicule">New vehicle</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/terms">Terms & Conditions</a></li>
                        </ul>
                    </li>
                    @if (Auth::check() && Auth::user()->type_user === 'client')
                        <li class="has-submenu">
                            <a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Admin Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="admin/index.php">Dashboard</a></li>
                                        <li><a href="admin/reservations.php">Bookings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @guest
                        <li class="login-link">
                            <a href="/register">Sign Up</a>
                        </li>
                        <li class="login-link">
                            <a href="/login">Sign In</a>
                        </li>
                    @else
                        <li class="login-link">
                            <a href="/login"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                        {{-- <li>
                            <a href="#" class="dropdown-toggle no-arrow"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="micon"><i class="fa fa-logout"></i></span>
                                <span class="mtext">Se déconnecter</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li> --}}
                    @endguest
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                @guest
                    <li class="nav-item user-link">
                        <a class="nav-link btn-secondary btn d-inline-flex align-items-center" href="/login"><i
                                class="bx bx-user me-1"></i>Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-reg  d-inline-flex align-items-center" href="/register"><span><i
                                    class="bx bx-lock"></i></span>Sign Up</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link header-reg  d-inline-flex align-items-center"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
