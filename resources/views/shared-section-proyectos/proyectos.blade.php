@extends('layouts.app')

@section('var_helpers')
@php
$navbar = array(
"active" => [4, 0]
);
@endphp
@endsection

{{-- Start for seo --}}
@section('title','Proyectos' )
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
              Proyectos
            </span>
        </div>
		</div>
  </div>

  <div class="container py-3">
      <div class="t-montserrat m-auto">
        <h2 class="h2 text-left">
          <span class="text-secondary fw-900">Proyectos de Infraestructura</span><br>
          <span class="text-primary fw-900 border-bottom">y Civiles</span>
        </h2>
        <div class="py-3">
            <p class="text-dark text-justify">
                Nuestros servicios se caracterizan por ser de calidad, pensando siempre en la comodidad de nuestros clientes, por ello nuestros colaboradores pasan por amplios filtros antes de ser seleccionados.
            </p>
            <p class="text-dark text-justify">
            Los vehículos y máquinas son de última generación, esto con la finalidad de optimizar su rendimiento y de esta manera la eficiencia sea un rasgo que nos ayude a 
            consolidar una buena imagen y prestigio.
            </p>
            <p class="text-dark text-justify">
            Aplicamos la política de mejora continua, capacitando constantemente al personal para mantener la satisfacción del cliente como nuestros proveedores.
            </p>
        </div>
      </div>

      <div class="carousel-inner container-items proyectos px-1 px-md-3 px-lg-5" role="listbox">
        
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-3">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
  </div>

  <div class="position-relative text-center w-100" style="height:250px; background-image: url({{ asset('images/banner_proyecto_1.png') }});">
      <div class="h-100 container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
          <div class="card-body  bg-transparent text-center">
            <h2 class="h2 text-left">
              <span class="text-white fw-900">Mantenimiento de</span><br>
              <span class="text-primary fw-900 border-bottom">Equipos e Infraestructura</span>
            </h2>                   
          </div>
      </div>
    </div>

  <div class="container py-3">
      <div class="t-montserrat py-3">
        <p class="text-dark text-justify">
          Ejecutamos mantenimiento preventivo y correctivo para sus equipos electrónicos, mecánicos, electromecánicos, mobiliario e infraestructura, trabajando con protocolos, niveles de seguridad y supervisión para asegurar la vida últil de sus activos. Implementamos equipos en sus instalaciones como aire acondicionado, cámara de seguridad, tableros eléctricos, entre otros; trabajando desde el diseño de la solución y evaluacion de ahorro.
        </p>
      </div>

      <div class="carousel-inner container-items proyectos px-1 px-md-3 px-lg-5" role="listbox">
        
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-3">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
  </div>
  

  <div class="position-relative text-center w-100" style="height:250px; background-image: url({{ asset('images/banner_proyecto_2.png') }});">
    <div class="h-100 container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
        <div class="card-body  bg-transparent text-center">
          <h2 class="h2 text-left">
            <span class="text-white fw-900">Soporte</span><br>
            <span class="text-secondary fw-900 border-bottom-sec">Administrativo</span>
          </h2>                    
        </div>
		</div>
  </div>

  <div class="container py-3">
      <div class="t-montserrat py-3">
        <p class="text-dark text-justify">
          Brindamos servicio de validación de acuerdo de nivel de servicio y de pago a terceros, desde la validación, gestión de órdenes de compra, seguimiento de facturación, elaboración de provisiones, elaboración de indicadores de gestión, planes de trabajo, planes de seguridad, asesoría contable, asegurando el control de los servicios.
        </p>
      </div>

      <div class="carousel-inner container-items proyectos px-1 px-md-3 px-lg-5" role="listbox">
        
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-3">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
  </div>

  <div class="position-relative text-center w-100" style="height:250px; background-image: url({{ asset('images/banner_proyecto_1.png') }});">
    <div class="h-100 container position-absolute centra-absolute t-montserrat my-3 py-5" role="listbox" style="bottom:-70%;">
        <div class="card-body  bg-transparent text-center">
          <h2 class="h2 text-left">
            <span class="text-white fw-900">Servicios</span><br>
            <span class="text-primary fw-900 border-bottom">Generales</span>
          </h2>                      
        </div>
		</div>
  </div>

  <div class="container py-3">
      <div class="t-montserrat py-3">
        <p class="text-dark text-justify">
          Gestionamos y operamos servicios complementarios para las instalaciones basados en las mejores prácticas
          del uso del mercado, contamos con el servicio de flota vehicular, gestión de taxys, alquiler de espacios, recepción de oficinas, servicio de Seguidad y Vigilancia, Servicio de Limpieza, Branding y Publicidad Empresarial, confección y diseño de uniformes, venta de materiales de construcción, venta de equipo, computadoras, impresoras , EPPs, herramientas de trabajo, entre otros.
        </p>
      </div>

      <div class="carousel-inner container-items proyectos px-1 px-md-3 px-lg-5" role="listbox">
        
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-3">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_1.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_2.png') }}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="selector">
            <div class="mb-5 m-sm-1 m-md-2 p-1 p-md-2 p-lg-2">
              <img srcset="{{ asset('images/recurso_3.png') }}" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
  </div>

</section>

@include('shared-section-mapa.mapa')

@endsection

@section('script')

  <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">

  <script type="text/javascript">

      $('.container-items').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2500,
          dots: false,
          responsive: [

              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 4,
                      // slidesToScroll: 3,
                      infinite: true,
                      // dots: true
                  }
              },
              {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 3,
                      // slidesToScroll: 2
                  }
              },
              {
                  breakpoint: 570,
                  settings: {
                      slidesToShow: 1,
                      // slidesToScroll: 1
                  }
              }
          ]

      });

  </script>

@endsection