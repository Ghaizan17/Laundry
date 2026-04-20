<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloverClean | daftar layanan </title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</head>

<body class="bg-gray-50">
    <x-navbar></x-navbar>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-5 mt-10">

        <!-- LAUNDRY KILOAN -->
        <div class="rounded-xl shadow-md bg-white">
            <img class=" w-full h-[15rem] rounded-t-xl" src="{{ asset('img/cuci-setrika.jpg') }}" alt="">
            <div class="p-4">
                <h1 class="text-xl font-bold capitalize">laundry kiloan</h1>
                <p class="capitalize text-lg text-green-500 font-semibold ">Rp 8.000 / kg</p>
                <a href="{{ route('laundry-kiloan') }}">
                    <button class="mt-4 w-full flex items-center justify-center gap-2 capitalize text-lg py-2 px-4 rounded-xl text-white bg-blue-500 transition-all duration-100 hover:bg-blue-600">
                        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
                        pesan
                    </button>
                </a>
            </div>
        </div>

        <div class="rounded-xl shadow-md bg-white">
            <img class=" w-full h-[15rem] rounded-t-xl" src="{{ asset('img/shirt.jpg') }}" alt="">
            <div class="p-4">
                <h1 class="text-xl font-bold capitalize">Laundry satuan</h1>
                <p class="capitalize text-lg text-green-500 font-semibold ">Rp 10.000 - Rp 50.000 / item</p>
                <a href="">
                    <button class="mt-4 w-full flex items-center justify-center gap-2 capitalize text-lg py-2 px-4 rounded-xl text-white bg-blue-500 transition-all duration-100 hover:bg-blue-600">
                        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
                        pesan
                    </button>
                </a>
            </div>
        </div>

        <div class="rounded-xl shadow-md bg-white">
            <img class=" w-full h-[15rem] rounded-t-xl" src="{{ asset('img/baju-gantung.jpg') }}" alt="">
            <div class="p-4">
                <h1 class="text-xl font-bold capitalize">laundry express ( cepat)</h1>
                <p class="capitalize text-lg text-green-500 font-semibold ">Rp 10.000 - Rp 25.000 / kg</p>
                <a href="">
                    <button class="mt-4 w-full flex items-center justify-center gap-2 capitalize text-lg py-2 px-4 rounded-xl text-white bg-blue-500 transition-all duration-100 hover:bg-blue-600">
                        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
                        pesan
                    </button>
                </a>
            </div>
        </div>

        <div class="rounded-xl shadow-md bg-white">
            <img class=" w-full h-[15rem] rounded-t-xl" src="{{ asset('img/cuci-kering.jpg') }}" alt="">
            <div class="p-4">
                <h1 class="text-xl font-bold capitalize">dry cleaning</h1>
                <p class="capitalize text-lg text-green-500 font-semibold ">Rp 30.000 / item</p>
                <a href="">
                    <button class="mt-4 w-full flex items-center justify-center gap-2 capitalize text-lg py-2 px-4 rounded-xl text-white bg-blue-500 transition-all duration-100 hover:bg-blue-600">
                        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
                        pesan
                    </button>
                </a>
            </div>
        </div>

        <!-- shoe laundry -->
        <div class="rounded-xl shadow-md bg-white">
            <img class=" w-full h-[15rem] rounded-t-xl" src="{{ asset('img/shoe-laundry.jpg') }}" alt="">
            <div class="p-4">
                <h1 class="text-xl font-bold capitalize">laundry sepatu</h1>
                <p class="capitalize text-lg text-green-500 font-semibold ">Rp 30.000 / item</p>
                <a href="">
                    <button class="mt-4 w-full flex items-center justify-center gap-2 capitalize text-lg py-2 px-4 rounded-xl text-white bg-blue-500 transition-all duration-100 hover:bg-blue-600">
                        <iconify-icon icon="lineicons:cart-1" width="24" height="24"></iconify-icon>
                        pesan
                    </button>
                </a>
            </div>


        </div>
</body>

</html>