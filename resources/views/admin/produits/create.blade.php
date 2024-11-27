@extends('admin.header')
@extends('admin.nav')

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Tableau de bord</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.produits.index') }}">Les produits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nouveau produit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Ajouter un nouveau produit</h4>
                </div>
                <div class="pb-20">
                    <form action="{{ route('admin.produits.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nom du produit -->
                        <div class="form-group">
                            <label for="nom">Nom du produit</label>
                            <input type="text" id="nom" name="nom" class="form-control" required>
                        </div>

                        <!-- Photo du produit -->
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" id="photo" name="photo" class="form-control" required>
                        </div>

                        <!-- Prix du produit -->
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="number" id="prix" name="prix" class="form-control" step="0.01" required>
                        </div>

                        <!-- Ingrédients -->
                        <div class="form-group">
                            <label for="ingredients">Ingrédients</label>
                            <textarea id="ingredients" name="ingredients" class="form-control" required></textarea>
                        </div>

                        <!-- Mode d'utilisation -->
                        <div class="form-group">
                            <label for="mode_utilisation">Mode d'utilisation</label>
                            <textarea id="mode_utilisation" name="mode_utilisation" class="form-control" required></textarea>
                        </div>

                        <!-- Public cible -->
                        <div class="form-group">
                            <label for="public_cible">Public cible</label>
                            <input type="text" id="public_cible" name="public_cible" class="form-control" required>
                        </div>

                        <!-- Utilité (ce que ça traite) -->
                        <div class="form-group">
                            <label for="utilite">Utilité</label>
                            <textarea id="utilite" name="utilite" class="form-control" required></textarea>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" required></textarea>
                        </div>

                        <!-- Inclure CKEditor via un CDN -->
                        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

                        <!-- Appliquer CKEditor au champ de texte -->
                        <script>
                            CKEDITOR.replace('description');
                        </script>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 

<!-- JavaScript includes -->
<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>

<script>
    $(document).ready(function() {
        if (!$.fn.DataTable.isDataTable('#eventsTable')) {
            $('#eventsTable').DataTable({
                "lengthMenu": [5, 10, 25, 50, 75, 100],
                "pageLength": 10,
                "ordering": true,
                "order": [[0, 'desc']],
                "columnDefs": [{
                    "targets": 'datatable-nosort',
                    "orderable": false,
                }]
            });
        }

        // Manage delete link click
        $('.delete-event-link').click(function() {
            var eventId = $(this).data('event-id');
            $('#confirmDeleteButton').attr('href', '{{ url("events") }}/' + eventId);
        });
    });
</script>
</body>
</html>
