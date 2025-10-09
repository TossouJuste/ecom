<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order confirmation</title>
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
            <h1>Am5 Auto</h1>
            <p>Confirmation of your order</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Hello <strong>{{ $order->client->name }}</strong>,
            </div>

            <p>We are pleased to confirm your vehicle order. Your request has been successfully processed and our team will contact you shortly.</p>

            <!-- Code de suivi -->
            <div class="tracking-code">
                <p>Tracking code for your order:</p>
                <strong>{{ $order->tracking_code }}</strong>
            </div>

            <!-- Informations véhicule -->
            <div class="car-info">
                <h3>🚗 Vehicle details order</h3>
                <div class="info-item">
                    <span class="info-label">Véhicle :</span>
                    <span class="info-value">{{ $order->car->titre }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Model :</span>
                    <span class="info-value">{{ $order->car->modele }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Price :</span>
                    <span class="info-value">${{ number_format($order->prix, 0, ',', ' ') }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Payment type :</span>
                    <span class="info-value">{{ $order->type_paiement == 'financement' ? 'Financement' : 'Apport direct' }}</span>
                </div>
                @if($order->montant)
                <div class="info-item">
                    <span class="info-label">Amount paid :</span>
                    <span class="info-value">${{ number_format($order->montant, 0, ',', ' ') }}</span>
                </div>
                @endif
            </div>

            <!-- Informations contact -->
            <div class="car-info">
                <h3>📍 Your contact information</h3>
                <div class="info-item">
                    <span class="info-label">Phone number :</span>
                    <span class="info-value">{{ $order->telephone }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Address :</span>
                    <span class="info-value">{{ $order->adresse }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">City :</span>
                    <span class="info-value">{{ $order->ville }}, {{ $order->pays }}</span>
                </div>
                @if($order->code_postal)
                <div class="info-item">
                    <span class="info-label">Postcode :</span>
                    <span class="info-value">{{ $order->code_postal }}</span>
                </div>
                @endif
            </div>

            <!-- Prochaines étapes -->
           <div class="next-steps">
                <h4>📋 Next Steps:</h4>
                <ol style="margin: 15px 0; padding-left: 20px;">
                    <li>Our team will contact you within <strong>24 hours</strong></li>
                    <li>We will finalize the order details together</li>
                    <li>Vehicle preparation and delivery</li>
                    <li>Handover of keys and documentation</li>
                </ol>
            </div>
            
            <div style="text-align: center; margin: 30px 0;">
                <a href="#" class="btn">Track my order</a>
            </div>
            
            <p style="color: #666; font-style: italic; text-align: center;">
                For any questions, feel free to contact us at <strong>+221 XX XXX XX XX</strong>
                or by email at <strong>contact@dreamsrent.com</strong>
            </p>

        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>Am5 Auto</strong></p>
            <p>Your trusted partner for vehicle purchases</p>

            <div class="social-links">
                <a href="#">Facebook</a> |
                <a href="#">Twitter</a> |
                <a href="#">Instagram</a>
            </div>

            <p style="font-size: 12px; opacity: 0.8;">
                © 2015 Am5 Auto.  All Rights Reserved.<br>
            </p>
        </div>
    </div>
</body>
</html>
