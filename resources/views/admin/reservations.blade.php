@extends('admin.index')
@section('title', 'Reservations')

@section('content')
<div class="container table-responsive mt-3">
    <h2>Les Reservations</h2>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('bookings.index')}} ">
     <div class="row bg-info p-1">

              <div>
               <div class="form-group">
                 <select class="selectpicker" data-style="btn-info" name="is_paid" id="">
                   <option value="true">Payé</option>
                   <option value="false">Impayé</option>

                 </select>
               </div>
             </div>
           <div class="form-group bg-gradient-info">
             <select class="selectpicker" data-style="btn-info" name="type" id="">
                 <option value="" disabled>Select a room type</option>
                 @foreach ($rooms as $room)
                <option value="{{$room->id}}" {{($data['type'] ?? Null) == $room->id ? 'selected' : ''}}>{{$room->type}}</option>
                 @endforeach
             </select>
           </div>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>

</form>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Nom</th>
            <th scope="col">Arrivée</th>
            <th scope="col">Départ</th>
            <th scope="col">Type</th>
            <th scope="col">Payé</th>
            <th scope="col">Prix</th>
            <th scope="col">Modifier</th>
            <th scope="col">Effacer</th>
            <th scope="col">Voir</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>

                <td><a class="text-dark btn" href="/admin/clients/{{$reservation->user_id}}">{{ $reservation->client->name }}</a> </td>
                <td>{{ $reservation->arrival }}</td>
                <td>{{ $reservation->departure }}</td>
                <td>{{ $reservation->room->type }}</td>
                <td>{!! $reservation->is_paid =="succeeded" ? '<i class="fas fa-check text-success fa-2x"></i>' : '<i class="fas fa-times text-primary fa-2x"></i>' !!}</td>
                <td>€{{ $reservation->price }}</td>
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
    <div class="container">
        {{ $reservations->appends($data)->links() }}
    </div>
</div>

@endsection
