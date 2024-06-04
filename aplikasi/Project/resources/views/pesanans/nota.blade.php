<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pesanan</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Nota Pesanan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanans as $pesanan)
            <tr>
                <td>{{ $pesanan['id'] }}</td>
                <td>{{ $pesanan['menu']->item }}</td>
                <td>{{ $pesanan['qty'] }}</td>
                <td>Rp {{ number_format($pesanan['total_price'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold;">Total Harga:</td>
                <td>Rp {{ number_format($totalHarga, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
