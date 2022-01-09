    <nav class="navbar site-navbar pt-2">
      <!-- Brand Logo-->
      <div class="brand-logo">
        <a href="/">
          <!-- light version logo (logo must be black)-->
          <img src="{{ asset('images/brand2.png') }}" width="130" class="light-version-logo">
          <!-- Dark version logo (logo must be White)-->
          <img src="{{ asset('welcome/image/logo/logo-white.png') }}" alt="" class="dark-version-logo">
        </a>
      </div>
      <div class="menu-block-wrapper">
        <div class="menu-overlay"></div>
        <nav class="menu-block" id="append-menu-header">
          <div class="mobile-menu-head">
            <div class="go-back">
              <i class="fa fa-angle-left"></i>
            </div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="site-menu-main">
        </nav>
      </div>
      <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
        @guest
          @if (Route::has('login'))
              <a class="btn log-in-btn focus-reset" href="{{ route('login') }}">{{ __('Login') }}</a>
          @endif

          @if (Route::has('register'))

              <a class="download-trail-btn btn focus-reset" href="{{ route('register') }}">{{ __('Register') }}</a>

          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      
      </div>
      <!-- mobile menu trigger -->
      <div class="mobile-menu-trigger">
        <span></span>
      </div>
      <!--/.Mobile Menu Hamburger Ends-->
    </nav>
