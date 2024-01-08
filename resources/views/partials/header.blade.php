<div id="header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between container">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo" class="icon">
        </div>

        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav text-uppercase fw-semibold">

                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">home</a>

                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                    href="{{ route('comics.index') }}">comics</a>

                    <a class="nav-link" href="#">caracters</a>

                    <a class="nav-link" href="#">movies</a>

                    <a class="nav-link" href="#">tv</a>

                    <a class="nav-link" href="#">games</a>


                    <a class="nav-link" href="{{ route('comics.create') }}">create</a>


                    <a class="nav-link" href="#">videos</a>


                    <a class="nav-link" href="#">fans</a>


                    <a class="nav-link" href="#">news</a>


                    <a class="nav-link" href="#">shop <i class="fa-solid fa-caret-down"></i></a>
                </div>
            </div>
            <form class="d-flex" role="search">
                <div class="d-flex blue-line mx-5 w-50">
                    <input class="form-control border-0 text-end me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <span class="py-2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>

            </form>

        </div>
    </nav>

</div>
@section('jumbotron')
        <div id="jumbo">
        </div>
@endsection
