<!DOCTYPE html>
<html lang="en" class="{{ $poppinsClass }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV Cipta Prima Engineering">
    @vite('resources/css/app.css')
    <title>CV Cipta Prima Engineering</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Pastikan ini sesuai dengan lokasi file CSS Anda -->
    <!-- Include Poppins Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 antialiased">
    <!-- Header atau Navbar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('logo.png') }}" alt="logo" class="w-13 h-10">
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center font-bold">
                <a href="#" class="mr-5 hover:text-black text-gray-700">Beranda</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Tentang</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Tim</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Klien Kami</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Artikel</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Vacancy</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Konten Halaman -->
    @yield('content')

</body>
</html>
