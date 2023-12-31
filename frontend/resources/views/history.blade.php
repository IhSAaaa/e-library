<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of Bali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            overflow: auto;
            /* Menyembunyikan scrollbar vertikal */
        }

        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            animation: fadeInUp 1s ease;
            /* Animasi fadeInUp saat elemen muncul */
        }

        .content-container img {
            max-width: 50%;
            /* Ensure the image doesn't exceed its container */
            margin-bottom: 20px;
            /* Jarak antara gambar-gambar */
        }

        .content-container img:first-child {
            margin-top: auto;
            /* Atur margin top untuk gambar pertama */
        }

        /* Media Query untuk layar dengan lebar kurang dari atau sama dengan 768px */
        .magazine-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .carousel-container {
            position: relative;
        }

        .bg-image {
            background-image: url("../images/history-bg.jpg");
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    @php
    $imageCount = 122; // Ganti dengan jumlah gambar yang ingin dimasukkan
    @endphp
    <div class="carousel-container">
        <div class="bg-image"></div>
        <div class="magazine-container">
            <div class="content-container" id="dynamicHeight">
                @for ($i = 1; $i <= $imageCount; $i++) @php
                    $imagePath="images/history-blade/SEJARAH DAERAH BALI_compressed_page-" . str_pad($i, 4, '0' ,
                    STR_PAD_LEFT) . ".jpg" ; @endphp <img src="{{ asset($imagePath) }}" alt="...">
                    @endfor
            </div>
        </div>
    </div>
    <script>
        // Mengatur tinggi dari carousel-container secara dinamis
        document.addEventListener('DOMContentLoaded', function () {
            var contentContainer = document.getElementById('dynamicHeight');
            var carouselContainer = document.querySelector('.carousel-container');

            // Menyesuaikan tinggi carousel-container berdasarkan tinggi content-container
            carouselContainer.style.height = contentContainer.offsetHeight + 'px';
        });

        // Handler untuk merespons perubahan ukuran jendela
        window.addEventListener('resize', function () {
            var contentContainer = document.getElementById('dynamicHeight');
            var carouselContainer = document.querySelector('.carousel-container');

            // Menyesuaikan tinggi carousel-container berdasarkan tinggi content-container
            carouselContainer.style.height = contentContainer.offsetHeight + 'px';
        });
    </script>
</body>

</html>