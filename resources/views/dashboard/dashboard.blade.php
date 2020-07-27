@extends('index')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid bg-lighten-grey py-5">
   <div class="container text-center ">
    <div class="row py-5">
        <div class="col-sm-6 py-5">
            <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title">{{ __('dashboard.Dashboard') }}</h4>
                <p class="card-text">{{ __('dashboard.Bookings') }}</p>
                <a href="/dashboard/reservations" class="btn btn-outline-darken-orange">{{ __('dashboard.Reservations') }}</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 py-5">
            <div class="card">
            <div class="card-body bg-dark">
                <h4 class="card-title">{{ __('dashboard.Book') }}</h4>
                <p class="card-text">{{ __('dashboard.Rooms') }}</p>
                <a href="/reserver" class="btn btn-outline-darken-orange">{{ __('dashboard.Checkout') }}</a>
            </div>
            </div>
        </div>
    </div>
</div> 
</div>

@endsection