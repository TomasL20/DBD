<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vistaone.css') }}">
    <link rel="shortcut icon" href="https://i.ibb.co/W3kkGF3/P-1.png">
    <title>Te presto el login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Pacifico&family=Raleway:wght@500&display=swap');

    .formulario {
        background-color: #353535;
        text-align: center;
        padding: 15px;
    }

    .normalText {
        color: #2EC4B6;
    }

    .end {
        color: #d9d9d9;
        margin-right: 10px;
        display: inline-flex;
    }

    .inputs {
        margin-top: 15px;
        margin-bottom: 30px;
        border-radius: 20px;
        inline-size: 80%;
        border-color: #FF8E48;
    }

    .logo {
        object-position: center top;
        margin-top: 30px;
        margin-left: 30%;
        margin-right: 30%;
        margin-bottom: 40px;
    }

    .labels {
        color: #ffffff;
        margin-bottom: 0px;
        display: block;
    }

    .btn-secondary {
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 25%;
        border: solid 3px;
        padding: 8px;
        border-color: #FFDFB4;
        border-radius: 20px;
        background-color: #FF8E48;
    }


    .grande {
        font-size: 400%;
    }

    .registerBg {
        background-color: #CBF3F0;
    }

    .pos-cosas {
        padding-left: 30%;
        padding-right: 30%;
    }

    .d2 {
        font-family: 'Nunito', sans-serif;
        margin-left: 10%;
        display: inline-block;
        color: #288F87;
    }

    .d3 {
        font-family: 'Nunito', sans-serif;
        color: #495057;
        width: 90%;
    }

    .d4 {
        font-family: 'Raleway', sans-serif;
        font-size: 200%;
        margin-top: 10%;
        margin-left: 20%;
        margin-right: 20%;
    }

    .img-traje {
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
    }
</style>

<body>
    <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <bold> ¡Ha ocurrido algo!</bold>
            <ul>
                @foreach($errors->all() as $err)
                <p>{{$err}}</p>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-6">

                <form action="{{route('register')}}" method="POST">

                    <div class="col">

                        <div class="row">
                            <div class="logo">
                                <img src="https://i.ibb.co/DK5P4bq/No-compro-Yo-vendo-5-1.png" width="250px" height="250px" class="img" alt="Logotipo no compro, yo presto">
                            </div>
                        </div>
                        <div class="row pos-cosas">
                            <h1 class="normalText d2">¡Regístrate!</h1>

                            <div class="login d3">

                                <div>
                                    <label name="mailLabel" class="labels d3">Ingresa tu correo electrónico:</label>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg>
                                    <input name="emailInput" id="emailInput" type="text" placeholder="Correo Electrónico" class="inputs @error('emailInput') invalid @enderror">
                                </div>


                                <div>
                                    <label name="mailLabel" class="labels d3">Ingresa tu nombre completo:</label>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    <input name="nameInput" id="nameInput" type="text" placeholder="Nombre Completo" class="inputs @error('nameInput') invalid @enderror">
                                </div>

                                <div>
                                    <label name="mailLabel" class="labels d3">Ingresa tu nombre de usuario:</label>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    <input name="usernameInput" id="usernameInput" type="text" placeholder="Nombre de usuario" class="inputs @error('usernameInput') invalid @enderror">
                                </div>

                                <div>
                                    <label name="mailLabel" class="labels d3">Ingresa tu contraseña:</label>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                                        <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                                    </svg>
                                    <input name="passwordInput" id="passwordInput" type="password" placeholder="Contraseña" class="inputs @error('passwordInput') invalid @enderror">
                                </div>

                                <div>
                                    <button name="registerbtn" type="submit" class="btn btn-secondary">Crear Cuenta</button>
                                </div>

                                <p class=" d3">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                                <p class="end d3">¿Ya tienes cuenta?</p>
                                <a class="link d3" href="{{url('login')}}">Iniciar Sesión</a>

                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="col-6 registerBg">
                <p class="d4">¡Encuentra los mejores arriendos sin importar dónde te encuentres!</p>
                <img src="https://i.ibb.co/Cs5SVtt/No-compro-Yo-vendo-7-1.png" class="img-traje" alt="Imagen de una bicicleta"></img>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>