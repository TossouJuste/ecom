<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle commande</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f4f4f4; 
            color: #333; 
            line-height: 1.6;
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            background: white; 
            border-radius: 10px; 
            overflow: hidden; 
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header { 
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); 
            color: white; 
            padding: 30px; 
            text-align: center; 
        }
        .header h1 { 
            font-size: 24px; 
            margin-bottom: 10px; 
        }
        .alert { 
            background: #fff3cd; 
            color: #856404; 
            padding: 15px; 
            border-left: 4px solid #ffc107; 
            margin: 20px 30px; 
        }
        .content { padding: 30px; }
        .order-details { 
            background: #f8f9fa; 
            border-radius: 8px; 
            padding: 25px; 
            margin: 20px 0; 
        }
        .detail-row { 
            display: flex; 
            justify-content: space-between; 
            padding: 10px 0; 
            border-bottom: 1px solid #dee2e6; 
        }
        .detail-row:last-child { border-bottom: none; }
        .label { font-weight: 600; color: #495057; }
        .value { color: #212529; font-weight: 500; }
        .priority-high { 
            background: #f8d7da; 
            color: #721c24; 
            padding: 20px; 
            border-radius: 8px; 
            margin: 20px 0; 
            border-left: 4px solid #dc3545; 
        }
        .btn-admin { 
            display: inline-block; 
            background: #28a745; 
            color: white; 
            padding: 15px 30px; 
            text-decoration: none; 
            border-radius: 5px; 
            margin: 20px 10px; 
            font-weight: 600; 
        }
        .btn-secondary { 
            background: #6c757d; 
        }
        .footer { 
            background: #343a40; 
            color: white; 
            padding: 20px; 
            text-align: center; 
            font-size: 14px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🚨 Nouvelle Commande Reçue</h1>
            <p>Administration Dreams Rent</p>
        </div>

        <!-- Alert -->
        <div class="alert">
            <strong>⏰ Action requise :</strong> Une nouvelle réservation nécessite votre attention
        </div>

        <!-- Content -->
        <div class="content">
            <p>Une nouvelle commande vient d'être passée sur le site Dreams Rent.</p>

            <!-- Détails commande -->
            <div class="order-details">
                <h3 style="color: #e74c3c; margin-bottom: 20px;">📋 Détails de la commande</h3>
                
                <div class="detail-row">
                    <span class="label">Code de suivi :</span>
                    <span class="value" style="background: #e8f5e8; padding: 5px 10px; border-radius: 3px;">
                        {{ $order->tracking_code }}
                    </span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Date :</span>
                    <span class="value">{{ $order->created_at->format('d/m/Y à H:i') }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Statut :</span>
                    <span class="value" style="color: #ffc107; font-weight: bold;">EN ATTENTE</span>
                </div>
            </div>

            <!-- Détails client -->
            <div class="order-details">
                <h3 style="color: #17a2b8; margin-bottom: 20px;">👤 Informations client</h3>
                
                <div class="detail-row">
                    <span class="label">Nom :</span>
                    <span class="value">{{ $order->client->name }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Email :</span>
                    <span class="value">{{ $order->client->email }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Téléphone :</span>
                    <span class="value">{{ $order->telephone }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Adresse :</span>
                    <span class="value">{{ $order->adresse }}, {{ $order->ville }}, {{ $order->pays }}</span>
                </div>
            </div>

            <!-- Détails véhicule -->
            <div class="order-details">
                <h3 style="color: #28a745; margin-bottom: 20px;">🚗 Véhicule demandé</h3>
                
                <div class="detail-row">
                    <span class="label">Véhicule :</span>
                    <span class="value">{{ $order->car->titre }}</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Prix :</span>
                    <span class="value">{{ number_format($order->prix, 0, ',', ' ') }} FCFA</span>
                </div>
                
                <div class="detail-row">
                    <span class="label">Type de paiement :</span>
                    <span class="value">{{ $order->type_paiement == 'financement' ? 'Financement' : 'Apport direct' }}</span>
                </div>
                
                @if($order->montant)
                <div class="detail-row">
                    <span class="label">Montant proposé :</span>
                    <span class="value" style="color: #28a745; font-weight: bold;">
                        {{ number_format($order->montant, 0, ',', ' ') }} FCFA
                    </span>
                </div>
                @endif
            </div>

            <!-- Actions prioritaires -->
            <div class="priority-high">
                <h4>🔥 Actions à effectuer :</h4>
                <ol style="margin: 15px 0; padding-left: 20px;">
                    <li>Vérifier la disponibilité du véhicule</li>
                    <li>Contacter le client dans les 2h</li>
                    <li>Finaliser les conditions de location</li>
                    <li>Mettre à jour le statut de la commande</li>
                </ol>
            </div>

            <!-- Boutons d'action -->
            <div style="text-align: center; margin: 30px 0;">
                <a href="#" class="btn-admin">Traiter la commande</a>
                <a href="#" class="btn-admin btn-secondary">Voir tous les détails</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Administration Dreams Rent | Tableau de bord</p>
            <p style="opacity: 0.8; font-size: 12px; margin-top: 10px;">
                Cet email a été généré automatiquement - {{ date('d/m/Y H:i') }}
            </p>
        </div>
    </div>
</body>
</html>