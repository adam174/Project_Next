<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>

    <h2>Bonjour {{ $client }}</h2>
    @if(isset($password))
    <h3> {{ __('auth.password') }} : {{$password}} </h3>
      @endif


    <p>Nous avons accusons réception de la demande de réservation que vous avez effectuée pour une chambre {{ $room_type }}.</p>
    <p> Nous avons pris bonne note que votre arrivée est prévue pour le {{ $arrival }}. La réservation a été faite jusqu'au {{ $departure }} comme vous l'avez demandé.</p>
    <p>Veuillez agréer, Madame / Monsieur, l'expression de nos sincères salutations.</p>
  </body>
</html>

