<div id="top" class="text-white-50 py-2" style="background: black;">
    <ul class="nav justify-content-center font-hind">
        <li class="nav-item mx-4">
            <ion-icon name="call"></ion-icon>
            <small>1-256-698-6212</small>
        </li>
        <li class="nav-item mx-4">
            <ion-icon name="mail"></ion-icon>
            <small>valerie@darbysdancers.org</small>
        </li>
        <li class="nav-item mx-4">
            <ion-icon name="navigate"></ion-icon>
            <small>707 Chase Rd NE, Huntsville, AL 35811</small>
        </li>

        @guest
            <li class="nav-item mx-4">
                <small><a class="text-decoration-none brand-txt-logo-blue" href="{{ route('login') }}">{{ __('Login') }}</a></small>
            </li>
        @else
            <li class="nav-item mx-4 dropdown">
                <small>
                    <a class="text-decoration-none brand-txt-logo-blue" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </small>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item mx-4">
                <small>
                    <a href="{{ route('dashboard') }}" class="text-decoration-none brand-txt-logo-blue">Dashboard</a>
                </small>
            </li>
        @endguest

    </ul>
</div>

<div class="d-lg-none d-flex justify-content-center pt-3 bg-white">
    <a class="navbar-brand" href="/"><img src="/images/logo-darbys-dancers.png" alt="" style="max-width: 257px;"></a>
</div>
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center font-hind">
                <li class="d-none d-lg-block nav-item mx-2">
                    <a class="nav-link" href="/">
                        <img src="/images/logo-darbys-dancers.png" alt="" style="max-width: 257px;">
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/about">About</a>
                </li>
                {{--                <li class="nav-item mx-2">--}}
                {{--                    <a class="nav-link" href="/">Dancer Join</a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item mx-2">--}}
                {{--                    <a class="nav-link" href="/volunteer-information">Volunteer Join</a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item mx-2">--}}
                {{--                    <a class="nav-link" href="/">Studio Join</a>--}}
                {{--                </li>--}}

                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Join
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/darbys-studio-memberships">Studio</a></li>
                        <li><a class="dropdown-item" href="/darbys-dancers-memberships">Dancer</a></li>
                        <li><a class="dropdown-item" href="/volunteer-information">Volunteer</a></li>
                    </ul>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="/articles">News</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="https://www.revolutiondance.com/sensory-friendly" target="_blank">Gear</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/parent-resources">Parent</a></li>
                        <li><a class="dropdown-item" href="/teacher-resources">Teacher</a></li>
                        <li><a class="dropdown-item" href="/volunteer-resources">Volunteer</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#footer">Contact</a>
                </li>
                <div class="btn btn-lg brand-bg-logo-blue shadow m-3 brand-btn" style="width: 175px;">
                    <a href="/donations" class="text-white text-decoration-none">Donate</a>
                </div>
            </ul>
        </div>
    </div>
</nav>
