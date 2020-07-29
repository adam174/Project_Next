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
      <div class="col-md-3 mt-4">
        <a href="\img\Chambre Classique 08.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Classique">
          <img src="\img\Chambre Classique 08.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Deluxe 01 2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Deluxe">
          <img src="/img/Chambre Deluxe 01 2.jpg" class="img-fluid" alt="Chambre Deluxe">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Deluxe 04.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Deluxe">
          <img src="/img/Chambre Deluxe 04.jpg" class="img-fluid" alt="Chambre Deluxe">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Executive 405 2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Executive">
          <img src="/img/Chambre Executive 405 2.jpg" class="img-fluid" alt="Chambre Executive">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Executive 405 3-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Executive">
          <img src="/img/Chambre Executive 405 3-web.jpg" class="img-fluid" alt="Chambre Executive">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Executive 405 4-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Executive">
          <img src="/img/Chambre Executive 405 4-web.jpg" class="img-fluid" alt="Chambre Executive">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Executive 405.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Executive">
          <img src="/img/Chambre Executive 405.jpg" class="img-fluid" alt="Chambre Executive">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Familiale 101-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Familiale">
          <img src="/img/Chambre Familiale 101-web.jpg" class="img-fluid" alt="Chambre Familiale">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Familiale 604 2-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Familiale">
          <img src="/img/Chambre Familiale 604 2-web.jpg" class="img-fluid" alt="Chambre Familiale">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Familiale Salon 101-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Familiale">
          <img src="/img/Chambre Familiale Salon 101-web.jpg" class="img-fluid" alt="Chambre Familiale">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Suprieure 02.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Suprieure">
          <img src="/img/Chambre Suprieure 02.jpg" class="img-fluid" alt="Chambre Suprieure">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/Chambre Suprieure 103-web.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="Chambre Suprieure">
          <img src="/img/Chambre Suprieure 103-web.jpg" class="img-fluid" alt="Chambre Suprieure">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/SDB Classique 07.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="SDB Classique">
          <img src="/img/SDB Classique 07.jpg" class="img-fluid" alt="SDB Classique">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/SDB Deluxe 01.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="SDB Deluxe">
          <img src="/img/SDB Deluxe 01.jpg" class="img-fluid" alt="Deluxe">
        </a>
      </div>
      <div class="col-md-3 mt-4">
        <a href="/img/SDB Executive 405.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-title="SDB Executive">
          <img src="/img/SDB Executive 405.jpg" class="img-fluid" alt="SDB Executive">
        </a>
      </div>
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