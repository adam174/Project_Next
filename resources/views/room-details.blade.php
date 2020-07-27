@extends('index')
@section('title', 'rooms')

@section('content')
<div class="container">
<div class="row">
    @foreach ($rooms as $room)

    <div class="col-md-8">
        <!-- Card -->
     <div class="card booking-card">
     
     <!-- Card image -->
     <div class="view overlay">
     <img class="card-img-top" src="{{ $room->image }}" alt="{{ $room->type }}">
     </div>
     
     <!-- Card content -->
     <div class="card-body">
     
     <!-- Title -->
     <h4 class="card-title font-weight-bold"><a>{{ $room->type }}</a></h4>
     <!-- Data -->
     <ul class="list-unstyled list-inline rating mb-0">
     <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
     <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
     <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
     <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
     <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
     <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
     </ul>
     <p class="mb-2">{{ $room->type }}</p>
     <!-- Text -->
     <p class="card-text py-5">{{ $room->description }}.</p>
     <hr class="my-1">
     <!-- Button -->
     <button type="button" class="btn btn-unique">Book</button>
     
     </div>
     
     </div>
     <!-- Card -->
      </div>  


      @endforeach
</div>
</div>

@endsection