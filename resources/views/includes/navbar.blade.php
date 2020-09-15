
<div class="row">
    <div class="col-sm sidebar">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg ">
            <img src="https://i.ibb.co/W3kkGF3/P-1.png" width="40" height="40" alt="Logotipo no vendo, yo presto" >
            @if($user ?? '')
            <a class="navbar-brand d1 inline" href="/home/<?= $user->id ?>">No vendo, Yo Presto</a>
            @else
            <a class="navbar-brand d1 inline" href="{{url('/home')}}">No vendo, Yo Presto</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        @if($user ?? '')
                        <a class="nav-link d2" href="/addad/<?= $user->id ?>">Crea tu anuncio
                        <span class="sr-only">(current)</span>
                        </a>
                        @else
                        <a class="nav-link d2" href="/login">Crea tu anuncio
                        <span class="sr-only">(current)</span>
                        </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d2" href="#">Ver todos los anuncios</a>
                    </li>
                </ul>
                @if($user ?? '')            
                    <ul class="navbar-nav nav-flex-icons">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fas fa-user-alt'></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href = "/account/<?= $user->id ?>" >{{$user->userName}}</a>
                                <a class="dropdown-item" type = "submit" href="{{url('/')}}">Mis arriendos</a>
                                <a class="dropdown-item" href = "{{url('/home')}}">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                @else
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item dropdown">
                        <a class="navbar-brand d2 inline rgbtn" href="{{url('/register')}}">Registrarse</a>
                        <a class="navbar-brand d2 inline rgbtn" href="{{url('/login')}}">Iniciar sesión</a>
                    </li>
                </ul>
                @endif


            </div>
        </nav>
        <!--/.Navbar -->
    </div>
</div>