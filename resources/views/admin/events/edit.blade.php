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
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Tableau de bord</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.events.index') }}">Les événements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier l'événement</li>
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
                    <h4 class="text-blue h4">Modifier l'Événement</h4>
                </div>
                <div class="pd-20">
                    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Champ pour le titre de l'événement -->
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" id="titre" name="titre" class="form-control" value="{{ old('titre', $event->titre) }}" required>
                        </div>
 

                        <!-- Champ pour la date de l'événement -->
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date_realisation" class="form-control" value="{{ old('date_realisation', \Carbon\Carbon::parse($event->date_realisation)->format('Y-m-d')) }}" required>
                        </div>

                        <!-- Champ pour le lieu de l'événement -->
                        <div class="form-group">
                            <label for="location">Lieu</label>
                            <input type="text" id="location" name="lieu_realisation" class="form-control" value="{{ old('lieu_realisation', $event->lieu_realisation) }}" required>
                        </div>

                        <!-- Champ pour la description de l'événement avec CKEditor -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" required>{{ old('description', $event->description) }}</textarea>
                        </div>

                        <!-- Inclure CKEditor via un CDN et l'appliquer au champ description -->
                        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace('description');
                        </script>

                        <!-- Champ pour télécharger ou modifier l'image -->
                        <div class="form-group">
                            <label for="photo">Image</label>
                            <input type="file" id="photo" name="photo" class="form-control">
                            <!-- Affichage de l'image actuelle -->
                            @if($event->photo)
                                <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->titre }}" style="width: 100px; height: auto; margin-top: 10px;">
                            @endif
                        </div>

                        <!-- Bouton pour soumettre le formulaire de mise à jour -->
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
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
