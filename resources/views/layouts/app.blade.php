<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- csss styles -->
    <!-- link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" -->
    <link rel="stylesheet" href="{{asset('/css/complements.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/2e148be222.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <header>
        <nav class="navbar">
            <div class="left-section">
                <a class="left-section__link" href="{{ url('/') }}">
                    Evaluación y auditoría de sistemas - automatización&nbsp;<i class="fas fa-vials"></i>
                </a>
                <!-- poner boton responsive -->
            </div>
            <div class="rigth-section">
                <ul class="list">
                    @guest
                         <li class="list-item">
                            <a class="list-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            
                        </li>
                          @if (Route::has('register'))
                            <li class="list-item">
                                <a class="list-link" href="{{ route('register') }}">{{ __('Registrarse') }}<a>
                            </li>
                        @endif
                    @else
                        <li class="list-item">
                            <a class="list-link list-link--name" href="#" role="button">
                                {{ Auth::user()->name }}&nbsp;<i class="fas fa-user"></i>
                            </a>
                            
                        </li>
                        <li class="list-item">  
                             <a class="list-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}&nbsp;<i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                            </form>
                        </li>
                    @endguest
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
        </Header>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
