<!DOCTYPE html>
<html lang="en" class="{{ $poppinsClass }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV Cipta Prima Engineering">
    @vite('resources/css/app.css')
    <title>CV Cipta Prima Engineering</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white antialiased">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('logo.png') }}" alt="logo" class="w-13 h-10">
            </a>
            <button id="menu-toggle" class="md:hidden inline-flex items-center justify-center p-2 text-gray-500 hover:text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <nav id="menu" class="hidden md:flex md:ml-auto md:mr-auto flex-wrap items-center text-base justify-center font-bold">
                <a href="#" class="mr-5 hover:text-black text-gray-700">Beranda</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Tentang</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Tim</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Klien Kami</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Artikel</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Vacancy</a>
                <a href="#" class="mr-5 hover:text-black text-gray-700">Kontak</a>
            </nav>
        </div>
        <div id="mobile-menu" class="hidden md:hidden">
            <nav class="flex flex-col items-center bg-white border-t border-gray-200">
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Beranda</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Tentang</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Tim</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Klien Kami</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Artikel</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Vacancy</a>
                <a href="#" class="block py-2 px-4 hover:text-black text-gray-700">Kontak</a>
            </nav>
        </div>
    </header>
    
    @yield('content')

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll('.fade-in');

            // Fade in on load
            sections.forEach(section => {
                section.classList.add('visible');
            });

            // Fade in on scroll
            const options = {
                root: null,
                threshold: 0.1,
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
