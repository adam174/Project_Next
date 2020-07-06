@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $hotelInfo->name }} in {{ $hotelInfo->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $hotelInfo->image }}" class="img-fluid" alt="Front of hotel">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $hotelInfo->name }} - <small>{{ $hotelInfo->location }}</small>
                        </h3>
                        <p class="card-text">{{ $hotelInfo->description }}</p>
                        <p class="card-text"><strong>Arrival: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>Departure: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>Room: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>Guests: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ $reservation->room['price'] }}</p>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="/admin/bookings/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                     <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-lg btn-danger">Delete</button>  
                </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection