@extends('layouts.template')

@section('contenido')
        <!-- 404 Inicio -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-cone-striped display-1 icon-build " ></i>
                        <h1 class="display-1">Construcción</h1>
                        <h1 class="mb-4">Página en proceso de creación</h1>
                        <p class="mb-4">Disculpa, en este momento seguimos trabajando en nuestro sitio web, pronto podrás disfrutar de todo lo que tendremos</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{asset('/')}}">Regresar al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Fin -->
@endsection
