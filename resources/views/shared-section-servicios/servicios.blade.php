@extends('layouts.app')

@section('var_helpers')
@php
$navbar = array(
"active" => [3, 0]
);
@endphp
@endsection

{{-- Start for seo --}}
@section('title','Servicios' )
@section('description', '' )
@section('keywords','' )
{{-- End for seo --}}

@section('content')

<section class=" text-center">

  <div class="position-relative text-center w-100">
    <img src="{{ asset('images/servicios.jpg') }}" alt="" class="img-fluid position-relative">
    <div class="h-100 m-auto container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
        <div class="card-body bg-transparent text-center">
            <span class="text-white fw-800 h2 border-top border-bottom text-uppercase">
              Servicios
            </span>
        </div>
		</div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 t-montserrat m-auto">
        <h2 class="text-secondary h2 text-left">
          <span class="fw-900 border-bottom">Calidad e Innovación</span>
        </h2>
        <p class="text-dark text-justify">
        Nuestros servicios se caracterizan por ser de calidad, pensando siempre en la comodidad de 
        nuestros clientes, por ello nuestros colaboradores pasan por amplios filtros antes de ser seleccionados.
        </p>
        <p class="text-dark text-justify">
        Los vehículos y máquinas son de última generación, esto con la finalidad de optimizar su 
        rendimiento y de esta manera la eficiencia sea un rasgo que nos ayude a consolidar una buena imagen y prestigio. 
        </p>
        <p class="text-dark text-justify">
        Aplicamos la política de mejora continua, capacitando constantemente al personal para mantener la 
        satisfacción del cliente como nuestros proveedores.
        </p>
      </div>
      <div class="col-12 col-md-6">
        <img src="{{ asset('images/calidad.png') }}" alt="" class="img-fluid p-3">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      
      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="">
          <img src="{{ asset('images/producto_1.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
            Equipos de Protección
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="rounded-circle">
          <img src="{{ asset('images/producto_2.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
          Accesorio de Seguridad Vial e Industrial
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="">
          <img src="{{ asset('images/producto_3.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
          Construcción y Ferretería
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="">
          <img src="{{ asset('images/producto_4.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
          Tachos, baldes y artículos de limpieza
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="">
          <img src="{{ asset('images/producto_5.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
          Mascarillas según especificaciones del MINSA
          </p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="">
          <img src="{{ asset('images/producto_6.png') }}" alt="" class="img-fluid circulo p-3" style="max-width:150px;">
        </div>
        <div class="t-montserrat text-secondary text-center">
          <p class="h5 py-3 fw-700">
          Ordenadoras de Filas
          </p>
        </div>
      </div>

    </div>
  </div>

  <div class="position-relative text-center w-100" style="height:280px; background-image: url({{ asset('images/banner_servicio.png') }});">
    <div class="h-100 container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
        <div class="card-body  bg-transparent text-center">
          <h2 class="text-white fw-800">Grupo Humano Interdisciplinario</h2>
          <span class="text-white fw-500">
            Contamos con destacados profesionales altamente calificados; ingenieros, asesores, personal administrativo,
            logístico con visión de ética profesional, técnicos y operarios con amplia experiencia en la ejecución de obras,
            certificados en la operación de maquinaria pesada, electromecánica , y disciplina.
          </span>                     
        </div>
		</div>
  </div>

  <div class="container">
    <div class="row">
      
      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="t-montserrat text-white bg-primary text-center border_titulo">
          <p class="h5 py-3 fw-700">
            Maquinaria Pesada
          </p>
        </div>
        <div class="">
          <ul class="item_ser px-3 px-md-5 text-secondary text-left">
            <li class="">Excavadoras hidráulicas</li>
            <li class="">Grúa</li>
            <li class="">Tractores Oruga</li>
            <li class="">Excavadora con accesorio de martillo</li>
            <li class="">Volquetes de 15m3</li>
            <li class="">Rodillo Vibratorios</li>
            <li class="">Compactadoras</li>
            <li class="">Cargadores Frontales</li>
            <li class="">Retroexcavadoras</li>
            <li class="">Mini cargadores de ruedas</li>
            <li class="">Motoniverladoras Cisternas</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="t-montserrat text-white bg-primary text-center border_titulo">
          <p class="h5 py-3 fw-700">
          Maquinaria Electromecánica
          </p>
        </div>
        <div class="">
          <ul class="item_ser px-3 px-md-5 text-secondary text-left">
            <li class="">Amoladoras Varios</li>
            <li class="">Equipo de Oxicorte</li>
            <li class="">Equipos de Soldadura Varios</li>
            <li class="">Taladros Varios</li>
            <li class="">Generadores de Energía</li>
            <li class="">Grupo Electrógeno</li>
            <li class="">Llave de impactos</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 t-montserrat">
        <div class="t-montserrat text-white bg-primary text-center border_titulo">
          <p class="h5 py-3 fw-700">
          Maquinaria Miscelánea
          </p>
        </div>
        <div class="">
          <ul class="item_ser px-3 px-md-5 text-secondary text-left">
            <li class="">Equipos de Pintura</li>
            <li class="">Compresoras Varias</li>
            <li class="">Equipos de Arenado y Grallado</li>
            <li class="">Camionetas 4x4</li>
            <li class="">Equipos de Topografía</li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <div class="container py-3">
      
      <div class="row t-montserrat py-3">
        <div class="col-12 col-md-6">
          <img src="{{ asset('images/recurso_1.png') }}" alt="" class="img-fluid border-cuadro p-3" style="width:280px;">
        </div>
        <div class="col-12 col-md-6 text-secondary m-auto text-justify p-4">
          <p class="h5 fw-600">
            Instalación, mantenimiento preventivo
            y correctivo de instalaciones 
            eléctricas, sanitarias, entre otras.
          </p>
        </div>
      </div>

      <div class="row t-montserrat py-3">
        <div class="col-12 col-md-6">
          <img src="{{ asset('images/recurso_2.png') }}" alt="" class="img-fluid border-cuadro p-3" style="width:280px;">
        </div>
        <div class="col-12 col-md-6 text-secondary m-auto text-justify p-4">
          <p class="h5 fw-600">
            El mantenimiento inmobiliario (preventivo
            y correctivo), es nuestra especialidad para el
            máximo cuidado de bienes inmuebles: pisos
            paredes, techos, carpintería, pintura, fontanería,
            plomería, herrería y cualquier otra especialidad.
          </p>
        </div>
      </div>

      <div class="row t-montserrat py-3">
        <div class="col-12 col-md-6">
          <img src="{{ asset('images/recurso_3.png') }}" alt="" class="img-fluid border-cuadro p-3" style="width:280px;">
        </div>
        <div class="col-12 col-md-6 text-secondary m-auto text-justify p-4">
          <p class="h5 fw-600">
            Implementación y mantinimiento 
            preventivo y correctivo de equipos
            y maquinarias.
          </p>
        </div>
      </div>

  </div>

</section>

@include('shared-section-mapa.mapa')

@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function() {

    });

</script>

@endsection