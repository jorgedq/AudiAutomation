<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <!-- csss styles -->
        <!-- link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" -->
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

        <!-- icons -->
        <script src="https://kit.fontawesome.com/2e148be222.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <nav class="navbar">
            <div class="left-section">
                <a class="left-section__link" href="{{ url('/') }}">
                    Evaluación y auditoría de sistemas - automatización <i class="fas fa-vials"></i>
                </a>
                <!-- poner boton responsive -->
            </div>
            <div class="rigth-section">
                <ul class="list">
                    @if (Route::has('login'))
                        @auth
                        <li class="list-item">
                            <a class="list-link" href="{{ url('/home') }}">Inicio</a>
                        </li>
                    @else
                            <li class="list-item">
                                <a class="list-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="list-item">
                                <a class="list-link" href="{{ route('register') }}">Registrarse</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
        <div class="options">
            @guest
                <p class="txt-noauth" href="#">Crea y organiza rapidamente tus tareas diarias</p>
            @endguest
            @auth
            <a class="options__recicle">
                <i class="fas fa-trash-restore"></i>&nbsp;Papelera De Reciclaje
            </a>
            @endauth
            <div class="darkmode">dark mode</div>
        </div>
        </header>
        <h1>INDEX PAGE</h1>
        </div>
    </body>
</html>
