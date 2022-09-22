<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <link rel="shortcut icon" href="{{ asset('image/soul.ico')}}">
  <title>URL SHORTENER KABUPATEN WONOSOBO</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css')}}">
  <link rel="stylesheet" href="{{ asset('front/assets/vendor/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link rel="stylesheet" href="{{ asset('front/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('front/assets/vendor/aos/dist/aos.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/r-2.3.0/datatables.min.css"/>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('front/assets/css/theme.min.css')}}">
  @stack('css')
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header">
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        {{-- <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="#" aria-label="Front">
            <img src="{{ asset('image/logo.png')}}" alt="Logo" style="height: 50%;">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
        </nav>   --}}

      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  @yield('container')
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory  -->
  <script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('front/assets/vendor/hs-header/dist/hs-header.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/hs-go-to/dist/hs-go-to.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/hs-unfold/dist/hs-unfold.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/hs-show-animation/dist/hs-show-animation.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{ asset('front/assets/vendor/aos/dist/aos.js')}}"></script>

  <!-- JS Front -->
  <script src="{{ asset('front/assets/js/theme.min.js')}}"></script>
  <script src="{{ asset('js/qrcode.min.js')}}"></script>

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

  @stack('js')

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this), {
          rules: {
            confirmPassword: {
              equalTo: '#signupPassword'
            }
          }
        });
      });


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });


      // INITIALIZATION OF CUBEPORTFOLIO
      // =======================================================
      $('.cbp').each(function () {
        var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
          plugins: {
            loadMore: {
              element: '#cubeLoadMore',
              action: 'click',
              loadItems: 4,
            }
          }
        });
      });


      // INITIALIZATION OF SLICK CAROUSEL
      // =======================================================
      $('.js-slick-carousel').each(function() {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{ asset('front/assets/vendor/babel-polyfill/dist/polyfill.js')}}"><\/script>');
  </script>
</body>
</html>