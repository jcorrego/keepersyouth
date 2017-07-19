<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="lib/css/agency.min.css" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">--}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="padding: 0;margin-top: -8px;">
                <div style="max-width: 65px;">
                <img src="/images/logos/keepers-200.png" alt="Keepers Youth" class="img-responsive">
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Sobre nosotros</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Áreas</a>
                </li>
                <li>
                    <a class="page-scroll" href="#goals">Metas</a>
                </li>
                <li>
                    <a class="page-scroll" href="#materials">Materiales</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="op4">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Keepers Youth Ministries</div>
            <div class="intro-heading">Iniciamos, equipamos y acompañamos procesos en el ministerio juvenil</div>
            <a href="#about" class="page-scroll btn btn-xl">Conocer más</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Sobre nosotros</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-compass fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Misión</h4>
                <p class="text-muted">Formamos y facilitamos “REDES” Recursos básicos y profundos para la Enseñanza, el Discipulado y el Estudio de la Palabra para el ministerio juvenil dentro y fuera de la Iglesia. Nuestra base primordial son las Escrituras.</p>
            </div>
            <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Visión</h4>
                <p class="text-muted">Seremos un ministerio autosostenible, cuya intervención ha facilitado las “REDES” en medio de iglesias, grupos juveniles, colegios y medios audiovisuales en Colombia, Estados Unidos y otros países que así lo requieran. Se reconocerá nuestra profundidad, seriedad y respeto por la Palabra de Dios, además de la pertinencia,accesibilidad y el dinamismo de las herramientas ofrecidas.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Áreas de alcance y servicio</h2>
                <h3 class="section-subheading text-muted">En estas áreas estamos trabajando...</h3>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal{{ $service['id'] }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ $service['thumbnail'] }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{ $service['name'] }}</h4>
                        <p class="text-muted">{{ $service['subtitle'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="goals" class="bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nuestras metas</h2>
                <h3 class="section-subheading text-muted"></h3>
                <br>
            </div>
            @foreach($goals as $goal)
                <div class="col-md-2 col-sm-6">
                    <div class="goal">{{ $goal }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="materials" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Materiales</h2>
                <h3 class="section-subheading text-muted">Algunos de nuestros materiales</h3>
                <br>
            </div>
            @foreach($materials as $material)
                <div class="col-md-3 col-sm-6">
                    @include('materials.summary',['material'=>$material])
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">¿Quieres contactarnos?</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="" style="color: white;">Oficina central Bogotá:<br>
                            <small style="color: white;">Cra 16 No 76-31<br>Tel: 5520777</small>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <h3 class="" style="color: white;">Visitanos en Facebook:<br>
                            <small style="color: white;"><a href="https://www.facebook.com/keepers.youth/" target="_blank">fb.com/keepers.youth</a>
                            </small>
                            <br>
                            <ul class="list-inline social-buttons">
                                <li>
                                    <a href="https://www.facebook.com/keepers.youth/" target="_blank" style="background: white; color: #000;"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <h3 style="color: #eee;">
                            <small style="color: #eee;">¿Quieres conocer más sobre nosotros? ¿formar parte de este ministerio?
                                ¿Deseas apoyar y ofrendar a este ministerio? <br>
                                Escríbenos con tus datos: <a href="mailto:info@keepersyouth.com">info@keepersyouth.com</a></small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <span class="copyright">Todos los derechos reservados &copy; Keepers Youth Ministries {{ date('Y') }}</span>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
@foreach($services as $service)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $service['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-responsive img-centered" src="{{ $service['image'] }}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h2>{{ $service['name'] }}</h2>
                                        <p class="item-intro text-muted">{{ $service['subtitle'] }}</p>
                                        <p>{!! $service['description']  !!}</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- jQuery -->
{{--<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>--}}
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="lib/js/jqBootstrapValidation.js"></script>
<script src="lib/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="lib/js/agency.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-54546012-2', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
