@extends('layouts.app')

@section('var_helpers')
  @php
  $navbar = array(
  "active" => [1, 1]
  );
  @endphp
@endsection

@section('content')

<section id="home" class="wrap-banner img-bg-fluid">

  <div id="carouselBanner" class="carousel slide carousel-banner position-relative" data-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <picture class="">
          <source srcset="{{ asset('images/banner/al-peru_br01-sm.jpg') }}" media="(max-width: 568px)">
          <source srcset="{{ asset('images/banner/al-peru_br01-md.jpg') }}" media="(max-width: 768px)">
          <img srcset="{{ asset('images/banner/al-peru_br01.jpg') }}" class="w-100"
            alt="" style="height:100vh;">
        </picture>
      </div>

      <div class="carousel-item">
        <picture class="">
          <source srcset="{{ asset('images/banner/al-peru_br01-sm.jpg') }}" media="(max-width: 568px)">
          <source srcset="{{ asset('images/banner/al-peru_br01-md.jpg') }}" media="(max-width: 768px)">
          <img srcset="{{ asset('images/banner/al-peru_br01.jpg') }}" class="w-100"
            alt="" style="height:100vh;">
        </picture>
      </div>

      <ol class="carousel-indicators list-carrusel">
        <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
        <li data-target="#carouselBanner" data-slide-to="1" class=""></li>
        <!-- <li data-target="#carouselBanner" data-slide-to="2" class=""></li> -->
      </ol>

    </div>

    <div class="carousel-caption f-montserrat text-white t-0">
          <h2 class="text-center h1 fw-900">Servicios y Obras</h2>
          <h2 class="text-center h2 fw-500">
            <span class="">de alta calidad para</span><br>
            <span class="">el sector público y privado</span>
          </h2>
          <div class="d-block d-md-flex justify-content-center py-3">
            <div class="t-montserrat p-2 boton mb-2 mb-md-0">
              <a href="{{ url('contactanos') }}" class="rounded-pill border px-5 py-2 text-white text-decoration-none h5">Contáctanos</a>
            </div>
            <div class="t-montserrat p-2 boton">
              <a href="{{ url('proyectos') }}" class="rounded-pill border px-5 py-2 text-white text-decoration-none h5">Proyectos</a>
            </div>
          </div>  
        </div>

  </div>

</section>

@include('shared-home.inicio')
@include('shared-section-mapa.mapa')

@endsection

@section('script')

  <script>

  </script>

@endsection