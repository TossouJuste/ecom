  <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:09 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Register | Am5 Auto</title>

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
		<div class="main-wrapper login-body">
			<!-- Header -->
			
			<!-- /Header -->

			<div class="login-wrapper">
				<div class="loginbox">
					<div class="login-auth">
						<div class="login-auth-wrap">
						 <header class="log-header">
            				<a href="/"><img class="img-fluid logo-dark" src="{{ asset('images/logo.png') }}" alt="Logo" width="220px"></a>
            			</header>
							<h1>Sign Up</h1> 
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="input-block">
									<label class="form-label">Username <span class="text-danger">*</span></label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<div class="input-block">
									<label class="form-label">Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>

                                <div class="input-block">
									<label class="form-label">Confirm password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
                                <button type="submit" class="btn btn-outline-light w-100 btn-size mt-1">  {{ __('Register') }} </button>
								 	<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or"> <a href="/login"> Log in here</a> </span>
								</div>
								<!-- Social Login -->
							
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<footer class="log-footer">
				<div class="container-fluid">
					<!-- Copyright -->
					<div class="copyright">
						<div class="copyright-text">
							<p>© 2015 Am5 Auto. All Rights Reserved.</p>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</footer>
			<!-- /Footer -->
		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="assets/js/jquery-3.7.1.min.js" type="c881804a75cc4615538a2428-text/javascript"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js" type="c881804a75cc4615538a2428-text/javascript"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js" type="c881804a75cc4615538a2428-text/javascript"></script>

	<script src="assets/js/rocket-loader.min.js" data-cf-settings="c881804a75cc4615538a2428-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e851aefc2df369","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:10 GMT -->
</html>












