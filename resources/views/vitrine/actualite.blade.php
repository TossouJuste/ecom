<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from powerzone.dexignzone.com/xhtml/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:07:12 GMT -->
<head>

	<!-- Title -->
	<title>Actualités - </title>

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

	<link href="assets/vendor/rangeslider/rangeslider.css" rel="stylesheet">
	<link href="assets/vendor/switcher/switcher.css" rel="stylesheet">
	<link href="assets/vendor/animate/animate.css" rel="stylesheet">

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

		<!-- Banner  -->
		<div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
			<div class="banner-gradient"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="dz-bnr-inr-entry">
							<h1>Actualités</h1>
							<!-- Breadcrumb Row -->
							<nav aria-label="breadcrumb" class="breadcrumb-row">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="/">Accueil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Evenements</li>
								</ul>
							</nav>
							<!-- Breadcrumb Row End -->
						</div>
					</div>
				</div>
				<div class="banner-media">
					<img src="assets/images/banner/pic4.png" alt="/">
				</div>
			</div>
		</div>
		<!-- Banner End -->

		<!-- Our Events -->
<section class="content-inner">
    <div class="container">
        <div class="row">
            @foreach($events->chunk(2) as $row)
                <div class="row justify-content-center">
                    @foreach($row as $item)
                        <div class="col-lg-6 col-md-6">
                            <div class="dz-card style-1 blog-half m-b30 overlay-shine wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="{{ route('vitrine.actualite-detail', $item->id) }}">
                                        <img src="{{ asset('storage/'.$item->photo) }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="dz-info">
                                    <div class="dz-meta">
                                        <ul>
                                            <li class="dz-date">
                                                <span>{{ \Carbon\Carbon::parse($item->date_realisation)->format('d/m/Y') }}</span>
                                            </li>
                                            <li class="dz-time">
                                                <a href="javascript:void(0);"> {{ $item->lieu_realisation }} </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="dz-title">
                                        <a href="{{ route('vitrine.actualite-detail', $item->id) }}">{{ $item->titre }}</a>
                                    </h4>
                                    <p>{!! \Str::limit($item->description, 100) !!}</p>
                                    <a class="read-btn btn-link" href="{{ route('vitrine.actualite-detail', $item->id) }}">Lire tout</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-12 text-center">
                {{ $events->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
<!-- Our Events -->

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
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/vendor/wow/wow.js"></script><!-- WOW.JS -->
<script src="assets/js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.js"></script><!-- CUSTOM JS -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER --> 
</body>

<!-- Mirrored from powerzone.dexignzone.com/xhtml/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:07:20 GMT -->
</html>
