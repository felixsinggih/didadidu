<nav class="navbar fixed-top navbar-expand-lg navbar-light px-md-4 mb-3 bg-body shadow-sm">
    <div class="container-fluid pt-2 pb-2">
        <a class="navbar-brand" href="/">
            <img src="/assets/img/didadidu.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link px-md-4" aria-current="page" href="/#hosting">Shared Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4" href="/#vpsHosting">VPS Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4" href="/#mailServer">Mail Server</a>
                </li>
            </ul>

            <div class="d-flex">
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-red">Log out</button>
                    </form>
                @else
                    <a class="btn btn-outline-red" href="/login" style="margin-right: 10px">Keranjang</a>
                    <a class="btn btn-red" href="/login">Log In</a>
                @endauth

            </div>
        </div>
    </div>
</nav>
