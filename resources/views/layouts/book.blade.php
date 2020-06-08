<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - Hotel Manager</title>
        <!-- Custom stlylesheet -->
         <link type="text/css" rel="stylesheet" href="{{asset('css/booking.css')}}" />
          <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            <link rel="stylesheet" href="{{asset('css/app_booking.css')}}">
    </head>
    <body>
        <header>
            @include('partials.nav')
        </header>
        
        
        <main>@yield('content')</main>


        <footer>
            @include('partials.footer')
        </footer>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="{{asset('js/app.js')}}"></script>  
    </body>
</html>