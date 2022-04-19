@extends('layouts.divisas')
@section('content')
    <main>
        <header>
            <video type="mp4" src="https://divisasureste.com/uploads/videos/164857799416255.mp4" autoplay loop muted>
            </video>
            <figure>
                <img src="/img/linea-paises.png" class="w-100" alt="">
            </figure>
        </header>
        <section id="tipo-de-cambio" class="tipo-de-cambio pt-5 pb-5">
            <div class="container">
                <div class="titular">
                    <h1>DIVISAS Y MONEDAS</h1>
                </div>
                <div class="divisas">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
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
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div class="card">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr style="background-color: #f3f3f3;">
                                        <th style="color: gray;" scope="col">
                                            DIVISAS
                                        </th>
                                        <th style="color: gray;" scope="col">
                                            COMPRA
                                        </th>
                                        <th style="color: gray;" scope="col">
                                            VENTA
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="table-active" style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico2.png" width="40" alt="">
                                        </th>
                                        <td class="table-active mt-5">Dólares</td>
                                        <td class="table-active mt-5">Dólares</td>
                                    </tr>
                                    <tr>
                                        <th style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico3.png" width="40" alt="">
                                        </th>
                                        <td>Jacob</td>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th class="table-active" style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico4.png" width="40" alt="">
                                        </th>
                                        <td class="table-active">Larry</td>
                                        <td class="table-active">Larry</td>
                                    </tr>
                                    <tr>
                                        <th style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico5.png" width="40" alt="">
                                        </th>
                                        <td class="mt-4">Jacob</td>
                                        <td class="mt-4">Jacob</td>
                                    </tr>
                                    <tr>
                                        <th class="table-active" style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico6.png" width="40" alt="">
                                        </th>
                                        <td class="table-active">Larry</td>
                                        <td class="table-active">Larry</td>
                                    </tr>
                                    <tr>
                                        <th style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico7.png" width="40" alt="">
                                        </th>
                                        <td class="mt-4">Jacob</td>
                                        <td class="mt-4">Jacob</td>
                                    </tr>
                                    <tr>
                                        <th class="table-active" style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico9.png" width="40" alt="">
                                        </th>
                                        <td class="table-active">Larry</td>
                                        <td class="table-active">Larry</td>
                                    </tr>
                                    <tr>
                                        <th style="color: gray;" scope="row">
                                            <img src="/img/divisas/ico10.png" width="40" alt="">
                                        </th>
                                        <td class="mt-4">Jacob</td>
                                        <td class="mt-4">Jacob</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pt-3 text-center">
                    <small>* Tipos de cambios informativos, sujetos a variación sin previo aviso. <br>
                        <span>
                            (1) NO APLICA PARA BILLETES DE 500 EUROS (2) APLICA EN DENOMINACIONES DE: 1,5,10,20, BILLETES DE
                            50 Y 100 FAVOR DE CONSULTAR COTIZACIÓN
                        </span>
                    </small>
                </div>
            </div>
        </section>
        <section id="servicios" class="servicios pb-4">
            <div class=" titular pt-3 pb-3">
                <h1>¿POR QUÉ SOMOS TU MEJOR OPCIÓN?</h1>
            </div>
            <div class="servicios-lista pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <figure>
                            <img src="/img/mensaje.png" class="img-fluid" alt="">
                        </figure>
                        <h1>FÁCIL</h1>
                        <p>Sabemos que hacer el cambio de moneda a veces puede ser tedioso, por eso siempre ponemos a tu
                            disposición la información que necesites para realizarlo ¿No sabes cuánto recibirás al día de
                            hoy? envíanos un mensaje a nuestras redes sociales y te respondemos en minutos.</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <figure>
                            <img src="/img/rapido.png" class="img-fluid" alt="">
                        </figure>
                        <h1>RÁPIDO</h1>
                        <p>Tu tiempo y satisfacción es lo más valioso para nosotros, te garantizamos velocidad de respuesta,
                            así como también atención óptima, para que tu experiencia al visitarnos sea lo mejor de tu día.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <figure>
                            <img src="/img/candado.png" class="img-fluid" alt="">
                        </figure>
                        <h1>SEGURO</h1>
                        <p>La seguridad es algo primordial, por eso estamos comprometidos con salvaguardar la veracidad de
                            cada movimiento. Recuerda que contamos con todas las medidas de seguridad requeridas y todos los
                            permisos emitodos por la ley.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mt-2">
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
                            <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://divisasureste.com/uploads/sliders/162326437311429.jpg" class="d-block w-100"
                                alt="...">
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
        <section id="sucursales" class="sucursales pt-4">
            <div class="container">
                <div class="posicion">
                    <div class="titular">
                        <h1 class="text-center">SELECCIONA TU SUCURSAL <br> MÁS CERCANA</h1>
                    </div>
                    <div class="posicion__tabs">
                        <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-galerias"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Galerías Mérida</a>
                            </li>
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-altabrisa"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Plaza Altabrisa</a>
                            </li>
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-fiesta"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Plaza Fiesta</a>
                            </li>
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-colon"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Centro Colón</a>
                            </li>
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-centro"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Centro 59</a>
                            </li>
                            <li class="nav-item mt-2" role="presentation">
                                <a class="nav-link" id="pills-mexico-tab" data-toggle="pill" href="#pills-mexico"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Colonia México</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-galerias" role="tabpanel"
                                aria-labelledby="pills-galerias-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">GALERÍAS MÉRIDA</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">GALERÍAS MÉRIDA, MÓDULO 26, PLANTA ALTA.
                                                CALLE 3 Nº 300 X 24 Y 60, COL. UNIDAD HABITACIONAL REVOLUCIÓN CORDEMEX
                                                MÉRIDA, YUCATÁN, MÉXICO. C.P. 97111</p>
                                            <p>
                                            <div class="row pt-3">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 218 3602</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 10:00 AM A 9:00
                                                        PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-altabrisa" role="tabpanel"
                                aria-labelledby="pills-altabrisa-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">PLAZA ALTABRISA</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">PLAZA ALTABRISA, KIOSKO 7, PLANTA BAJA
                                                CALLE 7 Nº 451 X 22 Y 24 FRACC. ALTABRISA. MÉRIDA, YUCATÁN. CP 97133</p>
                                            <p>
                                            <div class="row pt-3">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="tel">WHATSAPP</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 167 9357</span> <br>
                                                    <span class="derecha tele">(999) 172 9399</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 10:00 AM A 9:00
                                                        PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-fiesta" role="tabpanel"
                                aria-labelledby="pills-fiesta-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">PLAZA FIESTA</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">PLAZA FIESTA, LOCAL 54. CALLE 6 Nº 400 X 21
                                                COL. DÍAZ ORDAZ, MÉRIDA, YUCATÁN. C.P. 97130.</p>
                                            <p>
                                            <div class="row pt-3">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="tel">WHATSAPP</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 943 2249</span> <br>
                                                    <span class="derecha tele">(999) 172 9399</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 9:30 AM A 6:00 PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-colon" role="tabpanel" aria-labelledby="pills-colon-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">CENTRO COLÓN</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">CALLE 62 NO. 483 DEPTO "G" BAJOS "HOTEL
                                                COLÓN" ENTRE CALLE 57 Y 59 COL. CENTRO C.P. 97000. MÉRIDA, YUCATÁN, MÉXICO
                                            </p>
                                            <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 923 6974</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 9:00 AM A 9:00 PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-centro" role="tabpanel"
                                aria-labelledby="pills-centro-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">CENTRO 59</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">CALLE 59 NO. 509 DEPTO 1 ENTRE 60 Y 62 COL.
                                                CENTRO C.P. 97000 MÉRIDA, YUCATÁN, MÉXICO</p>
                                            <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 923 5046</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 9:00 AM A 9:00 PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-mexico" role="tabpanel"
                                aria-labelledby="pills-mexico-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8430870078764!2d-89.63507074956055!3d21.03896358592406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567599c7057651%3A0x55a2463e16d0b906!2sDivisas+Sureste+Galer%C3%ADas!5e0!3m2!1ses-419!2smx!4v1532530883729"
                                                width="100%" height="450" frameborder="0" style="border:0"
                                                allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 inf-sucursal m-auto">
                                        <h1 class="text-right pt-2">COLONIA MÉXICO</h1> <br>
                                        <div class="text-right">
                                            <p style="color:rgb(100, 100, 100);">AVENIDA DÍAZ BOLIO N° 196 LOCAL "A" CALLE
                                                21 X 14 COL MÉXICO ORIENTE C.P. 97137</p>
                                            <p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12">
                                                    <span class="tel">TEL</span><br>
                                                    <span class="izquierda horario">HORARIO:</span>
                                                </div>
                                                <div class="col-md-8 col-sm-12 ">
                                                    <span class="derecha tele">(999) 374 1963</span> <br>
                                                    <span class="derecha tele">TODOS LOS DÍAS DE 9:30 AM A 7:30 PM</span>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contacto" class="contacto pt-5 pb-5">
            <div class="container">
                <div class="row" id="contacto">
                    <div class="col-md-12 titular">
                        <h1 class="titulares text-center">CONTÁCTANOS</h1> <br>
                    </div>
                    <div class="col-lg-12 col-lg-offset-2 p-3">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-md-6  controls">

                                    <input type="text" class="form-control" placeholder="NOMBRE" id="name" required=""
                                        data-validation-required-message="Please enter your name." style="color: #f2f2f2;">
                                    <p class="help-block text-danger"></p> <br>

                                    <input type="email" class="form-control" placeholder="CORREO" id="email" required=""
                                        data-validation-required-message="Please enter your email address."
                                        style="color: #f2f2f2;">
                                    <p class="help-block text-danger"></p> <br>

                                    <input type="tel" class="form-control" placeholder="TELÉFONO" id="phone" required=""
                                        data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>

                                </div>

                                <div class="form-group col-md-6  controls">
                                    <textarea rows="7" class="form-control" placeholder="ASUNTO" id="message" required=""
                                        data-validation-required-message="Please enter a message."
                                        style="color: #f2f2f2;"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success  btn-enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
