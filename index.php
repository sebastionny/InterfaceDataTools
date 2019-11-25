<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/icofont.min.css">
    <link rel="stylesheet" href="./css/flickity.css" media="screen">
    <link rel="stylesheet" href="./css/style.css">
    <title>DataTools, Solucionamos problemas de movilidad</title>

</head>
<body class="container-fluid">

<header>

    <!-- navegacion -->
    <div class="container noPadding menuBK">
        <div class="menu">
        <nav class="navbar navbar-dark navbar-expand-md justify-content-center fontParrafo">
            <a class="navbar-brand d-flex w-25 mr-auto" href="#"><img src="./img/datatools-trans.png" alt="Data Tools"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="collapsingNavbar3">
                <ul class="navbar-nav  justify-content-center firstMenu">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="//codeply.com">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Puntos de atention</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto  justify-content-end fontParrafo secondMenu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOGIN</a>
                    </li>
                    <li class="nav-item demo">
                        <a class="nav-link" href="#">DEMO</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
    <!-- navegacion -->


<!-- Slider -->
    <div id="carouselExampleControls" class="carousel slide displayNotMobile" data-ride="carousel">
    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/modele3-t.jpg" alt="1 slide">
                <div class="carousel-caption  d-md-block">
                    <h2 class="fontTitulo colorB">Soluciones tecnológicas</h2>
                    <h4 class="fontSubtitulo colorB">a la mano de todos los ciudadanos</h4>
                    <img src="./img/logoDTBlanco.png" alt="Data Tools">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/modele-t.jpg" alt="2 slide">
                <div class="carousel-caption d-md-block">
                    <h2 class="fontTitulo colorB">Soluciones tecnológicas</h2>
                    <h4 class="fontSubtitulo colorB">a la mano de todos los ciudadanos</h4>
                    <img src="./img/logoDTBlanco.png" alt="Data Tools">
                </div>
            </div>
            
        </div>
    </div>
<!-- Slider -->

</header>
<!-- Control Slider -->
    <div class="container displayNotMobile" style="position: relative; top: -80px;" >
        <div class="controlBtn ">
            <a href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="clip-mask2" data-thmb="prev" >
                    <span class="" aria-hidden="true"> < </span>
                </div>
            </a>
            <a href="#carouselExampleControls" role="button" data-slide="next">
                <div class="clip-mask " data-thmb="next" >
                    <span class="" aria-hidden="true"> > </span>
                </div>
            </a>
        </div>
    </div>
<!-- Control Slider -->


<!-- Contenido  -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4 order-md-first order-last">
                <img class="img-fluid" src="./img/img-message.jpg" alt="Message ">
            </div>
            <div class="col-sm-8 order-md-last order-first">
                <div class="fontEx2 txtR">existimos para</div>
                <h1 class="fontEx1 fontTitulo colorV3">Mejorar la experiencia de los ciudadanos al movilizarse por su ciudad</h1>
                <div class="row">
                    <div class="col-md-3 col-sm-12 text-center"><img src="./img/logoData.png" class="img-fluid" alt="Logo"></div>
                    <div class="col-md-7 col-sm-12 fontParrafo txtR">
                        En DataTools solucionamos problemas de movilidad con el apoyo de tecnologías de punta, la inteligencia artificial, la ciencia de los datos.
                        <h4>Mauricio Morales CEO</h4>
                    </div>

                </div>
            </div>

        </div>
    </div>

<!-- Contenido  -->


<div class="container-fluid noticas">
    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-9">
                <h2 class="fontTitulo colorV3 mb-3 mt-5">Noticias</h2>
                <div class="row mt-5">

                <?php for ($i=0; $i < 4; $i++) { ?>


                    <div class="col-md-6 col-sm-12">
                        <div class="card fontParrafo colorB" >
                            
                            <div class="card-body">
                                <h3>Help Finding Information Online</h3>
                                <p class="card-text">Developed by the Intel Corporation, HDCP stands for high-bandwidth digital content protection. As the descriptive name implies, HDCP is all about protecting…</p>
                                <a href="#" class="float-right"><img src="./img/btnLink.png" alt="Ir a la noticia"></a>
                            </div>
                            <img src="./img/noti/ombre.png" class="card-img-top ombre" alt="Image Fonde">
                            <img src="./img/noti/arti-<?=$i?>.jpg" class="card-img-top" alt="Image Fonde">
                        
                        </div>
                    </div>

                    <?php } ?>
                
                </div>
            </div>
            <div class="col-sm-3">
                <h2 class="fontTitulo colorV3 mb-3 mt-5">Testimonios</h2>

                <div class="testimons mb-5">
                    <?php for ($i=0; $i < 3; $i++) { ?>
                    <div class="cell fontParrafo">
                            <img src="./img/company.png" class="img-fluid" alt="Nombre compania">
                            <h3 class="fontParrafo mt-5 mb-5">
                                Leadspace is really pushing the envelope regarding advanced predictive scoring
                                and real time enrichment.
                            </h3>

                            <img class="profil" src="./img/test.jpg" alt="Nombre persona">
                            <h4 class="colorV3">Charles Eichenbaum</h4>
                            <h4 class="puesto ">Director of Marketing TI</h4>
                    </div>
                    <?php } ?>
                   
                </div>
                    




                  <div class="call mt-5"> 
                        <a href="#">
                            <h3 class="fontParrafo" > Me interesa, quiero solicitar un DEMO</h3>
                            <img src="./img/callToAction.png" alt="LLamada a la action">
                        </a>
                    </div>


            </div>
        </div>
    </div>
</div>




    <footer class="container mt-5">

<div class="row mb-2 fontParrafo">
    <div class="col-sm-3 text-center pb-2">
        <img class="img-fluid" src="./img/logoData.png" alt="Data Tools">
    </div>
    <div class="col-sm-9 contact colorB">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h5 class="colorV1">Llámenos</h5>
                <h2>(325) 456 3456</h2>
                <a class="linkA" href="mailto:info@datatools.com">info@datatools.com</a>
            </div>
            <div class="col-md-5 col-sm-12 font-weight-bolder">
                <div> 2325 Rue de la Vie-Étudiante, La Centrale - espace entrepreneurial. </div>
                <span class="font-weight-lighter">Bogotá, Colombia </span>
                <div class="icons">
                    <a href="#"><i class="icofont-facebook"></i></a>
                    <a href="#"><i class="icofont-instagram"></i></a>
                    <a href="#"><i class="icofont-linkedin"></i></a>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-11 link-footer fontParrafo">
        <ul> 
            <li> <a href="#">Política de privacidad</a></li>
            <li> <a href="#">Términos de servicios</a></li>
            <li> <a href="#">Nota legal</a></li>
        </ul>
    </div>
    <div class="col-sm-1 tn">
        <img src="./img/powered.png" alt="powered by TN">
    </div>
</div>

</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/flickity.pkgd.min.js"></script>


<script>
    var flkty = new Flickity( '.testimons', {

    cellAlign: 'center',
    prevNextButtons: false,
    draggable: true,
    autoPlay: 3500,
    contain: true

});
</script>

</html>