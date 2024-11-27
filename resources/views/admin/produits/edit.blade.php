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
                                <li class="breadcrumb-item"><a href="{{ route('admin.produits.index') }}">Les événements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier l'événement</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{ route('admin.produits.index') }}" role="button">Retour à la liste</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Modifier le Produit</h4>
                </div>
                <div class="pd-20">
                    <form action="{{ route('admin.produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
            
                        <!-- Champ pour le nom du produit -->
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', $produit->nom) }}" required>
                        </div>
            
                        <!-- Champ pour le prix du produit -->
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="number" id="prix" name="prix" class="form-control" value="{{ old('prix', $produit->prix) }}" required>
                        </div>
            
                        <!-- Champ pour les ingrédients du produit -->
                        <div class="form-group">
                            <label for="ingredients">Ingrédients</label>
                            <textarea id="ingredients" name="ingredients" class="form-control" required>{{ old('ingredients', $produit->ingredients) }}</textarea>
                        </div>
            
                        <!-- Champ pour le mode d'utilisation du produit -->
                        <div class="form-group">
                            <label for="mode_utilisation">Mode d'utilisation</label>
                            <textarea id="mode_utilisation" name="mode_utilisation" class="form-control" required>{{ old('mode_utilisation', $produit->mode_utilisation) }}</textarea>
                        </div>
            
                        <!-- Champ pour le public cible du produit -->
                        <div class="form-group">
                            <label for="public_cible">Public cible</label>
                            <input type="text" id="public_cible" name="public_cible" class="form-control" value="{{ old('public_cible', $produit->public_cible) }}" required>
                        </div>
            
                        <!-- Champ pour l'utilité du produit -->
                        <div class="form-group">
                            <label for="utilite">Utilité</label>
                            <textarea id="utilite" name="utilite" class="form-control" required>{{ old('utilite', $produit->utilite) }}</textarea>
                        </div>
            
                        <!-- Champ pour la description du produit avec CKEditor -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control" required>{{ old('description', $produit->description) }}</textarea>
                        </div>
            
                        <!-- Inclure CKEditor via un CDN et l'appliquer au champ description -->
                        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace('description');
                        </script>
            
                        <!-- Champ pour télécharger ou modifier l'image du produit -->
                        <div class="form-group">
                            <label for="photo">Image</label>
                            <input type="file" id="photo" name="photo" class="form-control">
                            <!-- Affichage de l'image actuelle -->
                            @if($produit->photo)
                                <img src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" style="width: 100px; height: auto; margin-top: 10px;">
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
