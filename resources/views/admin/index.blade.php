<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Admin : Royal Hotel</title>
        <link type="text/css" rel="stylesheet" href="{{asset('css/booking.css')}}" />
        <link rel="stylesheet" href="{{asset('css/admin.css')}}"> 
        <link rel="stylesheet" href="https://mladenplavsic.github.io/bootstrap-navbar-sidebar/navbar-fixed-left.min.css">
    </head>
    <body>
        @include('admin.partials.navbar')
        <main>@yield('content')</main>
        <footer>
            @include('admin.partials.footer')
        </footer>

        
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 <script src="{{asset('js/app.js')}}"></script>
    
    </body>
</html>