<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="../home/assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{ __('msg.site') }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="nav-link {{ request()->is(app('laravellocalization')->getCurrentLocale() . '/') ? 'active' : '' }}">{{ __('msg.home') }}<br></a></li>
                <li><a href="{{ url('about') }}" class="nav-link {{ request()->is(app('laravellocalization')->getCurrentLocale() . '/about') ? 'active' : '' }}">{{ __('msg.about') }}</a></li>
                <li><a href="courses.html">{{ __('msg.courses') }}</a></li>
                <li><a href="events.html">Events</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                
                <!-- Language -->
                <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ app('laravellocalization')->localizeUrl(Request::path(), 'en') }}">English</a></li>
                        
                        <li><a href="{{ app('laravellocalization')->localizeUrl(Request::path(), 'bn') }}">Bangla</a></li>
                    </ul>
                </li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="courses.html">Get Started</a>

    </div>
</header>