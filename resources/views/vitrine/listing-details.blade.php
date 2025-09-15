@extends('layouts.master')
@section('content-client')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">{{ $car->titre }}</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('vitrine.vehicule') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('vitrine.vehicule') }}">Véhicules</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $car->titre }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Page Head -->
    <section class="product-detail-head">
        <div class="container">
            <div class="detail-page-head">
                <div class="detail-headings">
                    <div class="star-rated">
                        <ul class="list-rating">
                            <li>
                                <div class="car-brand">
                                    <span>
                                        <img src="assets/img/icons/car-icon.svg" alt="img">
                                    </span>
                                    {{ $car->category->name ?? 'Sedan' }}
                                </div>
                            </li>
                            <li>
                                <span class="year">{{ $car->annee }}</span>
                            </li>
                            <li class="ratings">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star filled"></i>
                                @endfor
                                <span class="d-inline-block average-list-rating">(5.0)</span>
                            </li>
                        </ul>
                        <div class="camaro-info">
                            <h3>{{ $car->titre }}</h3>
                            <div class="camaro-location">
                                <div class="camaro-location-inner">
                                    <i class='bx bx-map'></i>
                                    <span>Localisation : {{ $car->localisation ?: 'Dakar, Sénégal' }}</span>
                                </div>
                                <div class="camaro-location-inner">
                                    <i class='bx bx-show'></i>
                                    <span>Vues : 250</span>
                                </div>
                                <div class="camaro-location-inner">
                                    <i class='bx bx-car'></i>
                                    <span>Ajouté le : {{ $car->created_at->format('d M, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-btn">
                    <span class="total-badge"><i class='bx bx-calendar-edit'></i>Total Réservations : 300</span>
                    <a href="#"><i class='bx bx-git-compare'></i>Comparer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="section product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Section des images dans le HTML -->
                    <div class="detail-product">
                        <div class="pro-info">
                            <div class="pro-badge">
                                <span class="badge-km"><i class="fa-solid fa-person-walking"></i>4.2 Km</span>
                                <a href="javascript:void(0);" class="fav-icon" data-car-id="{{ $car->id }}">
                                    @auth
                                        @if (auth()->user()->hasFavorite($car->id))
                                            <i class="fas fa-heart text-danger"></i>
                                        @else
                                            <i class="fa-regular fa-heart"></i>
                                        @endif
                                    @else
                                        <i class="fa-regular fa-heart"></i>
                                    @endauth
                                </a>
                            </div>
                            <ul>
                                @if ($car->disponible)
                                    <li class="del-airport"><i class="fa-solid fa-check"></i>Livraison aéroport</li>
                                    <li class="del-home"><i class="fa-solid fa-check"></i>Livraison domicile</li>
                                @endif
                            </ul>
                        </div>

                        <!-- Image principale -->
                        <div class="main-image-container">
                            <img id="mainCarImage" src="{{ asset('storage/' . $car->image_principale) }}"
                                class="img-fluid main-car-image" alt="{{ $car->titre }}">
                        </div>

                        <!-- Galerie de thumbnails -->
                        <div class="thumbnail-gallery">
                            <div class="row g-2">
                                <!-- Image principale comme premier thumbnail -->
                                <div class="col-2">
                                    <img src="{{ asset('storage/' . $car->image_principale) }}"
                                        class="img-fluid thumbnail active"
                                        onclick="changeMainImage('{{ asset('storage/' . $car->image_principale) }}', this)"
                                        alt="{{ $car->titre }}">
                                </div>

                                <!-- Images secondaires -->
                                @foreach ($car->images as $index => $image)
                                    <div class="col-2">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid thumbnail"
                                            onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}', this)"
                                            alt="{{ $car->titre }} - Image {{ $index + 2 }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Extra Service Section -->
                    <div class="review-sec pb-0">
                        <div class="review-header">
                            <h4>Services Supplémentaires</h4>
                        </div>
                        <div class="lisiting-service">
                            <div class="row">
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-01.svg') }}" alt="GPS">
                                    </div>
                                    <div class="service-info">
                                        <p>Système de navigation GPS</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-02.svg') }}" alt="WiFi">
                                    </div>
                                    <div class="service-info">
                                        <p>Point d'accès Wi-Fi</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-03.svg') }}" alt="Sièges">
                                    </div>
                                    <div class="service-info">
                                        <p>Sièges de sécurité enfant</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-04.svg') }}" alt="Carburant">
                                    </div>
                                    <div class="service-info">
                                        <p>Options carburant</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-05.svg') }}" alt="Assistance">
                                    </div>
                                    <div class="service-info">
                                        <p>Assistance routière</p>
                                    </div>
                                </div>
                                <div class="servicelist d-flex align-items-center col-xxl-3 col-xl-4 col-sm-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/icons/service-06.svg') }}" alt="Radio">
                                    </div>
                                    <div class="service-info">
                                        <p>Radio satellite</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing Section -->
                    <div class="review-sec mb-0">
                        <div class="review-header">
                            <h4>Description du véhicule</h4>
                        </div>
                        <div class="description-list">
                            <p>{{ $car->description ?: 'Ce véhicule offre une expérience de conduite exceptionnelle avec un design moderne et des performances remarquables. Parfait pour vos déplacements en ville ou vos escapades. Il dispose de toutes les commodités modernes pour assurer votre confort et votre sécurité.' }}
                            </p>

                            @if (strlen($car->description ?? '') > 300)
                                <div class="read-more">
                                    <div class="more-text">
                                        <p>{{ substr($car->description, 300) }}</p>
                                    </div>
                                    <a href="javascript:void(0);" class="more-link">Voir plus</a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Specifications -->
                    <div class="review-sec specification-card">
                        <div class="review-header">
                            <h4>Spécifications</h4>
                        </div>
                        <div class="card-body">
                            <div class="lisiting-featues">
                                <div class="row">
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-1.svg') }}"
                                                alt="Type">
                                        </div>
                                        <div class="featues-info">
                                            <span>Carrosserie</span>
                                            <h6>{{ $car->category->name ?? 'Sedan' }}</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-2.svg') }}"
                                                alt="Marque">
                                        </div>
                                        <div class="featues-info">
                                            <span>Marque</span>
                                            <h6>{{ $car->marque }}</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-3.svg') }}"
                                                alt="Transmission">
                                        </div>
                                        <div class="featues-info">
                                            <span>Transmission</span>
                                            <h6>{{ $car->boite_vitesse }}</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-4.svg') }}"
                                                alt="Carburant">
                                        </div>
                                        <div class="featues-info">
                                            <span>Type de carburant</span>
                                            <h6>{{ $car->carburant }}</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-5.svg') }}"
                                                alt="Kilométrage">
                                        </div>
                                        <div class="featues-info">
                                            <span>Kilométrage</span>
                                            <h6>{{ number_format($car->kilometrage) }} Km</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-6.svg') }}"
                                                alt="Transmission">
                                        </div>
                                        <div class="featues-info">
                                            <span>Traction</span>
                                            <h6>Traction avant</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-7.svg') }}"
                                                alt="Année">
                                        </div>
                                        <div class="featues-info">
                                            <span>Année</span>
                                            <h6>{{ $car->annee }}</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-8.svg') }}"
                                                alt="Climatisation">
                                        </div>
                                        <div class="featues-info">
                                            <span>Climatisation</span>
                                            <h6>Climatisé</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-10.svg') }}"
                                                alt="Portes">
                                        </div>
                                        <div class="featues-info">
                                            <span>Portes</span>
                                            <h6>{{ $car->portes }} Portes</h6>
                                        </div>
                                    </div>
                                    <div class="featureslist d-flex align-items-center col-xl-3 col-md-4 col-sm-6">
                                        <div class="feature-img">
                                            <img src="{{ asset('assets/img/specification/specification-icon-12.svg') }}"
                                                alt="Puissance">
                                        </div>
                                        <div class="featues-info">
                                            <span>Puissance (CV)</span>
                                            <h6>{{ $car->puissance_moteur_ch ?: '150' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car Features -->
                    <div class="review-sec listing-feature">
                        <div class="review-header">
                            <h4>Équipements du véhicule</h4>
                        </div>
                        <div class="listing-description">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>Climatisation multi-zones</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Sièges avant chauffants</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Android Auto</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Système de navigation</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>Système audio premium</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Bluetooth</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Démarrage sans clé</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Siège à mémoire</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><span><i class="bx bx-check-double"></i></span>Caméra de recul</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Régulateur adaptatif</li>
                                        <li><span><i class="bx bx-check-double"></i></span>Essuie-glaces automatiques</li>
                                        <li><span><i class="bx bx-check-double"></i></span>4 vitres électriques</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tariff -->
                    {{-- <div class="review-sec listing-feature">
                        <div class="review-header">
                            <h4>Tarification</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table border mb-3">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Durée</th>
                                        <th>Prix quotidien</th>
                                        <th>Kilométrage de base</th>
                                        <th>Prix km supplémentaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 à 3 jours</td>
                                        <td>${{ $car->prix }}</td>
                                        <td>100</td>
                                        <td>$1</td>
                                    </tr>
                                    <tr>
                                        <td>4 à 7 jours</td>
                                        <td>${{ number_format($car->prix * 0.9) }}</td>
                                        <td>150</td>
                                        <td>$0.8</td>
                                    </tr>
                                    <tr>
                                        <td>8 à 15 jours</td>
                                        <td>${{ number_format($car->prix * 0.8) }}</td>
                                        <td>200</td>
                                        <td>$0.6</td>
                                    </tr>
                                    <tr>
                                        <td>16 à 30 jours</td>
                                        <td>${{ number_format($car->prix * 0.7) }}</td>
                                        <td>300</td>
                                        <td>$0.5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-4 theiaStickySidebar">
                    <!-- Pricing Section -->
                    <div class="review-sec mt-0">
                        <div class="review-header">
                            <h4>Tarification</h4>
                        </div>
                        <div class="mb-3">
                            <label class="booking_custom_check bookin-check-2">
                                <input type="radio" name="price_rate" checked>
                                <span class="booking_checkmark">
                                    <span class="checked-title">Quotidien</span>
                                    <span class="price-rate">${{ $car->prix }}</span>
                                </span>
                            </label>
                            <label class="booking_custom_check bookin-check-2">
                                <input type="radio" name="price_rate">
                                <span class="booking_checkmark">
                                    <span class="checked-title">Hebdomadaire</span>
                                    <span class="price-rate">${{ number_format($car->prix * 7 * 0.85) }}</span>
                                </span>
                            </label>
                            @if ($car->prix_mois)
                                <label class="booking_custom_check bookin-check-2">
                                    <input type="radio" name="price_rate">
                                    <span class="booking_checkmark">
                                        <span class="checked-title">Mensuel</span>
                                        <span class="price-rate">${{ number_format($car->prix_mois) }}</span>
                                    </span>
                                </label>
                            @endif
                        </div>

                        <!-- Delivery/Pickup Tabs -->
                        <div class="location-content">
                            <div class="delivery-tab">
                                <ul class="nav">
                                    <li>
                                        <label class="booking_custom_check">
                                            <input type="radio" name="rent_type" checked>
                                            <span class="booking_checkmark">
                                                <span class="checked-title">Livraison</span>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="booking_custom_check">
                                            <input type="radio" name="rent_type">
                                            <span class="booking_checkmark">
                                                <span class="checked-title">Récupération</span>
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <!-- Booking Form -->
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="delivery">
                                    <form>
                                        <ul>
                                            <li class="column-group-main">
                                                <div class="input-block">
                                                    <label>Lieu de livraison</label>
                                                    <div class="group-img">
                                                        <div class="form-wrap">
                                                            <input type="text" class="form-control"
                                                                placeholder="45, 4th Avenue Mark Street USA">
                                                            <span class="form-icon">
                                                                <i class="fa-solid fa-location-crosshairs"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block">
                                                    <label class="custom_check d-inline-flex location-check m-0">
                                                        <span>Retourner au même endroit</span>
                                                        <input type="checkbox" name="same_location">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block">
                                                    <label>Lieu de retour</label>
                                                    <div class="group-img">
                                                        <div class="form-wrap">
                                                            <input type="text" class="form-control"
                                                                placeholder="78, 10th street Laplace USA">
                                                            <span class="form-icon">
                                                                <i class="fa-solid fa-location-crosshairs"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block m-0">
                                                    <label>Date de récupération</label>
                                                </div>
                                                <div class="input-block-wrapp sidebar-form">
                                                    <div class="input-block me-lg-2">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control datetimepicker"
                                                                    placeholder="04/11/2023">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-calendar-days"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control timepicker"
                                                                    placeholder="11:00 AM">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-main">
                                                <div class="input-block m-0">
                                                    <label>Date de retour</label>
                                                </div>
                                                <div class="input-block-wrapp sidebar-form">
                                                    <div class="input-block me-lg-2">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control datetimepicker"
                                                                    placeholder="04/11/2023">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-calendar-days"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-block">
                                                        <div class="group-img">
                                                            <div class="form-wrap">
                                                                <input type="text" class="form-control timepicker"
                                                                    placeholder="11:00 AM">
                                                                <span class="form-icon">
                                                                    <i class="fa-regular fa-clock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="column-group-last">
                                                <div class="input-block mb-0">
                                                    <div class="search-btn">
                                                        @if ($car->disponible)
                                                            <button type="button"
                                                                class="btn btn-primary check-available w-100 rent-now-btn"
                                                                data-car-id="{{ $car->id }}">Réserver
                                                                maintenant</button>
                                                        @else
                                                            <button type="button" class="btn btn-secondary w-100"
                                                                disabled>Non disponible</button>
                                                        @endif
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#enquiry" class="btn btn-theme">Nous
                                                            contacter</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Owner Details -->
                    <div class="review-sec extra-service mt-0">
                        <div class="review-header">
                            <h4>Détails du propriétaire</h4>
                        </div>
                        <div class="owner-detail">
                            <div class="owner-img">
                                <a href="#"><img src="assets/img/profiles/avatar-07.jpg" alt="Propriétaire"></a>
                                <span class="badge-check"><img src="assets/img/icons/badge-check.svg"
                                        alt="Vérifié"></span>
                            </div>
                            <div class="reviewbox-list-rating">
                                <h5><a>Dreams Cars</a></h5>
                                <p>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star filled"></i>
                                    @endfor
                                    <span>(5.0)</span>
                                </p>
                            </div>
                        </div>
                        <ul class="booking-list">
                            <li>Email <span><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="036a6d656c43667b626e736f662d606c6e">contact@dreamsrent.com</a></span>
                            </li>
                            <li>Téléphone <span>+221 77 XXX XX XX</span></li>
                            <li>Localisation <span>{{ $car->localisation ?: 'Dakar, Sénégal' }}</span></li>
                        </ul>
                        <div class="message-btn">
                            <a href="#" class="btn btn-order">Message au propriétaire</a>
                            <a href="#" class="chat-link"><i class="fa-brands fa-whatsapp"></i>Chat via
                                WhatsApp</a>
                        </div>
                    </div>

                    <!-- Car Location -->
                    <div class="review-sec share-car mt-0">
                        <div class="review-header">
                            <h4>Localisation du véhicule</h4>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.5189!2d-17.4441!3d14.7167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0!2sDakar%2C%20Senegal!5e0!3m2!1sen!2ssn!4v1647875776543!5m2!1sen!2ssn"
                            class="iframe-video"></iframe>
                    </div>

                    <!-- Share Section -->
                    <div class="review-sec share-car mt-0 mb-0">
                        <div class="review-header">
                            <h4>Partager</h4>
                        </div>
                        <ul class="nav-social">
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a></li>
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fab fa-instagram fi-icon"></i></a></li>
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fab fa-behance fi-icon"></i></a></li>
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fa-brands fa-pinterest-p fi-icon"></i></a></li>
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fab fa-twitter fi-icon"></i></a></li>
                            <li><a href="javascript:void(0)" onclick="shareVehicle()"><i
                                        class="fab fa-linkedin fi-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Véhicules similaires / You May be Interested in -->
            @if ($similarCars && $similarCars->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="details-car-grid">
                            <div class="details-slider-heading">
                                <h3>Vous pourriez être intéressé par</h3>
                            </div>
                            <div class="owl-carousel rental-deal-slider details-car owl-theme">
                                @foreach ($similarCars as $similarCar)
                                    <!-- owl carousel item -->
                                    <div class="rental-car-item">
                                        <div class="listing-item pb-0">
                                            <div class="listing-img">
                                                <a href="{{ route('vitrine.vehicule.details', $similarCar->id) }}">
                                                    <img src="{{ asset('storage/' . $similarCar->image_principale) }}"
                                                        class="img-fluid" alt="{{ $similarCar->titre }}">
                                                </a>
                                                <div class="fav-item justify-content-end">
                                                    <a href="javascript:void(0)" class="fav-icon"
                                                        data-car-id="{{ $similarCar->id }}">
                                                        @auth
                                                            @if (auth()->user()->hasFavorite($similarCar->id))
                                                                <i class="fas fa-heart text-danger"></i>
                                                            @else
                                                                <i class="feather-heart"></i>
                                                            @endif
                                                        @else
                                                            <i class="feather-heart"></i>
                                                        @endauth
                                                    </a>
                                                </div>
                                                <span class="featured-text">{{ $similarCar->marque }}</span>
                                            </div>
                                            <div class="listing-content">
                                                <div
                                                    class="listing-features d-flex align-items-end justify-content-between">
                                                    <div class="list-rating">
                                                        <a href="javascript:void(0)" class="author-img">
                                                            <img src="assets/img/profiles/avatar-03.jpg" alt="author">
                                                        </a>
                                                        <h3 class="listing-title">
                                                            <a
                                                                href="{{ route('vitrine.vehicule.details', $similarCar->id) }}">{{ $similarCar->titre }}</a>
                                                        </h3>
                                                        <div class="list-rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <i class="fas fa-star filled"></i>
                                                            @endfor
                                                            <span>(5.0) 150 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-km">
                                                        <span class="km-count"><img src="assets/img/icons/map-pin.svg"
                                                                alt="distance">3.5m</span>
                                                    </div>
                                                </div>
                                                <div class="listing-details-group">
                                                    <ul>
                                                        <li>
                                                            <span><img src="assets/img/icons/car-parts-01.svg"
                                                                    alt="Transmission"></span>
                                                            <p>{{ $similarCar->boite_vitesse }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/img/icons/car-parts-02.svg"
                                                                    alt="Kilométrage"></span>
                                                            <p>{{ number_format($similarCar->kilometrage) }} KM</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/img/icons/car-parts-03.svg"
                                                                    alt="Carburant"></span>
                                                            <p>{{ $similarCar->carburant }}</p>
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
                                                                    alt="Année"></span>
                                                            <p>{{ $similarCar->annee }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/img/icons/car-parts-06.svg"
                                                                    alt="Personnes"></span>
                                                            <p>{{ $similarCar->places }} Personnes</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="listing-location-details">
                                                    <div class="listing-price">
                                                        <span><i
                                                                class="feather-map-pin"></i></span>{{ $similarCar->localisation ?: 'Dakar, Sénégal' }}
                                                    </div>
                                                    <div class="listing-price">
                                                        <h6>${{ number_format($similarCar->prix) }} <span>/ Jour</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="listing-button">
                                                    <a href="{{ route('vitrine.vehicule.details', $similarCar->id) }}"
                                                        class="btn btn-order">
                                                        <span><i class="feather-calendar me-2"></i></span>Louer maintenant
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /owl carousel item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Modal de réservation -->
    <div class="modal fade" id="rentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="rentForm">
                    <input type="hidden" id="car_id" name="car_id">
                    <div class="modal-header">
                        <h5 class="modal-title">Réserver ce véhicule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="car-details" class="mb-4"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Téléphone *</label>
                                    <input type="tel" name="telephone" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pays *</label>
                                    <input type="text" name="pays" class="form-control" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Ville *</label>
                                    <input type="text" name="ville" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Adresse *</label>
                                    <textarea name="adresse" class="form-control" rows="2" required></textarea>
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label">Code postal</label>
                                    <input type="text" name="code_postal" class="form-control">
                                </div> --}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type de paiement *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type_paiement"
                                            id="financement" value="financement" checked>
                                        <label class="form-check-label" for="financement">Financement</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type_paiement"
                                            id="apport_direct" value="apport_direct">
                                        <label class="form-check-label" for="apport_direct">Apport direct</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3" id="montant-field" style="display: none;">
                            <label class="form-label">Montant à verser (FCFA) *</label>
                            <input type="number" name="montant" class="form-control" min="0" step="0.01">
                        </div>

                        <div class="alert alert-info">
                            <strong>Note:</strong> Après validation de votre commande, vous recevrez un email de
                            confirmation avec votre code de suivi.
                        </div>
                    </div>

                    <div class="modal-footer mb-4 p-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Confirmer la réservation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal d'enquête -->
    <div class="modal new-modal fade enquire-mdl" id="enquiry" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Demande d'information</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="enquire-modal">
                        <div class="booking-header">
                            <div class="booking-img-wrap">
                                <div class="book-img">
                                    <img src="{{ asset('storage/' . $car->image_principale) }}"
                                        alt="{{ $car->titre }}">
                                </div>
                                <div class="book-info">
                                    <h6>{{ $car->titre }}</h6>
                                    <p><i class="feather-map-pin"></i> Localisation :
                                        {{ $car->localisation ?: 'Dakar, Sénégal' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-form-group">
                            <label>Nom complet</label>
                            <input type="text" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="modal-form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Votre adresse email" required>
                        </div>
                        <div class="modal-form-group">
                            <label>Numéro de téléphone</label>
                            <input type="tel" class="form-control" placeholder="Votre numéro de téléphone" required>
                        </div>
                        <div class="modal-form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" placeholder="Votre message..."></textarea>
                        </div>
                        <label class="custom_check w-100">
                            <input type="checkbox" name="terms" required>
                            <span class="checkmark"></span> J'accepte les <a href="javascript:void(0);">Conditions
                                d'utilisation</a> & <a href="javascript:void(0);">Politique de confidentialité</a>
                        </label>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

                // ===== GESTION DES FAVORIS =====
                document.querySelectorAll('.fav-icon').forEach(favIcon => {
                        favIcon.addEventListener('click', function(e) {
                                e.preventDefault();
                                e.stopPropagation();

                                @guest
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Connexion requise',
                                    text: 'Vous devez être connecté pour ajouter des favoris.',
                                    showCancelButton: true,
                                    confirmButtonText: 'Se connecter',
                                    cancelButtonText: 'Annuler',
                                    confirmButtonColor: '#007bff',
                                    cancelButtonColor: '#6c757d'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = '{{ route('login') }}';
                                    }
                                });
                                return;
                            @endguest

                            const carId = this.getAttribute('data-car-id');
                            const heartIcon = this.querySelector('i');

                            if (!carId) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Erreur',
                                    text: 'ID de la voiture manquant'
                                });
                                return;
                            }

                            this.style.pointerEvents = 'none';
                            const isCurrentlyFavorite = heartIcon.classList.contains('text-danger') ||
                                heartIcon.classList.contains('fa-heart');

                            const originalContent = heartIcon.className; heartIcon.className =
                            'fas fa-spinner fa-spin';

                            const action = isCurrentlyFavorite ? 'remove' : 'add';
                            const url = isCurrentlyFavorite ? '{{ route('favorites.remove') }}' :
                                '{{ route('favorites.add') }}';

                            fetch(url, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content'),
                                    'Accept': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                },
                                body: JSON.stringify({
                                    car_id: carId
                                })
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(`HTTP error! status: ${response.status}`);
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    heartIcon.className = 'fa-regular fa-heart';

                                    if (data.is_favorite) {
                                        heartIcon.classList.remove('fa-regular', 'fa-heart',
                                            'feather-heart');
                                        heartIcon.classList.add('fas', 'fa-heart', 'text-danger');
                                        heartIcon.style.animation = 'heartbeat 0.6s ease-in-out';
                                        this.style.transform = 'scale(1.2)';
                                        setTimeout(() => {
                                            this.style.transform = 'scale(1)';
                                        }, 300);
                                    } else {
                                        heartIcon.classList.remove('fas', 'fa-heart', 'text-danger');
                                        heartIcon.classList.add('feather-heart');
                                        this.style.transform = 'scale(0.8)';
                                        setTimeout(() => {
                                            this.style.transform = 'scale(1)';
                                        }, 200);
                                    }

                                    const toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 2500,
                                        timerProgressBar: true
                                    });

                                    toast.fire({
                                        icon: data.is_favorite ? 'success' : 'info',
                                        title: data.message
                                    });

                                    setTimeout(() => {
                                        heartIcon.style.animation = '';
                                    }, 600);
                                } else {
                                    heartIcon.className = originalContent;
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Erreur',
                                        text: data.message ||
                                            'Erreur lors de la mise à jour des favoris'
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Erreur favoris:', error);
                                heartIcon.className = originalContent;
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Erreur de connexion',
                                    text: 'Une erreur est survenue. Veuillez réessayer.'
                                });
                            })
                            .finally(() => {
                                setTimeout(() => {
                                    this.style.pointerEvents = 'auto';
                                }, 400);
                            });
                        });
                });

            // ===== FONCTION DE PARTAGE =====
            window.shareVehicle = function() {
                if (navigator.share) {
                    navigator.share({
                        title: '{{ $car->titre }}',
                        text: 'Découvrez ce véhicule incroyable sur Dreams Rent',
                        url: window.location.href
                    });
                } else {
                    const url = window.location.href;
                    navigator.clipboard.writeText(url).then(function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Lien copié!',
                            text: 'Le lien a été copié dans votre presse-papiers',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    });
                }
            };

            // ===== FONCTION MODAL DE RÉSERVATION =====
            function openRentModal(carId) {
                const carTitle = '{{ $car->titre }}';
                const carPrice = '${{ number_format($car->prix) }}';
                const carImage = '{{ asset('storage/' . $car->image_principale) }}';

                document.getElementById('car_id').value = carId;
                document.getElementById('car-details').innerHTML = `
                    <div class="d-flex align-items-center">
                        <img src="${carImage}" alt="Car" style="width: 80px; height: 60px; object-fit: cover;" class="me-3">
                        <div>
                            <h6 class="mb-1">${carTitle}</h6>
                            <p class="mb-0 text-muted">${carPrice} / jour</p>
                        </div>
                    </div>
                `;

                const modal = new bootstrap.Modal(document.getElementById('rentModal'));
                modal.show();
            }

            // ===== GESTION DU TYPE DE PAIEMENT =====
            document.querySelectorAll('input[name="type_paiement"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const montantField = document.getElementById('montant-field');
                    const montantInput = montantField.querySelector('input[name="montant"]');

                    if (this.value === 'apport_direct') {
                        montantField.style.display = 'block';
                        if (montantInput) montantInput.required = true;
                    } else {
                        montantField.style.display = 'none';
                        if (montantInput) montantInput.required = false;
                    }
                });
            });

            // ===== SOUMISSION DU FORMULAIRE DE RÉSERVATION =====
            document.getElementById('rentForm')?.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitBtn = document.getElementById('submitBtn');
                if (submitBtn.disabled || this.dataset.submitting === 'true') return;

                submitBtn.disabled = true;
                this.dataset.submitting = 'true';

                Swal.fire({
                    title: 'Traitement...',
                    text: 'Création de votre commande en cours',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                const formData = new FormData(this);
                const csrfToken = document.querySelector('meta[name="csrf-token"]');
                if (csrfToken) {
                    formData.append('_token', csrfToken.getAttribute('content'));
                }

                fetch('{{ route('orders.store') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            const rentModal = document.getElementById('rentModal');
                            const modal = bootstrap.Modal.getInstance(rentModal);
                            if (modal) modal.hide();

                            Swal.fire({
                                icon: 'success',
                                title: 'Commande créée!',
                                html: `
                                <p>Votre réservation a été confirmée.</p>
                                <p><strong>Code de suivi:</strong> <code>${data.tracking_code}</code></p>
                                <p>Un email de confirmation vous a été envoyé.</p>
                            `,
                                confirmButtonText: 'OK'
                            });

                            this.reset();
                            document.getElementById('montant-field').style.display = 'none';
                            document.getElementById('financement').checked = true;
                        } else {
                            let errorMessage = data.message || 'Erreur lors de la création de la commande';
                            if (data.errors) {
                                errorMessage += '<br><br>';
                                Object.keys(data.errors).forEach(field => {
                                    errorMessage +=
                                        `<strong>${field}:</strong> ${data.errors[field].join(', ')}<br>`;
                                });
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur',
                                html: errorMessage
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur réseau',
                            text: 'Une erreur de connexion est survenue.'
                        });
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        this.dataset.submitting = 'false';
                    });
            });

            // ===== FONCTION POUR CHANGER L'IMAGE PRINCIPALE =====
            window.changeMainImage = function(src, thumbnail) {
                const mainImage = document.getElementById('mainCarImage');
                const thumbnails = document.querySelectorAll('.thumbnail');

                mainImage.src = src;

                thumbnails.forEach(thumb => thumb.classList.remove('active'));
                thumbnail.classList.add('active');

                mainImage.style.opacity = '0.5';
                setTimeout(() => {
                    mainImage.style.opacity = '1';
                }, 200);
            };

            // ===== GESTION DU BOUTON PRINCIPAL DE RÉSERVATION =====
            document.querySelector('.rent-now-main-btn')?.addEventListener('click', function() {
                    const carId = this.getAttribute('data-car-id');

                    @guest
                    Swal.fire({
                        icon: 'warning',
                        title: 'Connexion requise',
                        text: 'Vous devez être connecté pour réserver un véhicule.',
                        showCancelButton: true,
                        confirmButtonText: 'Se connecter',
                        cancelButtonText: 'Annuler'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{ route('login') }}';
                        }
                    });
                @else
                    openRentModal(carId);
                @endguest
            });

        // ===== GESTION DU BOUTON DE RÉSERVATION SIDEBAR =====
        document.querySelector('.rent-now-btn')?.addEventListener('click', function() {
            const carId = this.getAttribute('data-car-id');

            @guest
            Swal.fire({
                icon: 'warning',
                title: 'Connexion requise',
                text: 'Vous devez être connecté pour réserver un véhicule.',
                showCancelButton: true,
                confirmButtonText: 'Se connecter',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route('login') }}';
                }
            });
        @else
            openRentModal(carId);
        @endguest
        });

        // ===== GESTION DU CHECKBOX "MÊME LIEU" =====
        document.querySelector('input[name="same_location"]')?.addEventListener('change', function() {
            const deliveryField = document.querySelector('input[placeholder*="Avenue"]');
            const returnField = document.querySelector('input[placeholder*="street"]');

            if (this.checked && deliveryField && returnField) {
                returnField.value = deliveryField.value;
                returnField.disabled = true;
            } else if (returnField) {
                returnField.disabled = false;
                returnField.value = '';
            }
        });

        // ===== SYNCHRONISATION DES LIEUX =====
        document.querySelector('input[placeholder*="Avenue"]')?.addEventListener('input', function() {
            const sameLocationCheckbox = document.querySelector('input[name="same_location"]');
            const returnField = document.querySelector('input[placeholder*="street"]');

            if (sameLocationCheckbox && sameLocationCheckbox.checked && returnField) {
                returnField.value = this.value;
            }
        });

        // ===== VALIDATION DES DATES =====
        document.querySelectorAll('.datetimepicker').forEach(field => {
            field.addEventListener('change', function() {
                const startDateField = document.querySelector('.datetimepicker');
                const endDateField = document.querySelectorAll('.datetimepicker')[1];

                if (startDateField && endDateField && startDateField.value && endDateField.value) {
                    const startDate = new Date(startDateField.value);
                    const endDate = new Date(endDateField.value);

                    if (endDate <= startDate) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Dates invalides',
                            text: 'La date de retour doit être postérieure à la date de début.'
                        });
                        endDateField.value = '';
                    }
                }
            });
        });

        // ===== GESTION DES TARIFS =====
        document.querySelectorAll('input[name="price_rate"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const selectedLabel = this.closest('.booking_custom_check').querySelector('.checked-title');
                console.log(`Tarif sélectionné: ${selectedLabel.textContent}`);
            });
        });

        // ===== GESTION DE LA FERMETURE DES MODALS =====
        document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                if (modal) {
                    const form = modal.querySelector('form');
                    if (form) {
                        form.reset();
                        form.dataset.submitting = 'false';
                    }

                    const submitBtn = modal.querySelector('#submitBtn');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                    }

                    const montantField = document.getElementById('montant-field');
                    if (montantField) {
                        montantField.style.display = 'none';
                    }

                    setTimeout(() => {
                        document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                            backdrop.remove();
                        });
                        document.body.classList.remove('modal-open');
                        document.body.style.removeProperty('overflow');
                        document.body.style.removeProperty('padding-right');
                    }, 200);
                }
            });
        });

        console.log('Page de détails véhicule initialisée avec succès');
        });

        // ===== CSS ET STYLES =====
        const style = document.createElement('style');
        style.textContent = `
            .main-image-container {
                position: relative;
                margin-bottom: 20px;
            }

            .main-car-image {
                width: 100%;
                height: 400px;
                object-fit: cover;
                border-radius: 15px;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
                transition: opacity 0.3s ease;
            }

            .thumbnail-gallery .thumbnail {
                width: 100%;
                height: 80px;
                object-fit: cover;
                border-radius: 8px;
                cursor: pointer;
                border: 3px solid transparent;
                transition: all 0.3s ease;
                margin-bottom: 10px;
            }

            .thumbnail-gallery .thumbnail:hover,
            .thumbnail-gallery .thumbnail.active {
                border-color: #007bff;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
            }

            .service-img, .feature-img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                color: white;
                font-size: 20px;
            }

            .service-img {
                background: linear-gradient(135deg, #007bff, #0056b3);
            }

            .feature-img {
                background: linear-gradient(135deg, #28a745, #20c997);
                font-size: 18px;
            }

            .servicelist, .featureslist {
                background: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 15px;
                transition: all 0.3s ease;
                border: 1px solid #e9ecef;
            }

            .servicelist:hover, .featureslist:hover {
                background: white;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .status-badge {
                display: inline-flex;
                align-items: center;
                padding: 8px 15px;
                border-radius: 25px;
                font-weight: 600;
                font-size: 14px;
            }

            .status-badge.available {
                background: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
            }

            .status-badge.unavailable {
                background: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
            }

            .car-pricing-section {
                background: white;
                padding: 25px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
                margin: 20px 0;
            }

            .price-main {
                font-size: 32px;
                font-weight: 700;
                color: #28a745;
                margin: 0;
                display: flex;
                align-items: baseline;
                gap: 10px;
            }

            .price-period {
                font-size: 16px;
                color: #666;
                font-weight: normal;
            }

            .rent-now-main-btn {
                background: linear-gradient(135deg, #28a745, #20c997);
                border: none;
                padding: 15px 30px;
                font-size: 16px;
                font-weight: 600;
                border-radius: 10px;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            }

            .rent-now-main-btn:hover {
                background: linear-gradient(135deg, #218838, #1e7e34);
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
            }

            @keyframes heartbeat {
                0% { transform: scale(1); }
                25% { transform: scale(1.2); }
                50% { transform: scale(1.1); }
                75% { transform: scale(1.25); }
                100% { transform: scale(1); }
            }

            .fav-icon {
                transition: all 0.3s ease;
            }

            .fav-icon:hover {
                transform: scale(1.1);
            }

            .text-danger {
                color: #dc3545 !important;
            }

            @media (max-width: 768px) {
                .main-car-image {
                    height: 250px;
                }
                .thumbnail-gallery .thumbnail {
                    height: 60px;
                }
                .car-pricing-section {
                    text-align: center;
                }
                .rent-now-main-btn {
                    width: 100%;
                }
            }
        `;
        document.head.appendChild(style);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ===== FONCTION POUR CHANGER L'IMAGE PRINCIPALE =====
            window.changeMainImage = function(src, thumbnail) {
                const mainImage = document.getElementById('mainCarImage');
                const thumbnails = document.querySelectorAll('.thumbnail');

                // Animation de fondu
                mainImage.style.opacity = '0.3';

                setTimeout(() => {
                    mainImage.src = src;
                    mainImage.style.opacity = '1';
                }, 150);

                // Gérer les classes active des thumbnails
                thumbnails.forEach(thumb => thumb.classList.remove('active'));
                thumbnail.classList.add('active');
            };

            // [Reste du code JavaScript inchangé...]

            console.log('Page de détails véhicule initialisée avec succès');
        });

        // ===== CSS CORRIGÉ POUR LES IMAGES =====
        const style = document.createElement('style');
        style.textContent = `
            /* ===== CONTAINER PRINCIPAL DES IMAGES ===== */
            .detail-product {
                position: relative;
                margin-bottom: 40px;
            }

            .pro-info {
                position: absolute;
                top: 15px;
                left: 0;
                right: 0;
                z-index: 10;
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                padding: 0 15px;
            }

            /* ===== IMAGE PRINCIPALE ===== */
            .main-image-container {
                position: relative;
                margin-bottom: 20px;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }

            .main-car-image {
                width: 100%;
                height: 450px;
                object-fit: cover;
                transition: opacity 0.3s ease;
                display: block;
            }

            /* ===== GALERIE DE THUMBNAILS ===== */
            .thumbnail-gallery {
                margin-top: 20px;
            }

            .thumbnail-gallery .row {
                margin: 0;
            }

            .thumbnail-gallery .col-2 {
                padding: 0 5px;
                margin-bottom: 10px;
            }

            .thumbnail {
                width: 100%;
                height: 80px;
                object-fit: cover;
                border-radius: 8px;
                cursor: pointer;
                border: 3px solid transparent;
                transition: all 0.3s ease;
                display: block;
            }

            .thumbnail:hover {
                border-color: #007bff;
                transform: translateY(-3px);
                box-shadow: 0 6px 15px rgba(0, 123, 255, 0.3);
            }

            .thumbnail.active {
                border-color: #28a745;
                box-shadow: 0 4px 12px rgba(40, 167, 69, 0.4);
            }

            /* ===== BADGES ET OVERLAY ===== */
            .pro-badge {
                display: flex;
                gap: 10px;
                align-items: center;
            }

            .badge-km {
                background: rgba(255, 255, 255, 0.95);
                padding: 8px 12px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: 600;
                color: #333;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            .fav-icon {
                background: rgba(255, 255, 255, 0.95);
                width: 45px;
                height: 45px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.3s ease;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            .fav-icon:hover {
                background: white;
                transform: scale(1.1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            }

            .fav-icon i {
                font-size: 20px;
                transition: all 0.3s ease;
            }

            .pro-info ul {
                position: absolute;
                bottom: 20px;
                left: 15px;
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .pro-info ul li {
                background: rgba(40, 167, 69, 0.95);
                color: white;
                padding: 6px 12px;
                border-radius: 15px;
                font-size: 12px;
                margin: 5px 0;
                font-weight: 600;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            /* ===== RESPONSIVE ===== */
            @media (max-width: 768px) {
                .main-car-image {
                    height: 280px;
                }

                .thumbnail {
                    height: 60px;
                }

                .thumbnail-gallery .col-2 {
                    flex: 0 0 33.333333%;
                    max-width: 33.333333%;
                }

                .pro-info {
                    position: static;
                    background: rgba(255, 255, 255, 0.95);
                    padding: 15px;
                    margin: -10px 0 15px 0;
                    border-radius: 0 0 15px 15px;
                }

                .pro-info ul {
                    position: static;
                    display: flex;
                    gap: 10px;
                    margin-top: 10px;
                }
            }

            @media (max-width: 576px) {
                .thumbnail-gallery .col-2 {
                    flex: 0 0 50%;
                    max-width: 50%;
                }

                .main-car-image {
                    height: 220px;
                }
            }

            /* ===== AUTRES STYLES ===== */
            .service-img, .feature-img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                color: white;
                font-size: 20px;
            }

            .service-img {
                background: linear-gradient(135deg, #007bff, #0056b3);
            }

            .feature-img {
                background: linear-gradient(135deg, #28a745, #20c997);
                font-size: 18px;
            }

            .servicelist, .featureslist {
                background: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                margin-bottom: 15px;
                transition: all 0.3s ease;
                border: 1px solid #e9ecef;
            }

            .servicelist:hover, .featureslist:hover {
                background: white;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            @keyframes heartbeat {
                0% { transform: scale(1); }
                25% { transform: scale(1.2); }
                50% { transform: scale(1.1); }
                75% { transform: scale(1.25); }
                100% { transform: scale(1); }
            }

            .text-danger {
                color: #dc3545 !important;
            }
        `;
        document.head.appendChild(style);
    </script>
@endpush
