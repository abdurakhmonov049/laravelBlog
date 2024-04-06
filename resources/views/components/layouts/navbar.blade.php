<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">

        <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @auth
                <input class="btn btn-outline-secondary text-white" type="submit" value="Xush kelibsiz">

            @endauth
            <input class="btn btn-outline-secondary text-white" type="submit" value="Login">

        </form>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('main') }}">My Blog</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('about') }}">About Me</a>
                </li>
                <li class="nav-item"><a
                        class="nav-link px-lg-3 py-3 py-lg-4"href="{{ route('information') }}">Information</a></li>
            </ul>
        </div>
    </div>
</nav>
