
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @vite('resources/css/app.css')
  <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/css/nucleo-svg.css" rel="stylesheet" />
  <link href="/build/assets/app-2f4e2d90.css" rel="stylesheet"/>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  @include('sweetalert::alert')


  <div class=" tw-h-screen   tw-w-screen position-absolute tw-flex-col tw-flex tw-items-end tw-justify-end">
    <div class="modal fade" id="petunjuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Petunjuk Aplikasi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Bismillah Terlebih Dahulu</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </div>

      </div>
    </div>
    <div class="modal fade" id="pengembang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pengembang Aplikasi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Alvian Arif Wiguna</p>
            <p>Arif Dewantara</p>
            <p>Alfian Pasaribuan</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </div>

      </div>
    </div>
    <div class="tw-flex tw-justify-end tw-flex-col tw-items-end tw-mr-5">
    <!-- <button data-bs-toggle="modal" data-bs-target="#pengembang" class="text-white tw-font-bold p-2 mt-4  tw-bg-yellow-500 tw-rounded-md tw-flex tw-items-center tw-justify-center mb-3">
      Pengembang
    </button>
    <button data-bs-toggle="modal" data-bs-target="#petunjuk" class="tw-h-20 tw-w-20 mb-3 tw-bg-blue-500 tw-rounded-full tw-flex tw-items-center tw-justify-center">
      <i class="fa fa-question fa-3x tw-text-white" aria-hidden="true"></i>
    </button> -->
    </div>
    
  </div>

  
  <div style="background-image: linear-gradient( 90.9deg,  rgba(3,195,195,1) 0.3%, rgba(37,84,112,1) 87.8% );" class="min-height-300  position-absolute w-100"></div>
  
  @include('partials.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/js/plugins/chartjs.min.js"></script>
  <script src="/build/assets/app-dbe23e4c.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>