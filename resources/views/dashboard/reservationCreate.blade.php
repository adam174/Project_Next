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
        <div class="col-lg-7">
            <img src="https://www.royal-hotel.com/_files/_media/1/Chambres/CH%20EXECUTIVE/Maranatha_09579.jpg" width="100%" alt="">
        </div>
        <div class="col-lg-5">
            <h3 class="text-primary text-uppercase">Chambre {{ $option->type }}</h3>
            <p>
               <b>Superficie</b>  :	{{ $option->superficie }} m² <br>
               <b>Couchage</b>  :	{{ $option->couchage }} <br>
               <b>Occupants</b>  :	{{ $option->occupants }} personne(s), air-conditioned room includes : <br>  
                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-wifi text-info mx-3"></i>Wifi</li>
                    <li class="list-group-item"><i class="fas fa-parking text-info mx-3"></i>Parking payant façe à l'hôtel</li>
                    <li class="list-group-item"><i class="fas fa-tv text-info mx-3"></i> Télévision écran plat avec câble et satellite</li>
                  </ul>
            </p>
            <button type="button" name="" id="" class="btn btn-link mx-auto" type="button" data-toggle="collapse" data-target="#roomdetails-{{ $option->id }}" aria-expanded="false" aria-controls="roomdetails-{{ $option->id }}" btn-lg btn-block">Room details</button>
            <div class="collapse" id="roomdetails-{{ $option->id }}">
                <div class="card card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i>Service d'étage</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i>Petit déjeuner buffet ou servi en chambre</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i> Réglage individuel de la climatisation</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i> Minibar</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i> Lignes de téléphone direct</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i> Coffre fort</li>
                        <li class="list-group-item"><i class="fas fa-vcard text-info mx-3"></i> Sèche-cheveux</li>
                      </ul>
                </div>
              </div>
        </div>
    </div>
    <div class="row border border-info bg-transparent">
        <div class="col-lg-4 sm-col-12">
            <br><span>Annulation gratuite avant le {{date('Y-m-d', strtotime($arrival. ' - 2 days'))}}</span>
            <a class="btn btn-link"  data-toggle="collapse" href="#rate-details-{{ $option->id }}" role="button" aria-expanded="false" aria-controls="rate-details-{{ $option->id }}">Rate details</a>
            <div class="collapse" id="rate-details-{{ $option->id }}">
                <div class="card card-body">
                  <b>Conditions d'annulation</b> 
                   <p>Annulation gratuite avant le {{date('Y-m-d', strtotime($arrival. ' - 2 days'))}}. Si annulée plus tard ou en cas de non présentation à l'hôtel, la première nuit sans les extras est facturée et non remboursable.
                    
                   <br> <b> Dépôt de garantie</b>
                    
                   <br> Aucun paiement en garantie. Le numéro de carte bancaire est nécessaire mais la carte ne sera pas débitée.
                    
                   <br> <b> Taxes incluses dans le prix de la chambre</b>
                    
                   <br> TVA / Taxe sur les ventes : 10,00 % du montant total de la réservation
                    
                   <br> <b> Taxes à ajouter au prix de la chambre</b>
                    
                   <br> Stay Tax : 2,88 € par personne par nuit</p>
                </div>
              </div>
        </div>
        <div class="col-lg-2 my-4">
            <div class="form-check ">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Room Only
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio">Breakfast included
                </label>
              </div>
              
        </div>
        <div class="col-lg-3 my-auto">
     <h5>{{dateDifference($arrival, $departure)}} nuits X €{{ $option->price }} = <span class="text-success"> €{{ $option->price * dateDifference($arrival, $departure) }} </span></h5> 
        </div>
        <div class="col-lg-3 my-auto">
            <button class="btn btn-primary" type="submit">
                Button with data-target
            </button>
        </div>
    </div>
    </form>
    </div>
    @endforeach
</div>
@endsection