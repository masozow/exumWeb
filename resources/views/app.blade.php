<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Información
        ================================================== -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>exum GT</title>
        <meta name="keywords" content="software, developer, developers, guatemala, xela, quetzaltenango, sistema, sistemas, software educativo, software a la medida, a la medida, desarrollo">
        <meta name="description" content="Exum is a software company based in Quetzaltenango Guatemala">
        

        <!--CSS compilado-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
        
        <!-- Fuentes
        ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('/fonts/font-awesome/css/font-awesome.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        
    </head>
    <body>
        <div id="main">
            <!-- Menu Nav-bar ==========================================-->
            <nav id="menu" class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <!-- Marca y menú agrupados -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Navegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#" ><img style="width: 103px; height: 26px; object-fit: cover;" src="{{URL::asset('/img/logo_top_exum.png')}}"></a>
                </div>

                <!-- Links de navegación, formularios y otro contenido para Colapsar -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#inicio" class="page-scroll">Inicio</a></li>
                    <li><a href="#servicios" class="page-scroll">Servicios</a></li>
                    <li><a href="#equipo" class="page-scroll">Equipo</a></li>
                    <li><a href="#acerca" class="page-scroll">Acerca de</a></li>
                    <li><a href="#blog" class="page-scroll">Blog</a></li>
                    <li><a href="#contacto" class="page-scroll">Contacto</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

            <!-- Inicio    ==========================================-->
            <div id="inicio" class="text-center">
                <div class="overlay">
                    <div class="content">
                      <div class="row text-center">
                        <div class="col-md-5 alinearImagen">
                            <img alt="exum" style="width: 173px; height: 46px;" src="{{ asset('img/logo_Exum(cortado).png') }}">
                        </div>
                        <div class="col-md-6 alinearTexto">
                          <h1 style="color:white;"><strong><span class="color" style="margin-top:0;padding-top:0;">Guatemala</span></strong></h1>
                        </div>
                      </div>
                        <p class="lead">Data Science y <strong>administración educativa</strong></p>
                        <div class="clearfix"></div>
                        <!-- <a href="#servicios" class="fa fa-angle-down page-scroll"></a> -->
                    </div>
                </div>
            </div>

                <!-- Servicios   ==========================================-->
                <div id="servicios" class="text-center">
                    <div class="container">
                        <div class="section-title center">
                            <h2>Nuestros <strong>servicios</strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="space"></div>
                        <div class="row">

                            <div class="col-md-3 col-sm-6 service">
                                <i class="fa fa-calculator"></i>
                                <h4><strong>MOS</strong></h4>
                                <p class="text-justify">Es una aplicación web que te permite administrar tu centro educativo totalmente en la nube. Olvida todo y gana rapidez, fiabilidad, comunicación y tiempo. Ve al futuro.</p>
                            </div>


                            <div class="col-md-3 col-sm-6 service">
                                <i class="fa fa-line-chart"></i>
                                <h4><strong>Data Science</strong></h4>
                                <p class="text-justify">Nuestros expertos en Data Science, toman tus datos y los convierten en decisiones correctas. Te ofrecemos un viaje al futuro, ve lo que pasará, vuelve y ejecuta lo que más necesites. Los dueños del éxito son quienes pueden convertir datos en información.</p>
                            </div>

                            <div class="col-md-3 col-sm-6 service">
                                <i class="fa fa-rocket"></i>
                                <h4><strong>Conferencias</strong></h4>
                                <p class="text-justify">Las conferencias planificadas, enfocadas, breves y con temas actuales tienen un gran impacto en las personas a tu cargo. Y lo tienen aun más en tus estudiantes.</p>
                            </div>

                            <div class="col-md-3 col-sm-6 service">
                                <i class="fa fa-bar-chart"></i>
                                <h4><strong>Desarrolllo de software</strong></h4>
                                <p class="text-justify">Algunas veces, es necesario crear un aplicación especifica para una situación específica. Planea, ejecuta y ve los resultados. Se dueño de tu futuro.</p>
                            </div>

                        </div>
                    </div>
                </div>

            <!-- Equipo
            ==========================================-->
            <div id="equipo" class="text-center">
                <div class="overlay">
                  <div class="container">
                      <div class="section-title center">
                          <h2><strong>Conózcanos</strong></h2>
                          <div class="clearfix"></div>
                      </div>
                      <div class="space"></div>
                      <div class="row">

                        <div class="col-md-4 col-sm-6 service">
                          <div class="item">
                            <div class="thumbnail">
                              <img src="{{ asset('img/team/01.jpg') }}" alt="..." class="img-circle team-img">
                              <div class="caption">
                                <h3>Kenny Barrera</h3>
                                <p>CEO / co-Founder</p>
                                <p><a href="mailto:barrerakj@exumgt.com">barrerakj@exumgt.com</a></p>
                                <p class="text-justify">Ingeniero en Sistemas, Informática y Ciencias de la Computación, con estudios avanzados en Data Science. Ha participado en distintas compañias con proyectos de software para aplicaciones web, aplicaciones de escritorio, etc.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 service">
                          <div class="item">
                            <div class="thumbnail">
                              <img src="{{ asset('img/team/03.jpg') }}" alt="..." class="img-circle team-img">
                              <div class="caption">
                                <h3>Marving Velásquez</h3>
                                <p>CTO / co-Founder</p>
                                <p><a href="mailto:velasquezmj@exumgt.com">velasquezmj@exumgt.com</a></p>
                                <p class="text-justify">Ingeniero en Sistemas, Informática y Ciencias de la Computación, con estudios avanzados en  Ingeniería Mecanica. Ha participado en proyectos educativos y financieros como arquitecto y diseñador de software y bases de datos.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 service">
                          <div class="item">
                            <div class="thumbnail">
                              <img src="{{ asset('img/team/02.jpg') }}" alt="..." class="img-circle team-img">
                              <div class="caption">
                                <h3>Jaslin Barrera</h3>
                                <p>COO</p>
                                <p><a href="mailto:barreravj@exumgt.com">barreravj@exumgt.com</a></p>
                                <p class="text-justify">Estudios avanzados de Marketing y Diseño Gráfico. Ha participado en diversas campañas de publicidad locales para empresas reconocidas como Xelapan, Baeza, etc.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                  </div>

                </div>
            </div>
            <!-- Acerca de ==========================================-->
            <div id="acerca">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <div class="section-title center text-center">
                                    <h2>¿Cómo nace <strong>exum</strong>?</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <p class="intro text-justify">
                                  En 2015, un grupo de estudiantes de la Universidad Mesoamericana de Quetzaltenango, empezaba su proyecto de carrera, el objetivo era obtener resultados innovadores con las tecnologías más avanzadas de ese momento. Así se escribía la primera página de nuestra historia.
                                  Más adelante, de los frutos obtenidos en esos proyectos, surge la idea de Exum. En un intento preciso de ser una empresa completa, decidimos apoyar la educación, entonces apareció la idea de crear un software, una aplicación tan útil que permitiera a las instituciones educativas llevar su organización a la nube. Así, en 2017 Kenny y Marving crearon el concepto de MOS.
                                </p>
                                <p class="intro text-justify">
                                  En 2018, se orientan los esfuerzos hacia MOS y Data Science, con el objetivo de crear la empresa más poderosa de Latinoamérica en materia de administración educativa, con la capacidad de brindar el mejor software de administración educativa jamas creado y todas las herramientas para gestión educativa jamas inventadas, todo posible a traves de Data Science.

                                  Creemos que la educación es el futuro.

                                  Creemos que las desiciones tomadas en base a la información correcta cambiarán el futuro.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- blog ==========================================-->
            <div id="blog" class="text-center">
              <div class="overlay">
                <div class="content">
                  <div class="row text-center">
                    <div class="col-md-12">
                      <div class="section-title center text-center">
                        <h2>Léanos en nuestro <strong>Blog</strong></h2>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                        <button class="btn tf-btn btn-default center-block">Ir al blog</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

            <!-- Formulario de Contacto    ==========================================-->
            <div id="contacto" class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-title center">
                                <h2><strong>Escríbanos</strong></h2>
                                <!-- <div class="line">
                                    <hr>
                                </div> -->
                                <div class="clearfix"></div>
                            </div>

                            <form method="POST" v-on:submit.prevent="enviarEmail">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo electrónico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Su correo electrónico" v-model="correo.remitenteCorreo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nombre</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Escriba su nombre" v-model="correo.remitenteNombre">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mensaje</label>
                                    <textarea class="form-control" rows="3" placeholder="¿En qué podemos ayudarle?" v-model="correo.mensaje"></textarea>
                                </div>
                                <div class="col-md-9">
                                <ul class="text-justify">
                                    <li v-for="error in errors" class="text-danger">@{{ error }}</li>
                                </ul>
                                </div>
                                <div class="col-md-3" style="padding-right: 0;margin-right: 0;">
                                    <button type="submit" class="btn tf-btn btn-default">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <nav id="footer">
                <div class="container">
                    <div class="pull-left fnav">
                        <p>TODOS LOS DERECHOS RESERVADOS. COPYRIGHT © 2018.</p>
                    </div>
                    <div class="pull-right fnav">
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/exumgt"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/exumgt"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/exumgt/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Script compilado-->
        <script src="{{ asset('js/app.js')}}">
        </script>        
    </body>
</html>
