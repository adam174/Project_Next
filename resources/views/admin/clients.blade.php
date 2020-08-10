@extends('admin.index')
@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-11 my-5">
            <div class="float-left">
                <h2>les clients</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-darken-cyan" href="{{  url()->previous() }}"> page précédente</a>
            </div>
        </div>
        <div class="col-10">
           <table class="table">
              <thead>
                 <tr>
                    <th>no</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 @foreach ($users as $key => $user)
                 <tr>
                    <td scope="row">{{$key + 1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                 <td><a name="" id="" class="btn btn-lighten-cyan" href="/admin/clients/{{$user->id}}" role="button">details</a></td>
                 </tr>
                 @endforeach
                 <tr>
                    {{ $users->links() }}
                 </tr>
                
              </tbody>
           </table>
        </div>
    </div>

</div>
@endsection