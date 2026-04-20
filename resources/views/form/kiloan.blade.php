<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloverClean | laundry kiloan</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</head>

<body class="bg-gray-50">
    <x-navbar></x-navbar>
    <main class="flex mt-5 justify-center p-4">

        <form action="{{ route('store') }}" method="POST"
            class="bg-white rounded-2xl shadow-lg p-6 w-full space-y-4">

            @csrf

            <!-- Hidden -->
            <input type="hidden" name="jenis_layanan" value="laundry_kiloan">
            
            <!-- Nama -->
            <div>
                <label class="text-lg text-gray-600">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan"
                    class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
                    placeholder="Masukkan nama">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 md:gap-2 space-y-4 md:space-y-0">
                <!--no hp  -->
                <div>
                    <label class="text-lg text-gray-600 capitalize">no HP</label>
                    <input
                        type="text"
                        name="no_hp"
                        class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
                        placeholder="Contoh: 08123456789">  
                </div>
                <!-- Berat -->
                <div>
                    <label class="text-lg text-gray-600 capitalize">Berat (Kg)</label>
                    <input
                        type="number"
                        step="0.1"
                        id="berat"
                        name="berat"
                        class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
                        placeholder="Contoh: 2.5">
                </div>
            </div>

            <!-- catatan -->
            <div>
                <label class="text-lg text-gray-600 capitalize">catatan ( opsional )</label>
                <textarea 
                    name="catatan" 
                    id="catatan" 
                    class="w-full min-h-40 mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none" 
                    placeholder="contoh: Pakaian putih dipisah"></textarea>
            </div>

            <!-- Total -->
            <div class="bg-blue-50 p-4 rounded-xl">
                <p class="text-sm text-gray-500">Total Harga</p>
                <p id="total" class="text-2xl font-bold text-blue-600">
                    Rp 0
                </p>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold">
                Simpan Pesanan
            </button>

        </form>
    </main>

    <!-- SCRIPT -->
    <script id="7x6c0n">
        const beratInput = document.getElementById('berat');
        const totalText = document.getElementById('total');

        const hargaPerKg = 8000;

        beratInput.addEventListener('input', function() {
            let berat = parseFloat(this.value) || 0;
            let total = berat * hargaPerKg;

            totalText.innerText = "Rp " + total.toLocaleString('id-ID');
        });
    </script>

</body>

</html>