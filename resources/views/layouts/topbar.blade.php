<nav class="navbar navbar-expand-md navbar-dark bg-purple shadow-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <i class="fas fa-arrow-pointer"></i>
            <span>Projeto</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOptions" aria-controls="navbarOptions" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarOptions">
            <div class="navbar-nav ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a id="projectsArea" class="nav-link" href="#projects" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-book d-sm-none d-md-inline"></i>
                            <span>Projetos</span>
                        </a>
                        <div id="projects" class="dropdown-menu animate__animated animate__fadeIn dropdown-menu-start " aria-labelledby="projectsArea">
                            <a class="dropdown-item" href="{{ route('booking.index') }}">
                               Booking
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav ms-auto">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link {{ request()->routeIs('register') }}">{{ __('Register') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link {{ request()->routeIs('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->first_name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
