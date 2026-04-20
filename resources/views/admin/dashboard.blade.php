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
    <main class="p-6 bg-gray-100 min-h-screen">

        <h1 class="text-2xl font-bold mb-6">Dashboard Laundry</h1>

        <div class="bg-white rounded-xl shadow overflow-x-auto">

            <table class="w-full text-center">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="p-2 capitalize">no</th>
                        <th class="p-2 capitalize">Nama</th>
                        <th class="p-2 capitalize">No HP</th>
                        <th class="p-2 capitalize">Layanan</th>
                        <th class="p-2 capitalize">Berat/Jumlah</th>
                        <th class="p-2 capitalize">Catatan</th>
                        <th class="p-2 capitalize">Total</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($laundries as $item)
                    <tr class=" hover:bg-gray-200 {{ $loop->odd ? 'bg-white' : 'bg-gray-100' }}">
                        <td class="border-r border-gray-300 p-2 capitalize">{{ $loop->iteration }}</td>

                        <td class="border-r border-gray-300 p-2">{{ $item->nama_pelanggan }}</td>

                        <td class="border-r border-gray-300 p-2">{{ $item->no_hp }}</td>

                        <td class="border-r border-gray-300 p-2 capitalize">
                            {{ str_replace('_', ' ', $item->jenis_layanan) }}
                        </td>

                        <td class="border-r border-gray-300 p-2">
                            @if($item->jenis_layanan == 'laundry_kiloan')
                            {{ $item->berat }} Kg
                            @else
                            {{ $item->jumlah }} item
                            @endif
                        </td>

                        <td class="border-r border-gray-300 p-2 capitalize">
                            @if ( $item->catatan === null )
                                -
                            @else
                                {{ $item->catatan }}
                            @endif
                        </td>

                        <td class="p-2 text-green-500 font-bold">
                            Rp {{ number_format($item->total_harga) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </main>
</body>

</html>