<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h2>Bonjour {{ $client }}</h2>
    <p>Nous avons accusons réception de la demande de réservation que vous avez effectuée pour une chambre {{ $room_type }}.</p> 
    <p> Nous avons pris bonne note que votre arrivée est prévue pour le {{ $arrival }}. La réservation a été faite jusqu'au {{ $departure }} comme vous l'avez demandé.</p> 
    <p> Concernant les modalités de séjour, il s'agit d'un séjour de ___ jours  pour [Indiquez le nombre de personnes] personnes pour une somme de _____ [Indiquez le montant] euros.</p>
    <p>Veuillez agréer, Madame / Monsieur, l'expression de nos sincères salutations.</p>
  </body>
</html>