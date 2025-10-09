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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h2 class="mb-0">
                            <i class="fas fa-search me-2"></i>
                            Track my order
                        </h2>
                        <p class="mb-0 mt-2">Enter your tracking code to know the status of your order</p>
                    </div>

                    <div class="card-body p-5">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form action="{{ route('track.order') }}" method="POST" id="trackingForm">
                            @csrf
                            {{-- <div class="mb-4">
                            <label class="form-label h5">Code de suivi</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text">
                                    <i class="fas fa-barcode"></i>
                                </span>
                                <input type="text" name="tracking_code" class="form-control"
                                       placeholder="Ex: ORD-ABC123DEF456"
                                       value="{{ old('tracking_code', request('tracking_code')) }}"
                                       style="text-transform: uppercase;" required>
                                <button type="submit" class="btn btn-primary btn-sm px-4">
                                    <i class="fas fa-search me-2"></i>To research
                                </button>
                            </div>
                            <small class="form-text mt-2">
                                The tracking code was sent to you by email when you placed your order.
                            </small>
                        </div> --}}

                            <div class="mb-4">
                                <label class="form-label h5">Tracking code</label>
                                <div class="input-group input-group-lg flex-wrap">
                                    {{-- <span class="input-group-text">
                                        <i class="fas fa-barcode"></i>
                                    </span> --}}
                                    <input type="text" name="tracking_code" class="form-control"
                                        placeholder="Ex: ABC123DEF456"
                                        value="{{ old('tracking_code', request('tracking_code')) }}"
                                        style="text-transform: uppercase;" required>

                                    <!-- Bouton en inline sur grand écran -->
                                    <button type="submit" class="btn btn-primary btn-sm px-4 d-none d-md-inline-block">
                                        {{-- <i class="fas fa-search me-2"></i> --}}
                                        To research
                                    </button>
                                </div>

                                <!-- Bouton visible en dessous sur mobile -->
                                <button type="submit" class="btn btn-primary btn-md w-100 mt-2 d-md-none">
                                    {{-- <i class="fas fa-search me-2"></i> --}}
                                    To research
                                </button>

                                <small class="form-text mt-2">
                                   The tracking code was sent to you by email when you placed your order.
                                </small>
                            </div>

                        </form>

                        <!-- Section d'aide -->
                        <div class="mt-5">
                            <h5>Need help ?</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                                        <div>
                                            <strong>Confirmation email</strong>
                                            <p class="mb-0 small">Check your email to find your code</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-phone text-primary me-3 mt-1"></i>
                                        <div>
                                            <strong>Contact us</strong>
                                            <p class="mb-0 small">+33 XX XXX XX XX</p>
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
@endsection

@push('scripts')
    <script>
        // Auto-capitalisation du code de suivi
        document.querySelector('input[name="tracking_code"]').addEventListener('input', function(e) {
            e.target.value = e.target.value.toUpperCase();
        });
    </script>
@endpush
