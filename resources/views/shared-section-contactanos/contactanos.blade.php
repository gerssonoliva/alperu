@extends('layouts.app')

@section('var_helpers')
@php
$navbar = array(
"active" => [5, 0]
);
@endphp
@endsection

{{-- Start for seo --}}
@section('title','Contáctanos' )
@section('description', '' )
@section('keywords','' )
{{-- End for seo --}}

@section('content')

<section class=" text-center">

  <div class="position-relative text-center w-100">
    <img src="{{ asset('images/proyectos.jpg') }}" alt="" class="img-fluid position-relative">
    <div class="h-100 m-auto container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
        <div class="card-body bg-transparent text-center">
            <span class="text-white fw-800 h2 border-top border-bottom text-uppercase">
              Contáctanos
            </span>
        </div>
		</div>
  </div>

  @include('shared-section-mapa.mapa')

  <div class="container px-0" style="background:#F2F2F2;">
    <div class="">
        <div class="w-100 bg-primary text-center py-3 d-flex">
          <ul class="atencion col-12 d-block d-md-flex">
            <li class="col-12 col-md-5  m-auto">
              <h2 class="text-white fw-700">Atención al cliente</h2>
            </li>
            <li class="col-12 col-md-2 phone m-auto">
            <i class='bx bxs-phone-call fs-2x p-2' ></i> 
            </li>
            <li class="col-12 col-md-5  m-auto">
              <h2 class="text-white fw-700">999 999 999</h2>
            </li>
          </ul>
        </div>
    </div>

    <div class=" py-3">
        <div class="t-montserrat m-auto">
          <h2 class="text-center">
            <span class="text-secondary h2 fw-900">Envíenos su consulta</span><br>
            <span class="text-secondary h6 fw-700">NUESTRO EQUIPO RESPONDERÁ SU MENSAJE LO MÁS PRONTO</span>
          </h2>
          <div class="w-100 py-5 text-center t-montserrat">
            <div class="col-md-7 m-auto">
              <form class="form-theme py-4 rounded-top rounded-bottom" style="background: #F2F2F2;"
                name="formContacto" id="formContacto" action="" method="POST">
                  <div class="col-12 position-relative form-row mx-auto">
                    @csrf
                    <div class="d-inline d-lg-flex col-12">
                      <div class="col-12 col-lg-6 mb-4">
                        <input type="text" class="form-control rounded-0 border-0" name="nombre" id="nombre" placeholder="Nombre" required="Campo obligatorio">
                      </div>

                      <div class="col-12 col-lg-6 mb-4">
                        <input type="text" class="form-control rounded-0 border-0" name="apellido" id="apellidos" placeholder="Apellidos" required="Campo obligatorio">
                      </div>
                    </div>

                    <div class="d-inline d-lg-flex col-12">
                      <div class="col-12 col-lg-6 mb-4">
                        <input type="email" class="form-control rounded-0 border-0" name="correo" id="correo" placeholder="Email" required="Campo obligatorio">
                      </div>

                      <div class="col-12 col-lg-6 mb-4">
                        <input type="tel" class="form-control rounded-0 border-0" maxlength="9" onkeypress='return validaNumericos(event)' name="telefono" id="telefono" placeholder="Teléfono" required="Campo obligatorio">
                      </div>
                    </div>

                    <div class="col-md-12 px-3 mb-4">
                      <textarea class="form-control rounded-0 border-0" name="mensaje" id="mensaje" cols="30" placeholder="Mensaje" rows="6" required="Campo obligatorio"></textarea>
                    </div>

                  </div>
                  <div class="w-100 mb-4 text-center ">
                    <button class="btn btn-secondary text-white col-10 text-uppercase rounded-pill">
                      Enviar
                    </button>
                  </div>
                  <div id="alertConfirmPrincipal">
                    <p id="msg"></p>
                  </div>
              </form>
            </div>
          </div>
        </div>

    </div>
  </div>
  

</section>



@endsection

@section('script')

  <script type="text/javascript">

  </script>

@endsection