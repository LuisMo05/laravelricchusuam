@extends('layouts.template')

@section('contenido')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
              <h1 class="display-3 text-white animated slideInDown">Nuestro equipo</h1>
              
          </div>
      </div>
  </div>
</div>
<!-- Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="section-title  text-center text-light px-3">Investigadores</h2>    
      </div>
      <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr Enrique.png"  alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href="https://scholar.google.es/citations?user=T_6oInMAAAAJ&hl=es&oi=sra"><i class="bi bi-google"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href="https://www.researchgate.net/profile/Enrique-Rodriguez-Colina"><i class="fab fa-researchgate"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-link"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fas fa-graduation-cap"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><img class="img-fluid" src="img/rgblanco.png" alt=""></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><img class="img-fluid" src="img/logouamblanco.png" alt=""></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><img class="img-fluid" src="img/gacademic2blanco.png" alt=""></a>
                      </div>  
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Enrique Rodriguez De la Colina</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Ricardo.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Ricardo Marcelin Jiménez</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>               
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Leonardo.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Leonardo Palacios Luengas</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Abel.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Gerardo Abel Laguna Sanchez</h5>
                      <small>Sistemas de Información y Comunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Michael.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr, Michael Pascoe Chalke</h5>
                      <br>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr Carlos.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Carlos Cortez Ruiz</h5>
                      <br>
                      <small>Política y Cultura</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Daniela.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dra. Daniela Aguirre</h5>
                      <br>
                      <small>Matemáticas Aplicadas y Sistemas</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Miguel Lopez.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Miguel Lopez Guerrero</h5>
                      <br>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Edwin.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Edwin Montes Orozco</h5>
                      <br>
                      <small>Matemáticas Aplicadas y Sistemas</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Eric.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Eric Alfredo Rincón Gracia</h5>
                      <small>Inteligencia Artificial</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr Luis Alberto Toledo.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Luis Alberto Vasquez Toledo</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr Roman Anselmo.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Román Anselmi Mora Gutiérrez</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Roberto.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Roberto Bernal Jaquez</h5>
                      <br>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Pablo Cesar.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Pablo César Hernández Cerrito</h5>
                      <small>Redes y Telecomunicaciones</small>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item bg-light">
                  <div class="overflow-hidden">
                      <img class="img-fluid" src="img/Dr. Pedro.png" alt="">
                  </div>
                  <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <div class="bg-light d-flex justify-content-center pt-2 px-1">
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
                  <div class="text-center p-4">
                      <h5 class="mb-0">Dr. Pedro Lara Velázquez</h5>
                      <br>
                      <small>Inteligencia Artificial</small>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Team End -->

@endsection