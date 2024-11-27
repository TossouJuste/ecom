<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from powerzone.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:08:10 GMT -->
<head>

	<!-- Title -->
	<title>Contact - UGBD</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="bodybuilding, class, clean, coach, fitness, fitness gym, gym, gym trainer, health, martial arts, personal trainer, sport, sports theme, training, workout, Fitness template, Workout design, Health and wellness, Exercise layout, Fitness app, Gym website, UI components, UX components, Workout routines, Health template, UIUX, creative, HTML, CSS, Sass Integration, HTML Template, Bootstrap, Bootstrap Template, Gym UI Kit, websiite, Website template, Fitness Website Design, Exercise App Design, Gym Interface, Exercise Dashboard, Gym Homepage Template, HTML Gym Template, Responsive Gym Design, responsive, HTML Fitness Components, Workout Program Template, Fitness Studio HTML, Responsive Workout Design, Landing Page Kit, HTML5, HTML/CSS">
	<meta name="description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta property="og:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
	<meta property="og:description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
	<meta name="twitter:description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta name="twitter:image" content="social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/logoUGBD.png">
    <link href="assets/vendor/animate/animate.css" rel="stylesheet">
	<link href="assets/vendor/rangeslider/rangeslider.css" rel="stylesheet">
	<link href="assets/vendor/switcher/switcher.css" rel="stylesheet">

	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" href="assets/css/skin/skin-3.css">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

</head>
<body id="bg" class="data-typography-1">
<div id="loading-area" class="loading-page-1">
	<div class="loading-inner">
	<span class="text-primary">U</span>
		<span class="text-primary">G</span>
		<span class="text-primary">B</span>
		<span class="text-primary">D</span>
		<span class="text-white">G</span>
		<span class="text-white">R</span>
		<span class="text-white">I</span>
		<span class="text-white">G</span>
		<span class="text-white">N</span>
		<span class="text-white">Y</span>
	</div>
</div>
<div class="page-wraper">

 	<!-- Header -->
     @include('vitrine.header')
	<!-- Header -->

	<div class="page-content bg-white">

	<!--banner-->
		<div class="contact-bnr" style="background-image: url(assets/images/background/bg9.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<div class="contact-info style-1 text-start text-white">
							<h2 class="title wow fadeInUp" data-wow-delay="0.1s">CONTACTEZ-NOUS</h2>
							<p class="text wow fadeInUp" data-wow-delay="0.2s"><span class="text-decoration-underline text-white"></span> <br>Pour tout renseignement, veuillez remplir le formulaire de contact que ce soit pour rejoindre le club ou devenir partenaire ou autres.</p>
							<div class="contact-bottom wow fadeInUp" data-wow-delay="0.3s">
								<div class="contact-left">
									<h3>Téléphone :</h3>
									<ul>
										<li><a href="tel:+011234567890">+33 6 58 82 66 10</a></li>
										<li><a href="tel:+019785687400">+33 7 58 25 05 54</a></li>
									</ul>
								</div>
								<div class="contact-right">
									<h3>Email :</h3>
									<ul>
										<li>contact@ugbd.fr</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">

						<div class="contact-area1 style-1 m-r20 m-md-r0 wow fadeInUp" data-wow-delay="0.5s">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                            <form class="" action="{{ route('contact.store') }}" method="POST">

                                @csrf
                                <div class="dzFormMsg"></div>

                                <!-- Nom -->
                                <label for="name" class="form-label">Nom</label>
                                <div class="input-group">
                                    <input required type="text" id="name" class="form-control" id="name" name="name" placeholder="Entrez votre nom">
                                </div>

                                <!-- Email -->
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input required type="email" id="email" class="form-control" id="email" name="email" placeholder="Entrez votre email">
                                </div>

                                <!-- Sujet -->
                                <label for="subject" class="form-label">Téléphone</label>
                                <div class="input-group">
                                    <input required type="text" id="subject" class="form-control" id="subject" name="subject" placeholder="Téléphone">
                                </div>

                                <!-- Message -->
                                <label for="message" class="form-label">Message</label>
                                <div class="input-group m-b30">
                                    <textarea required id="message" class="form-control m-b10" id="message" name="message" rows="4" placeholder="Tapez votre message ici"></textarea>
                                </div>

                                <!-- Bouton de soumission -->
                                <div>
                                    <button name="submit" type="submit" value="submit" class="btn btn-primary w-100 btnhover">SOUMETTRE</button>
                                </div>
                            </form>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-inner-2 pt-0">
			<div class="map-iframe style-1">
			</div>
		</div>

		@include('vitrine.footer')
	</div>



	<div class="scroltop-progress scroltop-primary active-progress">
		<svg width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 24.3299px;"></path>
		</svg>
	</div>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="assets/vendor/wow/wow.js"></script><!-- WOW.JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.js"></script><!-- CUSTOM JS -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
</body>

<!-- Mirrored from powerzone.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:08:11 GMT -->
</html>
