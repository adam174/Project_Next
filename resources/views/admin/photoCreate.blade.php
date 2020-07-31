@extends('admin.index')
@section('title', 'Create reservation')

@section('content')
 <div class="container"> 
<h1>Welcome Admin</h1>
<div class="row my-5">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Ajouter une chambre</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> page précédente</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Il y a eu quelques problèmes avec votre saisie.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row container">
        
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <input type="text" name="type" class="form-control" placeholder="ex: Triple">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="file" name="picture" class="form-control" placeholder="image">
            </div>
        </div>




   
        <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregister</button>
        </div>
    </div>
   
</form>
</div>
@endsection