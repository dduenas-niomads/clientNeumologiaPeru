<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Plataforma comercial internacional
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="top" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!-- Navigation-->
    <nav class="navbar navbar-Concept navbar-center navbar-custom navbar-fixed-top navbar-onepage">
      <div class="container">
        <div class="menu-btn">
          <a>
              <span class="bar1"></span>
              <span class="bar2"></span>
              <span class="bar3"></span>
          </a>
      </div>
        <!-- Collect the nav links, forms, and other content for toggling-->
          <div class="collapse navbar-collapse navbar-main-collapse">

          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section-->
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="#">Inicio <span class="caret"></span></a>
            </li>
            <li><a href="#terms">METODOLOGÍA <span class="caret"></span></a>
            </li>
            <li><a href="#partners">Socios <span class="caret"></span></a>
            </li>
            <!-- <li><a href="privacy-policy.html">Política de privacidad <span class="caret"></span></a>
            </li> -->
          </ul>
          <ul class="nav navbar-nav pull-right">
                        @if (Route::has('login'))
                    @auth
                    <li> <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Inicio</a></li>
                    @else
                    <li>    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Ingresar</a></li>

                        @if (Route::has('register'))
                        <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a></li>
                        @endif
                    @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="intro">
      <div class="overlay"></div>
      <div class="intro-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12">
              <img class="img_logo" src="img/logo.png">
            </div>
          </div>
        </div>

        <!-- Video -->
        <!-- <div class="video-container">
          <video poster="img/main-search-video-poster.jpg" loop autoplay muted>
            <source src="img/main-search-video.mp4" type="video/mp4">
          </video>
        </div> -->
      </div>
      <!-- <div class="main-search-container">
        <div class="main-search-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
              <img src="img/logo.png" alt="" width="250px">  
              <h1>Plataforma comercial internacional</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="video-container">
          <video poster="img/main-search-video-poster.jpg" loop autoplay muted>
            <source src="img/main-search-video.mp4" type="video/mp4">
          </video>
        </div>
      </div> -->
    </header>
    <div class="burger-menu">
      <a class="close-menu">
        <i class="fa fa-window-close"></i>
      </a>
      <div class="menu-middle">
          <div class="container">
              <div class="main-menu">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="menu-widget">
                              <h4>Plataforma Comercial Internacional</h4>
                              <ul>
                                  <li><a href="#" title="">Inicio</a></li>
                                  <li><a href="#terms" title="">Metodología</a></li>
                                  <li><a href="#partners" title="">Socios</a></li>
                                  <li><a href="#about" title="">Nuestra Plataforma</a></li>
                              </ul>
                          </div><!--menu-widget end-->
                      </div>
                  </div>
              </div><!--main-menu end-->
          </div>
      </div><!--menu-middle end-->
  </div><!--burger-menu end-->
    <!-- Teaser 2-->
    <!-- <div class="container text-center box-shadow showcase">
      <div class="row">
        <div class="col-lg-4">
          <h3><i class="ion-ios-monitor-outline icon-big"></i> Fiabilidad</h3>
          <p class="no-pad">Sienta la tranquilidad de trabajar con profesionales con mucha experiencia en internet</p>
        </div>
        <div class="col-lg-4 bg-gray2">
          <h3><i class="ion-ios-analytics-outline icon-big"></i> Oportunidades de negocio</h3>
          <p class="no-pad">Acérquese al mundo del comercio en línea, sólo está a unos clics de distancia</p>
        </div>
        <div class="col-lg-4">
          <h3><i class="ion-ios-color-filter-outline icon-big"></i> Vanguardia tecnológica</h3>
          <p class="no-pad">Concepto sencillo y eficiente para un óptimo rendimiento y disponibilidad en cualquier momento y lugar</p>
        </div>
      </div>
    </div> -->
    <!-- Slider-->
    <section class="section-small" id="about">
      <div class="container offcet-art-main">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-2 text-center">
            <div class="carousel slide carousel-fade" id="carousel-light4">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-light4" data-slide-to="0"></li>
                <li data-target="#carousel-light4" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active"><img class="img-responsive center-block" src="img/plarcoint/3.jpg" alt=""></div>
                <div class="item"><img class="img-responsive center-block" src="img/plarcoint/4.jpg" alt=""></div>
              </div>
            </div>
            <div class="offcet-art">
              <h3>Plataforma Comercial Internacional</h3>
              <p style="text-align: justify;">Conscientes y conocedores de la situación que atraviesa el sector empresarial
                en España, entre otros por el COVID 19, hemos creado una <strong>“Plataforma
                Comercial Internacional”,</strong> con el propósito de cerrar acuerdos comerciales con
                empresas españolas, para ayudarles a aumentar sus ventas en mercados donde
                no estén vendiendo sus productos actualmente.<br><br>
                Asimismo, podremos tramitar operaciones para obtener la financiación necesaria
                para (<u>capital circulante, compra de maquinaria, modernizar las instalaciones</u>, etc…).<br><br>
                Una vez estudiada la empresa y conocer las pretensiones de sus directivos, nuestro
                Know-how Empresarial, Financiero, Jurídico y Comercial, aportará el apoyo necesario
                para que en cada momento se sienta acompañado y asesorado.</p><a class="btn btn-sm btn-gray" href="mailto:contacto@plarcoint.es?subject=Concertar entrevista personal">Contactar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Slider-->
    <section class="section-small" id="terms">
      <div class="container offcet-art-main">
        <div class="row">
          <div class="col-lg-10 text-center"><img class="img-responsive center-block" src="img/plarcoint/7.jpg" alt="">
            <div class="offcet-art-right">
              <h3>El Plan Comercial que aplica nuestra <strong>“Plataforma C. I.”</strong> a sus clientes son los siguientes:</h3>
              <ol>
                <li style="font-weight:bold;">
                  <p style="text-align: justify;font-weight:normal;">Representar a nuestros clientes (empresas), ayudándoles a vender sus
                    productos en distintos países a cambio de una comisión pactada.</p>
                </li>
                <li style="font-weight:bold;">
                  <p style="text-align: justify;font-weight:normal;">Compradores directos por parte de nuestra <strong>“Plataforma C. I.”</strong> y sus inversores
                    para comercializar sus fabricados.</p>
                </li>
                <li style="font-weight:bold;">
                  <p style="text-align: justify;font-weight:normal;">Aportación de capital para realizar operaciones puntuales (compras de materias primas, importaciones, 
                    exportaciones, etc…).</p><a class="btn btn-sm btn-gray" href="mailto:contacto@plarcoint.es?subject=Concertar entrevista personal">Contactar</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Promo Section-->
    <section class="showcase section-small" id="partners">
      <div class="container text-center">
        <div class="row v-center">
          <div class="col-lg-12">
            <h3>NUESTRO GRUPO DE EMPRESAS, CON SUS DIRECTIVOS A LA CABEZA, NOS PERMITE ANALIZAR
              Y MEJORAR LOS RESULTADOS DE NUESTROS CLIENTES</h3>
          </div>
          <div class="col-lg-3">
            <h3><i class="icon-big ion-ios-stopwatch-outline"></i> ¿Cómo lo hacemos?</h3>
            <ol type="A">
              <li style="font-weight:bold;">
                <p style="text-align: justify;font-weight:normal;">Realizamos una prospección de sus productos en los mercados donde
                  pretendemos introducirnos para conocer la competencia, y poder comprobar
                  las ventajas e inconvenientes que tenemos sobre ellos.
                </p>
              </li>
              <li style="font-weight:bold;">
                <p style="text-align: justify;font-weight:normal;">Disponemos de una organización comercial en varios países de Europa,
                  Sudamérica, USA, China, etc…, países a donde dirigimos los productos de las
                  empresas con las que cerramos acuerdos comerciales.
                </p>
              </li>
            </ol>
            <!-- <p style="text-align: justify;" class="no-pad-btm"><strong>A.</strong> Realizamos una prospección de sus productos en los mercados donde
              pretendemos introducirnos para conocer la competencia, sus
              calidades y precios.<br><br>
              <strong>B.</strong> Disponemos de una organización comercial en varios países de Europa,
              Sudamérica, USA, China, etc…, países a donde dirigimos los productos de las
              empresas con las que cerramos acuerdos comerciales.</p> -->
          </div>
          <div class="col-lg-6"><img class="img-responsive center-block wow zoomIn" src="img/plarcoint/5.jpg" alt="" data-wow-duration="3s"></div>
          <div class="col-lg-3" style="float:right">
            <h3><i class="icon-big ion-ios-glasses-outline"></i> Vayamos más lejos...</h3>
            <p style="text-align: justify;" class="no-pad-btm">Nuestra <strong>“Plataforma C. I.”</strong> ha firmado diversos acuerdos con un grupo de empresas de servicios para conseguir el mayor éxito posible en los acuerdos que firmamos.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Prtners 1-->
    <section class="no-pad">
      <div class="container text-center">
        <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="col-md-12">
            <a target="_blank" href="https://afimadrid.es/">
              <img src="img/plarcoint/clients/1.png" alt="" width="50%">
            </a>
          </div><br>
          <div class="col-md-12">
            <a target="_blank" href="https://innovacioneseinventivasmd.es/">
              <img src="img/plarcoint/clients/2.png" alt="" width="50%">
            </a>
          </div><br>
          <div class="col-md-12">
            <a target="_blank" href="https://udayaf.es">
              <img src="img/plarcoint/clients/3.png" alt="" width="50%" style="padding-block: 20px;">
            </a>
          </div><br>
          <div class="col-md-12">
            <a target="_blank" href="https://iybi.es">
              <img src="img/plarcoint/clients/4.png" alt="" width="50%">
            </a>
          </div><br>
        </div>
      </div>
    </section>
    <!-- Gallery-->
    <section class="section-small" id="gallery">
      <div class="container text-center">
        <h3>La <strong>“Plataforma C. I.”</strong>, a través de su equipo técnico comercial, está
          llevando a cabo de manera exhaustiva, las relaciones comerciales tanto de exportación como
          de importación con firmas de otros países.</h3>
        <div class="row">
          <div class="col-sm-6 no-pad">
            <div class="portfolio-item"><a class="swipebox" href="img/plarcoint/pexels/1.jpg" title="Contacto directo"><img src="img/plarcoint/pexels/1.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h3>Contacto directo</h3><span>Utilice nuestra plataforma para incrementar su red de contactos</span>
                </div>
              </div></a>
            </div>
            <div class="portfolio-item"><a class="swipebox" href="img/plarcoint/pexels/4.jpg" title="Datos certificados"><img src="img/plarcoint/pexels/4.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h3>Datos certificados</h3><span>Fuentes de información internacionales de prestigio</span>
                </div>
              </div></a>
            </div>
          </div>
          <div class="col-sm-6 no-pad">
            <div class="portfolio-item"><a class="swipebox" href="img/plarcoint/pexels/2.jpg" title="Cartera de clientes"><img src="img/plarcoint/pexels/2.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h3>Cartera de clientes</h3><span>Manejo de perfiles de cliente y exposición a público objetivo</span>
                </div>
              </div></a>
            </div>
            <div class="portfolio-item"><a class="swipebox" href="img/plarcoint/pexels/3.jpg" title="Internacionales"><img src="img/plarcoint/pexels/3.jpg" alt="">
              <div class="portfolio-overlay">
                <div class="caption">
                  <h3>Internacionales</h3><span>Comenzaremos a comercializar sus productos dentro de
                    todos los países posibles.</span>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section-->
    <!-- <section class="section-small" id="contact2">
      <div class="container text-center">
        <div class="row">
          <h2>CONCERTAR ENTREVISTA PERSONAL</h2>
          <div class="col-md-4">
            <h5><i class="ion-ios-telephone-outline icon-big"></i><a href="tel:+34915309643">+34 915 309 643</a> <br> <a href="tel:+34608774448">+34 608 774 448</a></h5>
          </div>
          <div class="col-md-4">
            <h5><i class="ion-ios-location-outline icon-big"></i><a href="https://goo.gl/maps/gdC6frDUsbp3tixY6" target="_blank">Alcalde Sainz de Baranda, 55 <br> 28009 Madrid</h5>
          </div>
          <div class="col-md-4">
            <h5><i class="ion-ios-email-outline icon-big"></i><a href="mailto:contacto@plarcoint.es?subject=Concertar entrevista personal">contacto@plarcoint.es</h5>
          </div>
        </div>
      </div>
    </section> -->
    <!-- footer - alignment center-->
    <section class="section-small bg-gray footer">
      <div class="container text-center">
        <div class="row">
          <h2>CONCERTAR ENTREVISTA PERSONAL</h2>
          <div class="col-md-3">
            <h5><i class="ion-ios-telephone-outline icon-big"></i><a href="tel:+34915309643">+34 915 309 643</a> <br> <a href="tel:+34608774448">+34 608 774 448</a></h5>
          </div>
          <div class="col-md-3">
            <h5><a href="https://goo.gl/maps/DMoJVu5EBubS7n5s6" target="_blank">
                  <i class="ion-ios-location-outline icon-big"></i>
                  P° de las Delicias, 30 <br> 28045 Madrid
                </a>
            </h5>
          </div>
          <div class="col-md-3">
            <h5>
              <a href="mailto:info@plarcoint.es?subject=Concertar entrevista personal">
                <i class="ion-ios-email-outline icon-big"></i>info@plarcoint.es
              </a>
            </h5>
          </div>
          <div class="col-md-3">
            <h5>
              <a href="privacy-policy.html">
                <i class="ion-ios-eye-outline icon-big"></i>
                Políticas de privacidad
              </a>
            </h5>
          </div>
        </div>
      </div>
    </section><a class="topbtn page-scroll" href="#page-top"></a>
    <div class="bg-gray" style="padding-left: 7%;padding-bottom: 2%;">
      <a href="#">
        <i class="fab fa-facebook-f la-fw fa-lg"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=34608774448&text=Hola,+quisiera+comunicarme+con+un+asesor&app_absent=0" style="padding-left: 1%;">
        <i class="fab fa-whatsapp la-fw fa-lg"></i>
      </a>
    </div>
    <!-- jQuery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smartmenus.js"></script>
    <script src="js/text-rotator.min.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="js/main.js"></script>

  </body>
</html>