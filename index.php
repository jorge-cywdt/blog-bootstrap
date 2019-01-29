<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jorge Ernesto</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> <!-- CDN de Bootstrap -->    
    <link rel="icon" href="img/favicon2.ico">    
    <style>
        .subir{
            margin-top : -50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid bg-dark fixed-top"> <!-- container-fluid bg-primary fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-none"> <!-- navbar navbar-expand-lg navbar-dark bg-primary -->
            <a class="navbar-brand" href="/">Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cover.php">Cover<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-dark my-2 my-sm-0" href="cover.php?action=contactame">Contacto</a> <!-- btn btn-outline-dark my-2 my-sm-0 text-white border border-white -->
                    <!--  href="javascript:contacto()", es mejor pasar directamente la variable por href ya que es una y es estática, si se trata de muchas variables se realiza con una funcion javascript -->
                </form>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cover.php">Cover</a>
                    </li>            
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-primary my-2 my-sm-0" href="cover.php?action=contactame">Contacto</a> <!-- btn btn-outline-dark my-2 my-sm-0 text-white border border-white -->
                    <!--  href="javascript:contacto()", es mejor pasar directamente la variable por href ya que es una y es estática, si se trata de muchas variables se realiza con una funcion javascript -->
                </form>
            </div>
        </nav>
    </div><!-- Navbar -->   

    <!-- Sistema de columnas -->
    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <!-- Columna Izquierda -->
            <div class="col-sm-4 col-lg-3">
                <!-- Información personal -->
                <div class="card border-primary">                    
                    <img class="card-img-top" src="img/UN-Mural-e1269356026757.jpg" alt="Card image cap">
                    <div class="text-center subir">
                        <img src="img/5.jpg" alt="" class="rounded-circle border" width="100px">
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Jorge Ernesto</h6>                                                
                        <p class="card-text lead">Intenta hacer pequeños logros todos los días. Si lo haces así, imagínate lo que lograrás en un mes... Un año... Una vida... <b>Javascript</b>, <b>Php</b>, <b>Java</b>. <b>jorge.cywdt@gmail.com</b></p>
                        <a href="cover.php?action=contactame" class="btn btn-outline-primary btn-block">Contáctame</a> <!-- btn btn-primary -->
                    </div>
                </div><!-- Información personal -->
                <!-- Medallas -->
                <div class="card mt-3 border-primary">
                    <div class="card-header">
                        Medallas
                    </div>
                    <div class="card-body">                        
                        <img src="img/Medallas/m-parti-1.png" width="60" alt="angular">
                        <img src="img/Medallas/herramientas.png" width="60" alt="angular">
                        <img src="img/Medallas/javascript.png" width="60" alt="angular">
                        <img src="img/Medallas/jquery-avanzado.png" width="60" alt="angular">
                        <img src="img/Medallas/git-github.png" width="60" alt="angular">
                        <img src="img/Medallas/angular.png" width="60" alt="angular">
                        <img src="img/Medallas/node-cero-experto.png" width="60" alt="angular">
                        <img src="img/Medallas/progra-101.png" width="60" alt="angular">                                                
                    </div>
                </div><!-- Medallas -->
                <!-- Comentarios -->
                <div class="card mt-3 border-primary">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">                                                                        
                        <blockquote class="blockquote mb-0">
                            <p>Esto era lo único que podía pensar para sorprenderte más de lo que me has sorprendido.</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">Liliana Sturman</cite></footer>
                            <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
                        </blockquote>
                    </div>
                </div><!-- Comentarios -->
            </div><!-- Columna Izquierda -->

            <!-- Columna derecha -->
            <div class="col-sm-8 col-lg-9 mt-3 mt-sm-0">                
                <div class="card mr-sm-3">
                    <ul class="list-group list-group-flush">
                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">cardinal</h6>                                    
                                    <p>Desarrollo de un sistema web de gestión de información, en <b>PHP</b> 7 POO, <b>MySQL</b>, <b>Jquery</b>, <b>Ajax</b>, incluye reportes y gráficos estadísticos.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/309051798"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/309051798" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">frzmliliana</h6>                                                                        
                                    <p>Desarrollo de una ecommerce, en <b>PHP</b> 7 POO, <b>MySQL</b>, <b>Jquery</b>, <b>Ajax</b>, autenticación con Facebook, Gmail, carrito de compras, pagos en PayPal y PayU.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/311560384"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/311560384" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">agape-app</h6>                                    
                                    <p>Desarrollo <b>frontend con Angular</b> 7 y <b>backend con Spring</b> 5, <b>API REST</b>, <b>JPA</b>, <b>Spring Security</b>.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/308974322"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/308974322" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">crudmvc</h6>
                                    <p>Crud MVC en <b>Java</b>, <b>MySQL</b>, <b>Jquery</b> y <b>Ajax</b>.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/301129703"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/301129703" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->
                        
                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">ventas detalle_ventas</h6>
                                    <p>Crud (tablas relacionales, maestro/detalle) en <b>Java</b>, <b>MySQL</b>, <b>Jquery</b> y <b>Ajax</b>.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/300809770"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/300809770" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">target</h6>
                                    <p>Desarrollo de un sistema de compras y ventas en <b>Java</b>, <b>MySQL</b> (Código de Barras, Reportes, POO).</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/300452044"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/300452044" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">liliana</h6>
                                    <p>Desarrollo de un sistema web de gestión de compras y ventas con <b>Spring Framework 5</b> y <b>Spring Boot</b>: <b>Thymeleaf</b>, <b>JPA</b>, <b>Spring Security</b>, usando la plantilla de administración <b>CoreUI</b>, plantilla basada en Bootstrap 4.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/308780447"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/308780447" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->                                                

                        <!-- Artículo -->
                        <li class="list-group-item">
                            <div class="row my-3">
                                <!-- Avatar -->
                                <div class="col-2 col-sm-3 col-lg-1">
                                    <img src="img/5.jpg" alt="" class="rounded-circle border" width="60px">
                                </div><!-- Avatar -->
                                <!-- Contenido -->
                                <div class="col-10 col-sm-9 col-lg-11">
                                    <!-- <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p> -->
                                    <h6 class="font-weight-bold">tienda virtual</h6>
                                    <p>Desarrollo de una tienda virtual en <b>Java</b>, <b>MySQL</b>, <b>Jquery</b> y <b>Ajax</b>.</p>
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">                                        
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/300810369"></iframe>
                                    </div>
                                    <a target="_blank" href="https://player.vimeo.com/video/300810369" class="btn btn-sm btn-outline-dark">Ver más..</a> <!-- btn btn-outline-primary -->
                                </div><!-- Contenido -->
                            </div>
                        </li><!-- Artículo -->
                    </ul>
                </div>
            </div><!-- Columna derecha -->
        </div>
    </div><!-- Sistema de columnas -->

    <footer class="container-fluid bg-dark text-center text-white mt-3 py-3">        
        <p class="d-none">
            Este proyecto fue desarrollado con Bootstrap, Jorge Ernesto.<br> &copy; Company 2019,
            Inc. Todos los derechos reservados. Términos de uso y privacidad.<br>
        </p>
        <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, quae qui nobis quis iure placeat reprehenderit doloribus cupiditate voluptatibus earum!</p> -->
                    
        <img src="img/Medallas/javascript.png" width="132" alt="angular">
        <p>
            Powered by <a href="https://www.javascript.com">JavaScript</a>, <a href="http://php.net">PHP</a> y <a href="https://getbootstrap.com">Bootstrap</a>
        </p>
        <p>
            Este proyecto fue desarrollado en Visual Studio Code, Jorge Ernesto.<br> &copy; Company 2019,
            Inc. Todos los derechos reservados. Términos de uso y privacidad.<br>
        </p>
    </footer>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Cargamos Jquery desde la CDN de Google, una CDN permite acelerar la carga de las páginas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> <!-- CDN de Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> <!-- CDN de Bootstrap -->

    <script src="js/scripts.js"></script>
</body>
</html>