@extends('layouts.book')
@section('title', 'Create reservation')

@section('content')
<div class="fluid mx-2">
    @foreach ($hotelInfo as $option)
    <div class="room border border-info my-5">
        <form action="{{ route('reservations.checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value="{{$option->id}}">
            <input type="hidden" name="num_of_guests" value="{{ $option->occupants }}">
    <div class="row">
        <div class="col-lg-6">
            <div id="carousel-{{$option->id}}" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                 <div class="embed-responsive embed-responsive-4by3">
                <img class="card-img-top embed-responsive-item" src="{{$option->image}}" alt="First slide">
                </div>
                </div>
            @foreach ($option->photos as $gallery)
               <div class="carousel-item">
                   <div class="embed-responsive embed-responsive-4by3">
                        <img alt="{{$option->type}}" class="card-img-top embed-responsive-item" src="{{$gallery->photo}}" />
                    </div>
                </div>
            @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carousel-{{$option->id}}" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-{{$option->id}}" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>
        <div class="col-lg-5">
            <h3 class="text-primary text-uppercase">{{ __('bookingCreate.Room') }} {{ $option->type }}</h3>
            <p>
               <b>{{ __('bookingCreate.Area') }}</b>  :	{{ $option->superficie }} m² <br>
               <b>{{ __('bookingCreate.Bed') }}</b>  :	{{ $option->couchage }} <br>
               <b>Occupants</b>  :	{{ $option->occupants }} {{ __('bookingCreate.Person') }},  : <br>
                    <ul class="list-group">
                   @foreach ($services as $service)
                   @if (in_array($service->id, $option->services))
                       <li class="list-group-item"><i class="far fa-check-square text-success"></i> {{ __('services.'.$service->key) }}</li>
                   @endif

                   @endforeach


                  </ul>
            </p>

        </div>
    </div>
    <div class="row border border-info bg-transparent">
        <div class="col-lg-4 sm-col-12">
            <br><span>{{ __('bookingCreate.Conditions') }} {{date('Y-m-d', strtotime($arrival. ' - 2 days'))}}</span>
            <a class="btn btn-outline-info"  data-toggle="collapse" href="#rate-details-{{ $option->id }}" role="button" aria-expanded="false" aria-controls="rate-details-{{ $option->id }}"><i class="fa fa-arrow-down" aria-hidden="true"></i> {{ __('bookingCreate.More') }}</a>
            <div class="collapse" id="rate-details-{{ $option->id }}">
                <div class="card card-body">
                 @lang('bookingCreate.warranty')
                </div>
              </div>
        </div>
        <div class="col-lg-2 my-4">


        </div>
        <div class="col-lg-3 my-auto">
     <h5>{{dateDifference($arrival, $departure)}} {{ __('bookingCreate.Nights') }} X €{{ $option->price }} = <span class="text-success"> €{{ $option->price * dateDifference($arrival, $departure) }} </span></h5>
        </div>
        <div class="col-lg-3 my-auto">
            <button class="btn btn-success p-4" type="submit">
                {{ __('dashboard.Checkout') }}
            </button>
        </div>
    </div>
    </form>
    </div>
    @endforeach
</div>
@endsection
