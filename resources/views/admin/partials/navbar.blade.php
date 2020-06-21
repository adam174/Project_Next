<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-left">
    <a class="navbar-brand" href="">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hotel.edit') }}">Edit Hotel Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rooms.index') }}">Rooms</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Room Reservations</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('bookings.index') }}">Manage Reservations</a>
                    <a class="dropdown-item" href="/reserver">Add Reservation</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Room Manager</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('rooms.index') }}">Manage Rooms</a>
                    <a class="dropdown-item" href="{{ route('rooms.create') }}">Add Room</a>
                </div>
            </li>
        </ul>
    </div>
</nav>