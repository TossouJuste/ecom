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
                                <li class="breadcrumb-item"><a href="{{ route('admin.produits.index') }}">Les événements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Détails de l'événement</li>
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
                    <h4 class="text-blue h4">Détails du Produit</h4>
                </div>
                <div class="pd-20">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Vérifier si la photo existe avant de l'afficher -->
                            @if($produit->photo)
                                <img src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" style="width: 100%; height: auto;">
                            @else
                                <p>Aucune image disponible</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h4>{{ $produit->nom }}</h4>
                
                            <p><strong>Prix :</strong> {{ $produit->prix }} FCFA</p>
                
                            <!-- Vérifier si les ingrédients existent avant de les afficher -->
                            @if(!empty($produit->ingredients))
                                <p><strong>Ingrédients :</strong> {{ $produit->ingredients }}</p>
                            @endif
                
                            <!-- Vérifier si le mode d'utilisation existe avant de l'afficher -->
                            @if(!empty($produit->mode_utilisation))
                                <p><strong>Mode d'utilisation :</strong> {{ $produit->mode_utilisation }}</p>
                            @endif
                
                            <!-- Vérifier si le public cible existe avant de l'afficher -->
                            @if(!empty($produit->public_cible))
                                <p><strong>Public cible :</strong> {{ $produit->public_cible }}</p>
                            @endif
                
                            <!-- Vérifier si l'utilité existe avant de l'afficher -->
                            @if(!empty($produit->utilite))
                                <p><strong>Utilité :</strong> {{ $produit->utilite }}</p>
                            @endif
                
                            <!-- Interpréter HTML dans la description -->
                            <p><strong>Description :</strong> {!! $produit->description !!}</p>
                
                            <!-- Vérifier si le résumé existe avant de l'afficher -->
                            @if(!empty($produit->resume))
                                <p><strong>Résumé :</strong> {{ $produit->resume }}</p>
                            @endif
                 
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
