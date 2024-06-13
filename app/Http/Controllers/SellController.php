<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;
use App\Models\Product;

class SellController extends Controller
{
    public function index()
    {
        $sells = Sell::with('product')->get();
        return view('sells.index', compact('sells'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sells.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cedula' => 'required|integer',
            'id_product' => 'required|exists:products,id',
        ]);

        Sell::create($request->all());

        return redirect()->route('sells.index')->with('success', 'Sell created successfully.');
    }

    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect()->route('sells.index')->with('success', 'Sell deleted successfully.');
    }
}
