@extends('index')
@section('title', 'Reservations')

@section('content')
<div class="container table-responsive mt-5">
    <h2>Your Reservations</h2>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">name</th>
            <th scope="col">Arrival</th>
            <th scope="col">Departure</th>
            <th scope="col">Type</th>
            <th scope="col">Guests</th>
            <th scope="col">Price</th>
            @if(Auth::user()->id == 1)
            <th scope="col">Manage</th> 
            <th scope="col">Delete</th>
            @endif 
           <th scope="col">Show</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $users->find($reservation->user_id)->name }}</td>
                <td>{{ $reservation->arrival }}</td>
                <td>{{ $reservation->departure }}</td>
                <td>{{ $reservation->room['type'] }}</td>
                <td>{{ $reservation->num_of_guests }}</td>
                <td>€{{ $reservation->price }}</td>
                @if(Auth::user()->id == 1)
                <td><a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-danger">Delete reservation</button></td>  
                </form>
                @endif
               <td><a name="" id="" class="btn btn-sm btn-primary" href="/dashboard/reservations/{{ $reservation->id }}" role="button">Show details</a></td> 
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</div>

@endsection