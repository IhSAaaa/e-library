<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default Title')</title>
    <style>
        body {
            background-size: 130%;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .card {
            width: 856px;
            top: 130px;
        }
        label[for="email"] {
            display: block;
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            color: white;
        }
        #name {
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            border: none; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            margin-left: 210px;
        }
        #name::placeholder {
            color: white;
        }
        #name:focus::placeholder {
            color: transparent; /* Mengubah warna placeholder menjadi transparan saat input difokuskan */
        }

        #name:focus {
            caret-color: white; /* Mengubah warna kursor menjadi putih saat input difokuskan */
        }

        #password-confirm {
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            border: none; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            margin-left: 210px;
        }
        #password-confirm::placeholder {
            color: white;
        }
        #password-confirm:focus::placeholder {
            color: transparent; /* Mengubah warna placeholder menjadi transparan saat input difokuskan */
        }

        #password-confirm:focus {
            caret-color: white; /* Mengubah warna kursor menjadi putih saat input difokuskan */
        }

        /* Gaya untuk input */
        #email {
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            border: none; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            margin-left: 210px;
        }
        #email::placeholder {
            color: white;
        }
        #email:focus::placeholder {
            color: transparent; /* Mengubah warna placeholder menjadi transparan saat input difokuskan */
        }

        #email:focus {
            caret-color: white; /* Mengubah warna kursor menjadi putih saat input difokuskan */
        }
        #password::placeholder {
            color: white;
        }
        #password:focus::placeholder {
            color: transparent; /* Mengubah warna placeholder menjadi transparan saat input difokuskan */
        }

        #password:focus {
            caret-color: white; /* Mengubah warna kursor menjadi putih saat input difokuskan */
        }
        label[for="password"] {
            display: block;
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            color: white;
        }

        /* Gaya untuk input */
        #password {
            background-color: rgba(0.3, 0.3, 0.3, 0.3); /* Warna latar belakang hampir transparan */
            border: none; /* Atur sesuai kebutuhan Anda */
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            padding: 10px; /* Atur sesuai kebutuhan Anda */
            margin-left: 210px;
        }
        #carouselContainer {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1; /* Agar Carousel tetap di belakang elemen lain */
        }
        #carouselContainer .carousel-item img {
            width: 100%; /* Lebar gambar 100% dari lebar container */
            height: auto; /* Tinggi gambar menyesuaikan proporsi */
        }
        #appContainer {
            position: relative;
            z-index: 1; /* Agar elemen lain (termasuk #app) tetap di atas Carousel */
        }
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: transparent;">
    <div id="carouselContainer">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/bg.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/bg2.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/bg3.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <div id="appContainer">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-transparent">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active text-white' : '' }}" href="{{ route('login') }}">{{ __('Login') }} </a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteName() == 'register' ? 'active text-white' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    </div>
</body>
</html>
