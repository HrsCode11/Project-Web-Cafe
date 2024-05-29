<x-navbar></x-navbar>
@vite('resources/css/app.css')

<br>
<br>
<br>
<br>

<div class="container flex justify-center mx-auto">
<div class="w-4/5">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl">Tabel Menu</h1>
            <a href="{{ route('menus.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Menu</a>
        </div>

    <table class="shadow-lg bg-white border-collapse w-full">
        <thead>
        <tr>
            <th class="bg-blue-100 border text-left px-8 py-4">ID</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Item</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Harga</th>
            <th class="bg-blue-100 border text-left px-8 py-4">Actions</th>
        </tr>
        </thead>
        @foreach ($menus as $menu)
        <tbody>
        <tr class="hover:bg-gray-50 focus:bg-gray-300 active:bg-red-200"
    tabindex="0">
            <td class="border px-8 py-4">{{ $menu->id }}</td>
            <td class="border px-8 py-4">{{ $menu->item }}</td>
            <td class="border px-8 py-4">{{ $menu->harga }}</td>
            <td class="border px-8 py-4">
            <div class="flex space-x-2">
                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('menus.edit', $menu->id) }}">Edit</a>
                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </form>
                </div>
            </td>
        </tr>
        </tbody>
    
        @endforeach
    </table>
</div>
</div>
