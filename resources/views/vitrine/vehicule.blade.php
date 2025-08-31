<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:54:44 GMT -->

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

    <!-- Aos CSS -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="main-wrapper listing-page">

        @include('vitrine.nav')

        <!-- Breadscrumb Section -->
        <div class="breadcrumb-bar">
            <div class="container">
                <div class="text-center row align-items-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title"> <br>Car Listings</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadscrumb Section -->

        <!-- Search -->
        <div class="section-search page-search">
            <div class="container">
                <div class="search-box-banner">
                    <form action="{{ route('vitrine.vehicule') }}" method="GET">
                        <ul class="align-items-center">
                            <li class="column-group-main">
                                <div class="input-block">
                                    <label>Pickup Location</label>
                                    <div class="group-img">
                                        <input type="text" name="pickup_location" class="form-control"
                                            placeholder="Enter City, Airport, or Address"
                                            value="{{ request('pickup_location') }}">
                                        <span><i class="feather-map-pin"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-main">
                                <div class="input-block">
                                    <label>Pickup Date</label>
                                </div>
                                <div class="input-block-wrapp">
                                    <div class="input-block date-widget">
                                        <div class="group-img">
                                            <input type="text" name="pickup_date" class="form-control datetimepicker"
                                                placeholder="04/11/2023" value="{{ request('pickup_date') }}">
                                            <span><i class="feather-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-block time-widge">
                                        <div class="group-img">
                                            <input type="text" name="pickup_time" class="form-control timepicker"
                                                placeholder="11:00 AM" value="{{ request('pickup_time') }}">
                                            <span><i class="feather-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-main">
                                <div class="input-block">
                                    <label>Return Date</label>
                                </div>
                                <div class="input-block-wrapp">
                                    <div class="input-block date-widge">
                                        <div class="group-img">
                                            <input type="text" name="return_date" class="form-control datetimepicker"
                                                placeholder="04/11/2023" value="{{ request('return_date') }}">
                                            <span><i class="feather-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-block time-widge">
                                        <div class="group-img">
                                            <input type="text" name="return_time" class="form-control timepicker"
                                                placeholder="11:00 AM" value="{{ request('return_time') }}">
                                            <span><i class="feather-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-last">
                                <div class="input-block">
                                    <div class="search-btn">
                                        <button class="btn search-button" type="submit">
                                            <i class="fa fa-search" aria-hidden="true"></i>Search
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Search -->

        <!-- Sort By -->
        <div class="sort-section">
            <div class="container">
                <div class="sortby-sec">
                    <div class="sorting-div">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                                <div class="count-search">
                                    <p>Showing {{ $latestCars->firstItem() ?? 0 }}-{{ $latestCars->lastItem() ?? 0 }}
                                        of {{ $latestCars->total() }} Cars</p>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                                <div class="product-filter-group">
                                    <div class="sortbyset">
                                        <ul>
                                            <li>
                                                <span class="sortbytitle">Show : </span>
                                                <div class="sorting-select select-one">
                                                    <select class="form-control select" name="per_page"
                                                        onchange="this.form.submit()">
                                                        <option value="5"
                                                            {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                                        <option value="9"
                                                            {{ request('per_page', 9) == 9 ? 'selected' : '' }}>9
                                                        </option>
                                                        <option value="15"
                                                            {{ request('per_page') == 15 ? 'selected' : '' }}>15
                                                        </option>
                                                        <option value="20"
                                                            {{ request('per_page') == 20 ? 'selected' : '' }}>20
                                                        </option>
                                                        <option value="30"
                                                            {{ request('per_page') == 30 ? 'selected' : '' }}>30
                                                        </option>
                                                    </select>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="sortbytitle">Sort By </span>
                                                <div class="sorting-select select-two">
                                                    <select class="form-control select" name="sort_by"
                                                        onchange="this.form.submit()">
                                                        <option value="newest"
                                                            {{ request('sort_by', 'newest') == 'newest' ? 'selected' : '' }}>
                                                            Newest</option>
                                                        <option value="relevance"
                                                            {{ request('sort_by') == 'relevance' ? 'selected' : '' }}>
                                                            Relevance</option>
                                                        <option value="low_to_high"
                                                            {{ request('sort_by') == 'low_to_high' ? 'selected' : '' }}>
                                                            Low to High</option>
                                                        <option value="high_to_low"
                                                            {{ request('sort_by') == 'high_to_low' ? 'selected' : '' }}>
                                                            High to Low</option>
                                                        <option value="best_rated"
                                                            {{ request('sort_by') == 'best_rated' ? 'selected' : '' }}>
                                                            Best Rated</option>
                                                        <option value="distance"
                                                            {{ request('sort_by') == 'distance' ? 'selected' : '' }}>
                                                            Distance</option>
                                                        <option value="popularity"
                                                            {{ request('sort_by') == 'popularity' ? 'selected' : '' }}>
                                                            Popularity</option>
                                                    </select>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Sort By -->

        <!-- Car Grid View -->
        <section class="pt-0 section car-listing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                        <form action="{{ route('vitrine.vehicule') }}" method="GET" autocomplete="off"
                            class="sidebar-form" id="filter-form">
                            <!-- Préserver les paramètres de recherche existants -->
                            @foreach (request()->except(['brands', 'categories', 'years', 'fuel_type', 'mileage', 'rental_type', 'specifications', 'color', 'capacity', 'transmission', 'rating']) as $key => $value)
                                @if (is_array($value))
                                    @foreach ($value as $v)
                                        <input type="hidden" name="{{ $key }}[]"
                                            value="{{ $v }}">
                                    @endforeach
                                @else
                                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                @endif
                            @endforeach

                            <div class="sidebar-heading">
                                <h3>What Are You Looking For</h3>
                            </div>

                            <!-- Recherche par texte -->
                            <div class="product-search">
                                <div class="form-custom">
                                    <input type="text" name="search" class="form-control" id="member_search1"
                                        placeholder="Search cars..." value="{{ request('search') }}">
                                    <span><img src="assets/img/icons/search.svg" alt="img"></span>
                                </div>
                            </div>

                            <!-- Disponibilité -->
                            <div class="product-availability">
                                <h6>Availability</h6>
                                <div class="status-toggle">
                                    <input id="availability" name="availability" class="check" type="checkbox"
                                        value="1" {{ request('availability') ? 'checked' : '' }}>
                                    <label for="availability" class="checktoggle">checkbox</label>
                                </div>
                            </div>

                            <!-- Filtre par marque -->
                            <div class="accordion" id="accordionMain1">
                                <div class="card-header-new" id="headingOne">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            Car Brand
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-body-chat">
                                        <div class="selectBox-cont">
                                            @foreach ($filterData['brands'] as $brand)
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="brands[]"
                                                        value="{{ $brand }}"
                                                        {{ in_array($brand, request('brands', [])) ? 'checked' : '' }}>
                                                    <span class="checkmark"></span> {{ $brand }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par catégorie -->
                            <div class="accordion" id="accordionMain2">
                                <div class="card-header-new" id="headingTwo">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            Car Category
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="selectBox-cont">
                                            @foreach ($filterData['categories'] as $category)
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="categories[]"
                                                        value="{{ $category }}"
                                                        {{ in_array($category, request('categories', [])) ? 'checked' : '' }}>
                                                    <span class="checkmark"></span> {{ $category }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par année -->
                            <div class="accordion" id="accordionMain3">
                                <div class="card-header-new" id="headingYear">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapseYear">
                                            Year
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseYear" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="selectBox-cont">
                                            @foreach ($filterData['years'] as $year)
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="years[]"
                                                        value="{{ $year }}"
                                                        {{ in_array($year, request('years', [])) ? 'checked' : '' }}>
                                                    <span class="checkmark"></span> {{ $year }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par carburant -->
                            <div class="accordion" id="accordionMain04">
                                <div class="card-header-new" id="headingfuel">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefuel">
                                            Fuel Type
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsefuel" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                @foreach ($filterData['fuel_types'] as $fuel)
                                                    <li>
                                                        <div class="input-selection">
                                                            <input type="radio" name="fuel_type"
                                                                id="fuel_{{ $loop->index }}"
                                                                value="{{ $fuel }}"
                                                                {{ request('fuel_type') == $fuel ? 'checked' : '' }}>
                                                            <label
                                                                for="fuel_{{ $loop->index }}">{{ $fuel }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par transmission -->
                            <div class="accordion" id="accordionMain4">
                                <div class="card-header-new" id="headingtransmiss">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapsetransmission">
                                            Transmission
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsetransmission" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                @foreach ($filterData['transmissions'] as $transmission)
                                                    <li>
                                                        <div class="input-selection">
                                                            <input type="radio" name="transmission"
                                                                id="trans_{{ $loop->index }}"
                                                                value="{{ $transmission }}"
                                                                {{ request('transmission') == $transmission ? 'checked' : '' }}>
                                                            <label
                                                                for="trans_{{ $loop->index }}">{{ $transmission }}</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par places -->
                            <div class="accordion" id="accordionMain8">
                                <div class="card-header-new" id="headingThree">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            Capacity
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="selectBox-cont">
                                            @foreach ($filterData['capacities'] as $capacity)
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="capacity[]"
                                                        value="{{ $capacity }}"
                                                        {{ in_array($capacity, request('capacity', [])) ? 'checked' : '' }}>
                                                    <span class="checkmark"></span> {{ $capacity }} Seater
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filtre par prix -->
                            <div class="accordion" id="accordionMain9">
                                <div class="card-header-new" id="headingFour">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            Price
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-body-chat">
                                        <div class="filter-range">
                                            <input type="text" class="input-range"
                                                data-min="{{ $filterData['price_range']['min'] }}"
                                                data-max="{{ $filterData['price_range']['max'] }}"
                                                data-from="{{ request('price_min', $filterData['price_range']['min']) }}"
                                                data-to="{{ request('price_max', $filterData['price_range']['max']) }}">
                                            <input type="hidden" name="price_min"
                                                value="{{ request('price_min') }}">
                                            <input type="hidden" name="price_max"
                                                value="{{ request('price_max') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <button type="submit"
                                class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                                <span><i class="feather-filter me-2"></i></span>Filter results
                            </button>
                            <a href="{{ route('vitrine.vehicule') }}" class="reset-filter">Reset Filter</a>
                        </form>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @foreach ($latestCars as $car)
                                <!-- col -->
                                <div class="col-xxl-4 col-lg-6 col-md-6 col-12">
                                    <div class="listing-item">
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
                                            <div class="fav-item justify-content-end">
                                                <span class="img-count"><i
                                                        class="feather-image"></i>{{ $car->images()->count() + 1 }}</span>
                                                <a href="javascript:void(0)" class="fav-icon">
                                                    <i class="feather-heart"></i>
                                                </a>
                                            </div>
                                            <span class="featured-text">{{ $car->modele }}</span>
                                        </div>
                                        <div class="listing-content">
                                            <div
                                                class="listing-features d-flex align-items-end justify-content-between">
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
                                                <div class="list-km">
                                                    <span class="km-count"><img src="assets/img/icons/map-pin.svg"
                                                            alt="author">4.1m</span>
                                                </div>
                                            </div>
                                            <div class="listing-details-group">
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-01.svg"
                                                                alt="{{ $car->boite_vitesse }}"></span>
                                                        <p>{{ $car->boite_vitesse }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-02.svg"
                                                                alt="{{ $car->kilometrage }} miles"></span>
                                                        <p>{{ $car->kilometrage }} miles</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-03.svg"
                                                                alt="{{ $car->carburant }}"></span>
                                                        <p>{{ $car->carburant }}</p>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-04.svg"
                                                                alt="Power"></span>
                                                        <p>Power</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-05.svg"
                                                                alt="{{ $car->annee }}"></span>
                                                        <p>{{ $car->annee }}</p>
                                                    </li>
                                                    <li>
                                                        <span><img src="assets/img/icons/car-parts-06.svg"
                                                                alt="Persons"></span>
                                                        <p>{{ $car->places }} Persons</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="listing-location-details">
                                                <div class="listing-price">
                                                    <span><i class="feather-map-pin"></i></span>Dallas, USA
                                                </div>
                                                <div class="listing-price">
                                                    <h6>${{ $car->prix }} <span>/ Day</span></h6>
                                                </div>
                                            </div>
                                            <div class="listing-button">
                                                <a href="listing-details.html" class="btn btn-order"><span><i
                                                            class="feather-calendar me-2"></i></span>Rent Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col -->
                            @endforeach
                        </div>
                        <!--Pagination-->
                        <div class="blog-pagination">
                            <nav>
                                <ul class="pagination page-item justify-content-center">
                                    @if ($latestCars->onFirstPage())
                                        <li class="previtem disabled">
                                            <span class="page-link"><i class="fas fa-regular fa-arrow-left me-2"></i>
                                                Prev</span>
                                        </li>
                                    @else
                                        <li class="previtem">
                                            <a class="page-link" href="{{ $latestCars->previousPageUrl() }}">
                                                <i class="fas fa-regular fa-arrow-left me-2"></i> Prev
                                            </a>
                                        </li>
                                    @endif

                                    <li class="justify-content-center pagination-center">
                                        <div class="page-group">
                                            <ul>
                                                @foreach ($latestCars->getUrlRange(1, $latestCars->lastPage()) as $page => $url)
                                                    <li class="page-item">
                                                        @if ($page == $latestCars->currentPage())
                                                            <a class="active page-link"
                                                                href="#">{{ $page }} <span
                                                                    class="visually-hidden">(current)</span></a>
                                                        @else
                                                            <a class="page-link"
                                                                href="{{ $url }}">{{ $page }}</a>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>

                                    @if ($latestCars->hasMorePages())
                                        <li class="nextlink">
                                            <a class="page-link" href="{{ $latestCars->nextPageUrl() }}">
                                                Next <i class="fas fa-regular fa-arrow-right ms-2"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nextlink disabled">
                                            <span class="page-link">Next <i
                                                    class="fas fa-regular fa-arrow-right ms-2"></i></span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                        {{-- <div class="blog-pagination">
                            <nav>
                                <ul class="pagination page-item justify-content-center">
                                    <li class="previtem">
                                        <a class="page-link" href="#"><i
                                                class="fas fa-regular fa-arrow-left me-2"></i> Prev</a>
                                    </li>
                                    <li class="justify-content-center pagination-center">
                                        <div class="page-group">
                                            <ul>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="active page-link" href="#">2 <span
                                                            class="visually-hidden">(current)</span></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nextlink">
                                        <a class="page-link" href="#">Next <i
                                                class="fas fa-regular fa-arrow-right ms-2"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                        <!--/Pagination-->

                    </div>
                </div>
            </div>
        </section>
        <!-- /Car Grid View -->

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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Aos -->
    <script src="assets/plugins/aos/aos.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Top JS -->
    <script src="assets/js/backToTop.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="assets/plugins/ion-rangeslider/js/custom-rangeslider.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/plugins/moment/moment.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <script src="assets/js/rocket-loader.min.js" data-cf-settings="2ac22662d873afbb6f8466dc-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"96e851842dd0df91","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>

    <script>
        // Initialisation du range slider pour le prix
        $(document).ready(function() {
            $(".input-range").ionRangeSlider({
                type: "double",
                min: {{ $filterData['price_range']['min'] ?? 0 }},
                max: {{ $filterData['price_range']['max'] ?? 1000 }},
                from: {{ request('price_min', $filterData['price_range']['min'] ?? 0) }},
                to: {{ request('price_max', $filterData['price_range']['max'] ?? 1000) }},
                prefix: "$",
                onFinish: function(data) {
                    $('input[name="price_min"]').val(data.from);
                    $('input[name="price_max"]').val(data.to);
                }
            });

            // Auto-submit sur changement de tri et nombre d'éléments
            $('select[name="per_page"], select[name="sort_by"]').change(function() {
                $(this).closest('form').submit();
            });

            // Auto-submit des filtres
            $('#filter-form input[type="checkbox"], #filter-form input[type="radio"]').change(function() {
                $('#filter-form').submit();
            });
        });
    </script>

</body>

</html>
