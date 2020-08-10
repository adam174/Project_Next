@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-11 my-5">
            <div class="float-left">
                <h2>le client</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-darken-cyan" href="{{ route('clients.index') }}"> page précédente</a>
            </div>
        </div>
        <div class="col-6 text-darken-cyan font-weight-bold">
           <p>Nom      :  <span>{{$client->name}}</span></p>
           <p>Email    :  <span>{{$client->email}}</span></p>
           <p>Mobile   :  <span>{{$client->mobile}}</span></p>
           <p>Pays     :  <span>{{$client->countryy->nicename}}</span></p>
           
        </div>
        <div class="col-10">
           <table class="table">
              <thead>
                 <tr>
                    <th>No</th>
                    <th>Chambre</th>
                    <th>Arrivé</th>
                    <th>Depart</th>
                    <th>Prix</th>
                    <th>Moyen de Paiement</th>
                    <th>Payé?</th>
                    <th colspan="3" scope="colgroup" class="text-center">Action</th>
                 </tr>
              </thead>
              <tbody>
                 @foreach ($client->bookings as $key => $reservation)
                 <tr>
                 <td scope="row">{{$key + 1}}</td>
                 <td>{{$reservation->room->type}}</td>
                 <td>{{$reservation->arrival}}</td>
                 <td>{{$reservation->departure}}</td>
                 <td>{{$reservation->price}}</td>
                 <td>{{$reservation->payment_type}}</td>
                 <td>{!! $reservation->is_paid ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-times" aria-hidden="true"></i>' !!}</td>
                 <td><a href="/admin/bookings/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Modifier</a></td>
                <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-primary">Suprimer la reservation</button></td>  
                </form>
               <td><a name="" id="" class="btn btn-sm btn-lighten-cyan" href="/admin/bookings/{{ $reservation->id }}" role="button">Voir details</a></td>
                 </tr>
                 @endforeach
                
              </tbody>
           </table>
        </div>
    </div>

</div>
@endsection