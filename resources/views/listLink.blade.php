@extends('main')

@section('container')
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="overflow-hidden">
      <div class="container space-top-1 space-top-md-2 space-bottom-3">
        <div class="row justify-content-lg-between align-items-md-center">
          <div class="col-md-12 col-lg-12 mb-7 mb-md-0">
            <div class="mb-5">
              <img src="{{ asset('image/nf.png') }}" alt="" style="width: 100%">
            </div>
          </div>

            <div class="table-responsive"> 
                <table class="table table-hover devan ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Link</th>
                            {{-- <th>Status</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection

@push('js')
<script type="text/javascript">
        var table = $('.devan').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: window.location.href,
            columns: [
                {data: 'link', name:'link'},
                // {data: 'status', name:'status'},
            ]
        });
    </script>
@endpush