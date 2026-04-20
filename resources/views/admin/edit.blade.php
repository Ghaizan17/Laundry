<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloverClean | Dashboard </title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
</head>

<body>
    <x-navbar></x-navbar>
    <main class="flex mt-5 justify-center p-4">
        <form action="{{ route('update', $laundry->id) }}" method="POST" class="bg-white rounded-2xl shadow-lg p-6 w-full space-y-4">
            @csrf
            @method('PUT')
    
            <input type="hidden" name="jenis_layanan" value="{{ $laundry->jenis_layanan }}">
    
            <div>
                <label>Nama</label>
                <input type="text" name="nama_pelanggan" value="{{ $laundry->nama_pelanggan }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div>
                <label>No HP</label>
                <input type="text" name="no_hp" value="{{ $laundry->no_hp }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div>
                <label>Layanan</label>
                <input type="text" name="jenis_layanan" value="{{ $laundry->jenis_layanan }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
    
            @if($laundry->jenis_layanan == 'laundry_kiloan')
            <div>
                <label>Berat</label>
                <input type="number" name="berat" value="{{ $laundry->berat }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
            @else
            <div>
                <label>Jumlah</label>
                <input type="number" name="jumlah" value="{{ $laundry->jumlah }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
            @endif

            <div>
                <label>Catatan</label>
                <input type="text" name="catatan" value="{{ $laundry->catatan }}" class="w-full mt-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
    
            <button class="bg-blue-500 w-full transition-all duration-150 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                Update
            </button>
        </form>
    </main>
</body>

</html>