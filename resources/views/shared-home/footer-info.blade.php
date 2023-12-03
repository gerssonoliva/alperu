
<section class="footer py-4 bg-light">

  {{-- footer --}}
  <div class="container py-4 text-white">
    <div class="row m-auto">

      <div class="col-12 col-md-4 text-center">
        <img class="img-fluid" src="{{ asset('images/logo-footer.png') }}" style="max-width: 150px;" alt="">
        
          <ul class="d-flex lista p-4 text-center">
            <li class="redes m-auto">
              <a class="" href="https://www.facebook.com/Alperu-Servicos-Generales-y-Consultor%C3%ADa-SAC-109343260782326" target="_blank"
              title="Facebook">
                <i class='bx bxl-facebook icono_f p-2' ></i>
              </a>
            </li>
            <li class="redes m-auto">
                <a class="" href="#" target="_blank"
                title="Instagram">
                <i class='bx bxl-instagram-alt icono_f p-2' ></i>
                </a>
            </li>
            <li class="redes m-auto">
                <a class="" href="#" target="_blank"
                title="Canal Youtube">
                <i class='bx bxl-youtube icono_f p-2' ></i>
                </a>
            </li>
          </ul>
          
      </div>
      
      <div class="col-12 col-md-4">
        <div class="border-bottom t-montserrat">
          <h2 class="h4 text-primary fw-700 fs-1x-75">ENLACES</h2>
        </div>
        <ul class="t-montserrat lista p-3">
          <li class="">
            <a href="{{ url('/') }}" class="text-white text-decoration-none">INICIO</a>
          </li>
          <!-- <li class="">
            <a href="{{ url('nosotros') }}" class="text-white text-decoration-none">NOSOTROS</a>
          </li> -->
          <li class="">
            <a href="{{ url('servicios') }}" class="text-white text-decoration-none">SERVICIOS</a>
          </li>
          <li class="">
            <a href="{{ url('proyectos') }}" class="text-white text-decoration-none">PROYECTOS</a>
          </li>
          <li class="">
            <a href="{{ url('contactanos') }}" class="text-white text-decoration-none">CONTACTO</a>
          </li>
        </ul>
      </div>

      
      <div class="col-12 col-md-4">
        <div class="border-bottom t-montserrat">
          <h2 class="h4 text-primary fw-700 fs-1x-75">SUSCRÍBETE</h2>
        </div>
        <div class="form_f col-12 pt-3">
          <form action="" class="" method="GET" autocomplete="off">
            <div class="input-group mb-2 mx-sm-2 py-2">
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo eléctronico" aria-describedby="correoFeedback" required>
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary mb-2"><i class='bx bxs-arrow-to-right'></i></button>
              </div>
              <div id="correoFeedback" class="invalid-feedback">
                Ingrese un correo válida.
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

  <hr class="border-bottom bt-0">
  @include('shared-home.footer-copy')

</section>


