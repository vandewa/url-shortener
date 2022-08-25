<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('image/pemda.ico')}}">
    <title>URL SHORTENER KABUPATEN WONOSOBO</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css"/>

 
</head>
<body class="img js-fullheight" style="background-image:url({{ asset('image/aaa.png') }})">
   
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
          <center><h1>Link Sudah Kadaluarsa</h1></center>
          <hr>
      </div>
      <div class="card-body">
   
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <div class="table-responsive"> 
            <table class="table devan ">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Link</th>
                        {{-- <th>Status</th> --}}
                        {{-- <th>Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
      </div>
    </div>
</div>

{{-- <footer style="position: fixed;
bottom: 0;
width: 100%;">
    <div class="col-md-12">
        <div class="p-0">
            <marquee bgcolor="#00000" direction="left" align="center"  scrollamount="2" style="color: #fdf7fb; font-weight: bold;">Diskominfo &copy {{date('Y')}} Devan Dewananta</marquee>
        </div>
    </div>
</footer> --}}



<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/sweetalert211.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.js"></script>
<script>
    $(function(){
        $(".alert").delay(3000).slideUp(300);
    });
</script>

<script type="text/javascript">

const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

function generateString(length) {
    let result = ' ';
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
        ajax: window.location.href,
        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            {data: 'link', name:'link'},
            // {data: 'status', name:'status'},
            // {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
        ]
    });
</script>

<script>
    $(document).on('click', '.delete-data-table', function (a) {
        a.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you realy want to delete this records? This process cannot be undone.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete!'
        }).then((result) => {
            if (result.value) {
                a.preventDefault();
                var url = $(this).attr('href');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    method: 'delete',
                    success: function () {
                        Swal.fire(
                            'Deleted!',
                            'data has been deleted.',
                            'success'
                        )
                        table.ajax.reload();
                        if (typeof table2) {
                            table2.ajax.reload();
                        }
                    }
                })
            }
        })
    });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\Validation') !!}

<script type="text/javascript">
    (function ($) {
            "use strict";
            var fullHeight = function () {
                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function () {
                    $('.js-fullheight').css('height', $(window).height());
                });
            };
            fullHeight();
            $(".toggle-password").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
    })(jQuery);
</script>

<script type="text/javascript">
    function sweetAlert() 
    {  
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
        })
    }

    @if(session('statusnya'))
    sweetAlert();
    @endif
</script>


</body>
</html>