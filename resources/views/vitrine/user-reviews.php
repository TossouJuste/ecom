<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:43 GMT -->
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
			    	    <h2 class="breadcrumb-title">User Reviews</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Reviews</li>
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

				<!-- Sort By -->
				<div class="row">
					<div class="col-lg-12">
						<div class="sorting-info">
							<div class="row">
								<div class="col-md-12">
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
													<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#custom_date">
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

					<!-- Reviews -->
					<div class="col-lg-12 d-flex">
						<div class="card book-card flex-fill mb-0">
							<div class="card-header">	
								<div class="row align-items-center">
									<div class="col-md-5">
										<h4>All Reviews <span>40</span></h4>	
									</div>
									<div class="col-md-7 text-md-end">
										<div class="table-search">
											<div id="tablefilter" class="me-0"></div>
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
												<th>Car Name</th>
												<th>Rental Type</th>
												<th>Review</th>
												<th>Ratings</th>
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
												<td>
													<div class="table-avatar">
														<a href="#" data-bs-toggle="modal" data-bs-target="#add_review"  class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-04.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" >Ferrari 458 MM Speciale</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Hourly</p>
												</td>
												<td>
													<p>The car arrived early & the rep was courteous and polite.</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star-half-stroke filled"></i>
                                                        <span>(4.5)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
												<td>
													<div class="table-avatar">
														<a href="#"  data-bs-toggle="modal" data-bs-target="#add_review" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-01.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review">Toyota Camry SE 350</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Day</p>
												</td>
												<td>
													<p>The car was a lovely car to drive no problem with it all.</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>(4.0)</span>
                                                    </div>
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
												<td>
													<div class="table-avatar">
														<a href="#"  data-bs-toggle="modal" data-bs-target="#add_review" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-05.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" >Kia Soul 2016</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Weekly</p>
												</td>
												<td>
													<p>Experience was great travelling wih Dreams Rental</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
												<td>
													<div class="table-avatar">
														<a href="#"  data-bs-toggle="modal" data-bs-target="#add_review" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-03.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" >Audi A3 2019 new</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Monthly</p>
												</td>
												<td>
													<p>Best service with good price, nice vehicle overall very good</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
												<td>
													<div class="table-avatar">
														<a href="#" data-bs-toggle="modal" data-bs-target="#add_review"  class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-05.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" >2018 Chevrolet Camaro</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Day</p>
												</td>
												<td>
													<p>Smooth process, modern vehicle & fair price - great rental experience</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
												<td>
													<div class="table-avatar">
														<a href="#" data-bs-toggle="modal" data-bs-target="#add_review"  class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-06.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" >Acura Sport Version</a>
															<p>Sel pickup</p>
														</div>
													</div>
												</td>
												<td>
													<p>Hourly</p>
												</td>
												<td>
													<p>Excellent service, clean car & smooth pickup & drop-off process</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span>(5.0)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
												<td>
													<div class="table-avatar">
														<a href="#" data-bs-toggle="modal" data-bs-target="#add_review" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-08.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="#" data-bs-toggle="modal" data-bs-target="#add_review">Toyota Tacoma 4WD</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>
													<p>Monthly</p>
												</td>
												<td>
													<p>Quick & easy rental and also fair price for what you get</p>
												</td>
												<td>
													<div class="review-rating">							
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span>(4.0)</span>
                                                    </div>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">
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
					<!-- /Reviews -->

				</div>				

			</div>			
		</div>
		<!-- /Page Content -->

       <?php include('footer.php') ?>
		
	</div>

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Reviews</h4>
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
						<div class="modal-btn modal-btn-item modal-btn-sm text-end">
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

	<!-- Add Payment Modal -->
	<div class="modal new-modal multi-step fade" id="add_review" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add New Review</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="review-wrap">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="booking-img-wrap">
									<div class="book-img">
										<img src="assets/img/cars/car-05.jpg" alt="img">
									</div>
									<div class="book-info">
										<h6>Chevrolet Camaro</h6>
										<p>Delivery</p>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="booking-view">
											<h6>Rental Type</h6>
											<p>Hourly</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="booking-view">
											<h6>Total Amount</h6>
											<p>$3000</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="booking-view">
											<h6>Booked On</h6>
											<p>15 Sep 2023, 09:30 AM</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<form action="#">
						<div class="rating-wrap">
							<div class="modal-form-group">
								<label>Overall Ratings <span class="text-danger">*</span></label>
								<div class="rating">							
									<a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
									<a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
									<a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
									<a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
									<a href="javascript:void(0);" class="fav-icon"><i class="fas fa-star"></i></a>
								</div>
							</div>
							<div class="modal-form-group">
								<label>Enter Review <span class="text-danger">*</span></label>
								<textarea class="form-control" rows="4" placeholder="Enter Comments"></textarea>
							</div>
						</div>
						<div class="modal-btn modal-btn-sm text-end">
							<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-secondary">
								Go Back
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
	<!-- /Add Payment Modal -->

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>	

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="4c2d9b337a3c98f5c72c840c-text/javascript"></script>
	
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4c2d9b337a3c98f5c72c840c-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e85205c85094e8","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:43 GMT -->
</html>