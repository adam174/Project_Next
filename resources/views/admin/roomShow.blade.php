@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
 <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2> Voir les details</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> page précédente</a>
            </div>
        </div>
    </div>
   
    <div class="row">
       <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <img src="{{ $room->image }}" class="img-fluid rounded" alt="{{ $room->type }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <h2 class="text-success">Type:</h2>
                <p class="text-info">{{ $room->type }}</p>

                 <h2 class="text-success">Prix:</h2>
                <p class="text-info">{{ $room->price }}</p>

                 <h2 class="text-success">Combien des chambres en ce category ?:</h2>
                <p class="text-info">{{ $room->n_rooms }}</p>

                 <h2 class="text-success">superficie:</h2>
                <p class="text-info">{{ $room->superficie }}</p>

                 <h2 class="text-success">couchage:</h2>
                <p class="text-info">{{ $room->couchage }}</p>

                 <h2 class="text-success">occupant(e)s:</h2>
                <p class="text-info">{{ $room->occupants }}</p>

            </div>
        </div>


       
    </div>
@endsection