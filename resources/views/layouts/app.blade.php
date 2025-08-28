<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <style>
        body, .nav-link, .navbar-brand, .card, .dropdown-item, .text-muted, .footer-link {
            font-family: 'Poppins', sans-serif !important;
        }
            .menu-card {
                transition: background 0.2s, border-color 0.2s, box-shadow 0.2s;
                box-shadow: 0 2px 8px rgba(0,0,0,0.05);
                background: linear-gradient(135deg, #e3f2fd 0%, #fff 100%);
            }
            .menu-card:hover {
                background: #f8f9fa !important;
                border-color: #bfc2c5 !important;
                box-shadow: 0 4px 16px rgba(0,0,0,0.10);
            }
            .menu-card.active {
                background: #0d6efd !important;
                border-color: #0d6efd !important;
                box-shadow: 0 4px 16px rgba(13,110,253,0.15);
            }
            .menu-card.active .nav-link {
                color: #fff !important;
            }
            .nav-link {
                font-size: 1.1rem;
                font-weight: 500;
            }
            @media (max-width: 768px) {
                .d-flex.gap-3 {
                    flex-direction: column !important;
                    gap: 1rem !important;
                }
                .menu-card {
                    min-width: 100% !important;
                }
            }
            .motac-logo {
                height: 100px;
                margin-right: 10px;
            }
            .footer-link {
                color: #0d6efd;
                text-decoration: underline;
            }
        </style>
    <style>
        .menu-card {
            transition: background 0.2s, border-color 0.2s;
        }
        .menu-card:hover {
            background: #f8f9fa !important;
            border-color: #bfc2c5 !important;
        }
        .menu-card.active {
            background: #0d6efd !important;
            border-color: #0d6efd !important;
        }
        .menu-card.active .nav-link {
            color: #fff !important;
        }
        .app-title {
            font-size: 1.4rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="border: 1px solid #dee2e6; border-radius: 8px; margin-top: 20px;">
            <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                        <a href="https://www.motac.gov.my/" target="_blank">
                            <img src="https://culture360.asef.org/media/2011/6/malaysia_tourism.jpeg" alt="MOTAC" class="motac-logo">
                        </a>
                        <span class="app-title">{{ config('app.name', 'Laravel') }}</span>
                    </a> &nbsp;
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="d-flex gap-3">
                        <div class="card menu-card{{ request()->routeIs('inventories.index') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('inventories.index') }}">
                                        <i class="bi bi-box-seam me-2"></i> Inventory Index
                                    </a>
                            </div>
                        </div>
                        <div class="card menu-card{{ request()->routeIs('inventories.create') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('inventories.create') }}">
                                        <i class="bi bi-plus-square me-2"></i> Inventory Create
                                    </a>
                            </div>
                        </div>
                        <div class="card menu-card{{ request()->routeIs('vehicles.index') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('vehicles.index') }}">
                                        <i class="bi bi-truck me-2"></i> Vehicle Index
                                    </a>
                            </div>
                        </div>
                        <div class="card menu-card{{ request()->routeIs('vehicles.create') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('vehicles.create') }}">
                                        <i class="bi bi-plus-square me-2"></i> Vehicle Create
                                    </a>
                            </div>
                        </div>

                        <div class="card menu-card{{ request()->routeIs('users.index') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('users.index') }}">
                                        <i class="bi bi-truck me-2"></i> User Index
                                    </a>
                            </div>
                        </div>
                        <div class="card menu-card{{ request()->routeIs('users.create') ? ' active' : '' }}" style="border-radius: 8px; min-width: 150px;">
                            <div class="card-body p-2 text-center">
                                    <a class="nav-link d-flex align-items-center justify-content-center" href="{{ route('users.create') }}">
                                        <i class="bi bi-plus-square me-2"></i> User Create
                                    </a>
                            </div>
                        </div>


                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-light text-center py-3 mt-5" style="border-top: 1px solid #dee2e6;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center flex-wrap" style="gap: 10px;">
                    <span class="text-muted">&copy; {{ date('Y') }} Sistem Inventori Kenderaan | Hak Milik MOTAC (Kementerian Pelancongan, Seni dan Budaya Malaysia)  |  </span>
                    <span class="text-muted">
                        <a href="https://x.com/MyMOTAC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="mx-1" title="X-Twitter MOTAC"><i class="bi bi-twitter-x" style="font-size:1rem;"></i></a>
                        <a href="https://www.instagram.com/mymotac/?hl=en" target="_blank" class="mx-1" title="Instagram MOTAC"><i class="bi bi-instagram" style="font-size:1rem;"></i></a>
                        <a href="https://www.facebook.com/MyMOTAC/" target="_blank" class="mx-1" title="Facebook MOTAC"><i class="bi bi-facebook" style="font-size:1rem;"></i></a>
                        <a href="https://www.youtube.com/channel/UCkZ5C9Aor-1VEIKsEcxqq6A" target="_blank" class="mx-1" title="YouTube MOTAC"><i class="bi bi-youtube" style="font-size:1rem;"></i></a>
                    </span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
