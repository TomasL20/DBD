<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vistaone.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet"> 
    <title>Te presto el login</title>
  </head>
  

  <style>


     

      .formulario{
          background-color: #353535;
          text-align:center;
          padding: 15px;
      }

      .normalText{
        color:#d9d9d9;
      }
      .end{
          color:#d9d9d9;
          margin-right:10px;
          display:inline-flex;
      }
      
      .input-contenedor{
        margin-top: 15px;
      }
      
      .logo{
        object-position: center top;
        margin-top: 30px;
        margin-bottom: 40px;
      }

      .upper-name{
            color:#3C6E71;
            margin:0;
            margin-top:100px;

      }

      .inputs{
        margin-bottom: 30px;
        border-radius: 20px;
        inline-size: 20%;
      }


      .labels{
        color:#ffffff;
        margin-bottom: 0px;
        display:block;
      }

      .btn-secondary{
        margin-top: 15px;
        margin-bottom: 15px;
        border:solid 1px;
        padding:8px;
        border-color:#fff;
        border-radius: 20px;
        background-color:#3C6E71;
      }

      .alert-danger{
        background-color:#3C6E71;
        border:initial;
        color:#d9d9d9;
      }
      .grande{
        font-size:400%;
      }
  </style>
  
  <body class = "formulario">
  <form action="{{route('login')}}" method = "POST">
  
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
          <bold class ="grande"> ¡Ha ocurrido algo!</bold>
          <ul>
            @error('emailInput')
              <p class="normalText">El email debe ser válido.</p>
            @enderror
            @error('passwordInput')
            <p class="normalText">No se ha puesto una contraseña.</p>
            @enderror
          </ul>
      </div>
    @endif

    <div class = "contenedor">
        <div class = "logo">  
        <img src = "{{asset('/images/logoDBD.png')}}" alt = "logo"></img>
        </div>

        <h1 class = "normalText">Iniciar Sesión</h1>

        <div class = "login">

          <div>
              <label name = "mailLabel"  class = "labels">Ingresa tu correo electrónico:</label>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
              </svg>
              <input name = "emailInput"  id = "emailInput" type="text" placeholder = "Correo Electrónico" class = "inputs @error('emailInput') invalid @enderror">
          </div>

          <div>
              <label name = "mailLabel" class = "labels">Ingresa tu contraseña:</label>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill normalText" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
              <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
              </svg>
              <input name = "passwordInput" id = "passwordInput" type="password" placeholder = "Contraseña" class = "inputs @error('passwordInput') invalid @enderror">
          </div>
          
          <div>
            <button name = "registerbtn" type="submit" class="btn btn-secondary">Iniciar Sesión</button>
          </div>

          <p class = "normalText">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
          <p class = "end">¿No tienes cuenta?</p>
          <a class="link" href="register">Crear Cuenta</a>
        
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </form>
  </body>

</html>