@extends('index') {{-- Specify that we want to extend the index file --}}
@section('title', 'Home') {{-- Set the title content to "Home" --}}
{{--  Set the "content" section, which will replace "@yield('content')" in the index file we're extending --}}
@section('content')


<section class="p-4 p-lg-5 text-center text-info" id="contact">
        <div class="my-auto">
          <h1 class="mb-4"> CONTACT & ACCÈS</h1>
          <h2>Venir au Royal Hôtel</h2>

          <ul class="fa-ul mb-4 ml-0">
            <li id="mail-address ">
                <i class="fas fa-envelope-open mr-2 text-primary"></i>royalhotel@mail.com
            </li>
            <li>
              <i class="fas fa-mobile-alt mr-2 text-primary"></i>+48 888 888 </li>
            <li>
              <i class="fas fa-map-marker-alt mr-2 text-primary"></i> Avenue des Champs-Élysées, 75008 Paris  ·  FRANCE  </li>
          </ul>

          <iframe width="70%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.3104012012481694%2C48.866031033314144%2C2.317482233047486%2C48.869143366027984&amp;layer=mapnik&amp;marker=48.86758722386852%2C2.313941717147827" style="border: 1px solid black"></iframe><br/><small></small>

          <form
            class="contact-form d-flex flex-column align-items-center"
            action="{{ route('contact') }}"
            method="POST"
          >
          @csrf
          @guest
               <div class="form-group w-75">
              <input
                type="name"
                class="form-control"
                placeholder="Name"
                name="name"
                required
              />
            </div>
            <div class="form-group w-75">
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                name="email"
                required
              />
            </div>
          @endguest
           

            <div class="form-group w-75">
              <textarea
                class="form-control"
                type="text"
                placeholder="Message"
                rows="7"
                name="message"
                required
              ></textarea>
            </div>

            <button type="submit" class="btn btn-submit btn-info w-75">Submit</button>
          </form>
        </div>
      </section>

@endsection