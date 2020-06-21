 @extends('admin.index')
@section('title', 'Rooms')

@section('content')
<div class="container">
   <div>
   <h1>welcome Admin</h1>
   </div>
   <a name="" id="" class="btn btn-info" href="{{ route('rooms.create') }}" role="button">Add a room</a>
   <a name="" id="" class="btn btn-primary" href="{{ route('hotel.edit') }}" role="button">Edit Hotel information</a>
</div>

<div class="container table-responsive mt-5">
    <h2>Your Rooms</h2>
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
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Manage</th> 
            <th scope="col">Delete</th>
           <th scope="col">Show</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->type }}</td>
                <td>{{ $room->image }}</td>
                <td>€{{ $room->price }}</td> 
                <td><a href="/admin/rooms/{{ $room->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-danger">Delete reservation</button></td>  
                </form>
               <td><a name="" id="" class="btn btn-sm btn-primary" href="/admin/rooms/{{ $room->id }}" role="button">Show details</a></td> 
                
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
    
</div>

@endsection