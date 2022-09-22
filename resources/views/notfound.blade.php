{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ asset('image/pemda.ico')}}">
    <title>URL SHORTENER KABUPATEN WONOSOBO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
  
<div class="background-image"></div>
<div class="background-images"></div>
</body>
<style>
  * { 
    margin: 0;
    padding: 0;
  }

.background-image {
  background-image: url({{ asset('image/404.png') }});
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh;
}
@media only screen and (min-device-width: 480px){

.background-images {
  background-image: url({{ asset('image/logo.png') }});
   background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}


</style>
</html> --}}

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>URL SHORTENER KABUPATEN WONOSOBO</title>  
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/soul.ico') }}">

        {{-- Bootstrap CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}">

        
        {{-- Admin Mart CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminmart/src/assets/extra-libs/c3/c3.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminmart/src/assets/libs/chartist/dist/chartist.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminmart/src/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminmart/src/dist/css/style.min.css') }}">


        {{-- Fontawesome CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

        {{-- Own CSS Custom --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/setting.css') }}">

    </head>
    <body class="bg-color-grey ">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative px-2 px-md-0 mt-7">
            <div class="auth-box row mt-7">

                <div class="col-12 p-0 bg-color-white mt-7" style="border-radius: 20px">

                    <div class="p-3 mt-7">

                        <div class="text-center">
                            <img class="col-5 col-sm-3 col-md-5" src="{{ asset('image/soul.png') }}" alt="Logo Baskara">
                        </div>

                        <div class="row pt-4">

                            <div class="col-md-8 m-auto text-center">

                                <h1 class="text-danger" style="font-size: 150px">402</h1>

                                <h3 class="mb-2">Whoppss...</h3>
                                <p>Halaman yang Anda cari tidak tersedia.</p>

                                <div class="col-lg-12 text-center mt-3 px-0">

                                    <a href="{{ route('index') }}">
                                        <button type="button" class="btn btn-blue-uii-rounded px-4">Kembali ke halaman awal</button>
                                    </a>

                                </div>

                                <p class="mt-3">Jika masalah ini terus terulang, silakan hubungi Administrator melalui email <b>urlshortenerwonosobo@gmail.com</b></p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- JQuery JAVASCRIPT --}}
        <script type="text/javascript" src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/adminmart/src/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script> --}}

        {{-- Bootstrap JAVASCRIPT --}}
        <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>

    </body>
</html>
