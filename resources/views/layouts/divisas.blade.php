<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/9111dc1fca.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-divisas fixed-top pt-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logopng.png" class="img-fluid" alt="Divisas sureste">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tipo-de-cambio">Tipo de cambio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sucursales">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/divisasureste" target="blank_">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/divisa.sureste/" target="blank_">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/channel/UC5X-Yf-E8IoYDn8dDlDqrEg" target="blank_">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://api.whatsapp.com/send/?phone=5219991729399&text&app_absent=0" target="blank_">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    @yield('content')


    <footer class="bg-dark text-center">

        <div class="pt-4 pb-4">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center" style="color: #fff;">

                       <p>
                        DIVISAS SURESTE CENTRO CAMBIARIO, S.A. DE C.V. <br>

                        RFC: DSC060303ER8 No. REGISTRO CNBV: 20503 DE FECHA 1° DE NOVIEMBRE 2011 <br>

                        CALLE 6 No 400 x 21 PLAZA FIESTA LOCAL 54 COL. DIAZ ORDAZ <br>

                        C.P. 97130, MÉRIDA, YUCATÁN, MÉXICO TELS: (999) 9432249, (999) 9435551 CEL: (999) 1729399
                       </p>

                    </div>

                </div>

            </div>

        </div>

    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
    </script>
</body>
</html>