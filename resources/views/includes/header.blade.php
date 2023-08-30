<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand"href="#">Boolean #100</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::is('students.create')) active @endif" aria-current="page"
                        href="{{ route('students.create') }}">Nuovo studente</a>
                </li>
            </ul>
            <form action="{{ route('students.index') }}" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="first_name" placeholder="Search"
                    aria-label="Search" value="{{ $search_value ?? '' }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
