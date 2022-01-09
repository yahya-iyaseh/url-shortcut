@extends('temtem.layout')
@push('breadcrumb')
  <li class="breadcrumb-item"><a href="./">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">URLs</li>
@endpush

@section('content')
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">User URLs</h6>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>URL Number</th>
            <th>URL</th>
            <th>The Generator URL</th>
            <th>Access</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @if (count($urls) > 0)
            @foreach ($urls as $key => $url)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $url->url }}</td>
                <td>{{ $url->url_generator }}</td>
                @if ($url->access)
                  <td><span class="badge badge-success p-2">Yes</span></td>
                @else
                  <td><span class="badge badge-danger p-2">No</span></td>

                @endif
                <td>
                  <div class="row">
                    <div class="col-md-6"><a href="{{ route('yahyaurl.edit', $url->id) }}" class="btn btn-outline-info"><i class="fa fa-edit"></i></a></div>
                    <div class="col-md-6">
                      <form action="{{ route('yahyaurl.destroy', $url->id) }}" method="post" class="" onsubmit="return confirm('Do you really want to delete the URL?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    </div>
                  </div>

                </td>
              </tr>
            @endforeach


          @else
            <div class="alret alert-warning" role="alert">There are no URLs</div>
          @endif

          {{-- <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Gundam 90' Edition</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>Oblong T-Shirt</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Hat Rounded</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Baby Powder</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                      </tr> --}}
        </tbody>
      </table>
    </div>
    <div class="card-footer"></div>
  </div>



@endsection
