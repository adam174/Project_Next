@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
           <div class="row">
        <div class="col-lg-11 my-5">
            <div class="float-left">
                <h2>Détails de réservation</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-darken-cyan" href="{{ route('bookings.index') }}"> page précédente</a>
            </div>
        </div>
    </div>
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
                        <p class="card-text"><strong>Arrivée: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>départ: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>Type: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>Occupant(e)s: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>Prix: </strong>${{ $reservation->room['price'] }}</p>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="/admin/bookings/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Modifier la reservation</a>
                     <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-lg btn-primary">Effacer</button>  
                </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection