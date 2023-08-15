<nav class="rt_nav_header horizontal-layout col-lg-12 col-12 p-0">
    <div class="top_nav flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
            <div class="text-center rt_nav_wrapper d-flex align-items-center">
                <a class="nav_logo rt_logo" href="index.html"><img src="{{ asset('assets/assets/images/logo.svg') }}"
                        alt="logo" /></a>
                <a class="nav_logo nav_logo_mob" href="index.html"><img
                        src="{{ asset('assets/assets/images/mobile-logo.svg') }}" alt="logo" /></a>
            </div>
        </div>
    </div>
    <div class="nav-bottom">
        <div class="container">
            <ul class="nav page-navigation">
                <li class=" nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link"><i class="menu_icon feather ft-home"></i><span
                            class="menu-title">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
