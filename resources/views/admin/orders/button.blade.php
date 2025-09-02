<div class="btn-group" role="group">
    <button class="btn btn-sm btn-info view-order" data-id="' . $row->id . '" title="Voir détails">
        <i class="fas fa-eye"></i>
    </button>
    <button class="btn btn-sm btn-primary update-progress" data-id="' . $row->id . '" title="Mettre à jour">
        <i class="fas fa-edit"></i>
    </button>
    <button class="btn btn-sm btn-success toggle-payment" data-id="' . $row->id . '" title="Paiement">
        <i class="fas fa-dollar-sign"></i>
    </button>
</div>
