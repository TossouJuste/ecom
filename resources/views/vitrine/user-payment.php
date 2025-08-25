<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:47 GMT -->
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
	
	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	
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
			    	    <h2 class="breadcrumb-title">User Payments</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Payments</li>
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
				<div class="content-header">
					<h4>Payments</h4>
				</div>
				<!-- /Content Header -->

				<!-- Sort By -->
				<div class="row">
					<div class="col-lg-12">
						<div class="sorting-info">
							<div class="row d-flex align-items-center">
								<div class="col-lg-12">
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
													<a class="dropdown-item" href="javascript:void(0);">
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

				<!-- Payments Table -->
				<div class="row">
					<div class="col-lg-12 d-flex">
						<div class="card book-card flex-fill mb-0">
							<div class="card-header">	
								<div class="row align-items-center">
									<div class="col-md-5">
										<h4>All Payments <span>40</span></h4>	
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
												<th>Booking ID</th>
												<th>Car Name</th>
												<th>Paid on</th>
												<th>Total</th>
												<th>Mode</th>
												<th>Status</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<label class="custom_check w-100">
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1001</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-04.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Ferrari 458 MM Speciale</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>15 Sep 2023, 09:30 AM</td>
												<td><p class="text-darker">$300</p></td>
												<td>
													<span class="badge badge-light-secondary">Wallet</span>
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
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1002</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-01.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Toyota Camry SE 350</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>23 Oct 2023, 12:00 PM</td>
												<td><p class="text-darker">$500</p></td>
												<td>
													<span class="badge badge-light-secondary">Paypal</span>
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
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1003</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-02.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Kia Soul 2016</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>02 Nov 2023, 10:30 AM</td>
												<td><p class="text-darker">$600</p></td>
												<td>
													<span class="badge badge-light-secondary">Stripe</span>
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
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1004</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-03.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Audi A3 2019 new</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>18 Dec 2023, 02:30 PM</td>
												<td><p class="text-darker">$1500</p></td>
												<td>
													<span class="badge badge-light-secondary">Stripe</span>
												</td>
												<td>
													<span class="badge badge-light-warning">Pending</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1005</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-05.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">2018 Chevrolet Camaro</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>05 Jan 2024, 08:00 AM</td>
												<td><p class="text-darker">$450</p></td>
												<td>
													<span class="badge badge-light-secondary">Wallet</span>
												</td>
												<td>
													<span class="badge badge-light-danger">Failed</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1006</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-06.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Acura Sport Version</a>
															<p>Self Pickup</p>
														</div>
													</div>
												</td>
												<td>20 Feb 2024, 11:30 PM</td>
												<td><p class="text-darker">$250</p></td>
												<td>
													<span class="badge badge-light-secondary">Stripe</span>
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
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
														<input type="checkbox" name="reference">
														<span class="checkmark"></span> 
													</label>
												</td>
												<td><a href="#" data-bs-toggle="modal" data-bs-target="#view_invoice">#1007</a></td>
												<td>
													<div class="table-avatar">
														<a href="javascript:void(0);" class="avatar avatar-lg flex-shrink-0">
															<img class="avatar-img" src="assets/img/cars/car-08.jpg" alt="Booking">
														</a>
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);">Toyota Tacoma 4WD</a>
															<p>Delivery</p>
														</div>
													</div>
												</td>
												<td>12 Mar 2024, 10:00 PM</td>
												<td><p class="text-darker">$1000</p></td>
												<td>
													<span class="badge badge-light-secondary">Paypal</span>
												</td>
												<td>
													<span class="badge badge-light-warning">Pending</span>
												</td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fas fa-ellipsis-vertical"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#view_invoice">
																<i class="feather-file-plus"></i> View Invoice
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
				</div>
				<!-- /Payments Table -->

			</div>
		</div>
		<!-- /Page Content -->

       <?php include('footer.php') ?>
		
	</div>
	<!-- Main Wrapper -->

	<!-- View Invoice Modal -->
	<div class="modal new-modal fade" id="view_invoice" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header border-0 m-0 p-0">
					<div class="invoice-btns">
						<a href="javascript:void(0)" class="btn me-2">
							<i class="feather-printer"></i> Print
						</a>
						<a href="javascript:void(0)" class="btn">
							<i class="feather-download"></i> Download Invoice
						</a>
					</div>
				</div>
				<div class="modal-body">
					<div class="invoice-details">
						<div class="invoice-items">
							<div class="row align-items-center">
								<div class="col-md-6">
									<div class="invoice-logo">
										<img src="assets/img/logo.svg" alt="logo">
									</div>
								</div>
								<div class="col-md-6">
									<div class="invoice-info-text">
										<h4>Invoice</h4>
										<p>Invoice Number : <span>In983248782</span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-item-bills">
							<div class="row align-items-center">
								<div class="col-lg-4 col-md-12">
									<div class="invoice-bill-info">
										<h6>Billed to</h6>
										<p>
											Customer Name <br>
											9087484288 <br>
											Address line 1, <br>
											Address line 2 <br>
											Zip code ,City - Country
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-12">
									<div class="invoice-bill-info">
										<h6>Invoice From</h6>
										<p>
											Company Name <br>
											9087484288 <br>
											Address line 1, <br>
											Address line 2 <br>
											Zip code ,City - Country
										</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-12">
									<div class="invoice-bill-info border-0">
										<p>Issue Date : 27 Jul 2022</p>
										<p>Due Amount : $1,54,22 </p>
										<p class="mb-0">PO Number : 54515454</p>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-table-wrap">
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="invoice-table table table-center mb-0">
											<thead>
												<tr>
													<th>Rented Car</th>
													<th>No of days</th>
													<th>Rental Amount</th>
													<th class="text-end">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h6>Ferrari 458 MM Speciale</h6>
													</td>
													<td>7</td>
													<td>$2000</td>
													<td class="text-end">$2000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="payment-details-info">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="invoice-terms">											
										<h6>Payment  Details</h6>
										<div class="invocie-note">
											<p>Debit Card<br>
												XXXXXXXXXXXX-2541<br>
												HDFC Bank</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="invoice-total-box">
										<div class="invoice-total-inner">
											<p><b>Trip Amount (This does not include fuel)</b> <span>$2592</span></p>
											<p>Trip Protection Fees <span>+ $25</span></p>
											<p>Convenience Fees <span>+ $2</span></p>
											<p>Refundable Deposit <span>+ $2000</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-total">
							<h4>Total <span>$4,300.00</span></h4>
						</div>
						<div class="invoice-note-footer">
							<div class="row align-items-center">								
								<div class="col-lg-6 col-md-12">
									<div class="invocie-note">
										<h6>Notes</h6>
										<p>Enter customer notes or any other details</p>
									</div>
									<div class="invocie-note mb-0">
										<h6>Terms and Conditions</h6>
										<p>Enter customer notes or any other details</p>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="invoice-sign">										
										<img class="img-fluid d-inline-block" src="assets/img/signature.png" alt="Sign">
										<span class="d-block">dreamsrent</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /View Invoice Modal -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Payment History</h4>
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

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>	

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="39cc4f96c04563e32f1cfca8-text/javascript"></script>
	
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="39cc4f96c04563e32f1cfca8-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e8521c5fc66935","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:47 GMT -->
</html>