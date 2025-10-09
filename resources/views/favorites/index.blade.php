@extends('layouts.master')
@section('content-client')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="text-center row align-items-center">
                <div class="col-md-12 col-12 mt-4">
                    <h2 class="breadcrumb-title">My favorites</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('vitrine.vehicule') }}">Voitures</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Favorite</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-0 section car-listing">
        <div class="container">
            @if($favoriteCars->count() > 0)
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="count-search">
                            <p>{{ $favoriteCars->total() }} vehicles in your favorites</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($favoriteCars as $car)
                        <div class="col-xxl-4 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <div class="img-slider owl-carousel">
                                        <div class="slide-images">
                                            <a href="{{ route('vitrine.vehicule.details', $car->id) }}">
                                                <img src="{{ asset('storage/' . $car->image_principale) }}"
                                                    class="img-fluid" alt="{{ $car->modele }}">
                                            </a>
                                        </div>
                                        @if ($car->images())
                                            @foreach ($car->images() as $carListImage)
                                                <div class="slide-images">
                                                    <a href="{{ route('vitrine.vehicule.details', $car->id) }}">
                                                        <img src="{{ asset('storage/' . $carListImage->imagePath) }}"
                                                            class="img-fluid" alt="{{ $car->modele }}">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="fav-item justify-content-end">
                                        <span class="img-count"><i
                                                class="feather-image"></i>{{ $car->images()->count() + 1 }}</span>
                                        <a href="javascript:void(0)" class="fav-icon" data-car-id="{{ $car->id }}">
                                            <i class="feather-heart text-danger"></i>
                                        </a>
                                        <!-- Bouton pour supprimer des favoris -->
                                        <form method="POST" action="{{ route('favorites.destroy', $car->id) }}"
                                              class="d-inline favorite-remove-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-sm btn-outline-danger remove-favorite-btn"
                                                    title="Retirer des favoris">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <span class="featured-text">{{ $car->modele }}</span>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features d-flex align-items-end justify-content-between">
                                        <div class="list-rating">
                                            <h3 class="listing-title">
                                                <a href="{{ route('vitrine.vehicule.details', $car->id) }}">{{ $car->titre }}</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(4.0) 138 Reviews</span>
                                            </div>
                                        </div>
                                        {{-- <div class="list-km">
                                            <span class="km-count"><img src="assets/img/icons/map-pin.svg"
                                                    alt="author">4.1m</span>
                                        </div> --}}
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
                                        {{-- <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div> --}}
                                        <div class="listing-price">
                                            <h6>${{ $car->prix }}</h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <button class="btn btn-order" data-car-id="{{ $car->id }}"><span><i
                                                    class="feather-calendar me-2"></i></span>Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="blog-pagination">
                    <nav>
                        <ul class="pagination page-item justify-content-center">
                            @if ($favoriteCars->onFirstPage())
                                <li class="previtem disabled">
                                    <span class="page-link"><i class="fas fa-regular fa-arrow-left me-2"></i> Prev</span>
                                </li>
                            @else
                                <li class="previtem">
                                    <a class="page-link" href="{{ $favoriteCars->previousPageUrl() }}">
                                        <i class="fas fa-regular fa-arrow-left me-2"></i> Prev
                                    </a>
                                </li>
                            @endif

                            <li class="justify-content-center pagination-center">
                                <div class="page-group">
                                    <ul>
                                        @foreach ($favoriteCars->getUrlRange(1, $favoriteCars->lastPage()) as $page => $url)
                                            <li class="page-item">
                                                @if ($page == $favoriteCars->currentPage())
                                                    <a class="active page-link" href="#">{{ $page }}
                                                        <span class="visually-hidden">(current)</span></a>
                                                @else
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                            @if ($favoriteCars->hasMorePages())
                                <li class="nextlink">
                                    <a class="page-link" href="{{ $favoriteCars->nextPageUrl() }}">
                                        Next <i class="fas fa-regular fa-arrow-right ms-2"></i>
                                    </a>
                                </li>
                            @else
                                <li class="nextlink disabled">
                                    <span class="page-link">Next <i class="fas fa-regular fa-arrow-right ms-2"></i></span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @else
                <!-- Message si aucun favori -->
                <div class="row">
                    <div class="col-12">
                        <div class="text-center py-5">
                            <i class="feather-heart" style="font-size: 4rem; color: #ddd;"></i>
                            <h3 class="mt-3">No favorites yet</h3>
                            <p class="text-muted">Browse our cars and add your favorites to your favorites.</p>
                            <a href="{{ route('vitrine.vehicule') }}" class="btn btn-primary">
                                <i class="feather-search me-2"></i>Discover our vehicles
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Script pour gérer la suppression des favoris
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des favoris (réutiliser le script existant)
        document.querySelectorAll('.fav-icon').forEach(favIcon => {
            favIcon.addEventListener('click', function(e) {
                e.preventDefault();

                const carId = this.getAttribute('data-car-id');
                const heartIcon = this.querySelector('i');

                if (!carId) {
                    Swal.fire('Erreur', 'ID de la voiture manquant', 'error');
                    return;
                }

                this.style.pointerEvents = 'none';

                fetch('{{ route('favorites.toggle') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        car_id: carId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        if (!data.is_favorite) {
                            // Supprimer la carte de la page
                            this.closest('.col-xxl-4').remove();

                            // Recharger la page si plus de favoris
                            if (document.querySelectorAll('.listing-item').length === 0) {
                                location.reload();
                            }
                        }

                        const toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                        });

                        toast.fire({
                            icon: 'info',
                            title: data.message
                        });
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    Swal.fire('Erreur', 'Une erreur est survenue.', 'error');
                })
                .finally(() => {
                    this.style.pointerEvents = 'auto';
                });
            });
        });

        // Gestion du bouton de suppression
        document.querySelectorAll('.remove-favorite-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Confirmer la suppression',
                    text: 'Voulez-vous vraiment retirer cette voiture de vos favoris ?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, retirer',
                    cancelButtonText: 'Annuler'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.closest('.favorite-remove-form').submit();
                    }
                });
            });
        });
    });
</script>
@endpush
