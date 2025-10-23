<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28a745;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">🍎 AppleSites</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('pengelolaan') }}" class="nav-link">Data Apel</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>
