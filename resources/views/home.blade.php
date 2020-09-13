<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/vistaone.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <title>YoPresto | Home</title>
    </head>
    <style>
        .logo{
            object-position: left;
            margin-top: 30px;
            margin-bottom: 40px;
            scroll-margin-top: 40px;
        }
        .flex-column{
            object-position: left;
            margin-top: 100px;
            margin-bottom: 40px;
            scroll-margin-top: 40px;
        }
        .formulario{
            background-color: #FFFFFF;
            margin-top: 10%;
        }
        .dropdown{
            margin-left: 1%;
            margin-top: 10px;
        }
        .carousel{
            margin-top: 5%;
        }
        .carousel-item{
            text-align: center;
            min-height: 250px; /* Prevent carousel from being distorted if for some reason image doesn't load */
        }
        .margen{
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>

    <body>
<!-- Navbar + buscador -->
    <div class="row">
        <div class="col-sm">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">No vendo, Yo Presto</a>
                <form class="d-inline form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </nav>
        </div>
    </div>
<!-- aqui podria ir con main pero soy weona-->
    <div class="row">
        <div class="col-sm-2">
            <div class="bg-light margen" id="sidebar-wrapper">
                <div class="sidebar-heading"><h3>¡Dale un vistazo a las categorias!</h3></div>
                <div class="list-group list-group-flush">
                    @foreach ($category as $cat)
                        <a href="#" class="list-group-item list-group-item-action bg-light">{{ $cat->catName}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <h2>Destacados del día</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Items del carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card grid" style="width: 55rem;">
                                        <img src="https://cdn.pixabay.com/photo/2014/07/31/00/30/vw-beetle-405876_960_720.jpg" class="card-img-top" alt="Auto">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"> Producto 1</p>
                                            <a href="#" class="btn btn-primary">¡Arriéndalo!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card grid" style="width: 55rem;">
                                        <img src="https://cdn.pixabay.com/photo/2017/08/02/01/01/living-room-2569325_960_720.jpg" class="card-img-top" alt="Mueble">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"> Producto 2</p>
                                            <a href="#" class="btn btn-primary">¡Arriéndalo!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card grid" style="width: 55rem;">
                                        <img src="https://cdn.pixabay.com/photo/2018/01/17/06/21/electrician-3087536_960_720.jpg" class="card-img-top" alt="Herramienta">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"> Producto 3</p>
                                            <a href="#" class="btn btn-primary">¡Arriéndalo!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
            </div>
        </div>
    </div>
    </body>
</html>