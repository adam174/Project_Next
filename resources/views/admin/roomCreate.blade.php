@extends('admin.index')
@section('title', 'Create reservation')

@section('content')
 <div class="container"> 
<h1>Welcome Admin</h1>
<div class="row my-5">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Add New room</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
  
     <div class="row container">
        
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <input type="text" name="type" class="form-control" placeholder="type">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="text" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N° Rooms:</strong>
                <input type="number" name="n_rooms" class="form-control" placeholder="1">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hotel:</strong>
                <input type="text" name="hotel_id" class="form-control" placeholder="hotel_id">
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
        <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</div>
@endsection