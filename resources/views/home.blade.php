{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('temtem.layout')
@push('breadcrumb')
  <li class="breadcrumb-item"><a href="home">Links</a></li>

@endpush
@section('content')
  <div class="row container">
    @foreach ($urls as $url)


      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">{{ $url->url }}</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $url->url_generator }}</div>
                <div class="mt-2 mb-0 text-muted text-sm">
                  <span class="text-success mr-2 text-lg underline">{{ $url->counter }}</span>
                  <span>Vist Number</span>
                </div>
              </div>
              <div class="col-auto">
                  <a blank href="{{ $url->url }}" target="_blank">
                <i class="fas fa-external-link-alt fa-2x
                @if($url->access)
                 text-primary
                    @else
                    text-danger
                    @endif
                 "></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
