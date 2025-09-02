@extends('layouts.master')

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <style>
        .table th {
            border-top: none;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .btn-group .btn {
            margin-right: 2px;
        }

        .badge {
            font-size: 0.75rem;
        }

        #ordersTable_wrapper .dt-buttons {
            margin-bottom: 15px;
        }

        .dataTables_filter {
            margin-bottom: 15px;
        }
    </style>
@endpush

@section('content-client')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="text-center row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title"> <br>Orders</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Mes Réservations</h4>
                        <div class="d-flex gap-2">
                            <select id="statusFilter" class="form-select form-select-sm">
                                <option value="">Tous les statuts</option>
                                <option value="pending">En attente</option>
                                <option value="confirmed">Confirmé</option>
                                <option value="active">Actif</option>
                                <option value="completed">Terminé</option>
                                <option value="cancelled">Annulé</option>
                            </select>
                            <button class="btn btn-sm btn-success"
                                onclick="window.location='{{ route('vitrine.vehicule') }}'">
                                <i class="fas fa-plus"></i> Nouvelle réservation
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="ordersTable" class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="15%">Code de suivi</th>
                                        <th width="25%">Véhicule</th>
                                        <th width="12%">Statut</th>
                                        <th width="15%">Prix/Paiement</th>
                                        <th width="15%">Contact</th>
                                        <th width="10%">Date</th>
                                        <th width="8%">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal détails commande -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de la réservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="orderDetails">
                    <!-- Contenu chargé dynamiquement -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialiser DataTables
            const table = $('#ordersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('client.orders.data') }}',
                    data: function(d) {
                        d.status = $('#statusFilter').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'tracking_code',
                        name: 'tracking_code'
                    },
                    {
                        data: 'car_info',
                        name: 'car.titre',
                        orderable: false
                    },
                    {
                        data: 'status_badge',
                        name: 'status'
                    },
                    {
                        data: 'payment_info',
                        name: 'prix',
                        orderable: false
                    },
                    {
                        data: 'contact_info',
                        name: 'telephone',
                        orderable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [
                    [6, 'desc']
                ], // Trier par date décroissante
                pageLength: 10,
                responsive: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Excel',
                        className: 'btn btn-success btn-sm',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 6] // Exclure actions et images
                        }
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> PDF',
                        className: 'btn btn-danger btn-sm',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 6]
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Imprimer',
                        className: 'btn btn-info btn-sm',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 6]
                        }
                    }
                ],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                }
            });

            // Filtre par statut
            $('#statusFilter').on('change', function() {
                table.ajax.reload();
            });

            // Voir détails commande
            $(document).on('click', '.view-order', function() {
                const orderId = $(this).data('id');

                Swal.fire({
                    title: 'Chargement...',
                    allowOutsideClick: false,
                    didOpen: () => Swal.showLoading()
                });

                $.get(`{{ route('client.orders.show', ':id') }}`.replace(':id', orderId))
                    .done(function(response) {
                        Swal.close();
                        if (response.success) {
                            showOrderDetails(response.order);
                        }
                    })
                    .fail(function() {
                        Swal.fire('Erreur', 'Impossible de charger les détails', 'error');
                    });
            });

            // Annuler commande
            $(document).on('click', '.cancel-order', function() {
                const orderId = $(this).data('id');

                Swal.fire({
                    title: 'Confirmer l\'annulation?',
                    text: 'Cette action ne peut pas être annulée',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Oui, annuler',
                    cancelButtonText: 'Non'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.post(`{{ route('client.orders.cancel', ':id') }}`.replace(':id',
                            orderId), {
                                _token: '{{ csrf_token() }}'
                            })
                            .done(function(response) {
                                if (response.success) {
                                    Swal.fire('Succès', response.message, 'success');
                                    table.ajax.reload();
                                }
                            })
                            .fail(function() {
                                Swal.fire('Erreur', 'Impossible d\'annuler la commande',
                                    'error');
                            });
                    }
                });
            });
        });

        // Copier code de suivi
        function copyTrackingCode(code) {
            navigator.clipboard.writeText(code).then(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Copié!',
                    text: 'Code de suivi copié dans le presse-papiers',
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        }

        // Afficher détails commande
        function showOrderDetails(order) {
            const detailsHtml = `
        <div class="row">
            <div class="col-md-6">
                <h6>Informations générales</h6>
                <table class="table table-sm">
                    <tr><td><strong>Code de suivi:</strong></td><td><code>${order.tracking_code}</code></td></tr>
                    <tr><td><strong>Statut:</strong></td><td><span class="badge bg-info">${order.status}</span></td></tr>
                    <tr><td><strong>Date de commande:</strong></td><td>${new Date(order.created_at).toLocaleDateString('fr-FR')}</td></tr>
                    <tr><td><strong>Type de paiement:</strong></td><td>${order.type_paiement == 'financement' ? 'Financement' : 'Apport direct'}</td></tr>
                </table>
                
                <h6>Contact</h6>
                <table class="table table-sm">
                    <tr><td><strong>Téléphone:</strong></td><td>${order.telephone}</td></tr>
                    <tr><td><strong>Adresse:</strong></td><td>${order.adresse}</td></tr>
                    <tr><td><strong>Ville:</strong></td><td>${order.ville}, ${order.pays}</td></tr>
                    ${order.code_postal ? `<tr><td><strong>Code postal:</strong></td><td>${order.code_postal}</td></tr>` : ''}
                </table>
            </div>
            
            <div class="col-md-6">
                <h6>Véhicule</h6>
                <div class="d-flex mb-3">
                    <img src="${order.car.image_principale ? '{{ asset('storage') }}/' + order.car.image_principale : '/default-car.jpg'}" 
                         alt="Car" style="width: 80px; height: 60px; object-fit: cover; border-radius: 5px;" class="me-3">
                    <div>
                        <strong>${order.car.titre}</strong><br>
                        <small class="text-muted">${order.car.modele}</small>
                    </div>
                </div>
                
                <h6>Tarification</h6>
                <table class="table table-sm">
                    <tr><td><strong>Prix total:</strong></td><td class="text-success">${Number(order.prix).toLocaleString('fr-FR')} FCFA</td></tr>
                    ${order.montant ? `<tr><td><strong>Montant versé:</strong></td><td class="text-info">${Number(order.montant).toLocaleString('fr-FR')} FCFA</td></tr>` : ''}
                    <tr><td><strong>Paiement validé:</strong></td><td>${order.paiement_valide ? '<span class="text-success">Oui</span>' : '<span class="text-warning">En attente</span>'}</td></tr>
                </table>
            </div>
        </div>
    `;

            $('#orderDetails').html(detailsHtml);
            $('#orderDetailModal').modal('show');
        }
    </script>
@endpush
