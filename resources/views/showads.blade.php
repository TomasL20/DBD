<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    <title>YoPresto | Anuncios</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Pacifico&display=swap');



    .color {
        background-color: #FFBF69;
        color: #000000;
    }

    .sidebar {
        background-color: #CBF3F0;
    }

    .margen {
        margin-left: 10px;
        margin-top: 8%;
    }

    .d1 {
        font-family: 'Pacifico', cursive;
        color: #FE5D26;
    }

    .d2 {
        font-family: 'Nunito', sans-serif;
        text-align: left;
        color: #288F87;
    }

    .d3 {
        font-family: 'Nunito', sans-serif;
        color: #FFFFFF;
    }

    .card {
        box-shadow: 10px 10px 80px #d9d9d9; 
    }

    .centrar {
        object-position: center;
        text-align: center;
        padding-left: 15%;
        padding-right: 10%;
    }

    .container-fluid {
        overflow-x: hidden;
        background-color: #e5f9f8;
    }

    a:hover,
    a.b:hover {
        color: #FFBF69;
    }
    ,
    a.btn:hover{
        color: #000000;
    }
</style>

<body class="container-fluid">
    @include('includes.navbar')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 centrar">
                @foreach($ad as $d)
                @if ($d->id%2==0)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title h1 d1">{{$d->descName}}</h5>
                        <p class="card-text">Precio: {{$d->price}}</p>
                        <p class="card-text">{{$d->description}}</p>
                        <p class="card-text">Stock: {{$d->stock}}</p>
                        @foreach($users->where('id',$d->idUser) as $u)
                            <p class="card-text">Usuario: {{$u->userName}}</p>
                        @endforeach
                        @foreach($product->where('id',$d->idProd) as $p)
                            @foreach($category->where('id',$p->idCat) as $c)
                            <p class="card-text">Categoria: {{$c->catName}}</p>
                            @endforeach
                        @endforeach
                        <div >
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-6 centrar">
                @foreach($ad as $ad)
                @if ($ad->id%2==1)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title h1 d1">{{$ad->descName}}</h5>
                        <p class="card-text">Precio: {{$ad->price}}</p>
                        <p class="card-text">{{$ad->description}}</p>
                        <p class="card-text">Stock: {{$ad->stock}}</p>
                        @foreach($users->where('id',$ad->idUser) as $us)
                            <p class="card-text">Usuario: {{$us->userName}}</p>
                        @endforeach
                        @foreach($product->where('id',$ad->idProd) as $pr)
                            @foreach($category->where('id',$pr->idCat) as $ct)
                            <p class="card-text">Categoria: {{$ct->catName}}</p>
                            @endforeach
                        @endforeach
                        <div >
                            <a href="#" class="btn color d3 posbtn">¡Arriéndalo!</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

</body>