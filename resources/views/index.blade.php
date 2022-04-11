@extends('layouts.divisas')
@section('content')
<main>
    <nav class="navbar navbar-expand-lg navbar-light bg-divisas fixed-top pt-4">
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
                  <a class="nav-link" href="#">Tipo de cambio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    <header>
        <video type="mp4" src="https://divisasureste.com/uploads/videos/164857799416255.mp4" autoplay loop muted>
        </video>
        <figure>
            <img src="/img/linea-paises.png" class="w-100" alt="">
        </figure>
    </header>
    <section class="tipo-de-cambio">
        <div class="container">
            <div class="titular">
                <h1>DIVISAS Y MONEDAS</h1>
            </div>
            <div class="divisas">
                <div class="card">
                    <table class="table table-borderless text-center">
                        <thead>
                          <tr style="background-color: #f3f3f3;">
                            <th style="color: gray;" scope="col">
                                <img src="/img/divisas/ico1.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                <img src="/img/divisas/ico2.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                <img src="/img/divisas/ico3.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico4.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico5.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico6.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico7.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico10.png" width="50" alt="">
                            </th>
                            <th scope="col">
                                 <img src="/img/divisas/ico9.png" width="50" alt="">
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="table-active" style="color: gray;" scope="row">DIVISAS</th>
                            <td class="table-active">Dólares</td>
                            <td class="table-active">Euros</td>
                            <td class="table-active">Canadá</td>
                            <td class="table-active">Libra</td>
                            <td class="table-active">Suizo</td>
                            <td class="table-active">Belice</td>
                            <td class="table-active">Oro</td>
                            <td class="table-active">Plata</td>
                          </tr>
                          <tr>
                            <th style="color: gray;" scope="row">COMPRA</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th class="table-active" style="color: gray;" scope="row">VENTA</th>
                            <td class="table-active">Larry</td>
                            <td class="table-active">the Bird</td>
                            <td class="table-active">@twitter</td>
                            <td class="table-active">@mdo</td>
                            <td class="table-active">@mdo</td>
                            <td class="table-active">@mdo</td>
                            <td class="table-active">@mdo</td>
                            <td class="table-active">@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="pt-3 text-center">
                <small>*Tipos de cambios informativos, sujetos a variación sin previo aviso. <br> 
                    <span>
                        (1) NO APLICA PARA BILLETES DE 500 EUROS (2) APLICA EN DENOMINACIONES DE: 1,5,10,20, BILLETES DE 50 Y 100 FAVOR DE CONSULTAR COTIZACIÓN
                    </span>
                </small>
            </div>
        </div>
    </section>
    <section class="servicios pt-4">
        <div class="titular">
            <h1>¿POR QUÉ SOMOS TU MEJOR OPCIÓN?</h1>
        </div>
        <div class="servicios-lista pt-5 pb-5">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <figure>
                        <img src="/img/chat.svg" width="100" alt="">
                    </figure>
                    <h1>FÁCIL</h1>
                    <p>Sabemos que hacer el cambio de moneda a veces puede ser tedioso, por eso siempre ponemos a tu disposición la información que necesites para realizarlo ¿No sabes cuánto recibirás al día de hoy? envíanos un mensaje a nuestras redes sociales y te respondemos en minutos.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <figure>
                        <img src="/img/carrito.svg" width="100" alt="">
                    </figure>
                    <h1>RÁPIDO</h1>
                    <p>Tu tiempo y satisfacción es lo más valioso para nosotros, te garantizamos velocidad de respuesta, así como también atención óptima, para que tu experiencia al visitarnos sea lo mejor de tu día.</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <figure>
                        <img src="/img/escudo.svg" width="100" alt="">
                    </figure>
                    <h1>SEGURO</h1>
                    <p>La seguridad es algo primordial, por eso estamos comprometidos con salvaguardar la veracidad de cada movimiento. Recuerda que contamos con todas las medidas de seguridad requeridas y todos los permisos emitodos por la ley.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="banners">
        <div class="container">
            <div class="row pt-5">
                <div class="col-4">
                    <video autoplay loop muted style="width: 100%; height: auto; border-radius: 15px;">
                        <source type="video/mp4" src="https://divisasureste.com/uploads/videos/16232575661752.mp4">
                    </video>
                </div>
                <div class="col-4">
                    <video autoplay loop muted style="width: 100%; height: auto; border-radius: 15px;">
                        <source type="video/mp4" src="https://divisasureste.com/uploads/videos/16232575661752.mp4">
                    </video>
                </div>
                <div class="col-4">
                    <video autoplay loop muted style="width: 100%; height: auto; border-radius: 15px;">
                        <source type="video/mp4" src="https://divisasureste.com/uploads/videos/16232575661752.mp4">
                    </video>
                </div>
            </div>
            <div id="carouselDivisas" class="carousel slide pt-5" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselDivisas" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselDivisas" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="sucursales">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-galerias" role="tab" aria-controls="pills-home" aria-selected="true">Galerías Mérida</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-altabrisa" role="tab" aria-controls="pills-profile" aria-selected="false">Plaza Altabrisa</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-fiesta" role="tab" aria-controls="pills-contact" aria-selected="false">Plaza Fiesta</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-colon" role="tab" aria-controls="pills-contact" aria-selected="false">Centro Colón</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-centro" role="tab" aria-controls="pills-contact" aria-selected="false">Centro 59</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-mexico-tab" data-toggle="pill" href="#pills-mexico" role="tab" aria-controls="pills-contact" aria-selected="false">Centro 59</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-galerias" role="tabpanel" aria-labelledby="pills-galerias-tab"><h1>1</h1></div>
                <div class="tab-pane fade" id="pills-altabrisa" role="tabpanel" aria-labelledby="pills-altabrisa-tab"><h1>2</h1></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-fiesta-tab"><h1>3</h1></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-colon-tab"><h1>4</h1></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-centro-tab"><h1>5</h1></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-mexico-tab"><h1>6</h1></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-centro-tab"><h1>7</h1></div>
              </div>
        </div>
    </section>

</main>
@endsection