<!DOCTYPE html>
<html lang="en">
 
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Login Am5 Auto</title>

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
                    			</header>  <br>
							<h1>Sign In</h1> 
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email">{{ __('Adress Email') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Remember -->
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button> 
                                
                                <div class="login-or">
									<span class="or-line"></span>
									<span class="span-or"> <a href="/register"> Create an account here</a> </span>
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
		<script src="assets/js/jquery-3.7.1.min.js" type="f008fb6f24348a3adf45b67e-text/javascript"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js" type="f008fb6f24348a3adf45b67e-text/javascript"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js" type="f008fb6f24348a3adf45b67e-text/javascript"></script>

	<script src="assets/js/rocket-loader.min.js" data-cf-settings="f008fb6f24348a3adf45b67e-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96e851b09afd94e8","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:55:10 GMT -->
</html>

