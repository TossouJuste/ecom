<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:46:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.min.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="assets/plugins/fancybox/fancybox.css">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">

    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper home-three">

        @include('vitrine.nav')

        <!-- Banner -->
        <section class="banner-section-four">
            <div class="container">
                <div class="home-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-5" data-aos="fade-down">
                            <div class="banner-content">
                                <h1>Discover <span>new & used</span> cars at the best value.</h1>
                                <p>Power for adventure, comfort for every journey </p>
                                <div class="customer-list">
                                    <div class="users-wrap">
                                        <ul class="users-list">
                                            <li>
                                                <img src="assets/img/profiles/avatar-11.jpg" class="img-fluid aos"
                                                    alt="bannerimage">
                                            </li>
                                            <li>
                                                <img src="assets/img/profiles/avatar-15.jpg" class="img-fluid aos"
                                                    alt="bannerimage">
                                            </li>
                                            <li>
                                                <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid aos"
                                                    alt="bannerimage">
                                            </li>
                                        </ul>
                                        <div class="customer-info">
                                            <h4>62K + Customers</h4>
                                            <p>Trust Us for Quality Cars</p>
                                        </div>
                                    </div>
                                    <div class="view-all d-flex align-items-center gap-3">
                                        <a href="listing-grid.html"
                                            class="btn btn-primary d-inline-flex align-items-center">Rent a Car<i
                                                class="bx bx-right-arrow-alt ms-1"></i></a>
                                        <a href="add-listing.html"
                                            class="btn btn-secondary d-inline-flex align-items-center"><i
                                                class="bx bxs-plus-circle me-1"></i>Add Your Car</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-image">
                                <div class="banner-img" data-aos="fade-down">
                                    <div class="amount-icon">
                                        <span class="day-amt">
                                            <p>Starts From</p>
                                            <h6>$650 <span> /day</span></h6>
                                        </span>
                                    </div>
                                    <span class="rent-tag"><i class="bx bxs-circle"></i> Available for Rent</span>
                                    <img src="assets/img/banner/banner.png" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-search">
                    <form action="https://dreamsrent.dreamstechnologies.com/html/template/listing-grid.html"
                        class="form-block d-flex align-items-center">
                        <div class="search-input">
                            <div class="input-block">
                                <label>Pickup Location</label>
                                <select class="select">
                                    <option>Choose Location</option>
                                    <option>New York</option>
                                    <option>Dallas</option>
                                    <option>Chicago</option>
                                    <option>San Diego</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Drop Location</label>
                                <select class="select">
                                    <option>Choose Location</option>
                                    <option>San Francisco</option>
                                    <option>Austin</option>
                                    <option>Boston</option>
                                    <option>Chicago</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input">
                            <div class="input-block">
                                <label>Pickup Date & time</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime"
                                        value="2025-03-14 12:00">
                                    <span class="input-icon"><i class="bx bx-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-input input-end">
                            <div class="input-block">
                                <label>Drop Date & time</label>
                                <div class="input-wrap">
                                    <input type="text" class="form-control flatpickr-datetime"
                                        value="2025-03-15 12:00">
                                    <span class="input-icon"><i class="bx bx-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button class="btn btn-primary" type="submit"><i class="bx bx-search-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="banner-bgs">
                <img src="assets/img/bg/banner-bg-01.png" class="bg-01 img-fluid" alt="img">
            </div>
        </section>
        <!-- /Banner -->

        <!-- Category  Section -->
        <section class="category-section-four">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Heading title-->
                        <div class="section-heading heading-four" data-aos="fade-down">
                            <h2>Featured Categories</h2>
                            <p>Know what you’re looking for? Browse our extensive selection of cars</p>
                        </div>
                        <!-- /Heading title -->

                        <div class="row row-gap-4">

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Sports Coupe</a></h6>
                                            <p>14 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-01.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Sedan</a></h6>
                                            <p>12 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-02.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Sports Car</a></h6>
                                            <p>35 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-03.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Pickup</a></h6>
                                            <p>35 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-04.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Family MPV</a></h6>
                                            <p>35 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-05.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                            <!-- Category Item -->
                            <div class="col-xl-2 col-md-4 col-sm-6 d-flex">
                                <div class="category-item flex-fill">
                                    <div class="category-info d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="title"><a href="listing-grid.html">Crossover</a></h6>
                                            <p>30 Cars</p>
                                        </div>
                                        <a href="listing-grid.html" class="link-icon"><i
                                                class="bx bx-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="category-img">
                                        <img src="assets/img/category/category-06.png" alt="img"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- /Category Item -->

                        </div>

                        <div class="view-all-btn text-center aos" data-aos="fade-down">
                            <a href="listing-grid.html" class="btn btn-secondary">View All<i
                                    class="bx bx-right-arrow-alt ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category  Section -->

        <!-- Feature Section -->
        <section class="feature-section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <div class="feature-img">
                            <div class="section-heading heading-four text-start" data-aos="fade-down">
                                <h2>Best Platform for Car Sales</h2>
                                <p>Why choose us? We offer top-quality new and used cars, making your car buying
                                    experience easy and trustworthy.</p>
                            </div>
                            <img src="assets/img/cars/car.png" alt="img" class="img-fluid">
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="row row-gap-4">

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bxs-info-circle"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Best Deal</h6>
                                        <p>Find unbeatable prices on high-quality vehicles. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-exclude"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Home Delivery Available</h6>
                                        <p>We deliver your purchased car directly to your doorstep. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-money"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Satisfied or Refunded</h6>
                                        <p>Buy with confidence—return within 30 days or 1,000 km if not satisfied. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">

                                    <span class="feature-icon">
                                        <i class="bx bxs-car-mechanic"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Latest Cars</h6>
                                        <p>Explore our newest models and latest arrivals.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bx-support"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">Customer Support</h6>
                                        <p>Our team is ready to help you with all your car buying questions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                            <!-- Feature Item -->
                            <div class="col-md-6 d-flex">
                                <div class="feature-item flex-fill">
                                    <span class="feature-icon">
                                        <i class="bx bxs-coin"></i>
                                    </span>
                                    <div>
                                        <h6 class="mb-1">No Hidden Charges</h6>
                                        <p>Transparent pricing, no surprises—what you see is what you pay.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Feature Item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Feature Section -->

        <!-- Car Section -->
        <section class="car-section">
            <div class="container">

                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2>These vehicle models may interest you</h2>
                    <p>Here's a list of some of the most popular cars globally</p>
                </div>

                <div class="row">
                    @foreach ($latestCars as $car)
                        <!-- Car List -->
                        <div class="col-lg-4 col-md-6">
                            <div class="listing-item listing-item-two">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="listing-details.html">
                                                <img src="{{ asset('storage/' . $car->image_principale) }}"
                                                    class="img-fluid" alt="Toyota">
                                            </a>
                                        </div>
                                        @if ($car->images())
                                            @foreach ($car->images() as $carListImage)
                                                <div class="slide-images">
                                                    <a href="listing-details.html">
                                                        <img src="{{ asset('storage/' . $carListImage->imagePath) }}"
                                                            class="img-fluid" alt="Toyota">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="fav-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="featured-text">{{ $car->modele }}</span>
                                            <span class="availability">Available</span>
                                        </div>
                                        <a href="javascript:void(0)" class="fav-icon selected">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <span class="location"><i class="bx bx-map me-1"></i>Lasvegas</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-center justify-content-between">
                                        <div class="list-rating">
                                            <h3 class="listing-title">
                                                <a href="listing-details.html">{{ $car->titre }}</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="price">${{ $car->prix }}<span>/ Day</span></h4>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <img src="assets/img/icons/car-parts-01.svg" alt="{{ $car->boite_vitesse }}">
                                                <p>{{ $car->boite_vitesse }}</p>
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/car-parts-02.svg" alt="{{ $car->kilometrage }} KM">
                                                <p>{{ $car->kilometrage }} KM</p>
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/car-parts-03.svg" alt="{{ $car->carburant }}">
                                                <p>{{ $car->carburant }}</p>
                                            </li>
                                            <li>
                                                <img src="assets/img/icons/car-parts-05.svg" alt="{{ $car->annee }}">
                                                <p>{{ $car->annee }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car List -->
                    @endforeach
                </div>

                <div class="view-all-btn text-center aos" data-aos="fade-down">
                    <a href="listing-grid.html" class="btn btn-secondary d-inline-flex align-items-center">View More
                        Cars<i class="bx bx-right-arrow-alt ms-1"></i></a>
                </div>

            </div>
        </section>
        <!-- /Car Section -->

        <!-- Brand Section -->
        <section class="brand-section">
            <div class="container">
                <div class="section-heading heading-four" data-aos="fade-down">
                    <h2 class="text-white">Discover all our available vehicle brands</h2>
                    <p>Here's a list of some of the top Brands</p>
                </div>
                <div class="brands-slider owl-carousel">
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-09.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-10.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-11.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-12.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-13.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                    <div class="brand-wrap">
                        <img src="assets/img/brand/brand-14.svg" alt="img">
                        <p>Chevrolet</p>
                    </div>
                </div>
                <div class="brand-img text-center">
                    <img src="assets/img/bg/brand.png" alt="img" class="img-fluid">
                </div>
            </div>
        </section>
        <!-- /Brand Section -->

        <!-- Rental Section -->
        <section class="rental-section-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="rental-img">
                            <img src="assets/img/about/rent-car.png" alt="img" class="img-fluid">
                            <div class="grid-img">
                                <img src="assets/img/about/car-grid.png" alt="img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="rental-content">
                            <div class="section-heading heading-four text-start" data-aos="fade-down">
                                <h2>Buy Your Car in 3 Easy Steps</h2>
                                <p>See how easy it is to purchase your vehicle on our platform.</p>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-primary me-3">
                                    <i class="bx bx-calendar-heart"></i>
                                </span>
                                <div>
                                    <h5>Choose Your Vehicle</h5>
                                    <p>Browse our catalog and select the car that fits your needs and budget.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-secondary-100 me-3">
                                    <i class="bx bxs-edit-location"></i>
                                </span>
                                <div>
                                    <h5>Fill the Form & Make Payment</h5>
                                    <p>Complete the purchase form and choose your secure payment method.</p>
                                </div>
                            </div>
                            <div class="step-item d-flex align-items-center">
                                <span class="step-icon bg-dark me-3">
                                    <i class="bx bx-coffee-togo"></i>
                                </span>
                                <div>
                                    <h5>Delivery or Pickup</h5>
                                    <p>Receive your car at your doorstep or pick it up at our location.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="count-sec">
                    <div class="row row-gap-4">
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">62</span>K+</h3>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">2547</span>K+</h3>
                                <p>Count of Cars</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">625</span>K+</h3>
                                <p>Locations to Pickup</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex">
                            <div class="count-item flex-fill">
                                <h3><span class="counterUp">15000</span>K+</h3>
                                <p>Total Kilometers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Rental Section -->

        <!-- Rental deals -->
        <section class="section popular-services">
            <div class="container">
                <!-- Heading title-->
                <div class="section-heading" data-aos="fade-down">
                    <h2>Our Vehicle Recommendations for You</h2>
                </div>
                <!-- /Heading title -->
                <div class="row">
                    <div class="popular-slider-group">
                        <div class="owl-carousel rental-deal-slider owl-theme">
                            <!-- owl carousel item -->
                            <div class="rental-car-item">
                                <div class="listing-item mb-0">
                                    <div class="listing-img">
                                        <a href="listing-details.html">
                                            <img src="assets/img/cars/rental-car-01.jpg" class="img-fluid"
                                                alt="Toyota">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="fav-item-rental">
                                                <div class="featured-text">$400<span>/day</span></div>
                                            </div>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="listing-details.html">BMW 640 XI Gran Turismo</a>
                                            </h3>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-07.svg"
                                                            alt="2018"></span>
                                                    <p>AC</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-button">
                                            <a href="listing-details.html" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owl carousel item -->

                            <!-- owl carousel item -->
                            <div class="rental-car-item">
                                <div class="listing-item mb-0">
                                    <div class="listing-img">
                                        <a href="listing-details.html">
                                            <img src="assets/img/cars/rental-car-02.jpg" class="img-fluid"
                                                alt="Toyota">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="fav-item-rental">
                                                <div class="featured-text">$210<span>/day</span></div>
                                            </div>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="listing-details.html">Camz Ferrari Portofino M</a>
                                            </h3>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>30 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-07.svg"
                                                            alt="2018"></span>
                                                    <p>AC</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-button">
                                            <a href="listing-details.html" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owl carousel item -->

                            <!-- owl carousel item -->
                            <div class="rental-car-item">
                                <div class="listing-item mb-0">
                                    <div class="listing-img">
                                        <div class="img-slider owl-carousel owl-theme">
                                            <div class="slide-images">
                                                <a href="listing-details.html">
                                                    <img src="assets/img/cars/rental-car-03.jpg" class="img-fluid"
                                                        alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="listing-details.html">
                                                    <img src="assets/img/cars/rental-car-03-slider1.jpg"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="listing-details.html">
                                                    <img src="assets/img/cars/rental-car-03-slider2.jpg"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="listing-details.html">
                                                    <img src="assets/img/cars/rental-car-03-slider3.jpg"
                                                        class="img-fluid" alt="Toyota">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="fav-item-rental">
                                                <div class="featured-text">$380<span>/day</span></div>
                                            </div>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="listing-details.html">Mercedes-Benz</a>
                                            </h3>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>30 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-07.svg"
                                                            alt="2018"></span>
                                                    <p>AC</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-button">
                                            <a href="listing-details.html" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owl carousel item -->

                            <!-- owl carousel item -->
                            <div class="rental-car-item">
                                <div class="listing-item mb-0">
                                    <div class="listing-img">
                                        <a href="listing-details.html">
                                            <img src="assets/img/cars/rental-car-04.jpg" class="img-fluid"
                                                alt="Toyota">
                                        </a>
                                        <div class="fav-item justify-content-end">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <div class="fav-item-rental">
                                                <span class="featured-text">$250/day</span>
                                            </div>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.5)</span>
                                            </div>
                                            <h3 class="listing-title">
                                                <a href="listing-details.html">Range Rover</a>
                                            </h3>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>28 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-07.svg"
                                                            alt="2018"></span>
                                                    <p>AC</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-button">
                                            <a href="listing-details.html" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owl carousel item -->

                        </div>
                    </div>
                </div>
                <!-- View More -->
                <div class="view-all text-center" data-aos="fade-down">
                    <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">Go to all Cars
                        <span><i class="feather-arrow-right ms-2"></i></span></a>
                </div>
                <!-- View More -->
            </div>
        </section>
        <!-- /Rental deals -->


        <!-- About us Testimonials -->
        <section class="section about-testimonial testimonials-section">
            <div class="container">
                <!-- Heading title-->
                <div class="section-heading" data-aos="fade-down">
                    <h2 class="title text-white">What Our Customers Say</h2>
                    <p class="description text-white">See what our clients think about our vehicles and service</p>
                </div>
                <!-- /Heading title -->
                <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

                    <!-- Carousel Item -->
                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="img-fluid"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Rabien Ustoc</h6>
                                        <p>London, UK</p>
                                    </div>
                                </div>
                                <p>Found the perfect vehicle here! The process was simple, the form easy to complete,
                                    and delivery was quick and hassle-free.</p>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item  -->

                    <!-- Carousel Item -->
                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Valerie L. Ellis</h6>
                                        <p>Paris, France</p>
                                    </div>
                                </div>
                                <p>As a frequent buyer, I highly recommend this service. The vehicle selection is
                                    excellent, the information clear, and customer support very responsive.</p>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item  -->

                    <!-- Carousel Item -->
                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-04.jpg" class="img-fluid"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Laverne Marier</h6>
                                        <p>Berlin, Germany</p>
                                    </div>
                                </div>
                                <p>The SUV we purchased was perfect for our family. From vehicle selection to payment,
                                    everything was smooth and secure. Highly satisfied!</p>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item  -->

                    <!-- Carousel Item -->
                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-06.jpg" class="img-fluid"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Sydney Salmons</h6>
                                        <p>Rome, Italy</p>
                                    </div>
                                </div>
                                <p>The website made comparing models easy. Vehicles are well-maintained and pricing
                                    transparent. I highly recommend!</p>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item  -->

                    <!-- Carousel Item -->
                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-07.jpg" class="img-fluid"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Lucas Moquin</h6>
                                        <p>Madrid, Spain</p>
                                    </div>
                                </div>
                                <p>Professional and fast service. My vehicle was delivered smoothly and matched the
                                    description perfectly. Excellent buying experience!</p>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel Item  -->

                </div>
            </div>
        </section>
        <!-- About us Testimonials -->




        <!-- Support Section -->
        <section class="support-section">
            <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
                <div class="slide-list d-flex">
                    <div class="support-item">
                        <h2>Guaranteed Satisfaction</h2>
                    </div>
                    <div class="support-item">
                        <h2>12-Month Certified Guarantee</h2>
                    </div>
                    <div class="support-item">
                        <h2>Flexible Financing Options</h2>
                    </div>
                    <div class="support-item">
                        <h2>Hassle-Free Trade-In</h2>
                    </div>
                    <div class="support-item">
                        <h2>Over 40 Trusted Brands</h2>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Support Section -->



        <section class="categories-section">
            <div class="container">
                <div class="accordion custom-accordion" id="faqAcordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                Quality Vehicles, Tailored Solutions
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAcordion">
                            <div class="accordion-body">
                                At our company, you can choose from a wide selection of new and used vehicles from over
                                40 brands. All our used vehicles are inspected and come with a minimum 12-month
                                warranty, plus a satisfaction guarantee: within 30 days of delivery or 1,000 km driven.

                                We offer personalized financial support, with solutions tailored to your situation,
                                whether you choose a lease with option to purchase (LOA), a long-term lease (LLD), or a
                                loan to finance your vehicle purchase. We also make it easy to trade in your old vehicle
                                with a simple, transparent, and fast process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('vitrine.footer')

    </div>

    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
    <!-- scrollToTop end -->


    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- counterup JS -->
    <script src="assets/js/jquery.waypoints.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>
    <script src="assets/js/jquery.counterup.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Aos -->
    <script src="assets/plugins/aos/aos.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Top JS -->
    <script src="assets/js/backToTop.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Slick JS -->
    <script src="assets/plugins/slick/slick.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Flatpickr JS -->
    <script src="assets/plugins/flatpickr/flatpickr.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>
    <script src="assets/plugins/flatpickr/forms-pickers.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Fancybox JS -->
    <script src="assets/plugins/fancybox/fancybox.umd.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js" type="3e1458ad2d48f9a481a3c730-text/javascript"></script>

    <script src="assets/js/rocket-loader.min.js" data-cf-settings="3e1458ad2d48f9a481a3c730-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"96e850b7ce24e3c3","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:48:20 GMT -->

</html>
