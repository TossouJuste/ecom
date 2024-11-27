@include('admin.header')
@include('admin.nav')

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Tableau de bord</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                            </ol>
                        </nav>
                    </div> 
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Liste des contacts</h4>
                </div>
                <div class="pb-20">
                    <table id="contactsTable" class="data-table table nowrap">
                        <thead>
                            <tr> 
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date du rendez-vous</th>
                                <th>L'heure du rendez-vous</th>
                                <th>Objectif</th>
                                <th>Message</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rendezvous as $rendezvou)
                                <tr> 
                                    <td>{{ $rendezvou->name }}</td>
                                    <td>{{ $rendezvou->email }}</td>
                                    <td>{{ $rendezvou->telephone }}</td>
                                    <td>{{ $rendezvou->date_rendez_vous }}</td>
                                    <td>{{ $rendezvou->time_rendez_vous }}</td>
                                    <td>{{ $rendezvou->objectof }}</td> 
                                    <td>{{ $rendezvou->message }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <!-- Footer content here -->
        </div>
    </div>
</div>

<!-- js -->
<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<!-- Datatable Setting js -->
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>

<script>
    $(document).ready(function() {
        if (!$.fn.DataTable.isDataTable('#galleriesTable')) {
            $('#galleriesTable').DataTable({
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

        // Gérer le clic sur le lien de suppression
        $('.delete-gallery-link').click(function() {
            // Récupérer l'ID de la galerie à supprimer
            var galleryId = $(this).data('realisation-id');

            // Mettre à jour le lien "Oui" du modal avec l'ID de la galerie
            $('#confirmDeleteButton').attr('href', '{{ url("galleries") }}/' + galleryId);
        });
    });
</script>
</body>
</html>
