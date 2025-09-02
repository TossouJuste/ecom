<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réservation</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            color: white; 
            padding: 30px; 
            text-align: center; 
        }
        .header h1 { 
            font-size: 28px; 
            margin-bottom: 10px; 
            font-weight: 300; 
        }
        .content { padding: 40px 30px; }
        .greeting { 
            font-size: 18px; 
            color: #2c3e50; 
            margin-bottom: 20px; 
        }
        .car-info { 
            background: #f8f9fa; 
            border-radius: 8px; 
            padding: 20px; 
            margin: 25px 0; 
            border-left: 4px solid #667eea; 
        }
        .car-info h3 { 
            color: #667eea; 
            margin-bottom: 15px; 
            font-size: 20px; 
        }
        .info-grid { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 15px; 
            margin: 20px 0; 
        }
        .info-item { 
            display: flex; 
            justify-content: space-between; 
            padding: 8px 0; 
            border-bottom: 1px solid #eee; 
        }
        .info-label { 
            font-weight: 600; 
            color: #555; 
        }
        .info-value { 
            color: #333; 
            font-weight: 500; 
        }
        .tracking-code { 
            background: #e8f5e8; 
            color: #27ae60; 
            padding: 15px; 
            border-radius: 8px; 
            text-align: center; 
            margin: 25px 0; 
            border: 2px dashed #27ae60; 
        }
        .tracking-code strong { 
            font-size: 18px; 
            letter-spacing: 1px; 
        }
        .next-steps { 
            background: #fff3cd; 
            color: #856404; 
            padding: 20px; 
            border-radius: 8px; 
            margin: 25px 0; 
            border-left: 4px solid #ffc107; 
        }
        .footer { 
            background: #2c3e50; 
            color: white; 
            padding: 30px; 
            text-align: center; 
        }
        .footer p { margin: 5px 0; }
        .social-links { margin: 20px 0; }
        .social-links a { 
            color: #3498db; 
            text-decoration: none; 
            margin: 0 10px; 
        }
        .btn { 
            display: inline-block; 
            background: #667eea; 
            color: white; 
            padding: 12px 30px; 
            text-decoration: none; 
            border-radius: 25px; 
            margin: 20px 0; 
            font-weight: 600; 
        }
        @media only screen and (max-width: 600px) {
            .container { margin: 0; border-radius: 0; }
            .content { padding: 20px; }
            .info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Dreams Rent</h1>
            <p>Confirmation de votre réservation</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Bonjour <strong>{{ $order->client->name }}</strong>,
            </div>

            <p>Nous avons le plaisir de confirmer votre réservation de véhicule. Votre demande a été traitée avec succès et notre équipe va prendre contact avec vous très prochainement.</p>

            <!-- Code de suivi -->
            <div class="tracking-code">
                <p>Code de suivi de votre commande :</p>
                <strong>{{ $order->tracking_code }}</strong>
            </div>

            <!-- Informations véhicule -->
            <div class="car-info">
                <h3>🚗 Détails du véhicule réservé</h3>
                <div class="info-item">
                    <span class="info-label">Véhicule :</span>
                    <span class="info-value">{{ $order->car->titre }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Modèle :</span>
                    <span class="info-value">{{ $order->car->modele }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Prix :</span>
                    <span class="info-value">{{ number_format($order->prix, 0, ',', ' ') }} FCFA</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Type de paiement :</span>
                    <span class="info-value">{{ $order->type_paiement == 'financement' ? 'Financement' : 'Apport direct' }}</span>
                </div>
                @if($order->montant)
                <div class="info-item">
                    <span class="info-label">Montant versé :</span>
                    <span class="info-value">{{ number_format($order->montant, 0, ',', ' ') }} FCFA</span>
                </div>
                @endif
            </div>

            <!-- Informations contact -->
            <div class="car-info">
                <h3>📍 Vos informations de contact</h3>
                <div class="info-item">
                    <span class="info-label">Téléphone :</span>
                    <span class="info-value">{{ $order->telephone }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Adresse :</span>
                    <span class="info-value">{{ $order->adresse }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Ville :</span>
                    <span class="info-value">{{ $order->ville }}, {{ $order->pays }}</span>
                </div>
                @if($order->code_postal)
                <div class="info-item">
                    <span class="info-label">Code postal :</span>
                    <span class="info-value">{{ $order->code_postal }}</span>
                </div>
                @endif
            </div>

            <!-- Prochaines étapes -->
            <div class="next-steps">
                <h4>📋 Prochaines étapes :</h4>
                <ol style="margin: 15px 0; padding-left: 20px;">
                    <li>Notre équipe va vous contacter dans les <strong>24h</strong></li>
                    <li>Nous finaliserons ensemble les détails de la location</li>
                    <li>Préparation et mise à disposition du véhicule</li>
                    <li>Remise des clés et documentation</li>
                </ol>
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <a href="#" class="btn">Suivre ma commande</a>
            </div>

            <p style="color: #666; font-style: italic; text-align: center;">
                Pour toute question, n'hésitez pas à nous contacter au <strong>+221 XX XXX XX XX</strong>
                ou par email à <strong>contact@dreamsrent.com</strong>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Dreams Rent</strong></p>
            <p>Votre partenaire de confiance pour la location de véhicules</p>
            
            <div class="social-links">
                <a href="#">Facebook</a> |
                <a href="#">Twitter</a> |
                <a href="#">Instagram</a>
            </div>
            
            <p style="font-size: 12px; opacity: 0.8;">
                © 2025 Dreams Rent. Tous droits réservés.<br>
                Dakar, Sénégal
            </p>
        </div>
    </div>
</body>
</html>