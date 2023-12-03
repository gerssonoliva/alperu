@php
$navbar = !empty($navbar) ? $navbar : ['active'=> [1,0]] ;
@endphp
<header>
  <nav id="navbartop" class="navbar navbar-expand-lg bg-sm-primary bg-white navbar-light shadow navbar-theme p-0" data-navbar="sticky">
  
    <div class="container d-md-block p-2 p-lg-0">

      <div id="barra-nav" class="bg-primary text-white px-md-5 py-1">
        <div class="col-12 text-right d-block d-md-flex px-0">
          <ul class="mr-md-auto list-inline list-top t-montserrat d-none d-md-flex">
            <li class="m-auto">
              <i class='bx bx-envelope text-white fs-1x-25 p-1'></i><a href="mailto:info@alperu.pe" class="text-white">info@alperu.pe</a>
            </li>
          </ul>
          <ul class="mr-auto list-inline list-top t-montserrat d-none d-md-flex">
            <li class="m-auto">
              <i class='bx bx-map text-white fs-1x-25 p-1'></i><span class="text-white">Calle Mariscal Castilla 208 - Chiclayo - Lambayeque</span>
            </li>
          </ul>
          <ul class="list-inline list-top social-nav ml-auto d-none d-md-flex">
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="https://www.facebook.com/Alperu-Servicos-Generales-y-Consultor%C3%ADa-SAC-109343260782326" target="_blank"
                title="Facebook">
                <i class='bx bxl-facebook fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="#" target="_blank"
                title="Instagram">
                <i class='bx bxl-instagram-alt fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="#" target="_blank"
                title="Canal Youtube">
                <i class='bx bxl-youtube fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container px-md-2 py-md-3">
        <div class="brand-md">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" class="logo logo-brand" alt="Al Perú">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse fw-500" id="navbarSupportedContent">
          <ul class="navbar-nav f-nexa text-secondary m-auto">
            <li class="nav-item">
              <a class="nav-link <?php if ($navbar['active'][0] == 1) { echo 'active'; } ?>" href="{{ url('/') }}">INICIO</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link <?php if ($navbar['active'][0] == 2) { echo 'active'; } ?>" href="nosotros">NOSOTROS</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link <?php if ($navbar['active'][0] == 3) { echo 'active'; } ?>" href="{{ url('servicios') }}">SERVICIOS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if ($navbar['active'][0] == 4) { echo 'active'; } ?>" href="{{ url('proyectos') }}">PROYECTOS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if ($navbar['active'][0] == 5) { echo 'active'; } ?>" href="{{ url('contactanos') }}">CONTACTO</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto text-center social">
              <li class="t-montserrat fw-800 h5">
                <span class="text-primary">Contáctanos</span><br>
                <a class="text-secondary" href="tel:+51999999999" target="_blank">999 999 999</a>
              </li>
          </ul>

          <ul class="list-inline list-top social-nav m-auto d-flex d-md-none">
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="https://www.facebook.com/Alperu-Servicos-Generales-y-Consultor%C3%ADa-SAC-109343260782326" target="_blank"
                title="Facebook">
                <i class='bx bxl-facebook fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="#" target="_blank"
                title="Instagram">
                <i class='bx bxl-instagram-alt fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
            <li class="f-open-sans m-auto ml-md-2 icon-circle">
              <a class="" href="#" target="_blank"
                title="Canal Youtube">
                <i class='bx bxl-youtube fs-1x-25 p-1 text-secondary'></i>
              </a>
            </li>
          </ul>

        </div>
      </div>
      

    </div>
  </nav>

</header>