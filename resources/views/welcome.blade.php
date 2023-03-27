@extends('layouts.template')

@section('contenido')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/recnoche.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 39, 41, 0.7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h4 class="text-success text-uppercase mb-3 animated slideInDown">Red de Investigación RICCHUS UAM</h4>
                            <h4 class="display-3 text-white animated slideInDown">Oportunidades tecnológicas y desarrollo humano para todos</h4>
                            <small class="fs-5 text-white mb-4 pb-2">Grupo de investigadores UAM que proponen soluciones tecnológicas sobre redes complejas y comunicaciones para el desarrollo humano sostenible.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/intrec.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 38, 41, 0.7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h4 class="text-success text-uppercase mb-3 animated slideInDown">Redes Complejas</h4>
                            <h4 class="display-3 text-white animated slideInDown">Consolidación de proyectos de investigación en redes complejas</h4>
                            <small class="fs-5 text-white mb-4 pb-2">Análisis de problemas  nacionales como educación, salud y comunicación, usando herramientas de la ciencia de Redes Complejas</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/comunicaciones.jpeg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 38, 41, 0.7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h4 class="text-success text-uppercase mb-3 animated slideInDown">Comunicaciones</h4>
                            <h4 class="display-3 text-white animated slideInDown">Comunicaciones inalámbricas para el desarrollo humano en zonas urbanas y rurales</h4>
                            <small class="fs-5 text-white mb-4 pb-2">Proyectos tecnológicos y asequibles para fortalecer las iniciativas comunitarias de comunicaciones</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- HISTORIA, MISIÓN Y VISIÓN-->
<div class="container" id="nosotros">
    <div class="row">
      <div class="col-md-4 mb-3">
        <img src="img/red investigacion logo_blanco_rectangulo.png" class="img-fluid">
      </div>
      <div class="col-md-8">
        <div class="d-flex">
          <button class="btn btn-primary btn-lg flex-fill" type="button" data-bs-toggle="collapse" data-bs-target="#historia" aria-expanded="false" aria-controls="historia">Historia</button>
          <button class="btn btn-primary btn-lg flex-fill" type="button" data-bs-toggle="collapse" data-bs-target="#mision" aria-expanded="false" aria-controls="mision">Misión</button>
          <button class="btn btn-primary btn-lg flex-fill" type="button" data-bs-toggle="collapse" data-bs-target="#vision" aria-expanded="false" aria-controls="vision">Visión</button>
        </div>
        <div class="row">
          <div class="col">
            <div class="collapse" id="historia">
              <div class="card card-body">
                Esta red de investigación está conformada por un grupo de profesores de las distintas unidades de la Universidad Autónoma Metropolitana, mismos que durante años han generado proyectos de investigación con intereses similares en el área de comunicaciones y desarrollo humano sostenible, la red nace de la necesidad de agrupar y transmitir contenido con soluciones e iniciativas comunitarias.
                <br>
                A lo largo de varias reuniones efectuadas vía remota durante el mes de noviembre y primeros días de diciembre del  año 2022, los miembros que conforman la red acuerdanun plan de trabajo encaminado a articular esfuerzos y dar inicio a las actividades de la misma.
                <br>
                Con las grandes ideas y reflexión que surgieron en las reuniones se decidió que el saber colectivo de los miembros se puede dividir en dos vertientes: Las comunicaciones digitales y las redes de datos. De cada uno de estos tópicos se generará documentos, libros, artículos y material didáctico.
              </div>
            </div>
            <div class="collapse" id="mision">
              <div class="card card-body">
                Generar una red de trabajo colaborativo entre profesores de las diferentes unidades y divisiones que conforman la UAM sobre iniciativas y proyectos desarrollados a lo largo de varios años de trabajo,  que tienen como fin común las redes complejas y comunicaciones para mitigar las grandes problemáticas nacionales en estas áreas.
              </div>
            </div>
            <div class="collapse" id="vision">
              <div class="card card-body">
                Consolidarnos como una red de investigación referente en el área de comunicaciones digitales y redes complejas, buscamos generar iniciativas y soluciones de alto impacto comunitario que permitan fortalecer el conocimiento,  la formación de recursos humanos y coadyuvar en la difusión de la tecnología para contribuir al desarrollo humano sostenible.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- sloan de comitiva -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title bg-white text-center text-dark px-3"></h3>
            <h1 class="mb-5 text-success">Investigamos para un mundo mejor</h1>
        </div>
    </div>
</div>
@endsection