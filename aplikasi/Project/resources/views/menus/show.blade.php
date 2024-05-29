<h2>Menu Details</h2>
    <p>ID: {{ $menu->id }}</p>
    <p>Item: {{ $menu->item }}</p>
    <p>Harga: {{ $menu->harga }}</p>
    <a href="{{ route('menus.index') }}">Back</a>