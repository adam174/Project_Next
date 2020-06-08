@extends('index')
@section('title', 'rooms')

@section('content')
<!--//******************** header*******************// -->
<!--jumbotron -->
<div class="jumbotron-bg-image">
  <div class="jumbotron jumbotron-fluid  bg-warning">
      <div class="container text-center">
          <h1 class="display-3">Royal Hotel Paris</h1>
          <p class="lead">{{ __('rooms.header') }}</p>
          <div class="btn-group" role="group">
              <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#registerModal">
                Book Now!
              </button>
              <!-- <a href="#rooms">
                  <button type="button" class="btn btn-dark btn-lg d-none d-sm-block">See our rooms</button>
              </a> -->
          </div>
      </div>
  </div>
</div>

<!-- //******************** Rooms*******************//  -->
<div class="how-section1">
  <div class="row">
      <div class="col-md-6 how-img">
          <img src="/img/ch_simple/Chambre Single 3.jpg" class="rounded-lg img-fluid" alt="Chambre Single"/>
      </div>
      <div class="col-md-6">
          <h4>Single</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} 137€.</h4>
      <p class="text-muted">{{ __('rooms.single') }}</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <h4>Classique</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} 145€.</h4>
                      <p class="text-muted">{{ __('rooms.classique') }}</p>
      </div>
      <div class="col-md-6 how-img">
          <img src="/img/Chambre Classique 08.jpg" class="rounded-lg img-fluid" alt="Chambre Classique"/>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6 how-img">
           <img src="/img/Chambre Suprieure 02 2.jpg" class="rounded-lg img-fluid" alt="Chambre Suprieure"/>
      </div>
      <div class="col-md-6">
          <h4>Supérieure.</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} 167€:</h4>
                      <p class="text-muted">{{ __('rooms.superieure') }}</p>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <h4>Deluxe</h4>
                      <h4 class="subheading">{{ __('rooms.price') }} 176€.</h4>
                      <p class="text-muted">{{ __('rooms.deluxe') }}</p>
      </div>
      <div class="col-md-6 how-img">
          <img src="/img/Chambre Deluxe 01.jpg" class="rounded-lg img-fluid" alt="Chambre Deluxe"/>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6 how-img">
         <img src="/img/Chambre Executive 405 2.jpg" class="rounded-lg img-fluid" alt="Chambre Executive"/>
    </div>
    <div class="col-md-6">
        <h4>Executive.</h4>
                    <h4 class="subheading">{{ __('rooms.price') }} 191€:</h4>
                    <p class="text-muted">{{ __('rooms.executive') }}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <h4>Familiale</h4>
                    <h4 class="subheading">{{ __('rooms.price') }} 229€.</h4>
                    <p class="text-muted">{{ __('rooms.familiale') }}</p>
    </div>
    <div class="col-md-6 how-img">
        <img src="/img/Chambre Familiale Salon 101-web.jpg" class="rounded-lg img-fluid" alt="Chambre Familiale"/>
    </div>
</div>
  
</div>

@endsection