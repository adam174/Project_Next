@extends('admin.index')
@section('title', 'Rooms')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Edit Product</h2>
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
  
    <form action="{{ route('rooms.update',$room->id) }}" method="POST">
        @csrf
        @method('PUT')
   
          <div class="row">
        
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <input type="text" name="type" value="{{ $room->type }}" class="form-control" placeholder="type">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="text" name="image" value="{{ $room->image }}" class="form-control" placeholder="image">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input type="number" name="price" value="{{ $room->price }}" class="form-control" placeholder="price">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N° Rooms:</strong>
                <input type="number" name="n_rooms" value="{{ $room->n_rooms }}" class="form-control" placeholder="1">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hotel:</strong>
                <input type="text" name="hotel_id" value="{{ $room->hotel_id }}" class="form-control" placeholder="hotel_id">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>superficie:</strong>
                <input type="text" name="superficie" value="{{ $room->superficie }}" class="form-control" placeholder="9m²">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>couchage:</strong>
                <input type="text" name="couchage" value="{{ $room->couchage }}" class="form-control" placeholder="1x Double lit">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>occupants:</strong>
                <input type="number" name="occupants" value="{{ $room->occupants }}" class="form-control" placeholder="2">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
</div>
@endsection