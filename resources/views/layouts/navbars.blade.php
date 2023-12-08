<!-- Header -->
<header class="header-v4">
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="/" class="logo">
                    <img src="/../images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="nav-item {{ request()->is('/') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('products') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/products">Product</a>
                        </li>
                        <li class="nav-item {{ request()->is('about') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/about">About</a>
                        </li>
                        <li class="nav-item {{ request()->is('contact') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m main-menu">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <a href="/cart"
                       class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                       data-notify="{{ session('cartCount', 0) }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </a>

                    @guest
                        <a class="icon-header-auth cl2 hov-cl1 trans-04 p-l-22 p-r-11 text-decoration-none" href="{{ route('login') }}">Login</a>
                        <a class="icon-header-auth cl2 hov-cl1 trans-04 p-l-22 p-r-11 pl-2 text-decoration-none" href="{{ route('register') }}" role="button">Register</a>
                    @else
                        <a class="icon-header-auth cl2 hov-cl1 trans-04 p-l-22 p-r-11 pl-3 text-decoration-none" href="{{ route('myaccount.orders') }}">My Orders</a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="icon-header-auth cl2 hov-cl1 trans-04 p-l-22 p-r-11 pl-1"
                               onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/../images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                 data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
               data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">

        <ul class="main-menu-m">
        <li class="nav-item {{ request()->is('/') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('products') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/products">Product</a>
                        </li>
                        <li class="nav-item {{ request()->is('about') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/about">About</a>
                        </li>
                        <li class="nav-item {{ request()->is('contact') ? 'active-menu' : '' }}">
                            <a class="nav-link active" href="/contact">Contact</a>
                        </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/../images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
