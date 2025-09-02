@extends('layouts.base')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <style>
        .card {
            border-radius: 10px;
        }

        .border-left-primary {
            border-left: 4px solid #4e73df !important;
        }

        .border-left-warning {
            border-left: 4px solid #f6c23e !important;
        }

        .border-left-info {
            border-left: 4px solid #36b9cc !important;
        }

        .border-left-success {
            border-left: 4px solid #1cc88a !important;
        }

        .progress {
            border-radius: 10px;
        }

        .status-select {
            min-width: 120px;
        }
    </style>
@endpush

@section('content-admin')
    <div class="container-fluid py-4">
        <!-- Statistiques -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Commandes</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['total'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">En Attente</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['pending'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Actives</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['active'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-play fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terminées</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['completed'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table des commandes -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Toutes les Commandes</h6>
                <div class="d-flex gap-2">
                    <select id="statusFilter" class="form-select form-select-sm">
                        <option value="">Tous les statuts</option>
                        <option value="pending">En attente</option>
                        <option value="confirmed">Confirmé</option>
                        <option value="active">Actif</option>
                        <option value="completed">Terminé</option>
                        <option value="cancelled">Annulé</option>
                    </select>
                    <button class="btn btn-sm btn-primary" onclick="$('#ordersTable').DataTable().ajax.reload();">
                        <i class="fas fa-refresh"></i> Actualiser
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="ordersTable">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th width="12%">Code Suivi</th>
                                <th width="18%">Client</th>
                                <th width="20%">Véhicule</th>
                                <th width="10%">Statut</th>
                                <th width="15%">Progression</th>
                                <th width="12%">Paiement</th>
                                <th width="8%">Date</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mise à jour progression -->
    <div class="modal fade" id="progressModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="progressForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Mettre à jour la progression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="order_id">

                        <div class="mb-3">
                            <label class="form-label">Pourcentage d'exécution</label>
                            <input type="range" class="form-range" id="completion_percentage" name="completion_percentage"
                                min="0" max="100" value="0">
                            <div class="d-flex justify-content-between">
                                <small>0%</small>
                                <strong id="percentage_display">0%</strong>
                                <small>100%</small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description/Notes</label>
                            <textarea class="form-control" name="admin_description" rows="4"
                                placeholder="Décrivez l'avancement, les étapes réalisées, etc..."></textarea>
                        </div>

                        <div class="alert alert-info">
                            <small><i class="fas fa-info-circle"></i> Le client sera automatiquement notifié par email de
                                cette mise à jour.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal détails commande -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de la commande</h5>
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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialiser DataTables
            const table = $('#ordersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.orders.data') }}',
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
                        data: 'client_info',
                        name: 'client.name'
                    },
                    {
                        data: 'car_info',
                        name: 'car.titre'
                    },
                    {
                        data: 'status_select',
                        name: 'status',
                        orderable: false
                    },
                    {
                        data: 'progress_info',
                        name: 'completion_percentage',
                        orderable: false
                    },
                    {
                        data: 'payment_info',
                        name: 'prix'
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
                    [7, 'desc']
                ],
                pageLength: 15,
                responsive: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                }
            });

            // Filtre par statut
            $('#statusFilter').on('change', function() {
                table.ajax.reload();
            });

            // Changement de statut
            $(document).on('change', '.status-select', function() {
                const orderId = $(this).data('id');
                const newStatus = $(this).val();

                $.post(`{{ route('admin.orders.updateStatus', ':id') }}`.replace(':id', orderId), {
                        _token: '{{ csrf_token() }}',
                        status: newStatus
                    })
                    .done(function(response) {
                        if (response.success) {
                            Swal.fire('Succès', response.message, 'success');
                            table.ajax.reload(null, false);
                        }
                    })
                    .fail(function() {
                        Swal.fire('Erreur', 'Impossible de mettre à jour le statut', 'error');
                        table.ajax.reload(null, false);
                    });
            });

            // Mettre à jour progression
            $(document).on('click', '.update-progress', function() {
                const orderId = $(this).data('id');
                $('#order_id').val(orderId);

                // Charger les données actuelles
                $.get(`{{ route('admin.orders.show', ':id') }}`.replace(':id', orderId))
                    .done(function(response) {
                        if (response.success) {
                            $('#completion_percentage').val(response.order.completion_percentage);
                            $('#percentage_display').text(response.order.completion_percentage + '%');
                            $('textarea[name="admin_description"]').val(response.order
                                .admin_description || '');
                            $('#progressModal').modal('show');
                        }
                    });
            });

            // Slider progression
            $('#completion_percentage').on('input', function() {
                $('#percentage_display').text($(this).val() + '%');
            });

            // Soumission formulaire progression
            $('#progressForm').on('submit', function(e) {
                e.preventDefault();

                const orderId = $('#order_id').val();
                const formData = new FormData(this);

                $.post(`{{ route('admin.orders.updateProgress', ':id') }}`.replace(':id', orderId), {
                        _token: '{{ csrf_token() }}',
                        completion_percentage: formData.get('completion_percentage'),
                        admin_description: formData.get('admin_description')
                    })
                    .done(function(response) {
                        if (response.success) {
                            Swal.fire('Succès', response.message, 'success');
                            $('#progressModal').modal('hide');
                            table.ajax.reload(null, false);
                        }
                    })
                    .fail(function() {
                        Swal.fire('Erreur', 'Impossible de mettre à jour la progression', 'error');
                    });
            });

            // Basculer paiement
            $(document).on('click', '.toggle-payment', function() {
                const orderId = $(this).data('id');

                $.post(`{{ route('admin.orders.togglePayment', ':id') }}`.replace(':id', orderId), {
                        _token: '{{ csrf_token() }}'
                    })
                    .done(function(response) {
                        if (response.success) {
                            Swal.fire('Succès', response.message, 'success');
                            table.ajax.reload(null, false);
                        }
                    })
                    .fail(function() {
                        Swal.fire('Erreur', 'Impossible de mettre à jour le paiement', 'error');
                    });
            });

            // Voir détails
            $(document).on('click', '.view-order', function() {
                const orderId = $(this).data('id');

                $.get(`{{ route('admin.orders.show', ':id') }}`.replace(':id', orderId))
                    .done(function(response) {
                        if (response.success) {
                            showOrderDetails(response.order);
                        }
                    });
            });
        });

        function showOrderDetails(order) {
            const detailsHtml = `
        <div class="row">
            <div class="col-md-6">
                <h6>Client</h6>
                <p><strong>${order.client.name}</strong><br>
                   ${order.client.email}<br>
                   ${order.telephone}</p>
                   
                <h6>Véhicule</h6>
                <p><strong>${order.car.titre}</strong><br>
                   ${order.car.modele}</p>
                   
                <h6>Progression</h6>
                <div class="progress mb-2">
                    <div class="progress-bar" style="width: ${order.completion_percentage}%">
                        ${order.completion_percentage}%
                    </div>
                </div>
                <p><small>${order.admin_description || 'Aucune description'}</small></p>
            </div>
            
            <div class="col-md-6">
                <h6>Commande</h6>
                <p>Code: <code>${order.tracking_code}</code><br>
                   Statut: <span class="badge bg-info">${order.status}</span><br>
                   Date: ${new Date(order.created_at).toLocaleDateString('fr-FR')}</p>
                   
                <h6>Paiement</h6>
                <p>Prix: <strong>${Number(order.prix).toLocaleString('fr-FR')} FCFA</strong><br>
                   Type: ${order.type_paiement}<br>
                   Validé: ${order.paiement_valide ? 'Oui' : 'Non'}</p>
                   
                <h6>Adresse</h6>
                <p>${order.adresse}<br>
                   ${order.ville}, ${order.pays}</p>
            </div>
        </div>
    `;

            $('#orderDetails').html(detailsHtml);
            $('#orderDetailModal').modal('show');
        }
    </script>
@endpush
