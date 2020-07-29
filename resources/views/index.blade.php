<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Royal Hotel</title>
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