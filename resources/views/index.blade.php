<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloverClean</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="z-50 sticky top-0 w-full p-5 bg-white drop-shadow-2xl flex items-center justify-between">
        <div>
            <h1 class="text-3xl text-blue-600 font-bold">
                clover<span class="text-amber-300">Clean</span>
            </h1>
            
        </div>
        <ul class="flex items-center gap-7 capitalize text-lg font-semibold" >
            <li class="py-2 px-4 rounded-full transition-all duration-200 hover:bg-blue-500 hover:text-white hover:scale-[1.02] active:scale-95" >beranda</li>
            <li class="py-2 px-4 rounded-full transition-all duration-200 hover:bg-blue-500 hover:text-white hover:scale-[1.02] active:scale-95" >tentang kami</li>
            <li class="py-2 px-4 rounded-full transition-all duration-200 hover:bg-blue-500 hover:text-white hover:scale-[1.02] active:scale-95" >pelayanan</li>
        </ul>
    
        <a href="{{ route('daftar-layanan') }}">
            <button class="w-28 py-2 px-4 rounded-full bg-blue-500 shadow text-white capitalize transition-all duration-150 hover:bg-blue-600" >
                pesan
            </button>
        </a>
        
    </header>
    <main class="min-h-screen">
        <div
            style="background-image: url('{{ asset('img/baju-gantung.jpg') }}')"
            class="bg-cover bg-center p-5 md:p-10 h-[100dvh] flex items-center relative">
            <!-- Gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/80 via-blue-700/40 to-transparent"></div>

            <div class="md:px-10 space-y-6 relative z-10">
                <h1 class="text-6xl md:text-7xl text-white font-bold md:w-[35rem]">
                    Selamat datang di clover<span class="text-amber-300">Clean</span>
                </h1>
                <p class="text-sm md:text-[18px] text-white md:w-[35rem]">
                    Kami menyediakan layanan laundry lengkap mulai dari pencucian hingga pengantaran, dengan hasil pakaian yang bersih, harum, dan rapi siap digunakan.
                </p>
                <div class="grid grid-cols-2 gap-5 md:w-96 mt-10">
                    <button class="px-4 py-2 rounded-lg font-semibold bg-white  shadow-sm capitalize transition-all duration-200 hover:bg-gray-50 hover:scale-[1.02] active:scale-95 " >mulai</button>
                    <button class="px-4 py-2 rounded-lg font-semibold border border-white text-white shadow-sm capitalize transition-all duration-200 hover:bg-blue-600 hover:border-blue-600 hover:scale-[1.02] active:scale-95" >pesan sekarang</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>