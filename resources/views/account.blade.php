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
        <title>YoPresto | Cuenta</title>
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
            color: #686262;
        }
        .stats{
            margin-left:20%;
        }
        .stats-text{
            font-size:150%;
            margin-top:3%;
            block-size: 10%;
            text-align:center;
        }
        .response-text{
            font-size:130%;
            border:#d9d9d9 solid 3px;
            border-radius:10px;
            margin-top:3%;
            block-size: 10%;
            text-align:center;
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
    
    <body>
    @include('includes.navbar')
        @if($user ?? '')
        <div class = "row">
            <div class="col-sm-4 color">
                <img src="https://i.ibb.co/HqLCjHB/icono-aislado-bicicleta-mujer-clasica-124507-5517-1.png" class="img-bici"alt="Imagen de una bicicleta"></img>
            </div>
            <div class="col-sm-4 stats">
                <p class = "d2 stats-text">Nombre</p>
                <p class = "d2 response-text">{{$user->realName}}</p>
                <p class = "d2 stats-text">Fecha de creación</p>
                <p class = "d2 response-text">{{$user->created_at}}</p>
                <p class = "d2 stats-text">Nombre de usuario</p>
                <p class = "d2 response-text">{{$user->userName}}</p>
                <p class = "d2 stats-text">E-Mail</p>
                <p class = "d2 response-text">{{$user->email}}</p>
            </div>
        </div>
        @else
        <h1 class = "d3">No estás logeado.</h1>
        @endif
    </body>