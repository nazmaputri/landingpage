<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Landing-page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <style>
        /* Nonaktifkan AOS untuk elemen dalam modal */
        #webModal [data-aos] {
            opacity: 1 !important;  /* Pastikan elemen terlihat */
            transform: none !important;  /* Hilangkan transformasi */
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <!-- Home Section -->
    <section id="home" class="flex items-center min-h-screen bg-orange-300 text-white">
        <div class="container mx-auto px-16 py-12">
            <div class="flex flex-col-reverse lg:flex-row items-center">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 flex flex-col justify-center space-y-6 pt-8 lg:pt-0" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight">ID Neobilling</h1>
                    <h2 class="text-lg md:text-xl">
                        IDNeobilling adalah Applikasi Manajemen untuk pengusaha ISP/mini ISP dalam mengatur manajemen pelanggan. <strong> Solusi aplikasi manajemen pelanggan internet berbasis SAAS </strong>
                    </h2>
                    <div class="flex space-x-4 mt-4">
                        <a href="#about" class="px-6 py-3 bg-white text-orange-600 font-bold rounded-full hover:bg-orange-600 hover:text-white transition duration-300">
                            Mulai!
                        </a>
                        <!-- Button Watch Website -->
                        <a href="#" class="flex items-center space-x-2 text-white hover:text-orange-600 transition duration-300" onclick="toggleModal(true)">
                            <i class="bi bi-play-circle text-2xl"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                            </svg>
                            <span>Lihat Website</span>
                        </a>
                    </div>
                </div>

                <!-- Modal Web -->
                <div id="webModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-100">
                    <!-- Close Button Positioned on the Overlay -->
                    <button class="absolute top-4 right-4 text-white hover:text-gray-300 z-50" onclick="toggleModal(false)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Modal Content -->
                    <div class="relative bg-white rounded-lg shadow-lg p-4 max-w-4xl w-full h-full">
                        <div class="w-full h-full">
                            <iframe id="webIframe" class="w-full h-full" src="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="w-full lg:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img1.png') }}" alt="Hero Image" class="w-full h-auto lg:max-w-md transform hover:scale-105 transition-transform duration-500 animate-smallbounce">
                </div>
            </div>
        </div>
    </section>

    <script>
    function toggleModal(show) {
        const modal = document.getElementById('webModal');
        const iframe = document.getElementById('webIframe');
        if (show) {
            // Ganti dengan URL web yang ingin ditampilkan
            iframe.src = "http://127.0.0.1:8000";
            modal.classList.remove('hidden');
        } else {
            iframe.src = "";
            modal.classList.add('hidden');
        }
    }
    </script>
    
    @include('components.about')
    @include('components.service')
    @include('components.price', ['packages' => $packages])
    {{-- @include('components.faq') --}}
    @include('components.contact')
    @include('components.footer')

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Inisialisasi AOS setelah elemen dimuat
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                offset: 150,
            });
        });
    </script>
</body>
</html>
