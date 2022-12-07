<div style="background: black;" class="text-white-50" id="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                    <img src="/images/logo-darbys-dancers.png" alt="" class="img-fluid" style="filter: brightness(0) invert(1);">
                </div>
                <br>
                <p class="text-center" style="font-size: 1.5em;">
                    <a class="brand-txt-logo-blue" href="https://www.facebook.com/darbysdancersnp"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a class="brand-txt-logo-blue" href="https://www.youtube.com/channel/UC7rQeDckSMx4efDoGJ7No0g"><ion-icon name="logo-youtube" class="mx-3"></ion-icon></a>
                </p>
            </div>
            <div class="col-sm">
                <h2><small>CONTACT</small></h2>
                <p>
                    <ion-icon name="call"></ion-icon>
                    <small>1-256-698-6212</small>
                    <br>
                    <ion-icon name="mail"></ion-icon>
                    <small><a href="mailto: valerie@darbysdancers.org" class="brand-txt-logo-blue" style="text-decoration: none;">valerie@darbysdancers.org</a></small>
                    <br>
                    <ion-icon name="navigate"></ion-icon>
                    <small>707 Chase Rd NE, Huntsville, AL 35811</small>
                </p>
            </div>
            <div class="col-sm">
                <h2><small>MISSION</small></h2>
                <p>
                    <small>
                        Our mission is to provide an inclusive performing arts program to children and adults with diverse learning needs in an atmosphere of total inclusion, acceptance and social opportunity.
                    </small>
                </p>
            </div>
            <div class="col-sm">
                <h2><small>LINKS</small></h2>
                <div class="row" style="line-height: 1.86;">
                    <div class="col">
                        <ul style="list-style: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/darbys-studio-memberships">Studio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/darbys-dancers-memberships">Dancer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/volunteer-information">Volunteer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul style="list-style: none;">
                            <li class="nav-item">
                                <a class="nav-link" href="/articles">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.revolutiondance.com/sensory-friendly" target="_blank">Gear</a>
                            </li>

                            @guest
                                <li class="nav-item px-0 border-0">
                                    <a class="text-decoration-none nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                                <li class="nav-item px-0 border-0 dropdown">
                                    <a class="text-decoration-none nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @endguest

                            <li class="nav-item">
                                <a class="nav-link" href="/">Donate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
