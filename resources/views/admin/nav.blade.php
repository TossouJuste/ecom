<div class="left-side-bar">
    <div class="brand-logo text-center py-3">
        <a href="{{ url('/admin') }}">
            <h2 class="text-white">AM5 AUTO</h2>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="fa fa-times"></i>
        </div>
    </div>

    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                
                <!-- Tableau de bord -->
                <li class="{{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ url('/admin') }}" class="dropdown-toggle no-arrow">
                        <span class="micon"><i class="fa fa-home"></i></span>
                        <span class="mtext">Tableau de bord</span>
                    </a>
                </li>

                <!-- Clients -->
                <li class="{{ request()->is('admin/clients*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/clients') }}" class="dropdown-toggle no-arrow">
                        <span class="micon"><i class="fa fa-users"></i></span>
                        <span class="mtext">Clients</span>
                    </a>
                </li>

                <!-- Gestion véhicule -->
                <li class="{{ request()->is('admin/categories*') || request()->is('admin/brands*') || request()->is('admin/avis*') ? 'active' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon"><i class="fa fa-car"></i></span>
                        <span class="mtext">Gestion véhicule</span>
                    </a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
                            <a href="{{ url('/admin/categories') }}">Catégories</a>
                        </li>
                        <li class="{{ request()->is('admin/brands*') ? 'active' : '' }}">
                            <a href="{{ url('/admin/brands') }}">Marques</a>
                        </li>
                        <li class="{{ request()->is('admin/avis*') ? 'active' : '' }}">
                            <a href="{{ url('/admin/avis') }}">Avis</a>
                        </li>
                    </ul>
                </li>

                <!-- Cars -->
                <li class="{{ request()->is('admin/cars*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/cars') }}" class="dropdown-toggle no-arrow">
                        <span class="micon"><i class="fa fa-car"></i></span>
                        <span class="mtext">Véhicules</span>
                    </a>
                </li>

                <!-- Commandes -->
                <li class="{{ request()->is('admin/commandes*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/commandes') }}" class="dropdown-toggle no-arrow">
                        <span class="micon"><i class="fa fa-shopping-cart"></i></span>
                        <span class="mtext">Commandes</span>
                    </a>
                </li>

                <!-- Contact -->
                <li class="{{ request()->is('admin/contact*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/contact') }}" class="dropdown-toggle no-arrow">
                        <span class="micon"><i class="fa fa-envelope"></i></span>
                        <span class="mtext">Contact</span>
                    </a>
                </li>

                <!-- Déconnexion -->
                <li>
                    <a href="#" class="dropdown-toggle no-arrow"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="micon"><i class="fa fa-logout"></i></span>
                        <span class="mtext">Se déconnecter</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>
