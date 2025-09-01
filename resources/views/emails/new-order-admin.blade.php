<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle commande</title>
</head>
<body>
    <h2>Nouvelle commande reçue</h2>
    
    <p>Une nouvelle commande a été passée sur le site.</p>
    
    <h3>Détails:</h3>
    <ul>
        <li><strong>Code:</strong> {{ $order->tracking_code }}</li>
        <li><strong>Client:</strong> {{ $order->client->name }} ({{ $order->client->email }})</li>
        <li><strong>Véhicule:</strong> {{ $order->car->titre }}</li>
        <li><strong>Prix:</strong> {{ number_format($order->prix, 0, ',', ' ') }} FCFA</li>
        <li><strong>Type paiement:</strong> {{ ucfirst($order->type_paiement) }}</li>
        @if($order->montant)
            <li><strong>Montant:</strong> {{ number_format($order->montant, 0, ',', ' ') }} FCFA</li>
        @endif
        <li><strong>Téléphone:</strong> {{ $order->telephone }}</li>
        <li><strong>Adresse:</strong> {{ $order->adresse }}, {{ $order->ville }}, {{ $order->pays }}</li>
    </ul>
    
    <p>Connectez-vous à l'administration pour traiter cette commande.</p>
</body>
</html>