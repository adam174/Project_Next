@extends('index') {{-- Specify that we want to extend the index file --}}
@section('title', 'Gallery') {{-- Set the title content to "Home" --}}
{{--  Set the "content" section, which will replace "@yield('content')" in the index file we're extending --}}
@section('csslinks')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <style>
       .modal-title{
          color: #341265 !important;
       }
    </style>
@endsection
@section('content')


<div class="container-fluid text-darken-purple">
    <h2>Image Gallery</h2>
    <div class="row text-darken-purple">
    @foreach ($photos as $photo)
       
      <div class="col-md-3 mt-4">
      <a href="{{$photo->photo}}" data-toggle="lightbox" data-gallery="image-gallery" data-title="{{$photo->room->type}}">
          <img src="{{$photo->photo}}" class="img-fluid fitness">
        </a>
      </div>
      
    
    @endforeach
    </div> 
  </div>


@endsection

@section('jslinks')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
  <script>
    $(document).ready(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true,
          showArrows: true,
        });
      });
    });

  </script>
@endsection