@extends('layouts.master')
@section('content-client')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Chevrolet Camaro</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Listings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chevrolet Camaro</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <!-- Car Details Section -->
    <section class="section car-details">
        <div class="container">
            <div class="row">
                <!-- Images Gallery -->
                <div class="col-lg-8">
                    <div class="car-gallery">
                        <div class="main-image-container">
                            <img id="mainImage" src="{{ asset('storage/' . $car->image_principale) }}"
                                class="img-fluid main-car-image" alt="{{ $car->titre }}">
                            <div class="image-overlay">
                                <button class="btn btn-light zoom-btn" onclick="openImageModal()">
                                    <i class="fas fa-search-plus"></i> Agrandir
                                </button>
                            </div>
                        </div>

                        <div class="thumbnail-gallery mt-3">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('storage/' . $car->image_principale) }}"
                                        class="img-fluid thumbnail active" onclick="changeMainImage(this.src)">
                                </div>
                                @foreach ($car->images as $image)
                                    <div class="col-2">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid thumbnail"
                                            onclick="changeMainImage(this.src)">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car Info -->
                <div class="col-lg-4">
                    <div class="car-info-card">
                        <div class="car-header">
                            <h1 class="car-title">{{ $car->titre }}</h1>
                            <div class="car-rating">
                                <div class="stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= 4 ? 'filled' : '' }}"></i>
                                    @endfor
                                    <span class="rating-text">(4.0) 138 Reviews</span>
                                </div>
                            </div>
                        </div>

                        <div class="car-price">
                            <div class="price-main">
                                <h2>${{ number_format($car->prix, 0, ',', ' ') }}</h2>
                                <span class="price-period">/ Jour</span>
                            </div>
                            @if ($car->prix_mois)
                                <div class="price-monthly">
                                    <span>ou ${{ number_format($car->prix_mois, 0, ',', ' ') }} / Mois</span>
                                </div>
                            @endif
                        </div>

                        <!-- Quick Info -->
                        <div class="quick-info">
                            <div class="row">
                                <div class="col-6">
                                    <div class="info-item">
                                        <i class="fas fa-car"></i>
                                        <div>
                                            <span class="label">Transmission</span>
                                            <span class="value">{{ $car->boite_vitesse }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <i class="fas fa-users"></i>
                                        <div>
                                            <span class="label">Places</span>
                                            <span class="value">{{ $car->places }} personnes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <i class="fas fa-gas-pump"></i>
                                        <div>
                                            <span class="label">Carburant</span>
                                            <span class="value">{{ $car->carburant }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <i class="fas fa-calendar"></i>
                                        <div>
                                            <span class="label">Année</span>
                                            <span class="value">{{ $car->annee }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Availability Status -->
                        <div class="availability-status">
                            @if ($car->disponible)
                                <div class="status available">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Disponible maintenant</span>
                                </div>
                            @else
                                <div class="status unavailable">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Non disponible</span>
                                </div>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <button class="btn btn-primary btn-lg w-100 mb-3 rent-now-btn"
                                data-car-id="{{ $car->id }}">
                                <i class="fas fa-calendar me-2"></i>Réserver Maintenant
                            </button>

                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100">
                                        <i class="fas fa-heart me-2"></i>Favoris
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-secondary w-100" onclick="shareVehicle()">
                                        <i class="fas fa-share-alt me-2"></i>Partager
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Information Tabs -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="car-details-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#overview">Aperçu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#specifications">Spécifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#features">Équipements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#reviews">Avis (138)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- Overview Tab -->
                            <div id="overview" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4>Description</h4>
                                        <p>{{ $car->description ?: 'Ce véhicule offre une expérience de conduite exceptionnelle avec un design moderne et des performances remarquables. Parfait pour vos déplacements en ville ou vos escapades.' }}
                                        </p>

                                        <h5>Caractéristiques principales</h5>
                                        <div class="row features-grid">
                                            <div class="col-md-6">
                                                <ul class="feature-list">
                                                    <li><i class="fas fa-check text-success"></i> Climatisation</li>
                                                    <li><i class="fas fa-check text-success"></i> Bluetooth</li>
                                                    <li><i class="fas fa-check text-success"></i> GPS intégré</li>
                                                    <li><i class="fas fa-check text-success"></i> Sièges en cuir</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="feature-list">
                                                    <li><i class="fas fa-check text-success"></i> Caméra de recul</li>
                                                    <li><i class="fas fa-check text-success"></i> Jantes alliage</li>
                                                    <li><i class="fas fa-check text-success"></i> Vitres électriques</li>
                                                    <li><i class="fas fa-check text-success"></i> ABS + ESP</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="location-map">
                                            <h5>Localisation</h5>
                                            <p><i class="fas fa-map-marker-alt text-primary"></i>
                                                {{ $car->localisation ?: 'Dakar, Sénégal' }}</p>
                                            <div class="map-placeholder">
                                                <img src="https://via.placeholder.com/300x200?text=Carte"
                                                    class="img-fluid" alt="Carte">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Specifications Tab -->
                            <div id="specifications" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>Spécifications Générales</h5>
                                        <table class="table table-striped">
                                            <tr>
                                                <td><strong>Marque</strong></td>
                                                <td>{{ $car->marque }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Modèle</strong></td>
                                                <td>{{ $car->modele }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Année</strong></td>
                                                <td>{{ $car->annee }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Kilométrage</strong></td>
                                                <td>{{ number_format($car->kilometrage, 0, ',', ' ') }} km</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Couleur</strong></td>
                                                <td>{{ $car->couleur ?: 'Non spécifiée' }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Spécifications Techniques</h5>
                                        <table class="table table-striped">
                                            <tr>
                                                <td><strong>Carburant</strong></td>
                                                <td>{{ $car->carburant }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Transmission</strong></td>
                                                <td>{{ $car->boite_vitesse }}</td>
                                            </tr>
                                            @if ($car->puissance_moteur_ch)
                                                <tr>
                                                    <td><strong>Puissance</strong></td>
                                                    <td>{{ $car->puissance_moteur_ch }} CV</td>
                                                </tr>
                                            @endif
                                            @if ($car->emission_co2)
                                                <tr>
                                                    <td><strong>Émissions CO2</strong></td>
                                                    <td>{{ $car->emission_co2 }} g/km</td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td><strong>Nombre de portes</strong></td>
                                                <td>{{ $car->portes }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Features Tab -->
                            <div id="features" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5>Équipements de série</h5>
                                        @if ($car->equipements_de_serie)
                                            <p>{{ $car->equipements_de_serie }}</p>
                                        @else
                                            <div class="equipment-grid">
                                                <div class="equipment-item">
                                                    <i class="fas fa-snowflake"></i>
                                                    <span>Climatisation</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-bluetooth"></i>
                                                    <span>Bluetooth</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-map-marked-alt"></i>
                                                    <span>GPS</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-video"></i>
                                                    <span>Caméra de recul</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Options supplémentaires</h5>
                                        @if ($car->options_supplementaires)
                                            <p>{{ $car->options_supplementaires }}</p>
                                        @else
                                            <div class="equipment-grid">
                                                <div class="equipment-item">
                                                    <i class="fas fa-wifi"></i>
                                                    <span>WiFi à bord</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-charging-station"></i>
                                                    <span>Chargeur USB</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-shield-alt"></i>
                                                    <span>Assurance incluse</span>
                                                </div>
                                                <div class="equipment-item">
                                                    <i class="fas fa-tools"></i>
                                                    <span>Kit de dépannage</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Tab -->
                            <div id="reviews" class="tab-pane fade">
                                <div class="reviews-section">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="rating-summary">
                                                <div class="overall-rating">
                                                    <h2>4.0</h2>
                                                    <div class="stars">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <i class="fas fa-star {{ $i <= 4 ? 'filled' : '' }}"></i>
                                                        @endfor
                                                    </div>
                                                    <p>Basé sur 138 avis</p>
                                                </div>

                                                <div class="rating-breakdown">
                                                    @for ($i = 5; $i >= 1; $i--)
                                                        <div class="rating-row">
                                                            <span>{{ $i }} étoiles</span>
                                                            <div class="progress">
                                                                <div class="progress-bar"
                                                                    style="width: {{ $i * 15 }}%"></div>
                                                            </div>
                                                            <span>{{ $i * 15 }}%</span>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="reviews-list">
                                                <!-- Sample reviews -->
                                                <div class="review-item">
                                                    <div class="reviewer-info">
                                                        <img src="https://via.placeholder.com/50" class="reviewer-avatar"
                                                            alt="Avatar">
                                                        <div class="reviewer-details">
                                                            <h6>Amadou Diallo</h6>
                                                            <div class="review-rating">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <i class="fas fa-star filled"></i>
                                                                @endfor
                                                            </div>
                                                            <span class="review-date">Il y a 2 jours</span>
                                                        </div>
                                                    </div>
                                                    <p class="review-text">Excellent véhicule, très confortable et
                                                        économique. Le service client était parfait. Je recommande vivement!
                                                    </p>
                                                </div>

                                                <div class="review-item">
                                                    <div class="reviewer-info">
                                                        <img src="https://via.placeholder.com/50" class="reviewer-avatar"
                                                            alt="Avatar">
                                                        <div class="reviewer-details">
                                                            <h6>Fatou Sall</h6>
                                                            <div class="review-rating">
                                                                @for ($i = 1; $i <= 4; $i++)
                                                                    <i class="fas fa-star filled"></i>
                                                                @endfor
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="review-date">Il y a 1 semaine</span>
                                                        </div>
                                                    </div>
                                                    <p class="review-text">Voiture propre et bien entretenue. Quelques
                                                        petits détails à améliorer mais dans l'ensemble très satisfaite de
                                                        ma location.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Similar Cars -->
            @if ($similarCars->count() > 0)
                <div class="row mt-5">
                    <div class="col-12">
                        <h3>Véhicules similaires</h3>
                        <div class="row">
                            @foreach ($similarCars as $similarCar)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="similar-car-card">
                                        <img src="{{ asset('storage/' . $similarCar->image_principale) }}"
                                            class="img-fluid" alt="{{ $similarCar->titre }}">
                                        <div class="card-content">
                                            <h6>{{ $similarCar->titre }}</h6>
                                            <p class="price">${{ number_format($similarCar->prix, 0, ',', ' ') }}/jour
                                            </p>
                                            <a href="{{ route('vitrine.vehicule.details', $similarCar->id) }}"
                                                class="btn btn-sm btn-primary">Voir détails</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>


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
                        <div id="car-details" class="mb-4">
                            <!-- Les détails de la voiture seront affichés ici -->
                        </div>

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

                                <div class="mb-3">
                                    <label class="form-label">Adresse *</label>
                                    <textarea name="adresse" class="form-control" rows="2" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Ville *</label>
                                    <input type="text" name="ville" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Code postal</label>
                                    <input type="text" name="code_postal" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type de paiement *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type_paiement"
                                            id="financement" value="financement" checked>
                                        <label class="form-check-label" for="financement">
                                            Financement
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type_paiement"
                                            id="apport_direct" value="apport_direct">
                                        <label class="form-check-label" for="apport_direct">
                                            Apport direct
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Champ montant (masqué par défaut) -->
                        <div class="mb-3" id="montant-field" style="display: none;">
                            <label class="form-label">Montant à verser (FCFA) *</label>
                            <input type="number" name="montant" class="form-control" min="0" step="0.01">
                        </div>

                        <div class="alert alert-info">
                            <strong>Note:</strong> Après validation de votre commande, vous recevrez un email
                            de confirmation avec votre code de suivi.
                        </div>
                    </div>

                    <div class="modal-footer mb-4 p-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            Confirmer la réservation
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .car-details {
            padding: 60px 0;
        }

        .main-car-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .main-image-container {
            position: relative;
        }

        .image-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .thumbnail {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: #007bff;
        }

        .car-info-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .car-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .car-rating .stars {
            margin-bottom: 15px;
        }

        .stars i {
            color: #ddd;
            margin-right: 3px;
        }

        .stars i.filled {
            color: #ffc107;
        }

        .rating-text {
            margin-left: 10px;
            color: #666;
        }

        .price-main {
            display: flex;
            align-items: baseline;
            margin-bottom: 10px;
        }

        .price-main h2 {
            font-size: 32px;
            font-weight: 700;
            color: #28a745;
            margin: 0;
            margin-right: 10px;
        }

        .price-period {
            color: #666;
            font-size: 16px;
        }

        .price-monthly {
            color: #888;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .quick-info {
            margin: 30px 0;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .info-item i {
            width: 20px;
            color: #007bff;
            margin-right: 10px;
        }

        .info-item .label {
            display: block;
            color: #666;
            font-size: 12px;
        }

        .info-item .value {
            display: block;
            font-weight: 600;
            color: #2c3e50;
        }

        .availability-status {
            margin: 20px 0;
        }

        .status {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
        }

        .status.available {
            background: #d4edda;
            color: #155724;
        }

        .status.unavailable {
            background: #f8d7da;
            color: #721c24;
        }

        .status i {
            margin-right: 8px;
        }

        .action-buttons {
            margin-top: 30px;
        }

        .rent-now-btn {
            background: #28a745;
            border: none;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
        }

        .rent-now-btn:hover {
            background: #218838;
        }

        .car-details-tabs {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs {
            border-bottom: 2px solid #dee2e6;
            margin-bottom: 30px;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #666;
            font-weight: 600;
            padding: 15px 20px;
            margin-right: 10px;
            border-radius: 10px 10px 0 0;
        }

        .nav-tabs .nav-link.active {
            background: #007bff;
            color: white;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list i {
            margin-right: 10px;
            width: 16px;
        }

        .equipment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .equipment-item {
            display: flex;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .equipment-item i {
            color: #007bff;
            margin-right: 10px;
            width: 20px;
        }

        .reviews-section {
            margin-top: 20px;
        }

        .rating-summary {
            text-align: center;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
        }

        .overall-rating h2 {
            font-size: 48px;
            font-weight: 700;
            color: #007bff;
            margin: 0;
        }

        .rating-breakdown {
            margin-top: 20px;
        }

        .rating-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .rating-row span:first-child {
            width: 60px;
            text-align: left;
        }

        .rating-row .progress {
            flex: 1;
            height: 8px;
            margin: 0 10px;
        }

        .rating-row span:last-child {
            width: 40px;
            text-align: right;
        }

        .review-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .reviewer-details h6 {
            margin: 0;
            font-weight: 600;
        }

        .review-rating {
            margin: 5px 0;
        }

        .review-date {
            color: #666;
            font-size: 12px;
        }

        .review-text {
            margin: 0;
            color: #555;
            line-height: 1.6;
        }

        .similar-car-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .similar-car-card:hover {
            transform: translateY(-5px);
        }

        .similar-car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .similar-car-card .card-content {
            padding: 15px;
        }

        .similar-car-card h6 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .similar-car-card .price {
            color: #28a745;
            font-weight: 700;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .car-info-card {
                margin-top: 30px;
                position: static;
            }

            .main-car-image {
                height: 250px;
            }

            .car-title {
                font-size: 22px;
            }

            .price-main h2 {
                font-size: 24px;
            }

            .quick-info .row .col-6 {
                margin-bottom: 15px;
            }
        }
    </style>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
                // Gestion du changement d'image principale
                window.changeMainImage = function(src) {
                    document.getElementById('mainImage').src = src;

                    // Mettre à jour la classe active des thumbnails
                    document.querySelectorAll('.thumbnail').forEach(thumb => {
                        thumb.classList.remove('active');
                    });
                    event.target.classList.add('active');
                };

                // Ouverture de la modal d'image
                window.openImageModal = function() {
                    const mainImage = document.getElementById('mainImage');
                    const modalImage = document.getElementById('modalImage');
                    modalImage.src = mainImage.src;

                    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
                    imageModal.show();
                };

                // Fonction de partage
                window.shareVehicle = function() {
                    if (navigator.share) {
                        navigator.share({
                            title: '{{ $car->titre }}',
                            text: 'Découvrez ce véhicule incroyable sur Dreams Rent',
                            url: window.location.href
                        });
                    } else {
                        // Fallback pour les navigateurs qui ne supportent pas l'API Web Share
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

                // Gestion du bouton "Réserver maintenant"
                document.querySelector('.rent-now-btn').addEventListener('click', function() {
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
                        // Ouvrir la modal de réservation (code de la modal précédente)
                        openRentModal(carId);
                    @endguest
                });

            // Gestion des favoris
            document.querySelector('.btn-outline-primary').addEventListener('click', function() {
                    @guest
                    Swal.fire({
                        icon: 'info',
                        title: 'Connexion requise',
                        text: 'Connectez-vous pour ajouter des véhicules à vos favoris.',
                        confirmButtonText: 'Se connecter',
                        showCancelButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{ route('login') }}';
                        }
                    });
                @else
                    // Logique d'ajout aux favoris
                    toggleFavorite({{ $car->id }});
                @endguest
            });

        // Animation des onglets
        const tabLinks = document.querySelectorAll('.nav-tabs .nav-link');
        tabLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Scroll vers les onglets lors du clic
            document.querySelector('.car-details-tabs').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
        });
        });

        // Fonction pour gérer les favoris
        function toggleFavorite(carId) {
            // Simulation - à remplacer par votre logique réelle
            const btn = document.querySelector('.btn-outline-primary');
            const icon = btn.querySelector('i');

            if (icon.classList.contains('fas')) {
                icon.classList.remove('fas');
                icon.classList.add('far');
                Swal.fire({
                    icon: 'info',
                    title: 'Retiré des favoris',
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                icon.classList.remove('far');
                icon.classList.add('fas');
                Swal.fire({
                    icon: 'success',
                    title: 'Ajouté aux favoris',
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        }
    </script>

    {{-- ============================================== --}}
    <script>
        function openRentModal(carId) {
            // Récupérer les informations du véhicule depuis la page
            const carTitle = document.querySelector('.car-title').textContent;
            const carPrice = document.querySelector('.price-main h2').textContent;
            const carImage = document.getElementById('mainImage').src;

            // Remplir la modal
            document.getElementById('car_id').value = carId;
            document.getElementById('car-details').innerHTML = `
        <div class="d-flex align-items-center">
            <img src="${carImage}" alt="Car" style="width: 80px; height: 60px; object-fit: cover;" class="me-3">
            <div>
                <h6 class="mb-1">${carTitle}</h6>
                <p class="mb-0 text-muted">${carPrice}</p>
            </div>
        </div>
    `;

            // Afficher la modal
            const modal = new bootstrap.Modal(document.getElementById('rentModal'));
            modal.show();
        }
    </script>

    <script>
        document.addEventListener('click', function(e) {
            if (e.target.matches('[data-bs-dismiss="modal"]')) {
                e.target.blur();
                const modal = e.target.closest('.modal');
                modal.removeAttribute('aria-hidden');

                setTimeout(() => {
                    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
                    document.body.classList.remove('modal-open');
                    document.body.style.cssText = '';
                }, 200);
            }
        });
    </script>
@endpush
