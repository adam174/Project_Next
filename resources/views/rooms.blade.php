@extends('index')
@section('title', 'rooms')

@section('content')
<!--//******************** header*******************// -->
<!--jumbotron -->
<div class="jumbotron-bg-image">
  <div class="jumbotron jumbotron-fluid  bg-warning">
      <div class="container text-center">
          <h1 class="display-3">Royal Hotel Paris</h1>
          <p class="lead">{{ __('rooms.header') }}</p>
          <div class="btn-group" role="group">
              <a name="" id="" class="btn btn-lighten-teal" href="/reserver" role="button">{{ __('bookingCreate.Checkavailability') }}</a>
          </div>
      </div>
  </div>
</div>

<!-- //******************** Rooms*******************//  -->
<div class="how-section1">
    @foreach($rooms as $room)
    @if($room->id  % 2 == 0)
       <div class="row">
      <div class="col-md-6">
          <h4>{{$room->type}}</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} {{$room->price}}€.</h4>
                      <p class="text-muted">@lang('rooms.'.$room->type)</p>
      </div>
      <div class="col-md-6 how-img">
          <img src="{{$room->image}}" class="rounded-lg img-fluid" alt="Chambre {{$room->type}}"/>
      </div>
  </div>
    @else
     <div class="row">
      <div class="col-md-6 how-img">
          <img src="{{$room->image}}" class="rounded-lg img-fluid" alt="Chambre {{$room->type}}"/>
      </div>
      <div class="col-md-6">
          <h4>{{$room->type}}</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} {{$room->price}}€.</h4>
      <p class="text-muted">@lang('rooms.'.$room->type)</p>
      </div>
  </div>
    @endif

@endforeach

</div>

@endsection
