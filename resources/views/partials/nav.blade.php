<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-fill">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('collections') }}">Collections</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('checkout') }}">Cart</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/login">My Account</a>
                </li>
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control line-input me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit">
                    <i class="fas fa-search search-icon"></i>
                </button>
            </form>
        </div>
    </div>
</nav>