@vite('resources/css/app.css')

<div class="container flex justify-center mx-auto mt-10">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Tambah Menu</h2>
        <form action="{{ route('menus.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="item" class="block text-sm font-medium text-gray-700 mb-2">Item</label>
                <input type="text" name="item" id="item" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
                <input type="text" name="harga" id="harga" class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Create</button>
                <a href="{{ route('menus.index') }}" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Cancel</a>
            </div>
        </form>
    </div>
</div>
