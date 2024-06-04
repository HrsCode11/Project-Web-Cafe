<x-navbar></x-navbar>
@vite('resources/css/app.css')

<br><br><br>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h2 class="text-2xl font-bold mb-4">Pesanan</h2>

    <!-- Form untuk membuat pesanan baru -->
    <form action="{{ route('pesanans.store') }}" method="POST" class="mb-8">
        @csrf
        <div class="flex space-x-4">
            <div class="w-40">
                <label for="id_item" class="block text-sm font-medium text-gray-700">Menu:</label>
                <select name="id_item" id="id_item" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-20">
                <label for="qty" class="block text-sm font-medium text-gray-700">Qty:</label>
                <input type="number" name="qty" id="qty" min="1" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
        </div>
        <button type="submit" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Simpan</button>
    </form>

    <!-- Tabel untuk menampilkan pesanan -->
    <div class="overflow-x-auto mb-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($pesanans as $pesanan)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pesanan['id'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pesanan['menu']->item }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $pesanan['qty'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($pesanan['total_price'], 0, ',', '.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="{{ route('pesanans.destroy', $pesanan['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Baris untuk total harga -->
                <tr class="bg-gray-100">
                    <td colspan="3" class="px-6 py-4 text-right font-bold">Total Harga:</td>
                    <td class="px-6 py-4 font-bold">Rp {{ number_format($totalHarga, 0, ',', '.') }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tombol untuk mencetak nota dan mengosongkan pesanan -->
    <form action="{{ route('pesanans.cetakNota') }}" method="POST" target="_blank">
        @csrf
        <button type="submit" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Cetak Nota</button>
    </form>
</div>





