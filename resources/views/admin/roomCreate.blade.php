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
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="number" name="price" class="form-control" placeholder="Prix">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Combien des chambres en ce category ? : </strong>
                <input type="number" name="n_rooms" class="form-control" placeholder="1">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>superficie:</strong>
                <input type="text" name="superficie" class="form-control" placeholder="9m²">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>couchage:</strong>
                <input type="text" name="couchage" class="form-control" placeholder="1x Double lit">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>occupants:</strong>
                <input type="number" name="occupants" class="form-control" placeholder="2">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description en Anglais:</strong>
                <textarea class="form-control" rows="5" name="description_en"></textarea>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description en francais:</strong>
                <textarea class="form-control" rows="5" name="description_fr"></textarea>
            </div>
        </div>
        <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregister</button>
        </div>
    </div>
   
</form>
</div>
@endsection