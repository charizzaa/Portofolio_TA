<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .CONTAINER_BACKGROUND {
            position: absolute;
            z-index: 1;
        }

        .CONTAINER_CONTENT_ALL {
            position: absolute;
            width: 100%;
            z-index: 3;
        }

        .wave_1 {
            position: absolute;
            z-index: 2;
        }

        .wave_2 {
            position: absolute;
            z-index: 2;
        }

        .custom-shape-divider-top-1701515711 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 90px;
        }

        .custom-shape-divider-top-1701515711 .shape-fill {
            fill: #065f46;
        }
    </style>

<body>
    <div class="CONTAINER_BACKGROUND">
        <!-- <div class="custom-shape-divider-top-1701515711">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div> -->
        <svg class="wave_1" xmlns="http://www.w3.org/2000/svg" width="750" height="534" viewBox="0 0 789 562"
            fill="none">
            <g filter="url(#filter0_d_1051_3512)">
                <path
                    d="M0 0.307474H776.943C776.943 0.307474 782.001 -10.7374 696.828 99.567C611.654 209.872 512.882 156.089 410.382 225.543C310.121 293.48 285.706 391.736 186.802 462.427C91.497 530.544 0 550 0 550V0.307474Z"
                    fill="#2D918C" fill-opacity="0.67" shape-rendering="crispEdges" />
            </g>
            <defs>
                <filter id="filter0_d_1051_3512" x="-4" y="-4" width="793" height="566"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="4" dy="4" />
                    <feGaussianBlur stdDeviation="4" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.47 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1051_3512" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1051_3512" result="shape" />
                </filter>
            </defs>
        </svg>

        <svg class="wave_2" xmlns="http://www.w3.org/2000/svg" width="670" height="500" viewBox="0 0 676 518"
            fill="none">
            <g filter="url(#filter0_d_1051_3513)">
                <path
                    d="M-9.61029 0H662C662 0 635.71 81.996 553.918 170.785C472.127 259.573 377.276 216.282 278.846 272.188C182.566 326.873 159.121 405.964 64.1433 462.865C-27.3773 517.696 -9.61029 501.885 -9.61029 501.885V0Z"
                    fill="#025E5A" fill-opacity="0.89" shape-rendering="crispEdges" />
            </g>
            <defs>
                <filter id="filter0_d_1051_3513" x="-17" y="-6" width="693" height="524"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dx="4" dy="4" />
                    <feGaussianBlur stdDeviation="5" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.37 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1051_3513" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1051_3513" result="shape" />
                </filter>
            </defs>
        </svg>
    </div>

    <div class="CONTAINER_CONTENT_ALL">
        <!-- NAVBARR -->

        <nav id="header" class="grid grid-cols-2 py-8 w-full">
            <div id="header_kiri" class="flex items-center justify-items-start ms-8">
                <img class="w-32 h-auto" src="{{ asset('asset/ugm.png') }}" alt="">
                <div class=" ms-8">
                    <p class="text-white text-lg">Sarjana Terapan</p>
                    <p class="text-white text-lg">Teknologi Rekayasa Perangkat Lunak</p>
                    <p class="text-white text-lg">Universitas Gadjah Mada</p>
                </div>
            </div>

            <div id="header_kanan" class="flex justify-end items-center me-8 ">


                {{-- <button type="button"
                onclick="window.location.href='{{ route('public.dashboard')}}'"
                    class="me-10 h-12 px-12 py-4 rounded flex items-center space-x-4 font-bold bg-white hover:bg-teal-800 shadow-none hover:drop-shadow-lg text-teal-800 text-xl hover:text-white transition-all duration-200">
                    Home
                </button>

                <button type="button"
                    onclick="window.location.href='{{ route('public.portofolio', ['category' => 'all']) }}'"
                    class="me-10 h-12 px-12 py-4 rounded flex items-center space-x-4 font-bold bg-white hover:bg-teal-800 text-teal-800 text-xl hover:text-white transition-all">
                    Showcase
                </button>

                <button type="button"
                    onclick="window.location.href='{{ route('login')}}'"
                    class="me-16 h-12 px-12 rounded flex items-center space-x-4 font-bold bg-white hover:bg-teal-800 text-teal-800 text-xl hover:text-white transition-all">
                    Login
                </button>

                <img class="w-20 h-auto" src="{{ asset('asset/Ellipse 66.png') }}" alt=""> --}}

                
                <div id="header_kanan" class="flex justify-end items-center me-6 lg:me-20">
                    <div class="sticky lg:flex flex-col lg:flex-row">
                        <button id="toggleButton" class="lg:hidden h-12 px-4">
                            <svg class="text-teal-800 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                
                        <div id="navbarCollapse"
                            class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:space-x-10 lg:mx-16">
                            <button type="button" onclick="window.location.href='{{ route('public.dashboard')}}'"
                                class="border-solid border-2 border-teal-800 h-12 px-11 rounded flex items-center space-x-2 font-bold bg-white hover:bg-teal-800 shadow-none hover:drop-shadow-lg text-teal-800 text-xl hover:text-white transition-all duration-200">
                                Home
                            </button>
                
                            <button type="button"
                                onclick="window.location.href='{{ route('public.portofolio', ['category' => 'all']) }}'"
                                class="border-solid border-2 border-teal-800 h-12 px-6 rounded flex items-center space-x-2 font-bold bg-white hover:bg-teal-800 text-teal-800 text-xl hover:text-white transition-all">
                                Showcase
                            </button>
                
                            <button type="button" onclick="window.location.href='{{ route('login')}}'"
                                class="border-solid border-2 border-teal-800 h-12 px-12 rounded flex items-center space-x-2 font-bold bg-white hover:bg-teal-800 text-teal-800 text-xl hover:text-white transition-all">
                                Login
                            </button>
                        </div>
                    
                    </div>
                    <img class="w-20 h-auto ml-4" src="{{ asset('asset/Ellipse 66.png') }}" alt=""> 
                </div>
            </div>

        </nav>

        <main class="w-full flex flex-col items-center mt-32">
            @yield('content')

        </main>

        <footer class="w-full bg-teal-800 h-auto grid grid-cols-3 py-16 pb-16">
            <div id="footer_kiri" class="flex flex-col ms-16 ">
                <img class="w-40 h-auto" src="{{ asset('asset/ugm.png') }}" alt="">
                <p class="text-white text-lg mt-6">Universitas Gadjah Mada</p>
                <p class="text-white text-lg mt-1">Sekolah Vokasi</p>
                <p class="text-white text-lg mt-1">Gedung TILC, Belimbingsari, Caturtunggal</p>
                <p class="text-white text-lg mt-1 mb-6">Depok, Sleman, Yogyakarta, Indonesia, 55281</p>
                <div class="flex flex-row items-center">
                    <img class="w-6 h-auto" src="{{ asset('asset/email.png') }}" alt="">
                    <a href="" class="text-white text-lg ms-4">sv@ugm.ac.id</a>
                </div>
                <div class="flex flex-row items-center mt-3">
                    <img class="w-5 h-auto" src="{{ asset('asset/telephone.png') }}" alt="">
                    <p class="text-white text-lg ms-4">+62 (274) 541020</p>
                </div>
            </div>

            <div id="footer_kanan" class="flex justify-center col-span-2 space-x-16">
                <div class="flex flex-col">
                    <p class="text-white text-2xl font-bold mb-4">PRANALA PENTING</p>
                    <p class="text-white text-lg mt-6">Pendaftaran Mahasiswa Baru</p>
                    <p class="text-white text-lg mt-5">Informasi Beasiswa</p>
                    <p class="text-white text-lg mt-5">Carrer Center ( VDC )</p>
                    <p class="text-white text-lg mt-5">Buku Elektronik</p>
                    <p class="text-white text-lg mt-5">Unduhan</p>
                </div>

                <div class="flex flex-col">
                    <p class="text-white text-2xl font-bold mb-4">SOCIAL MEDIA</p>
                    <p class="text-white text-lg mt-6">Facebook</p>
                    <p class="text-white text-lg mt-5">Twitter</p>
                    <p class="text-white text-lg mt-5">Instagram</p>
                    <p class="text-white text-lg mt-5">Youtube</p>
                    <p class="text-white text-lg mt-5">RSS Feed</p>
                    <p class="text-white text-lg mt-5">Aplikasi Vokasi UGM</p>
                </div>

                <div class="flex flex-col">
                    <p class="text-white text-2xl font-bold mb-4">INFORMASI PUBLIK</p>
                    <p class="text-white text-lg mt-6">Daftar Informasi Tersedia Setiap Saat</p>
                    <p class="text-white text-lg mt-5">Daftar Informasi Wajib Berkala</p>
                    <p class="text-white text-lg mt-5">Permohonan Informasi</p>
                </div>
            </div>
        </footer>

        <div class="flex justify-center font-bold text-teal-800 py-6"> Copyright © 2017 Sekolah Vokasi Universitas
            Gadjah Mada </div>
    </div>
    <script>
        document.getElementById('toggleButton').addEventListener('click', function () {
            document.getElementById('navbarCollapse').classList.toggle('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script></script>
</body>

</html>
