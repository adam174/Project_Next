@extends('admin.index')
@section('title', 'Rooms')
@section('cssfiles')
     <style type="text/css">
   .img-wraps {
    position: relative;
    display: inline-block;
   
    font-size: 0;
}
.img-wraps .closes {
    position: absolute;
    top: 5px;
    right: 8px;
    z-index: 100;
    background-color: #FFF;
    padding: 4px 3px;
    
    color: #000;
    font-weight: bold;
    cursor: pointer;
   
    text-align: center;
    font-size: 22px;
    line-height: 10px;
    border-radius: 50%;
    border:1px solid red;
}
.img-wraps:hover .closes {
    opacity: 1;
}
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-11 my-5">
            <div class="float-left">
                <h2>Modifier une chambre</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-darken-cyan" href="{{ route('rooms.index') }}"> page précédente</a>
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
  
    <form action="{{ route('rooms.update',$room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
          <div class="row border border-info p-2">
        
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>type:</strong>
                <input type="text" name="type" value="{{ $room->type }}" class="form-control" placeholder="type">
            </div>
        </div>
        <div class=" col-md-12">
            <img src="{{ $room->image }}" class="img" style="width:50%" alt="">
            <div class="form-group">
                <strong>image:</strong>
               <input type="file" name="picture" class="form-control" placeholder="image">
            </div>
        </div>
    
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="number" name="price" value="{{ $room->price }}" class="form-control" placeholder="price">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Combien des chambres en ce category ?:</strong>
                <input type="number" name="n_rooms" value="{{ $room->n_rooms }}" class="form-control" placeholder="1">
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
                <strong>Combien des occupants maximum:</strong>
                <input type="number" name="occupants" value="{{ $room->occupants }}" class="form-control" placeholder="2">
            </div>
        </div>
        <div class=" col-sm-12 col-md-12">
           
                <strong>Services:</strong>
                @foreach ($services as $service) 
                <div class="form-check">
                <input class='form-check-input' id="service-{{$service->id}}" type='checkbox' name='services[]' value='{{$service->id}}' @if (in_array($service->id, $room->services)) checked="checked" @endif>
                 <label class="form-check-label" for="service-{{$service->id}}">{{ __('services.'.$service->key) }} </label>
               </div>
                 @endforeach
        </div>
        <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info">Enregistrer</button>
        </div>
    </div>
   
    </form>
        
    <div class='list-group gallery border border-info my-5'>
<div class="row ">

            @if($room->photos->count())
                @foreach($room->photos as $image)
                <div class="col-md-3 mt-4">
                 <div  class="img-wraps">
                        <form action="{{ route('photos.destroy', $image->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="closes">&times;</button>
                        </form>
                    <img src="{{$image->photo}}" class="img-fluid" style="width: 100%; height: 15vw; object-fit: cover;">
                </div>
                </div>
               
                @endforeach
            @endif
            <div class="container">
        @if(session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div> 
 @endif
<form method="post" action="{{route('photos.store')}}" enctype="multipart/form-data">
  @csrf

          <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button id="add" class="btn btn-success" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
          </div>
        </div>
        <div class="clone hide d-none">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
          <input type="hidden" name="room_id" value="{{$room->id}}">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
       <div class=" col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-info">Enregistrer</button>
        </div>

  </form>     


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div>
@endsection
@section('jsfiles')
<script type="text/javascript">

    $(document).ready(function() {

      $("#add").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection