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
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="https://i.ibb.co/W3kkGF3/P-1.png"> 
        <title>YoPresto | Home</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Pacifico&display=swap');
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
        .color{
            background-color: #2EC4B6;
            text-decoration-color: #FFFFFF;
        }
        .margen{
            margin-left: 10px;
            margin-top: 8%;
        }
        .d1{
            font-family: 'Pacifico', cursive;
            color: #FE5D26;
        }
        .d2{
            font-family: 'Nunito', sans-serif;
            text-align: left;
            color: #288F87;
        }
        .d3{
            font-family: 'Nunito', sans-serif;
            color: #FFFFFF;
        }
        .card{
            box-shadow: 10px 10px 80px #d9d9d9;
        }
        .sidebar{
            background-color: #CBF3F0;
        }
        .izq{
            text-align: left;
            position: absolute;
            margin-left: 4%;
        }
        .inline{
            padding-left: 1%;
        }
        .posbtn{
            position:static;
            margin-bottom: 16%;
        }
        .navbarpos{
            position: sticky;
        }
        a:hover,a.b:hover,a.btn:hover{
            color: #FFBF69;
        }
        .rgbtn{
            display:ruby;
            margin-right:2%;
        }
    </style>

    <body class = "container-fluid">
@include('includes.navbar')
        <!-- Sidebar -->
        <div class="row">
            <div class="col-sm-2">
                <div class="bg-light margen navbarpos" id="sidebar-wrapper">
                    <img src="https://i.ibb.co/g705hTY/Dise-o-sin-t-tulo-1.gif" class="d-block w-100" alt="Icono no vendo, yo presto">
                    <div class="sidebar-heading d2 "><h4>¡Dale un vistazo a las categorias!</h4></div>
                    <div class=" list-group list-group-flush">
                        @foreach ($category as $cat)
                            <a href="#" class="b list-group-item list-group-item-action d2">{{$cat->catName}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-8 mx-auto margen">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/03/22/17/39/kitchen-2165756_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Departamento 3 dormitorios, 2 baños</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                            <i class="material-icons">star_outline</i>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/05/07/22/42/lawn-mower-2293876_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cortadora de pasto</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/12/08/00/24/grilling-1081675_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Parrilla</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8 mx-auto margen">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/01/08/15/48/scooter-593155_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Moto</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/06/10/11/53/bouncy-castle-3466291_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Juegos inflables</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/01/07/16/45/batman-1126127_960_720.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Disfraz batman </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="col">
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 ">

            </div>
            <div class="col-sm-8 mx-auto">
                <div class="margen d2"><h2>Destacados del día</h2></div>
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
                            <div class="card grid d-block w-100" style="width: 50rem;">
                                <img src="https://cdn.pixabay.com/photo/2014/07/31/00/30/vw-beetle-405876_960_720.jpg" class="card-img-top" alt="Auto">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 1</h5>
                                    <p class="card-text"> </p>
                                    <a href="#" class="btn color">¡Arriéndalo!</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card grid d-block w-100" style="width: 50rem;">
                                <img src="https://cdn.pixabay.com/photo/2017/08/02/01/01/living-room-2569325_960_720.jpg" class="card-img-top" alt="Mueble">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 2</h5>
                                    <p class="card-text"> </p>
                                    <a href="#" class="btn btn-info">¡Arriéndalo!</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card grid d-block w-100" style="width: 50rem;">
                                <img src="https://cdn.pixabay.com/photo/2018/01/17/06/21/electrician-3087536_960_720.jpg" class="card-img-top" alt="Herramienta">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 3</h5>
                                    <p class="card-text"> </p>
                                    <a href="#" class="btn btn-info">¡Arriéndalo!</a>
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