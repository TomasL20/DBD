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
    <title>Hello, world!</title>
  </head>
  

  <style>

      .propiedades-cuerpo{
          background-color: #353535;
          text-align:center;
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
        
        border:solid 1px;
        padding:8px;
        border-color:#fff;
        border-radius: 20px;
        background-color:#3C6E71;
        
      }
  </style>
  <body class = "propiedades-cuerpo">
    
    <div class = "container">
        <div class = "logo">  
          <img src = "https://cdn.discordapp.com/attachments/621506339725901854/753388089044631652/unknown.png" alt = "logo"></img>
        </div>
        <div class = "register">
          <div>
            <label name = "mailLabel" class = "labels">Ingresa tu correo electrónico:</label>
            <input name = "mailInput" class = "inputs" type = "text" placeholder = "E-mail"></input>
          </div>
          <div>
            <label name = "userLabel" class = "labels">Ingresa tu nombre completo:</label>
            <input name = "userInput" class = "inputs" type = "text" placeholder = "Nombre completo"></input>
          </div>
          <div>
            <label name = "usernameLabel" class = "labels">Ingresa tu nombre de usuario:</label>
            <input name = "usernameInput" class = "inputs" type = "text" placeholder = "Nombre de usuario"></input>
          </div>
          <div>
            <label name = "passwordLabel" class = "labels">Ingresa tu nombre completo:</label>
            <input name = "passwordInput" class = "inputs" type = "password" placeholder = "Contraseña"></input>
          </div>
          <div>
            <button name = "registerbtn" type="button" class="btn btn-secondary">Crear mi cuenta</button>
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