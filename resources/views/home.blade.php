@extends('index') {{-- Specify that we want to extend the index file --}}
@section('title', 'Home') {{-- Set the title content to "Home" --}}
{{--  Set the "content" section, which will replace "@yield('content')" in the index file we're extending --}}
@section('content')
<!--jumbotron -->
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner mb-5">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-12 order-md-1 order-2">
              <h4>{{ __('home.header_title-1') }} </h4>
              <p>{{ __('home.header_body-1') }}</p>
              <!-- <a href="#">BUY NOW</a>--> </div> 
            <div class="col-md-7 col-12 order-md-2 order-1"><img src="https://www.royal-hotel.com/_files/_cache/1/resize/1920-.ratio/00b2220430af282d345b1f9a7963a732.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-12 order-md-1 order-2">
              <h4>{{ __('home.header_title-2') }}</h4>
              <p>{{ __('home.header_body-2') }}</p>
               </div> 
            <div class="col-md-7 col-12 order-md-2 order-1"><img src="https://www.royal-hotel.com/_files/_media/1/Hotel/Maranatha_09552.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-12 order-md-1 order-2">
              <h4>{{ __('home.header_title-3') }}</h4>
              <p>{{ __('home.header_body-3') }}</p>
               </div> 
            <div class="col-md-7 col-12 order-md-2 order-1"><img src="https://info.phonesuite.com/hubfs/images/thumbnail-18.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end--> 
<!-- *********************/main/************************* -->
@if(!empty(Session::get('success')))
          <h1>thank you!</h1>
          <p> Thank you for choosing to stay with us at the Sample Hotel. We are pleased to confirm your reservation as follows:</p>
          
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
<!-- Services section -->
<div class="row m-5">
  <div class="col-md-12 col-lg-6 " >
    <h2 class="text-success">{{ __('home.main_title') }}</h2>
    <p class="text-muted mt-4">{{ __('home.main_body') }}</p>
  </div>
  <div class="col-6">
    <div class="row">
      <div class="col-6">
        <div class="text-center">
          <p><img alt="" src="/img/img-17659759.jpg" class="img-icons"/></p>
          <p><span style="color:#000000;">Champs-Elysées</span></p>
        </div>
        <div class="text-center">
          <p><img alt="" src="/img/img-a05e76fd.jpg" class="img-icons"/></p>
          <p><span style="color:#000000;">LA DÉFENSE</span></p>
        </div>
        <div class="text-center">
          <p><img alt="" src="/img/img-c939c3cc.jpg" class="img-icons"/></p>
          <p><span style="color:#000000;">MÉTRO CHARLES DE GAULLE-ÉTOILE</span></p>
        </div>
      </div>
      <div class="col-6">
        <div class="text-center">
          <p><img alt="" src="/img/img-e743d32a.jpg" class="img-icons"/></p>
          <p><span style="color:#000000;">ARC DE TRIOMPHE</span></p>
        </div>
        <div class="text-center">
          <p><img alt="" src="/img/img-fd9ed1a5.jpg" class="img-icons"/></p>
          <p><span style="color:#000000;">PARC MONCEAU</span></p>
        </div>
        <div class="text-center">
          <p><img alt="" src="/img/disney picto test.png" class="img-icons"/></p>
          <p><span style="color:#000000;">DISNEYLAND PARIS</span></p>
        </div>
        
      </div>
    </div>
    
  </div>
</div>
<!-- /Services section -->

@endsection