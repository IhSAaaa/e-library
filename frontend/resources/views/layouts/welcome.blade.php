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
<body>
    <div class="container">
        <h3>Sukawati Library</h3>

    </div>
</body>