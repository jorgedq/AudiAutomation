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
                                {{ Auth::user()->name }}
                            </a>
                            
                        </li>
                        <li class="list-item">  
                             <a class="list-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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
            <button class="options__recicle">
                <i class="fas fa-trash-alt"></i>&nbsp;Papelera De Reciclaje
            </button>
            <div class="darkmode">dark mode</div>
        </div>
        <hr/>
        </Header>
        <main>
            @yield('content')
        </main>
    </div>
    <!-- <script src="/js/bootstrap.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>  -->
    <script src="/js/app.js"></script>
</body>
</html>
