@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-11 my-5">
            <div class="float-left">
                <h2>Modifier une reservation</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-darken-cyan" href="{{ route('bookings.index') }}"> page précédente</a>
            </div>
        </div>
    </div>
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $hotelInfo->name }} - <small class="text-muted">{{ $hotelInfo->location }}</small></h2>
        </div>
        <div class="card-body">
           @error('error')
            <p class="alert alert-danger">{{ __('validation.notavailable') }} : {{ $message }}</p>
            @enderror
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
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-group">
                              <label for="paid">payé</label>
                              <select class="form-control" name="paid">
                                <option selected>----</option>
                                <option value="0">Oui</option>
                                <option value="1">Non</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-group">
                              <label for="paid">Moyens de paiement</label>
                              <select class="form-control" name="payment">
                                <option selected>----</option>
                                <option value="0">Visa</option>
                                <option value="1">Mastercard</option>
                                <option value="2">Chèque</option>
                                <option value="3">Virement bancaire</option>
                                <option value="4">En espèces</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrivée</label>
                            <input type="date" class="form-control" name="arrival"  placeholder="{{ old('arrival', $reservation->arrival) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Départ</label>
                            <input type="date" class="form-control" name="departure" placeholder="{{ old('departure', $reservation->departure) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-info">Modifer</button>
            </form>
        </div>
    </div>
    <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-primary">Effacer la reservation</button>
        </p>
    </form>
</div>
@endsection
