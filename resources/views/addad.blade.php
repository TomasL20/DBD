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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="https://i.ibb.co/W3kkGF3/P-1.png">
    <title>YoPresto | Anuncio</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Pacifico&display=swap');

    .dropdown {
        margin-left: 1%;
        margin-top: 10px;
    }

    .carousel {
        margin-top: 5%;
    }

    .carousel-item {
        text-align: center;
        min-height: 250px;
        /* Prevent carousel from being distorted if for some reason image doesn't load */
    }

    .color {
        background-color: #2EC4B6;
        text-decoration-color: #FFFFFF;
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

    .d5 {
        font-family: 'Nunito', sans-serif;
        text-align: left;
        color: #288F87;
        font-size: 150%;
        margin-top: 5%;
    }

    .card {
        box-shadow: 10px 10px 80px #d9d9d9;
    }

    .sidebar {
        background-color: #CBF3F0;
    }

    .izq {
        text-align: left;
        position: absolute;
        margin-left: 4%;
    }

    .inline {
        padding-left: 1%;
    }

    .posbtn {
        position: static;
        margin-bottom: 16%;
    }

    .navbarpos {
        position: sticky;
    }

    a:hover,
    a.b:hover,
    a.btn:hover {
        color: #FFBF69;
    }

    .rd {
        margin-left: 1%;
        margin-right: 1%;
    }

    .inputs {
        margin-top: 15px;
        margin-bottom: 30px;
        border-radius: 20px;
        inline-size: 65%;
        border-color: #288f87;
    }

    .btn-primary {
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 25%;
        border: solid 3px;
        padding: 8px;
        border-color: #7ddcd3;
        border-radius: 20px;
        background-color: #2ec4b6;
    }

    .button {
        transition-duration: 0.4s;
    }

    .button:hover {
        color: #2ec4b6;
    }

    

</style>

<body>
    <div class="container-fluid">
    @include('includes.navbar')



        <div class="row">
            <div class="col-6">

                <p class='d5'>Rellena los datos de tu anuncio</p>
                <form action="{{route('addad',$user->id)}}" method="POST">
                    <div class="form-group">
                        <label>Dale nombre a tu anuncio</label>
                        <input class="form-control inputs" id="nameInput" name ="nameInput">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input class="form-control inputs" id="descriptionInput" name ="descriptionInput">
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input class="form-control inputs" id="priceInput" name ="priceInput">
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input class="form-control inputs" id="stockInput" name ="stockInput">
                    </div>
                    <div class="form-group">
                        <label>Imagen (opcional)</label>
                        <input class="form-control inputs" id="imageInput" name ="imageInput">
                    </div>
                    <div class="form-group">
                        <label>Productos</label>
                        <select style="width: 200px" class="form-control" id="productId" name="productId">
                            <option value="" dissable="true" selected="true">--SELECT--</option>
                            @foreach($product as $prod)
                            <option value="{{$prod->id}}">{{$prod->prodName}}</option>
                            @endforeach
                        </select>
                    </div>
                
                 </div>
                <div class="col-6">
                    <p class='d5'>Rellena tus datos</p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sobre ti</label>
                        <input class="form-control inputs" id="aboutInput" name ="aboutInput" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ubicación</label>
                        <input class="form-control inputs" id="ubicationInput" name ="ubicationInput" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="checkboxInput" name ="checkboxInput">
                        <label class="form-check-label" for="exampleCheck1">Al inscribir este anuncio acepto los
                            términos y condiciones de uso</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear anuncio</button>
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <bold class="grande"> ¡Ha ocurrido algo!</bold>
                        <ul>
                            @foreach($errors->all() as $err)
                            <p class="normalText">{{$err}}</p>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>


</body>
</html>
