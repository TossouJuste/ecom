<!-- EMAIL MISE À JOUR PROGRESSION -->
<!-- resources/views/emails/order-progress-update.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour de votre réservation</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f8f9fa; 
            color: #333; 
            line-height: 1.6;
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            background: white; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .header { 
            background: linear-gradient(135deg, #4CAF50 0%, #45a049 100%); 
            color: white; 
            padding: 30px; 
            text-align: center; 
            position: relative;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="0%"><stop offset="0%" stop-color="white" stop-opacity="0.1"/><stop offset="100%" stop-color="white" stop-opacity="0"/></radialGradient></defs><rect width="100" height="20" fill="url(%23a)"/></svg>');
        }
        .header h1 { 
            font-size: 28px; 
            margin-bottom: 10px; 
            font-weight: 300; 
            position: relative;
            z-index: 1;
        }
        .header p {
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }
        .content { 
            padding: 40px 30px; 
        }
        .greeting { 
            font-size: 18px; 
            color: #2c3e50; 
            margin-bottom: 20px; 
        }
        .progress-section { 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); 
            border-radius: 12px; 
            padding: 25px; 
            margin: 25px 0; 
            border-left: 5px solid #4CAF50; 
            position: relative;
            overflow: hidden;
        }
        .progress-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20px;
            width: 100px;
            height: 200%;
            background: linear-gradient(90deg, transparent, rgba(76, 175, 80, 0.1), transparent);
            animation: shimmer 3s infinite;
        }
        @keyframes shimmer {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(100px); }
        }
        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .progress-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
        }
        .progress-percentage {
            background: #4CAF50;
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 16px;
        }
        .progress-bar-container {
            background: #e0e0e0;
            height: 25px;
            border-radius: 15px;
            overflow: hidden;
            margin: 15px 0;
            position: relative;
        }
        .progress-bar {
            background: linear-gradient(90deg, #4CAF50, #66BB6A);
            height: 100%;
            border-radius: 15px;
            position: relative;
            transition: width 0.3s ease;
        }
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: slide 2s infinite;
        }
        @keyframes slide {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        .progress-description {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 3px solid #4CAF50;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .order-summary { 
            background: #fff; 
            border: 1px solid #dee2e6;
            border-radius: 12px; 
            padding: 25px; 
            margin: 25px 0; 
        }
        .order-summary h3 { 
            color: #495057; 
            margin-bottom: 20px; 
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .order-summary h3::before {
            content: '📋';
            margin-right: 10px;
            font-size: 20px;
        }
        .info-row { 
            display: flex; 
            justify-content: space-between; 
            padding: 10px 0; 
            border-bottom: 1px solid #f8f9fa; 
        }
        .info-row:last-child { 
            border-bottom: none; 
        }
        .info-label { 
            font-weight: 600; 
            color: #6c757d; 
        }
        .info-value { 
            color: #212529; 
            font-weight: 500; 
        }
        .status-update { 
            background: #e8f5e8; 
            color: #155724; 
            padding: 20px; 
            border-radius: 10px; 
            margin: 25px 0; 
            border: 2px solid #c3e6cb; 
            text-align: center;
        }
        .status-update strong { 
            font-size: 18px; 
            display: block;
            margin-bottom: 10px;
        }
        .contact-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
            text-align: center;
        }
        .contact-section h4 {
            color: #495057;
            margin-bottom: 15px;
        }
        .btn { 
            display: inline-block; 
            background: linear-gradient(135deg, #4CAF50, #45a049); 
            color: white; 
            padding: 12px 30px; 
            text-decoration: none; 
            border-radius: 25px; 
            margin: 15px 10px; 
            font-weight: 600; 
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.4);
        }
        .footer { 
            background: #2c3e50; 
            color: white; 
            padding: 30px; 
            text-align: center; 
        }
        .footer p { 
            margin: 8px 0; 
        }
        .social-links { 
            margin: 20px 0; 
        }
        .social-links a { 
            color: #4CAF50; 
            text-decoration: none; 
            margin: 0 10px; 
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #66BB6A;
        }
        .timeline {
            margin: 20px 0;
        }
        .timeline-item {
            display: flex;
            align-items: center;
            margin: 15px 0;
            padding: 10px 0;
        }
        .timeline-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #4CAF50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
        }
        .timeline-icon.completed {
            background: #4CAF50;
        }
        .timeline-icon.current {
            background: #2196F3;
            animation: pulse 2s infinite;
        }
        .timeline-icon.pending {
            background: #9E9E9E;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .timeline-content h5 {
            margin: 0;
            color: #2c3e50;
            font-size: 16px;
        }
        .timeline-content small {
            color: #6c757d;
        }
        @media only screen and (max-width: 600px) {
            .container { 
                margin: 0; 
                border-radius: 0; 
            }
            .content { 
                padding: 20px; 
            }
            .progress-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .progress-percentage {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Dreams Rent</h1>
            <p>Mise à jour de votre réservation</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Bonjour <strong>{{ $order->client->name }}</strong>,
            </div>

            <p>Nous avons une mise à jour concernant votre réservation. Notre équipe a progressé sur votre dossier et souhaite vous tenir informé de l'avancement.</p>

            <!-- Section Progression -->
            <div class="progress-section">
                <div class="progress-header">
                    <div class="progress-title">Avancement de votre dossier</div>
                    <div class="progress-percentage">{{ $order->completion_percentage }}%</div>
                </div>
                
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: {{ $order->completion_percentage }}%"></div>
                </div>

                @if($order->admin_description)
                <div class="progress-description">
                    <h4 style="color: #4CAF50; margin-bottom: 10px;">Dernière mise à jour :</h4>
                    <p>{{ $order->admin_description }}</p>
                    <small class="text-muted">
                        Mise à jour le {{ $order->last_updated_by_admin ? $order->last_updated_by_admin->format('d/m/Y à H:i') : 'Maintenant' }}
                    </small>
                </div>
                @endif
            </div>

            <!-- Timeline des étapes -->
            <div class="order-summary">
                <h3>Étapes de traitement</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-icon completed">✓</div>
                        <div class="timeline-content">
                            <h5>Commande reçue</h5>
                            <small>{{ $order->created_at->format('d/m/Y') }}</small>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-icon {{ $order->completion_percentage >= 25 ? 'completed' : ($order->completion_percentage > 0 ? 'current' : 'pending') }}">
                            {{ $order->completion_percentage >= 25 ? '✓' : '2' }}
                        </div>
                        <div class="timeline-content">
                            <h5>Vérification et préparation</h5>
                            <small>Validation des documents et préparation du véhicule</small>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-icon {{ $order->completion_percentage >= 75 ? 'completed' : ($order->completion_percentage >= 25 ? 'current' : 'pending') }}">
                            {{ $order->completion_percentage >= 75 ? '✓' : '3' }}
                        </div>
                        <div class="timeline-content">
                            <h5>Finalisation</h5>
                            <small>Préparation pour la remise du véhicule</small>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-icon {{ $order->completion_percentage >= 100 ? 'completed' : ($order->completion_percentage >= 75 ? 'current' : 'pending') }}">
                            {{ $order->completion_percentage >= 100 ? '✓' : '4' }}
                        </div>
                        <div class="timeline-content">
                            <h5>Véhicule prêt</h5>
                            <small>Disponible pour récupération</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Récapitulatif commande -->
            <div class="order-summary">
                <h3>Récapitulatif de votre réservation</h3>
                
                <div class="info-row">
                    <span class="info-label">Code de suivi :</span>
                    <span class="info-value"><code style="background: #f8f9fa; padding: 3px 8px; border-radius: 3px;">{{ $order->tracking_code }}</code></span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Véhicule :</span>
                    <span class="info-value">{{ $order->car->titre }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Modèle :</span>
                    <span class="info-value">{{ $order->car->modele }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Statut actuel :</span>
                    <span class="info-value">
                        <span style="background: #e3f2fd; color: #1976d2; padding: 4px 12px; border-radius: 15px; font-size: 12px; font-weight: bold;">
                            {{ ucfirst($order->status) }}
                        </span>
                    </span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">Prix total :</span>
                    <span class="info-value" style="color: #4CAF50; font-weight: bold;">
                        {{ number_format($order->prix, 0, ',', ' ') }} FCFA
                    </span>
                </div>
            </div>

            <!-- Message selon le pourcentage -->
            @if($order->completion_percentage >= 100)
            <div class="status-update" style="background: #d4edda; color: #155724; border-color: #c3e6cb;">
                <strong>🎉 Votre véhicule est prêt !</strong>
                <p>Félicitations ! Votre réservation est finalisée. Vous pouvez maintenant récupérer votre véhicule.</p>
            </div>
            @elseif($order->completion_percentage >= 75)
            <div class="status-update" style="background: #cce5ff; color: #004085; border-color: #99d6ff;">
                <strong>⚡ Finalisation en cours</strong>
                <p>Nous finalisons votre dossier. Vous serez contacté très prochainement pour la remise des clés.</p>
            </div>
            @elseif($order->completion_percentage >= 25)
            <div class="status-update" style="background: #fff3cd; color: #856404; border-color: #ffeaa7;">
                <strong>🔧 Traitement en cours</strong>
                <p>Nous travaillons activement sur votre demande. Merci de votre patience.</p>
            </div>
            @else
            <div class="status-update">
                <strong>📋 Dossier en cours d'analyse</strong>
                <p>Nous avons bien reçu votre demande et commençons le traitement de votre dossier.</p>
            </div>
            @endif

            <!-- Section contact -->
            <div class="contact-section">
                <h4>Une question ? Nous sommes là pour vous aider</h4>
                <p>N'hésitez pas à nous contacter pour toute information complémentaire</p>
                
                <div>
                    <a href="tel:+221XXXXXXXX" class="btn">📞 Nous appeler</a>
                    <a href="mailto:contact@dreamsrent.com" class="btn">✉️ Nous écrire</a>
                </div>
            </div>

            <p style="color: #666; font-style: italic; text-align: center; margin-top: 30px;">
                Vous recevrez une nouvelle notification à chaque étape importante de votre réservation.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Dreams Rent</strong></p>
            <p>Votre partenaire de confiance pour la location de véhicules</p>
            
            <div class="social-links">
                <a href="#">Facebook</a> |
                <a href="#">Twitter</a> |
                <a href="#">Instagram</a> |
                <a href="#">WhatsApp</a>
            </div>
            
            <p style="font-size: 12px; opacity: 0.8; margin-top: 15px;">
                © 2025 Dreams Rent. Tous droits réservés.<br>
                Dakar, Sénégal | contact@dreamsrent.com
            </p>
            
            <p style="font-size: 11px; opacity: 0.6; margin-top: 10px;">
                Vous recevez cet email car vous avez une réservation active avec nous.<br>
                Code de suivi: {{ $order->tracking_code }}
            </p>
        </div>
    </div>
</body>
</html>