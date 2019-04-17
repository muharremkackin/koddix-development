    <nav class="navbar has-shadow is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                <img src="{{ asset('storage/images/logo-navigation.png') }}" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-navigation">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="main-navigation" class="navbar-menu">
            <div class="navbar-start">
                <a href="#" class="navbar-item">
                    Learn
                </a>

                <a href="#" class="navbar-item">
                    Discuss
                </a>

                <a href="#" class="navbar-item">
                    Share
                </a>


            </div>

            <div class="navbar-end">
                @auth
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link">
                            Hey, {{ Auth::user()->name }}
                        </a>

                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item">
                                <span class="icon has-text-primary is-medium"><i class="fa fa-fw fa-user-circle-o"></i></span>Profile
                            </a>
                            <a class="navbar-item">
                                <span class="icon has-text-primary is-medium">
                                    <i class="fa fa-fw fa-bell"></i>
                                </span>Notifications
                            </a>
                            <a class="navbar-item">
                                <span class="icon has-text-primary is-medium">
                                    <i class="fa fa-fw fa-gear"></i>
                                </span>Settings
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="icon has-text-primary is-medium">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                </span>Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @endauth

                @guest
                    <div class="navbar-item">
                            <div class="buttons">
                                <a href="{{ route('register') }}" class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                                <a href="{{ route('login') }}" class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>
                @endguest
            </div>
        </div>
    </nav>
