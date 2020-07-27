@extends('admin.index')
@section('title', 'Create reservation')

@section('content')
<h1>Welcome Admin</h1>
<div class="fluid mx-2">
    @foreach ($hotelInfo as $option)
    <div class="room border border-info my-5">
        <form action="{{ route('bookings.create') }}" method="GET">
            @csrf
            <input type="hidden" name="room_id" value="{{$option->id}}">
            <input type="hidden" name="num_of_guests" value="{{ $option->occupants }}">
    <div class="row">
        <div class="col-lg-7">
            <img src="{{ $option->image }}" width="80%" alt="">
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
            <div class="form-check ">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="breakfast" value="0">{{ __('bookingCreate.RoomOnly') }}
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="breakfast" value="1">{{ __('bookingCreate.Wbreakfast') }}
                </label>
              </div>
              
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