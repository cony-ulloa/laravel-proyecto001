<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vista principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="background-color:#c2dec5;" class="text-dark">
  <!-- HEADER -->
  @section('header')
  <header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom border-secondary bg-gradient"
    style="background-color:#1b4b35;">

    <!-- ICONO -->
    <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor"
        class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-success" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
        <path
          d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
      </svg>
      <span class="fs-4 text-success"><b>Stocky</b></span>
      <!-- ICONO END -->

      <!-- BOTONES NAVBAR -->
    </div>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-success">
      <li class="btn btn-sm mx-1 btn-outline-success"><a href="/menu" class="nav-link px-2 link-light">Inicio</a></li>
      <li class="btn btn-sm mx-1 btn-outline-secondary"><a href="/sesion" class="nav-link px-2 link-light">Cerrar sesión</a></li>
    </ul>
    <!-- BOTONES NAVBAR END -->

    <div class="col-md-3 text-end">
    </div>
  </header>
  @show
  <!-- HEADER END -->

  <!-- BODY -->
  <div class="container">
    @yield('content')
  </div>
  <!--FOOTER -->
  @section('footer')
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom border-success pb-3 mb-3">
    </ul>
    <p class="text-center text-muted">Sistema de stock</p>
    <p class="text-center text-muted">©2022</p>
  </footer>
  @show
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>
