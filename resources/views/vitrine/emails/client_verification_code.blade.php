{{-- resources/views/emails/client_verification_code.blade.php --}}
<!DOCTYPE html>
<html lang="fr"><body>
  <h2>Bonjour {{ $client->prenom }},</h2>
  <p>Merci pour votre inscription sur <b>AM5Auto</b>.</p>
  <p>Voici votre code de confirmation :</p>
  <h1 style="letter-spacing:6px">{{ $code }}</h1>
  <p>Saisissez ce code dans la fenêtre de vérification pour activer votre compte.</p>
  <p>À bientôt,<br>L’équipe AM5Auto</p>
</body></html>
