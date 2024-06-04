<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;



class PesananController extends Controller
{
    public function index()
    {
        $pesanans = session()->get('pesanan', []);
        $menus = Menu::all();
        $totalHarga = collect($pesanans)->sum('total_price');

        return view('pesanans.index', compact('pesanans', 'menus', 'totalHarga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_item' => 'required|exists:menus,id',
            'qty' => 'required|integer|min:1',
        ]);

        $menu = Menu::findOrFail($request->id_item);
        $total_price = $menu->harga * $request->qty;

        $pesanan = [
            'id' => uniqid(),
            'menu' => $menu,
            'qty' => $request->qty,
            'total_price' => $total_price,
        ];

        // Store pesanan in session
        $pesananData = session()->get('pesanan', []);
        $pesananData[] = $pesanan;
        session()->put('pesanan', $pesananData);

        return redirect()->route('pesanans.index')
                         ->with('success', 'Pesanan created successfully');
    }
    
    public function destroy(Request $request, $id)
{
    $pesanans = session()->get('pesanan', []);
    $pesanan = array_filter($pesanans, function ($item) use ($id) {
        return $item['id'] === $id;
    });

    if (empty($pesanan)) {
        return redirect()->route('pesanans.index')->with('error', 'Pesanan not found');
    }

    $pesanan = reset($pesanan);
    $index = array_search($pesanan, $pesanans);
    unset($pesanans[$index]);
    session()->put('pesanan', $pesanans);

    return redirect()->route('pesanans.index')->with('success', 'Pesanan deleted successfully');
}


    public function cetakNota(Request $request)
    {
        $pesanans = session()->get('pesanan', []);
        $totalHarga = collect($pesanans)->sum('total_price');

        // Save session orders to database
        foreach ($pesanans as $pesanan) {
            Pesanan::create([
                'item_id' => $pesanan['menu']->id,
                'qty' => $pesanan['qty'],
                'total_price' => $pesanan['total_price'],
            ]);
        }

        // Clear session orders after saving to database
        session()->forget('pesanan');
        
        return view('pesanans.nota', compact('pesanans', 'totalHarga'));
    }

}
