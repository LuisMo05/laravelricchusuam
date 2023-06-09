@extends('layouts.template')

@section('contenido')
        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">401</h1>
                        <h1 class="mb-4">Pagina no encontrada</h1>
                        <p class="mb-4">Disculpa, el acceso que solicitaste es incorrecto, vuelte a intentarlo</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{asset('/')}}">Regresar al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->
@endsection