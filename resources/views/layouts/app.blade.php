<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dietali - @yield('title', 'Dietas saludables para niños')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #FFC107;
            --accent-color: #FF5722;
            --light-color: #F8F9FA;
            --dark-color: #343A40;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333;
        }

        .navbar-brand {
            font-family: 'Comic Neue', cursive;
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
        }

        .navbar {
            background-color: white !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 0.8rem 0;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-link {
            font-weight: 600;
            padding: 0.5rem 1rem !important;
            color: var(--dark-color) !important;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #3e8e41;
            border-color: #3e8e41;
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        main {
            flex: 1;
            padding: 2rem 0;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.9), rgba(255, 193, 7, 0.8)),
            url('https://images.unsplash.com/photo-1505576399279-565b52d4ac71');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
        }

        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 2rem 0;
            margin-top: auto;
        }

        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--secondary-color);
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
        }

        .alert {
            border-radius: 8px;
        }

        /* Estilo especial para el dropdown de usuario */
        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: none;
        }

        .dropdown-item {
            transition: all 0.2s;
        }

        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white !important;
        }

        /* Estilos para el botón de menú en móviles */
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Efecto para los iconos */
        .nav-icon {
            margin-right: 5px;
            color: var(--primary-color);
        }

        .welcome-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .welcome-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .morning-gradient {
            background: linear-gradient(135deg, #FF9A8B 0%, #FCCB90 100%);
        }

        .afternoon-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .night-gradient {
            background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
        }

        .welcome-decoration {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .circle-1 {
            width: 100px;
            height: 100px;
            top: -30px;
            right: -30px;
        }

        .circle-2 {
            width: 60px;
            height: 60px;
            bottom: -20px;
            right: 30px;
        }

        .circle-3 {
            width: 40px;
            height: 40px;
            bottom: 20px;
            left: -15px;
        }

        /* Animación */
        .animate__animated {
            animation-duration: 0.8s;
        }

        .animate__fadeIn {
            animation-name: fadeIn;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    @stack('styles')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-apple-alt me-2"></i>Dietali
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Menú principal -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-utensils nav-icon"></i>Dietas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-carrot nav-icon"></i>Alimentos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-book nav-icon"></i>Recetas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-allergies nav-icon"></i>Alergias
                        </a>
                    </li>
                </ul>

                <!-- Menú de usuario -->
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="btn btn-outline-primary me-2" href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                                </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('register') }}">
                                    <i class="fas fa-user-plus"></i> {{ __('Register') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4CAF50&color=fff"
                                     class="rounded-circle me-2" width="32" height="32">
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="">
                                        <i class="fas fa-user-circle me-2"></i>Perfil
                                    </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i>{{ __('Logout') }}
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Hero opcional -->
    @hasSection('hero')
        <section class="hero-section">
            <div class="container">
                @yield('hero')
            </div>
        </section>
    @endif

    <!-- Contenido principal -->
    <main class="py-3">
        <div class="container">
            @php
                $hora = now()->hour;
                if ($hora >= 5 && $hora < 12) {
                    $saludo = 'Buenos días';
                    $icono = 'fa-sun';
                    $color = 'morning';
                } elseif ($hora >= 12 && $hora < 19) {
                    $saludo = 'Buenas tardes';
                    $icono = 'fa-cloud-sun';
                    $color = 'afternoon';
                } else {
                    $saludo = 'Buenas noches';
                    $icono = 'fa-moon';
                    $color = 'night';
                }

                $nombre = Auth::check() ? Auth::user()->name : 'Invitado';
            @endphp

            @auth
                <!-- Tarjeta de bienvenida mejorada - Solo se muestra cuando el usuario está autenticado -->
                <div class="welcome-card mb-4 animate__animated animate__fadeIn">
                    <div class="card border-0 shadow-sm {{ $color }}-gradient">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <div class="welcome-icon me-4">
                                    <i class="fas {{ $icono }} fa-3x text-white"></i>
                                </div>
                                <div>
                                    <h2 class="card-title text-white mb-1">{{ $saludo }}, <span class="fw-bold">{{ $nombre }}</span></h2>
                                    <p class="card-text text-white-50 mb-0">Bienvenido al sistema Dietali</p>
                                </div>
                            </div>
                            <div class="welcome-decoration">
                                <div class="circle circle-1"></div>
                                <div class="circle circle-2"></div>
                                <div class="circle circle-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth

            @guest
                <!-- Este contenido solo se mostrará cuando el usuario NO esté autenticado -->
                <div class="mb-4">
                    <!-- Aquí va el elemento que quieres mostrar solo en el login -->
                    <!-- Por ejemplo: -->
                    @yield('content')

                </div>
            @endguest

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3"><i class="fas fa-apple-alt me-2"></i>Dietali</h5>
                    <p class="small">Promoviendo hábitos alimenticios saludables en los niños desde 2023.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Enlaces</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href=""><i class="fas fa-info-circle me-2"></i>Sobre nosotros</a></li>
                        <li class="mb-2"><a href=""><i class="fas fa-envelope me-2"></i>Contacto</a></li>
                        <li><a href=""><i class="fas fa-shield-alt me-2"></i>Privacidad</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Contacto</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Valle de Bravo, México</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +123 456 789</li>
                        <li><i class="fas fa-envelope me-2"></i> info@dietali.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center small">
                <p class="mb-0">&copy; {{ date('Y') }} Dietali. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
@stack('scripts')
</body>
</html>
