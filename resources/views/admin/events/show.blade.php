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
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Tableau de bord</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.events.index') }}">Les événements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails de l'événement</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{ route('admin.events.index') }}" role="button">Retour à la liste</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Détails de l'Événement</h4>
    </div>
    <div class="pd-20">
        <div class="row">
            <div class="col-md-6">
                <!-- Vérifier si la photo existe avant de l'afficher -->
                @if($event->photo)
                    <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->titre }}" style="width: 100%; height: auto;">
                @else
                    <p>Aucune image disponible</p>
                @endif
            </div>
            <div class="col-md-6">
                <h4>{{ $event->titre }}</h4>

                <!-- Vérifier si le sous-titre existe avant de l'afficher -->
                @if(!empty($event->subtitle))
                    <p><strong>Sous-titre :</strong> {{ $event->subtitle }}</p>
                @endif

                <!-- Interpréter HTML dans la description -->
            <p><strong>Description :</strong> {!! $event->description !!}</p>
 
                <p><strong>Date :</strong>
                    @if($event->date_realisation)
                        {{ \Carbon\Carbon::parse($event->date_realisation)->format('d-m-Y') }}
                    @else
                        Date non disponible
                    @endif
                </p>

                <p><strong>Lieu :</strong> {{ $event->lieu_realisation }}</p>
            </div>
        </div>
    </div>

</div>

        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
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

</body>
</html>
