<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-bookings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:39 GMT -->
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

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	
    <!-- Fearther CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
		
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	
	<div class="main-wrapper">
	
		<?php include('navclient.php') ?>
		
		<!-- Breadscrumb Section -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">User Bookings</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Bookings</li>
							</ol>
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
				<div class="content-header d-flex align-items-center justify-content-between">
					<h4>My Bookings</h4>					
					<ul class="booking-nav">
						<li>
							<a href="user-bookings.html" class="active"><i class="fa-solid fa-list"></i></a>
						</li>
						<li>
							<a href="bookings-calendar.html"><i class="fa-solid fa-calendar-days"></i></a>
						</li>
					</ul>
				</div>
				<!-- /Content Header -->				

				<!-- Sort By -->
				<div class="row">
					<div class="col-lg-12">
						<div class="sorting-info">
							<div class="row d-flex align-items-center">
								<div class="col-xl-7 col-lg-8 col-sm-12 col-12">
									<div class="booking-lists">
										<ul class="nav">
											<li><a class="active" href="user-bookings.html">All Bookings</a></li>
											<li><a href="user-booking-upcoming.html">Upcoming</a></li>
											<li><a href="user-booking-inprogress.html">Inprogress</a></li>
											<li><a href="user-booking-complete.html">Completed</a></li>
											<li><a href="user-booking-cancelled.html">Cancelled</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-5 col-lg-4 col-sm-12 col-12">
									<div class="filter-group">
										<div class="sort-week sort">
											<div class="dropdown dropdown-action">
												<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													This Week <i class="fas fa-chevron-down"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="javascript:void(0);">
														This Week
													</a>
													<a class="dropdown-item" href="javascript:void(0);">
														This Month
													</a>
													<a class="dropdown-item" href="javascript:void(0);">
														Last 30 Days
													</a>
													<a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#custom_date">
														Custom
													</a>
												</div>
											</div>
										</div>
										<div class="sort-relevance sort">
											<div class="dropdown dropdown-action">
												<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													Sort By Relevance <i class="fas fa-chevron-down"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="javascript:void(0);">
														Sort By Relevance
													</a>
													<a class="dropdown-item" href="javascript:void(0);">
														Sort By Ascending
													</a>
													<a class="dropdown-item" href="javascript:void(0);">
														Sort By Descending
													</a>
													<a class="dropdown-item" href="javascript:void(0);">
														Sort By Alphabet
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Sort By -->		

				<div class="row">

					<!-- All Bookings -->
					<div class="col-lg-12 d-flex">
						<div class="card book-card flex-fill mb-0">
							<div class="card-header">	
								<div class="row align-items-center">
									<div class="col-md-5">
										<h4>All Bookings <span>40</span></h4>	
									</div>
									<div class="col-md-7 text-md-end">
										<div class="table-search">
											<div id="tablefilter"></div>										
											<a href="listing-grid.html" class="btn btn-add"><i class="feather-plus-circle"></i>Add Booking</a>	
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">	
								<div class="table-responsive dashboard-table">
									<table class="table datatable">
										<thead class="thead-light">
											<tr>
												<th>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</th>
												<th>Booking ID</th>
												<th>Car Name</th>
												<th>Rental Type</th>
												<th>Pickup / Delivery Location</th>
												<th>Dropoff Location</th>
												<th>Booked On</th>
												<th>Total</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1001</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-04.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Ferrari 458 MM Speciale</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Hourly</p>
												</td>
												<td>
													<p>45, Avenue ,Mark Street, <span class="d-block">USA 15 Sep 2023, 09:30 AM</span></p>
												</td>
												<td>
													<p>21, Avenue, Windham,  <span class="d-block">USA 15 Sep 2023, 11:30 AM</span></p>
												</td>
												<td>
													<p>15 Sep 2023, 09:00 AM</p>
												</td>
												<td>
													<p class="text-darker">$300</p>
												</td>
												<td>
													<span class="badge badge-light-secondary">Upcoming</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upcoming_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_booking">
																<i class="feather-edit-3"></i> Edit
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1002</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-01.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Toyota Camry SE 350</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Day</p>
												</td>
												<td>
													<p>1646 West St, Grand Rapids <span class="d-block">18 Sep 2023, 09:00 AM</span></p>
												</td>
												<td>
													<p>26 Platinum Drive, Canonsburg<span class="d-block">15 Sep 2023, 11:30 AM</span></p>
												</td>
												<td>
													<p>18 Sep 2023, 08:10 PM</p>
												</td>
												<td>
													<p class="text-darker">$500</p>
												</td>
												<td>
													<span class="badge badge-light-warning">Inprogress</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#inprogress_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1003</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-05.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Kia Soul 2016</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Weekly</p>
												</td>
												<td>
													<p>14 Straford Park, Pittsburg <span class="d-block">03 Oct 2023, 10:15 AM</span></p>
												</td>
												<td>
													<p>11 Pleasant Hill, Pittsburg <span class="d-block">10 Oct 2023, 10:15 AM</span></p>
												</td>
												<td>
													<p>21 Sep 2023, 04:15 PM</p>
												</td>
												<td>
													<p class="text-darker">$600</p>
												</td>
												<td>
													<span class="badge badge-light-danger">Cancelled</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1004</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-03.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Audi A3 2019 new</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Monthly</p>
												</td>
												<td>
													<p>63 White Pine Lane, Martinsville <span class="d-block">05 Nov 2023, 02:30 PM</span></p>
												</td>
												<td>
													<p>14 Roane Avenue, Herndon <span class="d-block">05 Dec 2023, 02:30 PM</span></p>
												</td>
												<td>
													<p>04 Oct 2023, 08:00 AM</p>
												</td>
												<td>
													<p class="text-darker">$1500</p>
												</td>
												<td>
													<span class="badge badge-light-warning">Inprogress</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#inprogress_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1005</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-05.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">2018 Chevrolet Camaro</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Day</p>
												</td>
												<td>
													<p>24 Better Street, Kansas City <span class="d-block">16 Nov 2023, 10:20 AM</span></p>
												</td>
												<td>
													<p>77 Geraldine Lane, Newyork <span class="d-block">17 Nov 2023, 10:20 AM</span></p>
												</td>
												<td>
													<p>16 Oct 2023, 12:30 PM</p>
												</td>
												<td>
													<p class="text-darker">$450</p>
												</td>
												<td>
													<span class="badge badge-light-danger">Cancelled</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1006</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-06.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Acura Sport Version</a>
															<p>Sel pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Hourly</p>
												</td>
												<td>
													<p>78 Cityview Drive, Glenolden <span class="d-block">24 Nov 2023, 06:40 AM</span></p>
												</td>
												<td>
													<p>66 Ottis Street, Shawnee <span class="d-block">24 Nov 2023, 08:40 AM</span></p>
												</td>
												<td>
													<p>24 Oct 2023, 05:40 PM</p>
												</td>
												<td>
													<p class="text-darker">$250</p>
												</td>
												<td>
													<span class="badge badge-light-success">Completed</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#complete_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);">
																<i class="feather-edit-3"></i> Edit
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="username">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#upcoming_booking">#1007</a></td>
												<td>
													<div class="table-avatar">
														<a href="#" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-08.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#">Toyota Tacoma 4WD</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Monthly</p>
												</td>
												<td>
													<p>41 Duke Lane, Branchburg <span class="d-block">15 Dec 2023, 04:30 PM</span></p>
												</td>
												<td>
													<p>80 Glory Road, Nashville <span class="d-block">15 Jan 2024, 04:30 PM</span></p>
												</td>
												<td>
													<p>02 Nov 2023, 07:30 AM</p>
												</td>
												<td>
													<p class="text-darker">$1000</p>
												</td>
												<td>
													<span class="badge badge-light-danger">Cancelled</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cancelled_booking">
																<i class="feather-eye"></i> View
															</a>
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
																<i class="feather-trash-2"></i> Delete
															</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>	

								<div class="table-footer">
									<div class="row">
										<div class="col-md-6">
											<div id="tablelength"></div>
										</div>
										<div class="col-md-6 text-md-end">
											<div id="tablepage"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /All Bookings -->

				</div>			
				<!-- /Dashboard -->						

			</div>			
		</div>
		<!-- /Page Content -->

       <?php include('footer.php') ?>	
		
	</div>

	<!-- Completed Booking -->
	<div class="modal new-modal multi-step fade" id="complete_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-success">Completed</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3f9dcdbddd2f3d6cbd2dec3dfd69dd0dcde">[email&#160;protected]</a></p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Start Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Completed Booking -->

	<!-- Order Success Modal -->
	<div class="modal new-modal order-success-modal fade" id="start_ride" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-success-info">
						<span class="order-success-icon">
							<img src="assets/img/icons/check-icon.svg" alt="Icon">
						</span>
						<h4>Successful</h4>
						<p>YYou Ride  has been successfully started. Order id : <span>#50641</span></p>
						<div class="modal-btn">
							<a href="user-dashboard.html" class="btn btn-secondary">
								Go to Dashboard <i class="feather-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order Success Modal -->

	<!-- Upcoming Booking -->
	<div class="modal new-modal multi-step fade" id="upcoming_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-secondary">Upcoming</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eea48186808fae8b968f839e828bc08d8183">[email&#160;protected]</a></p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#cancel_ride" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-secondary">
							Cancel Booking
						</a>
						<a href="javascript:void(0);" data-bs-target="#start_rides" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Start Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Upcoming Booking -->

	<!-- Edit Booking -->
	<div class="modal new-modal multi-step fade" id="edit_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header border-0 pb-0">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
					<div class="badge-item w-100 text-end">
						<span class="badge badge-light-warning">Inprogress</span>
					</div>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Select Location</h6>
							</div>
							<div class="row">
								<div class="col-md-12">								
									<div class="loc-wrap">								
										<div class="modal-form-group loc-item">
											<label>Delivery Location</label>
											<input type="text" class="form-control" placeholder="Enter Location">
										</div>							
										<div class="modal-form-group">
											<label class="d-sm-block">&nbsp;</label>
											<a href="javascript:void(0);" class="btn btn-secondary"><i class="fa-solid fa-location-crosshairs"></i> Current Location</a>
										</div>
									</div>
								</div>
								<div class="col-md-12">								
									<div class="modal-form-group">
										<label>Dropoff Location</label>
										<input type="text" class="form-control" value="78, 10th street Laplace USA">
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6><span class="title-icon"><i class="fa-solid fa-location-dot"></i></span>Select Booking type & Time <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
							</div>							
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio active">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type" checked>
											<span class="checkmark"></span> 
											<span class="rent-option">Hourly</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Day (8 Hrs)</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Weekly</span>
										</label>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="modal-form-group rent-radio">
										<label class="custom_radio">
											<input type="radio" class="rent-types" name="rent_type">
											<span class="checkmark"></span> 
											<span class="rent-option">Monthly</span>
										</label>
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Start Date</label>
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Start Time</label>
										<input type="time" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Return Date</label>
										<input type="date" class="form-control">
									</div>
								</div>
								<div class="col-md-6">	
									<div class="modal-form-group">
										<label>Return Time</label>
										<input type="time" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6><span class="title-icon"><i class="fa-solid fa-medal"></i></span>Extra Service</h6>
							</div>
							<div class="selectbox-cont">
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Baby Seat  - <span class="amt">$10</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username" checked>
									<span class="checkmark"></span>  Mobile Charging  - <span class="amt">$50</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Wi-Fi Hotspot  - <span class="amt">$60</span>
								</label>
								<label class="custom_check w-100">
									<input type="checkbox" name="username">
									<span class="checkmark"></span>  Airport Shuttle Service  - <span class="amt">$90</span>
								</label>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
							Go Back
						</a>
						<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
							Save & Continue
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Booking -->

	<!-- Cancel Ride Modal -->
	<div class="modal new-modal fade" id="cancel_ride" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cancel Reason</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-item">
							<div class="modal-form-group">
								<label>Reason <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="4">The car arrived early & the rep was courteous and polite.</textarea>
							</div>
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Submit
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Cancel Ride Modal -->

	<!-- Order Success Modal -->
	<div class="modal new-modal order-success-modal fade" id="start_rides" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-success-info">
						<span class="order-success-icon">
							<img src="assets/img/icons/check-icon.svg" alt="Icon">
						</span>
						<h4>Successful</h4>
						<p>YYou Ride  has been successfully started. Order id : <span>#50641</span></p>
						<div class="modal-btn">
							<a href="user-dashboard.html" class="btn btn-secondary">
								Go to Dashboard <i class="feather-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order Success Modal -->

	<!-- Inprogress Booking -->
	<div class="modal new-modal multi-step fade" id="inprogress_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-warning">Inprogress</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0a406562646b4a6f726b677a666f24696567">[email&#160;protected]</a></p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#start_ride" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							Complete Ride
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Inprogress Booking -->

	<!-- Completed Booking -->
	<div class="modal new-modal multi-step fade" id="cancelled_booking" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="booking-group">
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Booking Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booking Type</h6>
										<p>Delivery</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Rental Type</h6>
										<p>Days (3 Days)</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Extra Service</h6>
										<p>Mobile Charging</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Delivery</h6>
										<p>45, Avenue ,Mark Street, USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Dropoff</h6>
										<p>78, 10th street Laplace,USA</p>
										<p>11 Jan 2023, 03:30 PM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Status</h6>
										<span class="badge badge-light-danger">Refund Initiated</span>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Booked On</h6>
										<p>15 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Start Date</h6>
										<p>18 Sep 2023, 09:30 AM</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>End Date</h6>
										<p>20 Sep 2023, 09:30 AM</p>
									</div>
								</div>
							</div>
						</div>
						<div class="booking-wrapper">
							<div class="booking-title">
								<h6>Personal Details</h6>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Details</h6>
										<p>Johna Melinda</p>
										<p>+1 56441 56464</p>
										<p><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b113433353a1b3e233a362b373e75383436">[email&#160;protected]</a></p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>Address</h6>
										<p>78, 10th street</p>
										<p>Laplace,USA</p>
										<p>316 654</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">								
									<div class="booking-view">
										<h6>No of Person’s</h6>
										<p>2 Adults, 1 Child</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cancel-reason">
							<h6>Cancel Reason</h6>
							<p>On the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my booking On the booking date i have other work on my personal  so i am cancelling my booking</p>
						</div>
						<div class="cancel-box">
							<p>Cancelled By User on 17 Sep 2023, Refund will deposited in user account on 19 Sep 2023 </p>
						</div>
					</div>
					<div class="modal-btn modal-btn-sm text-end">
						<a href="javascript:void(0);" data-bs-target="#view_status" data-bs-toggle="modal"  data-bs-dismiss="modal" class="btn btn-primary">
							View status
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Cancelled Booking -->

	<!-- View Status -->
	<div class="modal new-modal fade" id="view_status" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<div class="booking-header">
						<div class="booking-img-wrap">
							<div class="book-img">
								<img src="assets/img/cars/car-05.jpg" alt="img">
							</div>
							<div class="book-info">
								<h6>Chevrolet Camaro</h6>
								<p><i class="feather-map-pin"></i> Location : Miami St, Destin, FL 32550, USA</p>
							</div>
						</div>
						<div class="book-amount">
							<p>Total Amount</p>
							<h6>$4700 <a href="javascript:void(0);"><i class="feather-alert-circle"></i></a></h6>
						</div>
					</div>
					<div class="refund-wrap booking-group">
						<div class="booking-wrapper">
							<h6>Refund Method</h6>
							<div class="card-status-wrap">
								<div class="card-status">
									<h5>Mastercard</h5>
									<p>Started on : 20 Oct 2023</p>
								</div>
								<div class="status-img">
									<img src="assets/img/icons/card-icon.svg" alt="Img">
								</div>
							</div>
							<div class="refund-process">
								<h5>Refund Process</h5>
								<ul>
									<li>
										<h6>Dreams Rent initiated your refund</h6>
										<p>20 Oct 2023</p>
									</li>
									<li>
										<h6>Mastercard has accepted your request</h6>
										<p>20 Oct 2023</p>
									</li>
									<li>
										<h6>Refund credited to you account successfully</h6>
										<p>20 Oct 2023</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /View Status -->

	<!-- Cancel Reason Modal -->
	<div class="modal new-modal fade" id="cancel_reason" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cancel Reason</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="reason-item">
						<p>On the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my bookingOn the booking date i have other work on my personal so i am cancelling my booking</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Cancel Reason Modal -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Booking</h4>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary w-100">
										Delete
									</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary w-100">
										Cancel
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- Custom Date Modal -->
	<div class="modal new-modal fade" id="custom_date" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Custom Date</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-form-group">
							<label>From Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-form-group">
							<label>To Date <span class="text-danger">*</span></label>
							<input type="date" class="form-control">
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Cancel Booking
							</a>
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary">
								Start Ride
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Custom Date Modal -->

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>	

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="4c8c541959bf2effbe165eb8-text/javascript"></script>
	
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4c8c541959bf2effbe165eb8-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e852043bbef369","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-bookings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:43 GMT -->
</html>