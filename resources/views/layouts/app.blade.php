<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  mix('css/app.css')  }}">
    <title>Registrar Causa</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{  route('home')  }}">JPL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrar causas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Reporte</a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item"><a href="{{  route('login')  }}" class="nav-link">Iniciar Sesión</a></li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a onclick="document.getElementById('logout').submit()" class="dropdown-item" href="#">Salir</a>
                            <a class="dropdown-item" href="#">Editar</a>
                        </div>
                    </li>

                </ul>
                <form id="logout" action="{{  route('logout')  }}" method="post">@csrf</form>
                @endguest
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <script src="{{  mix('js/app.js')  }}"></script>


</body>
</html>