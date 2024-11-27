<div class="left-side-bar">
		<div class="brand-logo">
			<a href="/admin">
				<h2 class="light-logo" style="color:white;text-align:center;"> UGBD</h2>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
                    <li>
						<a href="/admin" class="dropdown-toggle no-arrow">
							<span class="micon  dw dw-home"></span><span class="mtext">TABLEAU DE BORD</span>
						</a>
					</li>
					<li>
						<a href="/admin/contact" class="dropdown-toggle no-arrow">
							<span class="micon  dw dw-home"></span><span class="mtext">Contact</span>
						</a>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-3"></span><span class="mtext">Galerie</span>
						</a>
						<ul class="submenu">
							<li><a href="/admin/galleries/">Les images</a></li>
							<li><a href="/admin/galleries/create">Ajouter une images</a></li>
						</ul>
					</li>

                    <li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser1"></span><span class="mtext">Produits</span>

						</a>
						<ul class="submenu">
							<li><a href="/admin/produits/">Les produits</a></li>
							<li><a href="/admin/produits/create">Nouveau produit</a></li>
						</ul>
					</li>

					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser1"></span><span class="mtext">Actualités</span>

						</a>
						<ul class="submenu">
							<li><a href="/admin/events/">Les actualités</a></li>
							<li><a href="/admin/events/create">Nouvelle actualité</a></li>
						</ul>
					</li>


                    <li>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
    					<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        					<i class="dw dw-logout"></i> Se déconnecter
    					</a>
						</div>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    						@csrf
						</form>

					</li>
				</ul>
			</div>
		</div>
	</div>
