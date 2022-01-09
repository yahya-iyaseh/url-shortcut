{{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('welcome.styles')
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
      <div class="container">
        @include('welcome.nav')
      </div>
    </header>
    <!-- navbar- -->
    <!-- Hero Area -->
    <div class="hero-area-l11 position-relative z-index-1 overflow-hidden">
      <div class="container position-relative">
        <div class="row position-relative justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-12 order-lg-1 order-1" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <div class="content">
              <h1>{{ config('app.name', 'yahyaURL') }}<br class="d-none d-md-block"> Create You Own shortuct URL.</h1>
              <div class="row banner-l-11-bottom-content">
                <div class="col-lg-8 col-md-8 col-sm-10">
                  <p class="position-relative banner-main-content-l-11">Create short and fast URLs for Free, And Use them anywhere and anytime
                    You Want 🧐.
                    <span class="line-left-content"></span>
                  </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 flex-y-center ">
                  <a class="btn l-11-hero-btn" href="{{ route('register') }}">{{ __('Register For FREE') }}</a>

                </div>
                {{-- <div class="col-xl-3 col-lg-4">
                  <div class="compitable-text border-top d-inline-block">
                    <p>Compitable with A:</p>
                    <div class="compatible-icon flex-y-center img-grayscale">
                      <a href="#" class="font-size-13 mr-7"><img src="{{ asset('welcome/image/l2/windows.svg') }}" alt=""></a>
                      <a href="#" class="font-size-13 mr-7"><img src="{{ asset('welcome/image/l2/apple.svg') }}" alt=""></a>
                      <a href="#" class="font-size-13"><img src="{{ asset('welcome/image/l2/penguine.svg') }}" alt=""></a>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-9 order-lg-1 order-0 mt-5" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            {{-- <img src="{{ asset('welcome/image/l2/laptop-screen.png') }}" alt="" class="w-100 hero-l11-main-image"> --}}
            <img src="{{ asset('images/url.jpg') }}" alt="" class="w-100 hero-l11-main-image rounded">
          </div>
        </div>
      </div>
      <div class="hero-shape-l11-1 d-none d-md-block">
        <img src="{{ asset('welcome/image/l2/hero-shape-1.svg') }}" alt="">
      </div>
      <div class="hero-shape-l11-2 d-none d-md-block">
        <img src="{{ asset('welcome/image/l2/hero-shape-2.png') }}" alt="">
      </div>
    </div>
    <!-- Brand-area -->
    <div class="brand-area-l11">
      <div class="container">
        <div class="row img-grayscale">
          <div class="col-lg-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="brand-logos d-flex justify-content-center justify-content-xl-between align-items-center flex-wrap ">
              <div class="single-brand">
                <img src="{{ asset('welcome/image/l2/brand-logo.svg') }}" alt="">
              </div>
              <div class="single-brand">
                <img src="{{ asset('welcome/image/l2/brand-logo-1.svg') }}" alt="">
              </div>
              <div class="single-brand">
                <img src="{{ asset('welcome/image/l2/brand-logo-2.svg') }}" alt="">
              </div>
              <div class="single-brand">
                <img src="{{ asset('welcome/image/l2/brand-logo-3.svg') }}" alt="">
              </div>
              <div class="single-brand">
                <img src="{{ asset('welcome/image/l2/brand-logo-4.svg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Area-1 -->
    <div class="content-area-l-11-1 mb-5">
      <div class="container">
        <div class="row align-items-center justify-content-lg-start justify-content-center">
          <div class="col-xl-6 col-md-5 col-md-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-img position-relative z-index-1">
              <img src="{{ asset('images/short1.jpg') }}" alt="" class="w-100 rounded">
            </div>
          </div>
          <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-5">
              <h2>
                Create A fast and short URLs
              </h2>
              <p>That make you use your URLs with less characters.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Area -->
    <div class="content-area-l-11-3 position-relative mt-5">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-start">

          <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="content section-heading-5">
              <h2>Completely Free for Everyone.</h2>
              <p>Event is not like most tech conferences. We want our presentations to engage the audience, spark
                discussion and inspire new ideas. </p>
              <ul class="list-unstyled pl-0">
                <li class="d-flex align-items-center">
                  <i class="fas fa-check"></i>Short URLs
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-check"></i>Fast Request
                </li>
                <li class="d-flex align-items-center">
                  <i class="fas fa-check"></i>Easy to edit & delete
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-8 order-lg-1 order-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="content-img">
              <img src="{{ asset('images/short2.jpg') }}" alt="" class="w-100 rounded">
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Newsletter-area start -->
    <div class="newsletter-l-11">
      <div class="container">
        <div class="row justify-content-center news-l-11-main-bg position-relative">
          <div class="news-l-11-second-bg w-100 h-100"></div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <div class="content text-center">
              <h5>yahyaURL</h5>
             <h2>Try our Generator Free!</h2>

              <p>Free, Fast, and available forever!, Accessable from anywhere and anytime.</p>
              <div class="btn-area">
              <a class="download-trail-btn btn focus-reset" href="{{ route('register') }}">{{ __('Register Now') }}</a>
              </div>
              <span>No credit card required</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area -->
    <footer class="footer-l-11 text-center text-md-start">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-logo-l-11">
              <a href="#"><img src="{{ asset('images/brand2.png') }}" alt="logo" width="200"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-widget-l-11">
              <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                <li class="d-flex"><a href="/">Top</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="social-icons-l-11">
              <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">
                <li class="d-flex flex-column justify-content-center"><a href="https://www.facebook.com/iyasehy/"><i class="fab fa-4x fa-facebook-f"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright-area-l-11">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p>© Yahya Iyaseh 2022 All right reserved. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('welcome.scripts')
</body>

</html>
