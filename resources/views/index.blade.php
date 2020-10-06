<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="L'hôtel Royal propose un hébergement élégant, à 5 minutes à pied seulement de la célèbre Avenue des Champs-Élysées et de l'Arc de Triomphe. Une connexion Wi-Fi est disponible gratuitement, et vous accueille dans ses chambres confortables.">
        <meta name="keywords" content="hôtel, restaurant, royal, paris, étoiles, tourisme, ile de France, séjour">
        <title>@yield('title') - Hotel Royal est un hôtel alliant calme et prestige près des Champs-Elysées et de l'Arc de Triomphe</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('csslinks')
    </head>
    <body class="bg-lighten-grey">
        @include('partials.nav')
        <main>@yield('content')</main>
        <footer>
            @include('partials.footer')
        </footer>

 <script src="{{asset('js/app.js')}}"></script>
<script>
    $('#myCarousel').carousel({
    interval: 3000,
 })
</script>
     @yield('jslinks')
    </body>
</html>
