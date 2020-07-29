<nav class="navbar header-top navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="logo" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav animate side-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">{{ __('nav.Home') }}
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rooms">{{ __('nav.Rooms') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/nearby">{{ __('nav.nearby') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reserver">{{ __('nav.Book') }}</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto d-md-flex">
        @if (Route::has('login'))
        @auth
        @if (Auth::user()->id == 1)
             <li class="nav-item">
          <a class="nav-link" href="/admin" target="_blank">{{ __('nav.Dashboard') }}
            <span class="sr-only">(current)</span>
          </a>
        </li>
        @else
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ __('nav.Dashboard') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/dashboard">{{ __('nav.Dashboard') }}</a>
          <a class="dropdown-item" href="{{ route('change.password') }}">Change Password</a>
        </div>
        </li>
            
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/reservations">{{ __('nav.Reservations') }}</a>
        </li> 
        @endif
       
        <li class="nav-item">
          <a class="nav-link" href="/logout">{{ __('nav.Logout') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-flag-usa fa-1x text-success"></i> Language</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
              
                <a class="dropdown-item" href="{{ url('locale/en') }}"><span class="flag-icon flag-icon-fr"> </span> English</a>
                <a class="dropdown-item" href="{{ url('locale/fr') }}"><span class="flag-icon flag-icon-fr"> </span> Francais</a>
            </div>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="/login">{{ __('nav.Login') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">{{ __('nav.Signup') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-flag-usa fa-1x text-success"></i> Language</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
              <a class="dropdown-item" href="{{ url('locale/en') }}"><span class="flag-icon flag-icon-fr"> </span> English</a>
                <a class="dropdown-item" href="{{ url('locale/fr') }}"><span class="flag-icon flag-icon-fr"> </span> Francais</a>
            </div>
        </li>
          @endauth
          @endif

      </ul>
    </div>
  </nav>