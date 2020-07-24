@extends('admin.index')
@section('title', 'Hotels')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Modifier les L'information de l'Hotel</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> page précédente</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a eu quelques problèmes avec votre saisie.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('hotel.update',$hotel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
          <div class="row">
        
        <div class=" col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="name" value="{{ $hotel->name }}" class="form-control" placeholder="type">
            </div>
        </div>
        <div class=" col-md-12">
            <img src="{{ $hotel->image }}" class="img" style="width:50%" alt="">
            <div class="form-group">
                <strong>image:</strong>
               <input type="file" name="picture" class="form-control" placeholder="image">
            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group">
                <strong>location:</strong>
                <input type="text" name="location" value="{{ $hotel->location }}" class="form-control" placeholder="price">
            </div>
        </div>
        <div class=" col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                <input type="text" name="description" value="{{ $hotel->description }}" class="form-control" placeholder="1">
            </div>
        </div>
        
        <div class=" col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
   
    </form>
</div>
@endsection