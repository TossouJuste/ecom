<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:44 GMT -->
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
			    	    <h2 class="breadcrumb-title">User Wallet </h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Wallet</li>
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
					<h4>Wallet</h4>
				</div>
				<!-- /Content Header -->

				<!-- Wallet Info -->
				<div class="row">
					<div class="col-lg-5 col-md-12 d-flex">
						<div class="card wallet-card flex-fill">
							<div class="card-body">
								<div class="balance-info">
									<div class="balance-grid">
										<div class="balance-content">
											<h6>Available Balance</h6>
											<h4>$4544</h4>
										</div>
										<div class="refersh-icon">
											<a href="javascript:void(0);">
												<i class="fas fa-arrows-rotate"></i>
											</a>
										</div>
									</div>
									<div class="balance-list">
										<div class="row">
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="balance-inner credit-info">
													<h6>$1,23,464</h6>
													<p>Total Credit</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="balance-inner debit-info">
													<h6>$7,357</h6>
													<p>Total Debit</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 d-flex">
												<div class="balance-inner transaction-info">
													<h6>$6,56,415</h6>
													<p>Total Transaction</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group wallet-form-group">
									<label>Add Wallet Credits ($)</label>
									<input type="text" class="form-control" placeholder="1000">
								</div>
								<div class="wallet-btn">
									<a href="javascript:void(0);" class="btn" data-bs-toggle="modal" data-bs-target="#add_payment">Add Payment</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-12 d-flex">
						<div class="card your-card flex-fill">
							<div class="card-body">
								<div class="wallet-header">
									<h4>Your Cards</h4>
									<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_card">
										<i class="feather-plus-circle"></i>
									</a>
								</div>
								<div class="wallet-table">
									<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<label class="custom_radio">
															<input type="radio" name="payment" value="wallet" checked="">
															<span class="checkmark"></span> 
															<img src="assets/img/icons/wallet-01.svg" alt="Icon">
														</label>
													</td>
													<td>
														<h6>3210 **** **** **12</h6>
														<p>Card Number</p>
													</td>
													<td>
														<h6>$3000</h6>
														<p>Balance</p>
													</td>
													<td>
														<h6>Active</h6>
														<p>Status</p>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fas fa-ellipsis-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
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
														<label class="custom_radio">
															<input type="radio" name="payment" value="wallet">
															<span class="checkmark"></span> 
															<img src="assets/img/icons/wallet-02.svg" alt="Icon">
														</label>
													</td>
													<td>
														<h6>7847 **** **** **78</h6>
														<p>Card Number</p>
													</td>
													<td>
														<h6>$2300</h6>
														<p>Balance</p>
													</td>
													<td>
														<h6>Active</h6>
														<p>Status</p>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fas fa-ellipsis-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
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
														<label class="custom_radio">
															<input type="radio" name="payment" value="wallet">
															<span class="checkmark"></span> 
															<img src="assets/img/icons/wallet-03.svg" alt="Icon">
														</label>
													</td>
													<td>
														<h6>4710 **** **** **64</h6>
														<p>Card Number</p>
													</td>
													<td>
														<h6>$1800</h6>
														<p>Balance</p>
													</td>
													<td>
														<h6>Active</h6>
														<p>Status</p>
													</td>
													<td class="text-end">
														<div class="dropdown dropdown-action">
															<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																<i class="fas fa-ellipsis-vertical"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-end">
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
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Wallet Info -->

				<!-- Wallet Table -->
				<div class="row">
					<div class="col-lg-12 d-flex">
						<div class="card book-card flex-fill mb-0">
							<div class="card-header">	
								<div class="row align-items-center">
									<div class="col-md-5">
										<h4>Wallet Usage History</h4>	
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
												<th>Ref Id</th>
												<th>Transaction For</th>
												<th>Date</th>
												<th>Total</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>#1001</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Self Deposit Paypal</a>
														</div>
													</div>
												</td>
												<td>15 Sep 2023, 09:00 AM</td>
												<td class="text-success-light">+ $300</td>
												<td>
													<span class="badge badge-light-success">Completed</span>
												</td>
											</tr>
											<tr>
												<td>#1002</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Audi A3 2019 new</a>
														</div>
													</div>
												</td>
												<td>23 Oct 2023, 12:00 PM</td>
												<td class="text-danger">- $500</td>
												<td>
													<span class="badge badge-light-success">Completed</span>
												</td>
											</tr>
											<tr>
												<td>#1003</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Self Deposit Stripe</a>
														</div>
													</div>
												</td>
												<td>02 Nov 2023, 10:30 AM</td>
												<td class="text-success-light">+ $600</td>
												<td>
													<span class="badge badge-light-success">Completed</span>
												</td>
											</tr>
											<tr>
												<td>#1004</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Audi A3 2020 new</a>
														</div>
													</div>
												</td>
												<td>18 Dec 2023, 02:30 PM</td>
												<td class="text-success-light">+ $1500</td>
												<td>
													<span class="badge badge-light-warning">Pending</span>
												</td>
											</tr>
											<tr>
												<td>#1005</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Self Deposit Stripe</a>
														</div>
													</div>
												</td>
												<td>05 Jan 2024, 08:00 AM</td>
												<td class="text-danger">- $450</td>
												<td>
													<span class="badge badge-light-danger">Failed</span>
												</td>
											</tr>
											<tr>
												<td>#1006</td>
												<td>
													<div class="table-avatar">
														<div class="table-head-name flex-grow-1">
															<a href="javascript:void(0);" class="mb-0">Self Deposit Paypal</a>
														</div>
													</div>
												</td>
												<td>20 Feb 2024, 11:30 PM</td>
												<td class="text-success-light">+ $1000</td>
												<td>
													<span class="badge badge-light-success">Completed</span>
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
				<!-- /Wallet Table -->

			</div>
		</div>
		<!-- /Page Content -->

       <?php include('footer.php') ?>
		
	</div>
	<!-- Main Wrapper -->

	<!-- Add Card Modal -->
	<div class="modal new-modal fade" id="add_card" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add New Card</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="modal-form-group">
							<label>Card Number <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Enter Card Number">
						</div>
						<div class="modal-form-group">
							<label>Name on Card <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Enter Card Name">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="modal-form-group">
									<label>CVV <span class="text-danger">*</span></label>
									<div class="form-icon">
										<input type="text" class="form-control" placeholder="Enter CVV Number">
										<span class="cus-icon">
											<img src="assets/img/icons/lock-icon.svg" alt="Icon">
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="modal-form-group">
									<label>Expiry Date <span class="text-danger">*</span></label>
									<div class="form-icon">
										<input type="text" class="form-control" placeholder="DD/MM/YYYY">
										<span class="cus-icon">
											<img src="assets/img/icons/calendar-icon.svg" alt="Icon">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-form-group">
							<label class="custom_check">
								<input type="checkbox" name="rememberme" class="rememberme">
								<span class="checkmark"></span>
								Save this account for future transaction
							</label>
						</div>
						<div class="modal-btn">
							<button type="submit" class="btn btn-secondary w-100">Pay $4700</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Card Modal -->

	<!-- Add Payment Modal -->
	<div class="modal new-modal multi-step fade" id="add_payment" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Payment</h4>
					<button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
				</div>
				<div class="modal-body">
					<div class="total-payment">
						<p>Total Amount</p>
						<h6>$22314</h6>
					</div>
					<div class="choose-payment-info">
						<h5>Choose your Payment Method</h5>
						<div class="choose-payment">
							<label class="custom_radio">
								<input type="radio" name="payment_one" value="wallet_one">
								<span class="checkmark"></span> 
								<img src="assets/img/icons/payment-1.svg" alt="Icon">
							</label>
							<label class="custom_radio">
								<input type="radio" name="payment_one" value="wallet_one">
								<span class="checkmark"></span> 
								<img src="assets/img/icons/payment-2.svg" alt="Icon">
							</label>
							<label class="custom_radio">
								<input type="radio" name="payment_one" value="wallet_one" checked="">
								<span class="checkmark"></span> 
								<img src="assets/img/icons/payment-3.svg" alt="Icon">
							</label>
						</div>
						<div class="add-payment-table-info">
							<div class="wallet-table add-payment-table">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<label class="custom_radio">
														<input type="radio" name="payment_two" value="wallet_two" checked="">
														<span class="checkmark"></span> 
														<img src="assets/img/icons/wallet-01.svg" alt="Icon">
													</label>
												</td>
												<td>
													<h6>3210 **** **** **12</h6>
													<p>Card Number</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="wallet-table add-payment-table">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<label class="custom_radio">
														<input type="radio" name="payment_two" value="wallet_two">
														<span class="checkmark"></span> 
														<img src="assets/img/icons/wallet-02.svg" alt="Icon">
													</label>
												</td>
												<td>
													<h6>7847 **** **** **78</h6>
													<p>Card Number</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="wallet-table add-payment-table">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<label class="custom_radio">
														<input type="radio" name="payment_two" value="wallet_two">
														<span class="checkmark"></span> 
														<img src="assets/img/icons/wallet-03.svg" alt="Icon">
													</label>
												</td>
												<td>
													<h6>4710 **** **** **64</h6>
													<p>Card Number</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-btn">
						<button class="btn btn-secondary w-100" data-bs-target="#order_success" data-bs-toggle="modal" data-bs-dismiss="modal">Add to Wallet</button>
						<button class="btn btn-outline-cancel" data-bs-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Payment Modal -->

	<!-- Order Success Modal -->
	<div class="modal new-modal order-success-modal fade" id="order_success" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="order-success-info">
						<span class="order-success-icon">
							<img src="assets/img/icons/check-icon.svg" alt="Icon">
						</span>
						<h4>Successful</h4>
						<p>You Amount “$1000” has been successfully added. Order id : <span>#50641</span></p>
						<div class="modal-btn">
							<a href="user-wallet.html" class="btn btn-secondary">
								Back to My Wallet <i class="feather-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Order Success Modal -->

	<!-- Delete Modal -->
	<div class="modal new-modal fade" id="delete_modal" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="delete-action">
						<div class="delete-header">
							<h4>Delete Wallet History</h4>
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
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>	

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="ae6c837a1afd618dc72d1586-text/javascript"></script>
	
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ae6c837a1afd618dc72d1586-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e852149c41f369","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/user-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:47 GMT -->
</html>