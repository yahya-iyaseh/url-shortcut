@extends('temtem.layout')

@push('breadcrumbs')


@endpush



@section('content')

  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Create a new URL shortuct</h6>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('yahyaurl.store') }}">
        @csrf
        <div class="form-group">
          <label for="url">The URL</label>
          <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" aria-describedby="emailHelp" placeholder="Enter The URL" required>
          @error('url')
            <span class="d-block invalid-feedback">{{ $message }}</span>
          @enderror
        </div>
        {{-- <div class="form-group">
          <label for="">Extra Data</label>
          <input type="text" class="form-control @error('data') is-invalid @enderror" id="data" name="data" aria-describedby="emailHelp" placeholder="Enter The Extra Data">
          @error('data')
            <span class="d-block invalid-feedback">{{ $message }}</span>
          @enderror
        </div> --}}

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="access" name="access" checked>
            <label class="custom-control-label" for="access" >Access</label>

          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection
