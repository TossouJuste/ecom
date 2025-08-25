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
                                <li class="breadcrumb-item active" aria-current="page">Voitures</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addCarModal">
                            NOUVELLE VOITURE
                        </button>
                    </div>
                </div>
            </div>

            <!-- Liste -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Liste des véhicules</h4>
                </div>
                <div class="pb-20">
                    @if(session('success'))
                        <div class="alert alert-success mx-3">{{ session('success') }}</div>
                    @endif

                    <table id="carsTable" class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>Catégorie</th>
                                <th>Année</th>
                                <th>Kilométrage</th>
                                <th>Prix</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $car->titre }}</td>
                                        <td>{{ $car->brand?->name ?? $car->marque }}</td>
                                        <td>{{ $car->modele }}</td>
                                        <td>{{ $car->category?->name ?? $car->categorie }}</td>
                                        <td>{{ $car->annee }}</td>
                                        <td>{{ $car->kilometrage ? number_format($car->kilometrage) . ' km' : '-' }}</td>
                                        <td>{{ $car->prix ? number_format($car->prix, 0, ',', ' ') . ' FCFA' : '-' }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editCarModal{{ $car->id }}">Modifier</button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCarModal{{ $car->id }}">Supprimer</button>
                                        </td>
                                    </tr>
                                @endforeach

                        </tbody>
                        
                    </table>
                    @foreach($cars as $car)
                               

                                <!-- Modal Edit -->
                                <div class="modal fade" id="editCarModal{{ $car->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier la voiture</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <!-- Colonne 1 -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3"><label>Titre</label>
                                                            <input type="text" name="titre" value="{{ $car->titre }}" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3"><label>Type</label>
                                                            <select name="type" class="form-control">
                                                                <option value="">--</option>
                                                                <option value="new" {{ $car->type=='new'?'selected':'' }}>Neuf</option>
                                                                <option value="used" {{ $car->type=='used'?'selected':'' }}>Occasion</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Marque</label>
                                                            <select name="marque" class="form-control">
                                                                <option value="">Sélectionner une marque</option>
                                                                @foreach($marques as $m)
                                                                    <option value="{{ $m->id }}" {{ (int)$car->marque === $m->id ? 'selected':'' }}>{{ $m->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Modèle</label>
                                                            <input type="text" name="modele" value="{{ $car->modele }}" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3"><label>Catégorie</label>
                                                            <select name="categorie" class="form-control">
                                                                <option value="">Sélectionner une catégorie</option>
                                                                @foreach($categories as $c)
                                                                    <option value="{{ $c->id }}" {{ (int)$car->categorie === $c->id ? 'selected':'' }}>{{ $c->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Année</label>
                                                            <input type="number" name="annee" value="{{ $car->annee }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>VIN</label>
                                                            <input type="text" name="vin" value="{{ $car->vin }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Date 1ère immatriculation</label>
                                                            <input type="date" name="date_premiere_immatriculation" value="{{ $car->date_premiere_immatriculation }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Référence</label>
                                                            <input type="text" name="reference" value="{{ $car->reference }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Portes</label>
                                                            <input type="number" name="portes" value="{{ $car->portes }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Places</label>
                                                            <input type="number" name="places" value="{{ $car->places }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Colonne 2 -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3"><label>Carburant</label>
                                                            <select name="carburant" class="form-control">
                                                                <option value="">--</option>
                                                                @php $carburants=['essence','diesel','électrique','hybride']; @endphp
                                                                @foreach($carburants as $carb)
                                                                    <option value="{{ $carb }}" {{ $car->carburant===$carb?'selected':'' }}>{{ ucfirst($carb) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Boîte de vitesse</label>
                                                            <select name="boite_vitesse" class="form-control">
                                                                <option value="">--</option>
                                                                @php $bv=['automatique','manuelle']; @endphp
                                                                @foreach($bv as $b)
                                                                    <option value="{{ $b }}" {{ $car->boite_vitesse===$b?'selected':'' }}>{{ ucfirst($b) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Transmission</label>
                                                            <select name="transmission" class="form-control">
                                                                <option value="">--</option>
                                                                @php $tr=['traction avant','propulsion','4x4']; @endphp
                                                                @foreach($tr as $t)
                                                                    <option value="{{ $t }}" {{ $car->transmission===$t?'selected':'' }}>{{ ucfirst($t) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3"><label>Kilométrage</label>
                                                            <input type="number" name="kilometrage" value="{{ $car->kilometrage }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Puissance moteur (ch)</label>
                                                            <input type="number" name="puissance_moteur_ch" value="{{ $car->puissance_moteur_ch }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Émissions CO2 (g/km)</label>
                                                            <input type="number" name="emission_co2" value="{{ $car->emission_co2 }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Longueur (m)</label>
                                                            <input type="number" step="0.01" name="longueur" value="{{ $car->longueur }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Largeur (m)</label>
                                                            <input type="number" step="0.01" name="largeur" value="{{ $car->largeur }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Hauteur (m)</label>
                                                            <input type="number" step="0.01" name="hauteur" value="{{ $car->hauteur }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3"><label>Poids (kg)</label>
                                                            <input type="number" name="poids" value="{{ $car->poids }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Équipements de série</label>
                                                    <textarea name="equipements_de_serie" class="form-control" rows="2">{{ $car->equipements_de_serie }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Options supplémentaires</label>
                                                    <textarea name="options_supplementaires" class="form-control" rows="2">{{ $car->options_supplementaires }}</textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label>Image principale</label>
                                                        @if($car->image_principale)
                                                            <div class="mb-2">
                                                                <img src="{{ asset('storage/'.$car->image_principale) }}" alt="" style="max-height:80px">
                                                            </div>
                                                        @endif
                                                        <input type="file" name="image_principale" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Ajouter à la galerie (multiple)</label>
                                                        <input type="file" name="galerie_images[]" class="form-control" multiple>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Galerie existante</label>
                                                    <div class="d-flex flex-wrap">
                                                        @forelse($car->images as $img)
                                                            <div class="m-1 text-center">
                                                                <img src="{{ asset('storage/'.$img->image_path) }}" alt="" style="height:80px; width:auto;">
                                                                <div>
                                                                    <button type="button" class="btn btn-sm btn-outline-danger mt-1" data-toggle="modal" data-target="#deleteImageModal{{ $img->id }}">Supprimer</button>
                                                                </div>
                                                            </div>

                                                            <!-- Modal Delete Image -->
                                                            <div class="modal fade" id="deleteImageModal{{ $img->id }}" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <form action="{{ route('admin.cars.images.destroy', [$car->id, $img->id]) }}" method="POST" class="modal-content">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Supprimer l’image</h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Supprimer cette image ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <p class="text-muted">Aucune image.</p>
                                                        @endforelse
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3"><label>Prix (FCFA)</label>
                                                        <input type="number" name="prix" value="{{ $car->prix }}" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3"><label>Prix / mois (FCFA)</label>
                                                        <input type="number" name="prix_mois" value="{{ $car->prix_mois }}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Description</label>
                                                    <textarea name="description" class="form-control" rows="3">{{ $car->description }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Garantie</label>
                                                    <input type="text" name="garantie" value="{{ $car->garantie }}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Modal Delete Car -->
                                <div class="modal fade" id="deleteCarModal{{ $car->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="modal-content">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Supprimer le véhicule <b>{{ $car->titre }}</b> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                                <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        @endforeach
                </div>
            </div>
            <!-- /Liste -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box"></div>
    </div>
</div>

<!-- Modal Add Car -->
<div class="modal fade" id="addCarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Ajouter une voiture</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <!-- Col 1 -->
                    <div class="col-md-6">
                        <div class="mb-3"><input type="text" name="titre" class="form-control" placeholder="Titre (ex. Chevrolet Camaro)" required></div>
                        <div class="mb-3">
                            <select name="type" class="form-control">
                                <option value="">Type (Neuf/Occasion)</option>
                                <option value="new">Neuf</option>
                                <option value="used">Occasion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="marque" class="form-control">
                                <option value="">Marque</option>
                                @foreach($marques as $m)
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3"><input type="text" name="modele" class="form-control" placeholder="Modèle" required></div>
                        <div class="mb-3">
                            <select name="categorie" class="form-control">
                                <option value="">Catégorie</option>
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3"><input type="number" name="annee" class="form-control" placeholder="Année"></div>
                        <div class="mb-3"><input type="text" name="vin" class="form-control" placeholder="VIN"></div>
                        <div class="mb-3"><input type="date" name="date_premiere_immatriculation" class="form-control"></div>
                        <div class="mb-3"><input type="text" name="reference" class="form-control" placeholder="Référence"></div>
                        <div class="mb-3"><input type="number" name="portes" class="form-control" placeholder="Portes"></div>
                        <div class="mb-3"><input type="number" name="places" class="form-control" placeholder="Places"></div>
                    </div>

                    <!-- Col 2 -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="carburant" class="form-control">
                                <option value="">Carburant</option>
                                <option value="essence">Essence</option>
                                <option value="diesel">Diesel</option>
                                <option value="électrique">Électrique</option>
                                <option value="hybride">Hybride</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="boite_vitesse" class="form-control">
                                <option value="">Boîte de vitesse</option>
                                <option value="automatique">Automatique</option>
                                <option value="manuelle">Manuelle</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="transmission" class="form-control">
                                <option value="">Transmission</option>
                                <option value="traction avant">Traction avant</option>
                                <option value="propulsion">Propulsion</option>
                                <option value="4x4">4x4</option>
                            </select>
                        </div>
                        <div class="mb-3"><input type="number" name="kilometrage" class="form-control" placeholder="Kilométrage (km)"></div>
                        <div class="mb-3"><input type="number" name="puissance_moteur_ch" class="form-control" placeholder="Puissance moteur (ch)"></div>
                        <div class="mb-3"><input type="number" name="emission_co2" class="form-control" placeholder="Émissions CO2 (g/km)"></div>
                        <div class="mb-3"><input type="number" step="0.01" name="longueur" class="form-control" placeholder="Longueur (m)"></div>
                        <div class="mb-3"><input type="number" step="0.01" name="largeur" class="form-control" placeholder="Largeur (m)"></div>
                        <div class="mb-3"><input type="number" step="0.01" name="hauteur" class="form-control" placeholder="Hauteur (m)"></div>
                        <div class="mb-3"><input type="number" name="poids" class="form-control" placeholder="Poids (kg)"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea name="equipements_de_serie" class="form-control" placeholder="Équipements de série (ABS, airbags, GPS…)" rows="2"></textarea>
                </div>
                <div class="mb-3">
                    <textarea name="options_supplementaires" class="form-control" placeholder="Options supplémentaires (Caméra de recul, GPS, sièges chauffants…)" rows="2"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Image principale</label>
                        <input type="file" name="image_principale" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Galerie (plusieurs images)</label>
                        <input type="file" name="galerie_images[]" class="form-control" multiple>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3"><input type="number" name="prix" class="form-control" placeholder="Prix (FCFA)"></div>
                    <div class="col-md-6 mb-3"><input type="number" name="prix_mois" class="form-control" placeholder="Prix / mois (FCFA)"></div>
                </div>

                <div class="mb-3">
                    <textarea name="description" class="form-control" placeholder="Description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" name="garantie" class="form-control" placeholder="Garantie">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<!-- JS -->
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
        if (!$.fn.DataTable.isDataTable('#carsTable')) {
            $('#carsTable').DataTable({
                lengthMenu: [5, 10, 25, 50, 75, 100],
                pageLength: 10,
                ordering: true,
                order: [[0, 'asc']],
                columnDefs: [{ targets: 'datatable-nosort', orderable: false }]
            });
        }
    });
</script>
