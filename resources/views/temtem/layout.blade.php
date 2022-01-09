@include('temtem.header')

<body id="page-top">
  <x:notify-messages />

  <div id="wrapper">
    {{-- sideBar --}}
    @include('temtem.sideBar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        {{-- Nav --}}
        @include('temtem.nav')
        {{-- Content here --}}

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
            <ol class="breadcrumb">
              {{-- <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li> --}}
              @stack('breadcrumb')
            </ol>
          </div>

          @yield('content')
        </div>

        @include('temtem.footer')

        @include('temtem.end')
