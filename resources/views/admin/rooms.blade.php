 @extends('admin.index')
@section('title', 'Rooms')

@section('content')
<div class="container">
   <div>
   <h1>welcome Admin</h1>
   </div>
   <a name="" id="" class="btn btn-info" href="{{ route('rooms.create') }}" role="button">Ajouter une chambre</a>
   <a name="" id="" class="btn btn-primary" href="/admin/hotel/1/edit" role="button">Modifier les informations de l'hotel</a>
</div>

<div class="container table-responsive mt-5">
    <h2>Vos Chambres</h2>
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
            <th scope="col">Type</th>
            <th scope="col">Prix</th>
            <th scope="col">Modifier</th> 
            <th scope="col">Effacer</th>
           <th scope="col">Voir</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->type }}</td>
                <td>{{ $room->image }}</td>
                <td>€{{ $room->price }}</td> 
                <td><a href="/admin/rooms/{{ $room->id }}/edit" class="btn btn-sm btn-success">Modifier</a></td>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-danger">Effacer la reservation</button></td>  
                </form>
               <td><a name="" id="" class="btn btn-sm btn-primary" href="/admin/rooms/{{ $room->id }}" role="button">Voir les details</a></td> 
                
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
    
</div>

@endsection