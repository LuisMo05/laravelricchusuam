<!DOCTYPE html>
<html lang="Es">
<!-- Se usa la versión 5.0.0 de botstrap -->
<!-- Head Start -->

<head>
    <meta charset="utf-8">
    <title>RICCHUS UAM</title>
    <link rel="shortcut icon" href="img/red investigacion logo_negro_rectangulo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!--<link href="img/favicon.ico" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-XSvJl6z+oELjkpMyE3Hq04J0oL2ey4ieDjKBU2Z8/nCrZd6+pKx+PwU6P5iv6v5U6L5c6SKL+GZ+I/cknSxZGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-bnE7a5h5X5o5rE6rPb6r//Y6w1nLh1n8gRNv+jGzH6i9DroFovrPTlUvF6jrNwzU0N2W+Gx/zwAtVpA/6k9G0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-bnE7a5h5X5o5rE6rPb6r//Y6w1nLh1n8gRNv+jGzH6i9DroFovrPTlUvF6jrNwzU0N2W+Gx/zwAtVpA/6k9G0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-L6U4h6UgsIZpsGc9XZKThhr97BrfYbYvpPwHJy7x/Ug/S8/lvDjH5zM5XZisJl5r" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-HV7KZDpIBuV7OZwz+uZZK2dFgOr/DNgCGX9AGNY/Guys3c3oVEh17zpw2OKwF1lLs1gMXtR0oHX/D9f/rLs3FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-xl navbar-dark text-light" id="nv">
        <div class="container-fluid">
            <a class="navbar-brand ms-0" href="{{asset('/')}}">
                <img id="RCHumano" src="img/red investigacion logo_negro_rectangulo.png" alt="RCHumano Logo" height="100" draggable="false">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item my-2">
                        <a class="nav-link" href="{{asset('/')}}"><i class="bi bi-house-door"></i> Inicio </a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link" href="{{asset('/#nosotros')}}"><i class="bi bi-info-circle"></i> Acerca de Nosotros </a>
                    </li>
                    <li class="nav-item my-2">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-book"></i> Investigación </a>
                            <div class="dropdown-menu fade-down m">
                                <a href="{{asset('/comunicaciones')}}" class="dropdown-item"> Red de comunicaciones </a>
                                <a href="{{asset('/redescomplejas')}}" class="dropdown-item"> Redes Complejas</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link" href="{{asset('team')}}"><i class="bi bi-people"></i> Miembros </a>
                    </li>
                    <li class="nav-item my-2">
                        <a class="nav-link" href="{{asset('eventos')}}"><i class="bi bi-calendar3-range"></i></i> Eventos </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mx-auto" id="middle">
        <br>
        <h4 class="text-center text-light"> Red de Investigación en Comunicaciones y Redes Complejas para el Desarrollo Humano Sostenible </h4>
        <br>
    </div>
      
    @yield('contenido')
        

    <!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 " data-wow-delay="0.1s">
        <div class="container py-20">
            <div class="row g-24">
                <div class="col-4">
                    <h3 class=" mb-3" id="h-footer">Acceso rápido a nuestros Link's</h3>
                    <a class="btn btn-link" href="{{asset('/#nosotros')}}" id="a-footer">Acerca de Nosotros</a>
                    <a class="btn btn-link" href="{{asset('/comunicaciones')}}#!" id="a-footer">Investigación</a>
                    <a class="btn btn-link" href="{{asset('/team')}}" id="a-footer">Miembros</a>
                    <a class="btn btn-link" href="{{asset('/eventos')}}" id="a-footer">Eventos</a>
                </div>
                <div class="col-4">
                    <h3 class=" mb-3" id="h-footer">Contacto</h3>
                    <p class="mb-2"><i class="bi bi-globe2 me-3"></i><a href="https://www.uam.mx/" id="a-footer">www.uam.mx</a></p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="https://www.google.com/maps/place/Universidad+Aut%C3%B3noma+Metropolitana/@19.2870551,-99.1368474,15z/data=!4m6!3m5!1s0x85ce00ffee6ef267:0x1872e1cdf3c29348!8m2!3d19.2870551!4d-99.1368474!16zL20vMDNmamQ0" id="a-footer">Prolongación Canal de Miramontes No. 3855
                        Col. Exhacienda de San Juan de Dios.
                        Alcaldía de Tlalpan, C.P. 14387, Ciudad de México.</a></p>    
                </div>
                <div class="col-4">
                    <img class="d-flex align-content-around" src="img/logoBaseCasaAbiertaBlanco.png"  height="55" alt="">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0 offset-md-4">
                        &copy; <a class="border-bottom" href="#">Red de investigación RICCHUS</a>
                        , Todos los derechos reservados. Designed By <a class="border-bottom" href="">VLMY</a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-HV7KZDpIBuV7OZwz+uZZK2dFgOr/DNgCGX9AGNY/Guys3c3oVEh17zpw2OKwF1lLs1gMXtR0oHX/D9f/rLs3FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha512-xKL0t2PZtPLzvHlwP0oFMZJ/fhxP23e2LpqmvW1+T9Oc9s/kJvn16l0YBTHlO+RvnADwSwHLf4MTZ4JLbWoovQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-HV7KZDpIBuV7OZwz+uZZK2dFgOr/DNgCGX9AGNY/Guys3c3oVEh17zpw2OKwF1lLs1gMXtR0oHX/D9f/rLs3FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        // Obtener todos los elementos colapsables
        var collapses = document.querySelectorAll('.collapse');
        // Recorrer cada elemento colapsable
        for (var i = 0; i < collapses.length; i++) {
          // Escuchar el evento 'show.bs.collapse' (cuando se abre un elemento)
          collapses[i].addEventListener('show.bs.collapse', function () {
            // Recorrer todos los elementos colapsables
            for (var j = 0; j < collapses.length; j++) {
              // Si el elemento no es el que se está abriendo
              if (collapses[j] !== this) {
                // Cerrar el elemento
                collapses[j].classList.remove('show');
              }
            }
          });
        }
      </script>
</body>

</html>