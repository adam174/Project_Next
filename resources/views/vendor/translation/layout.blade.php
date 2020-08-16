@auth
   @if (Auth::user()->id ==1)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Translation |  Admin : Royal Hotel</title>
     
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/booking.css')}}">
    <link rel="stylesheet" href="https://mladenplavsic.github.io/bootstrap-navbar-sidebar/navbar-fixed-left.min.css">
</head>
<body>
     @include('admin.partials.navbar')
    <div id="app">
        
        @include('translation::nav')
        @include('translation::notifications')
        
        @yield('body')
        
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
</body>
</html>
@else 
<h1>You Don't have permission</h1>
@endif 
@endauth

