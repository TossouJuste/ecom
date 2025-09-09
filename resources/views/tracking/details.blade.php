@extends('layouts.master')
@section('content-client')
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

    <div class="container py-5">
        <div class="row">
            <!-- Informations principales -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-header bg-success text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">
                                <i class="fas fa-check-circle me-2"></i>
                                Commande {{ $order->tracking_code }}
                            </h4>
                            <span class="badge bg-light text-dark fs-6">
                                {{ ucfirst($order->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <!-- Barre de progression -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="mb-0">Progression de votre commande</h6>
                                <strong class="text-success">{{ $order->completion_percentage }}%</strong>
                            </div>
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                    style="width: {{ $order->completion_percentage }}%"
                                    aria-valuenow="{{ $order->completion_percentage }}" aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{ $order->completion_percentage }}%
                                </div>
                            </div>
                        </div>

                        <!-- Timeline des étapes -->
                        <div class="timeline-container">
                            <h6 class="mb-3">Étapes de traitement</h6>
                            <div class="timeline">
                                <div class="timeline-item {{ $order->completion_percentage >= 0 ? 'completed' : '' }}">
                                    <div class="timeline-marker">
                                        <i class="fas fa-{{ $order->completion_percentage >= 0 ? 'check' : 'circle' }}"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>Commande reçue</h6>
                                        <p class="mb-0 ">{{ $order->created_at->format('d/m/Y à H:i') }}</p>
                                    </div>
                                </div>

                                <div
                                    class="timeline-item {{ $order->completion_percentage >= 25 ? 'completed' : ($order->completion_percentage > 0 ? 'current' : '') }}">
                                    <div class="timeline-marker">
                                        <i
                                            class="fas fa-{{ $order->completion_percentage >= 25 ? 'check' : ($order->completion_percentage > 0 ? 'clock' : 'circle') }}"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>Vérification et préparation</h6>
                                        <p class="mb-0 ">Validation des documents et préparation du véhicule</p>
                                    </div>
                                </div>

                                <div
                                    class="timeline-item {{ $order->completion_percentage >= 75 ? 'completed' : ($order->completion_percentage >= 25 ? 'current' : '') }}">
                                    <div class="timeline-marker">
                                        <i
                                            class="fas fa-{{ $order->completion_percentage >= 75 ? 'check' : ($order->completion_percentage >= 25 ? 'clock' : 'circle') }}"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>Finalisation</h6>
                                        <p class="mb-0 ">Préparation pour la remise du véhicule</p>
                                    </div>
                                </div>

                                <div
                                    class="timeline-item {{ $order->completion_percentage >= 100 ? 'completed' : ($order->completion_percentage >= 75 ? 'current' : '') }}">
                                    <div class="timeline-marker">
                                        <i
                                            class="fas fa-{{ $order->completion_percentage >= 100 ? 'check' : ($order->completion_percentage >= 75 ? 'clock' : 'circle') }}"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <h6>Véhicule prêt</h6>
                                        <p class="mb-0 ">Disponible pour récupération</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description admin -->
                        @if ($order->admin_description)
                            <div class="alert alert-info mt-4">
                                <h6><i class="fas fa-info-circle me-2"></i>Dernière mise à jour</h6>
                                <p class="mb-2">{{ $order->admin_description }}</p>
                                @if ($order->last_updated_by_admin)
                                    <small class="">
                                        Mise à jour le {{ $order->last_updated_by_admin->format('d/m/Y à H:i') }}
                                    </small>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Informations de côté -->
            <div class="col-lg-4">
                <!-- Détails du véhicule -->
                <div class="card shadow border-0 mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-car me-2"></i>Votre véhicule</h5>
                    </div>
                    <div class="card-body">
                        @if ($order->car->image_principale)
                            <img src="{{ asset('storage/' . $order->car->image_principale) }}"
                                class="img-fluid rounded mb-3" alt="{{ $order->car->titre }}">
                        @endif
                        <h6>{{ $order->car->titre }}</h6>
                        <p class=" mb-2">{{ $order->car->modele }}</p>
                        <div class="d-flex justify-content-between">
                            <span>Prix total:</span>
                            <strong class="text-success">{{ number_format($order->prix, 0, ',', ' ') }} FCFA</strong>
                        </div>
                    </div>
                </div>

                <!-- Informations de contact -->
                <div class="card shadow border-0 mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="fas fa-address-card me-2"></i>Vos informations</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <i class="fas fa-phone text-info me-2"></i>
                            <strong>{{ $order->telephone }}</strong>
                        </div>
                        <div class="mb-2">
                            <i class="fas fa-map-marker-alt text-info me-2"></i>
                            {{ $order->ville }}, {{ $order->pays }}
                        </div>
                        <div class="mb-2">
                            <i class="fas fa-credit-card text-info me-2"></i>
                            {{ $order->type_paiement == 'financement' ? 'Financement' : 'Apport direct' }}
                        </div>
                        <div>
                            <i
                                class="fas fa-{{ $order->paiement_valide ? 'check-circle text-success' : 'clock text-warning' }} me-2"></i>
                            Paiement {{ $order->paiement_valide ? 'validé' : 'en attente' }}
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h6>Besoin d'aide ?</h6>
                        <a href="tel:+221XXXXXXXX" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-phone me-1"></i>Appeler
                        </a>
                        <a href="mailto:contact@dreamsrent.com" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope me-1"></i>Email
                        </a>
                        <hr>
                        <button class="btn btn-success btn-sm" onclick="window.print()">
                            <i class="fas fa-print me-1"></i>Imprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton retour -->
        <div class="text-center mt-4">
            <a href="{{ route('track.search') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Rechercher une autre commande
            </a>
        </div>
    </div>

    <style>
        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-marker {
            position: absolute;
            left: -22px;
            top: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #6c757d;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .timeline-item.completed .timeline-marker {
            background: #28a745;
        }

        .timeline-item.current .timeline-marker {
            background: #007bff;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .timeline-content h6 {
            margin-bottom: 5px;
            color: #495057;
        }

        @media print {

            .btn,
            .card-header {
                display: none !important;
            }
        }
    </style>
@endsection

@push('scripts')
@endpush
