@extends('admin.index')
@section('title', 'Reservations')

@section('content')
<div class="container table-responsive mt-5">
    <h2>Les Reservations</h2>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Nom</th>
            <th scope="col">Arrivée</th>
            <th scope="col">Départ</th>
            <th scope="col">Type</th>
            <th scope="col">occupant(e)s</th>
            <th scope="col">prix</th>
            <th scope="col">Modifier</th> 
            <th scope="col">Effacer</th>
           <th scope="col">Voir</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $users->find($reservation->user_id)->name }} </td>
                <td>{{ $reservation->arrival }}</td>
                <td>{{ $reservation->departure }}</td>
                <td>{{ $reservation->room->type }}</td>
                <td>{{ $reservation->num_of_guests }}</td>
                <td>€{{ $reservation->price }}</td> 
                <td><a href="/admin/bookings/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Modifier</a></td>
                <form action="{{ route('bookings.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-danger">Suprimer la reservation</button></td>  
                </form>
               <td><a name="" id="" class="btn btn-sm btn-primary" href="/admin/bookings/{{ $reservation->id }}" role="button">Voir details</a></td> 
                
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
    
</div>

@endsection