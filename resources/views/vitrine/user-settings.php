<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Dreams Rent | Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">		
	
    <!-- Fearther CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
		
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
	
		<?php include('navclient.php') ?>
		
		<!-- Breadscrumb Section -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title"> <br>User Settings</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							 
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb Section -->		     	
		
		<?php include('navdash.php') ?>
<!-- Page Content -->
		<div class="content">
			<div class="container">

				<!-- Content Header -->
				<div class="content-header content-settings-header">
					<h4>Settings</h4>
				</div>
				<!-- /Content Header -->

				<div class="row">
				
					<!-- Settings Menu -->
					<div class="col-lg-3 theiaStickySidebar">
						<div class="settings-widget">
							<div class="settings-menu">
								<ul>
									<li>
										<a href="user-settings.html" class="active">
											<i class="feather-user"></i> Profile
										</a>
									</li>
									<li>
										<a href="user-security.html">
											<i class="feather-shield"></i> Security
										</a>
									</li>
									<li>
										<a href="user-preferences.html">
											<i class="feather-star"></i> Preferences
										</a>
									</li>
									<li>
										<a href="user-notifications.html">
											<i class="feather-bell"></i> Notifications
										</a>
									</li>
									<li>
										<a href="user-integration.html">
											<i class="feather-git-merge"></i> Integration
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Settings Menu -->

					<!-- Settings Details -->
					<div class="col-lg-9">
						<div class="settings-info">
							<div class="settings-sub-heading">
								<h4>Profile</h4>
							</div>
							<form action="#">

								<!-- Basic Info -->
								<div class="profile-info-grid">
									<div class="profile-info-header">
										<h5>Basic Information</h5>
										<p>Information about user</p>
									</div>
									<div class="profile-inner">
										<div class="profile-info-pic">
											<div class="profile-info-img">
												<img src="assets/img/profiles/avatar-15.jpg" alt="Profile">
												<div class="profile-edit-info">
													<a href="javascript:void(0)">
														<i class="feather-edit"></i>
													</a>
													<a href="javascript:void(0)">
														<i class="feather-trash-2"></i>
													</a>
												</div>
											</div>
											<div class="profile-info-content">
												<h6>Profile picture</h6>
												<p>PNG, JPEG under 15 MB</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="profile-form-group">
													<label>First Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter First Name">
												</div>
											</div>
											<div class="col-md-4">
												<div class="profile-form-group">
													<label>Last Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter Last Name">
												</div>
											</div>
											<div class="col-md-4">
												<div class="profile-form-group">
													<label>User Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter User Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>Phone Number <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="+ 1 65656565656">
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>Email <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter Email">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Basic Info -->

								<!-- Address Info -->
								<div class="profile-info-grid">
									<div class="profile-info-header">
										<h5>Address Information</h5>
										<p>Information about address of user</p>
									</div>
									<div class="profile-inner">
										<div class="row">
											<div class="col-md-12">
												<div class="profile-form-group">
													<label>Address <span class="text-danger">*</span></label>
													<textarea class="form-control" placeholder="Enter Address"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>Country <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter Country">
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>State <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter State">
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>City <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter City">
												</div>
											</div>
											<div class="col-md-6">
												<div class="profile-form-group">
													<label>Pincode <span class="text-danger">*</span></label>
													<input type="text" class="form-control" placeholder="Enter Pincode">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Address Info -->

								<!-- Profile Submit -->
								<div class="profile-submit-btn">
									<button type="submit" class="btn btn-secondary">Cancel</button>
									<button type="submit" class="btn btn-primary">Save Changes</button>
								</div>
								<!-- /Profile Submit -->

							</form>
						</div>
					</div>
					<!-- /Settings Details -->

				</div>

			</div>			
		</div>
		<!-- /Page Content -->
      <?php include('footer.php') ?>
		
	</div>
	<!-- /Main Wrapper -->

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="f9a12226f4518652f340150e-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="f9a12226f4518652f340150e-text/javascript"></script>	
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js" type="f9a12226f4518652f340150e-text/javascript"></script>

	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="f9a12226f4518652f340150e-text/javascript"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="f9a12226f4518652f340150e-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="f9a12226f4518652f340150e-text/javascript"></script>
	
<script src="assets/js/rocket-loader.min.js" data-cf-settings="f9a12226f4518652f340150e-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e8521f88c0f369","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:49 GMT -->
</html>