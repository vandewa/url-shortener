@extends('main')

@section('container')
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="overflow-hidden">
      <div class="container space-top-3 space-top-md-4 space-bottom-3">
        <div class="row justify-content-lg-between align-items-md-center">
          <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
            <div class="mb-5">
              <img src="{{ asset('image/a.gif') }}" alt="" style="width: 100%">
            </div>
            <!-- Form -->
              <form method="POST" action="{{ route('generate-shorten-link.store') }}">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="link" id="link" class="form-control" placeholder="Enter Long URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group">
                    <a href="#" role="button" class="btn btn-dark" id="label-btn"  aria-disabled="true">{{ url('') }}/</a>
                    <input type="text" id="generate" name="code" class="form-control" placeholder="Enter Short URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="d-flex justify-content-end input-group-append mt-3">
                    <button class="btn btn-info" type="submit">Generate Shorten Link</button>
                </div>
            </form>
              <!-- End Form -->
          </div>

          <div class="col-md-6">
            <div class="position-relative d-none d-sm-none d-sm-block">
              <img class="img-fluid rounded-lg transition-3d-hover butn2" src="{{ asset('hebat.png')}}" alt="Image Description">
              {{-- <div class="position-absolute top-0 right-0 w-100 h-100 bg-soft-primary rounded-lg z-index-n1 mt-5 mr-n5"></div> --}}
            </div>
          </div>

          <div class="card-body">
              @if (Session::has('success'))
                  <div class="alert alert-success">
                      <p>{{ Session::get('success') }}</p>
                  </div>
              @endif
            @if (Session::has('success'))     
            <div class="table-responsive"> 
              <table class="table table-hover devan ">
                  <thead class="thead-dark">
                      <tr>
                          <th>#</th>
                          <th>Short Link</th>
                          <th>Link</th>
                          {{-- <th>QR Code</th> --}}
                          <th>Status</th>
                          {{-- <th>Aksi</th> --}}
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
            </div>
            @endif
          </div>

        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="qrcode"></div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  </main>
  <!-- ========== END MAIN CONTENT ========== -->


@endsection

@push('css')
<style>
  ::-webkit-scrollbar{
      width: 9px;
      border-radius: 0px;
      background: black;
  }
  ::-webkit-scrollbar-thumb{
      background: white;
      border-radius: 10px;
      cursor: pointer;
  }
  ::-webkit-scrollbar-thumb:hover{
      background: rgb(165, 165, 165);
  }
  ::-webkit-scrollbar-track{
      background: #121212;
      border-radius: 10px;
  }

  /*BUTTONS*/
  .btn1{
      background: rgb(180, 154, 196);
  }
  .butn1{
      color: white;
      background: rgb(0, 0, 0);
  }
  .butn1:hover{
      box-shadow: 5px 5px red,
      -5px -5px cyan;
      text-shadow: 3px 0px red,
      -3px 0px cyan;
      border-radius: 15px;
  }
  /*2*/
  .btn2{
      background: rgb(94, 172, 172);
  }
  .butn2{
      color: white;
      /* background: black; */
  }
  .butn2:hover{
      transform: translateY(-20px);
      box-shadow: 0px 44px 35px 0px rgb(48, 48, 48);
  }
  /*3*/
  .btn3{
      background:goldenrod;
  }
  .butn3{
      color: white;
      background: black;
  }
  .butn3:hover{
      width: 200px;
      letter-spacing: 8px;
  }
  /*4*/
  .btn4{
      background: crimson;
  }
  .butn4{
      color: white;
      background: black;
  }
  .butn4:hover{
      transform: rotate(720deg);
  }
  /*5*/
  .btn5{
      background: palegreen;
  }
  .butn5{
      color: white;
      background: black;
  }
  .butn5:hover{
      animation: bd 8s infinite alternate;
  }
  @keyframes bd {
      0%{border-radius: 20% 30% 40% 50% / 59% 11% 30% 70%;}
      30%{border-radius: 56% 73% 12% 38% / 80% 25% 95% 50%;}
      50%{border-radius: 26% 25% 90% 70% / 40% 85% 21% 49%;}
      60%{border-radius: 86% 45% 69% 45% / 69% 78% 79% 23%;}
      70%{border-radius: 78% 34% 73% 56% / 12% 43% 14% 34%;}
      100%{border-radius: 81% 86% 76% 96% / 45% 68% 31% 76%;}
  }
  /*6*/
  .btn6{
      background: darkolivegreen;
  }
  .butn6{
      color: white;
      background: black;
  }
  .butn6:hover{
      background: rgb(0, 0, 0);
      color: rgb(255, 255, 255);
      width: 110px;
      height: 110px;
      border-radius: 70%;
      animation: bounce 3s infinite;
  }
  @keyframes bounce {
      0%, 20%, 50%, 80%, 100%{transform: translateY(0);}
      40%{transform: translateY(-40px);}
      60%{transform: translateY(-15px);}
  }
</style>
@endpush

@push('js')
<script type="text/javascript">
  const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

  function generateString(length) {
      let result = '';
      const charactersLength = characters.length;
      for ( let i = 0; i < length; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
      }

      return result;
  }

  $('#link').change(function(){
      let a = $('#generate').val();
          if(a.length <=0){
              $('#generate').val(generateString(8));
          }
  });

    var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        sDom: 't',
        ajax: window.location.href+`?id={{ Session::get('keterangan')??'' }}`,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            {data: 'code', name:'code'},
            {data: 'link', name:'link'},
            // {data: 'qrcode', name:'qrcode'},
            {data: 'status', name:'status'},
            // {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
        ]
    });

</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\Validation') !!}

<script type="text/javascript">
    new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
</script>
  
@endpush