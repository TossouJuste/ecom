<!-- Header -->
		<header class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
						<a href="index.php" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>							
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu megamenu">
								<a href="index.php">Home <i class=""></i></a>
								 
							</li>
							<li class="has-submenu">
								<a href="#">Vehicles <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="listing-grid.php">Used vehicles</a></li>
								    <li><a href="listing-list.php">New vehicles</a></li> 							
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li ><a href="about-us.php">About Us</a></li>
								    <li><a href="contact-us.php">Contact</a></li> 
								    <li><a href="gallery.php">Gallery</a></li> 
									<li><a href="terms-condition.php">Terms & Conditions</a></li> 						
								</ul>
							</li> 
							<li class="has-submenu active">
								<a href="#">Dashboard <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu active">
										<a href="javascript:void(0);">User Dashboard</a>
										<ul class="submenu">
											<li><a href="user-dashboard.php">Dashboard</a></li>
                                            <li class="active"><a href="user-settings.php">Profil</a></li>	
											<li><a href="user-bookings.php">My Bookings</a></li>
											<li><a href="user-reviews.php">My orders</a></li>
											<li><a href="user-wishlist.php">My Favorite</a></li>
											<li><a href="user-messages.php">Compare</a></li>
											<li><a href="user-wallet.php">My Wallet</a></li>
													
										</ul>
									</li>		
									<li class="has-submenu">
										<a href="javascript:void(0);">Admin Dashboard</a>
										<ul class="submenu">
											<li><a href="admin/index.php">Dashboard</a></li>
											<li><a href="admin/reservations.php">Bookings</a></li>
											<li><a href="admin/customers.php">Manage</a></li>
											<li><a href="admin/cars.php">Rentals</a></li>
											<li><a href="admin/invoices.php">Finance & Accounts</a></li>
											<li><a href="admin/coupons.php">Others</a></li>
											<li><a href="admin/pages.php">CMS</a></li>			
											<li><a href="admin/contact-messages.php">Support</a></li>			
											<li><a href="admin/users.php">User Management</a></li>			
											<li><a href="admin/earnings-report.php">Reports</a></li>			
											<li><a href="admin/profile-setting.php">Settings & Configuration</a></li>		
										</ul>
									</li>				
								</ul>
							</li>	
							<li class="login-link">
								<a href="register.php">Sign Up</a>
							</li>
							<li class="login-link">
								<a href="login.php">Sign In</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">

						<!-- Notifications -->
						<li class="nav-item dropdown logged-item noti-nav noti-wrapper">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="bell-icon"><img src="assets/img/icons/bell-icon.svg" alt="Bell"></span> 
								<span class="badge badge-pill"></span>
							</a>
							<div class="dropdown-menu notifications">
								<div class="topnav-dropdown-header">
									<span class="notification-title">Notifications</span>
									<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
								</div>
								<div class="noti-content">
									<ul class="notification-list">
										<li class="notification-message">
											<a href="#">
												<div class="media d-flex">
													<span class="avatar avatar-lg flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details"><span class="noti-title">Jonathan Doe </span> has booked <span class="noti-title">your service</span></p>
														<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="#">
												<div class="media d-flex">
													<span class="avatar avatar-lg flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-03.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked <span class="noti-title">your service</span></p>
														<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="#">
												<div class="media d-flex">
													<span class="avatar avatar-lg flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
													</span>
													<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Tyrone Roberts</span> has booked <span class="noti-title">your service</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="#">
												<div class="media d-flex">
													<span class="avatar avatar-lg flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-04.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details"><span class="noti-title">Patricia Manzi</span> has booked <span class="noti-title">your service</span></p>
														<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="notification-message">
											<a href="#">
												<div class="media d-flex">
													<span class="avatar avatar-lg flex-shrink-0">
														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
													</span>
													<div class="media-body flex-grow-1">
														<p class="noti-details"><span class="noti-title">Jonathan Doe</span> has booked <span class="noti-title">your service</span></p>
														<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="topnav-dropdown-footer">
									<a href="#">View all Notifications</a>
								</div>
							</div>
						</li>
						<!-- /Notifications -->

						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/profiles/avatar-14.jpg" alt="Profile">
								</span>
								<span class="user-text">Daniel Johshuva</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="user-dashboard.php">
									<i class="feather-user-check"></i> Dashboard
								</a>
								<a class="dropdown-item" href="user-settings.php">
									<i class="feather-settings"></i> Settings
								</a>
								<a class="dropdown-item" href="index.php">
									<i class="feather-power"></i> Logout
								</a>
							</div>
						</li>
						<!-- /User Menu -->

					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->