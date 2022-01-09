@include('temtem.header')
<body>
      <div class="container-fluid" id="container-wrapper">
          <div class="text-center">
            <img src="{{ asset('temtem/img/error.svg') }}" style="max-height: 100px;margin-top: 20vh" class="mb-3 mx-auto">
            <h3 class="text-gray-800 font-weight-bold">Oopss!</h3>
            <p class="lead text-gray-800 mx-auto">404 Page Not Found</p>
            <a>&larr;You cant access this link  (<a href="#">{{ $url }}</a>)</a>
          </div>
@include('temtem.end')
