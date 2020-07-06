@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<h1>welcome Admin</h1>
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $hotelInfo->name }} - <small class="text-muted">{{ $hotelInfo->location }}</small></h2>
        </div> 
        <div class="card-body">
            <form action="{{ route('bookings.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Type</label>
                            <select class="form-control" name="room_id" value="{{ old('room_id', $reservation->room_id) }}">
                                @foreach ($hotelInfo->rooms as $option)
                                    <option value="{{$option->id}}"{{ ($option->id == $reservation->room_id) ? "selected" : ""}} >{{ $option->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Prix</label>
                            <input class="form-control" name="price" value="{{ old('price', $reservation->price) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrivée</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020" value="{{ old('arrival', $reservation->arrival) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Départ</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020" value="{{ old('departure', $reservation->departure) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Modifer</button>
            </form>
        </div>
    </div>
    <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Effacer la reservation</button>
        </p>
    </form>
</div>
@endsection