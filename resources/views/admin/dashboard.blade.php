@extends('admin.index')
@section('title', 'Dashboard')

@section('content')
<h1>Welcome Admin</h1>
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('dashboard.Dashboard') }}</h4>
                <p class="card-text">{{ __('dashboard.Bookings') }}</p>
                <a href="/admin/bookings" class="btn btn-primary">{{ __('dashboard.Reservations') }}</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('dashboard.Book') }}</h4>
                <p class="card-text">{{ __('dashboard.Rooms') }}</p>
                <a href="/reserver" class="btn btn-primary">{{ __('dashboard.Checkout') }}</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection