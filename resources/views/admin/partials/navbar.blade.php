<nav class="navbar navbar-expand-md navbar-dark bg-darken-cyan fixed-left">
    <a class="navbar-brand" href="">Hotel Royal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarAdmin">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">{{ __('nav.Home') }}</a>
            </li>
            <li class="nav-item {{ Route::is('hotel.edit') ? 'active' : '' }}">
                <a class="nav-link " href="/admin/hotel/1/edit">Modifier les informations de l'hôtel</a>
            </li>
             <li class="nav-item {{ Route::is('clients.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('clients.index') }}">Les Clients</a>
            </li>
               <li class="nav-item {{ Route::is('languages.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('languages.index') }}">Les Translation</a>
            </li>
            <li class="nav-item dropdown {{ Route::is('bookings.index') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservations de chambres</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('bookings.index') }}">Gérer les réservations</a>
                    <a class="dropdown-item" href="/reserver">Ajouter une réservation</a>
                </div>
            </li>
            <li class="nav-item dropdown {{ Route::is('rooms.index') || Route::is('rooms.create') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des chambres</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('rooms.index') }}">Gestion des chambres</a>
                    <a class="dropdown-item" href="{{ route('rooms.create') }}">Ajouter une chambre</a>
                </div>
            </li>
        </ul>
    </div>
</nav>