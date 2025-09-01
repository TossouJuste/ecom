<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de commande</title>
</head>
<body>
    <h2>Merci pour votre réservation!</h2>
    
    <p>Bonjour {{ $order->client->name }},</p>
    
    <p>Votre réservation a été confirmée avec succès.</p>
    
    <h3>Détails de la commande:</h3>
    <ul>
        <li><strong>Code de suivi:</strong> {{ $order->tracking_code }}</li>
        <li><strong>Véhicule:</strong> {{ $order->car->titre }}</li>
        <li><strong>Prix:</strong> {{ number_format($order->prix, 0, ',', ' ') }} FCFA</li>
        <li><strong>Type de paiement:</strong> {{ ucfirst($order->type_paiement) }}</li>
        @if($order->montant)
            <li><strong>Montant versé:</strong> {{ number_format($order->montant, 0, ',', ' ') }} FCFA</li>
        @endif
        <li><strong>Téléphone:</strong> {{ $order->telephone }}</li>
        <li><strong>Adresse:</strong> {{ $order->adresse }}, {{ $order->ville }}, {{ $order->pays }}</li>
    </ul>
    
    <p>Nous vous contacterons sous peu pour finaliser les détails.</p>
    
    <p>Cordialement,<br>L'équipe Dreams Rent</p>
</body>
</html>
