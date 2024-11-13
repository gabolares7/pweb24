<?php

namespace App\Http\Controllers;

use App\Models\AlmacenaProducto;
use Illuminate\Http\Request;

class AlmacenaProductoController extends Controller
{
    public function index()
    {
        $almacenaProductos = AlmacenaProducto::all();
        return view('almacena_producto.index', compact('almacenaProductos'));
    }

    public function show($id)
    {
        $almacenaProducto = AlmacenaProducto::findOrFail($id);
        return view('almacena_producto.show', compact('almacenaProducto'));
    }

    public function create()
    {
        return view('almacena_producto.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_puesto' => 'required|integer|exists:puestos,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad_disponible' => 'required|integer|min:1',
        ]);

        AlmacenaProducto::create($validated);

        return redirect()->route('almacena_producto.index')->with('success', 'Producto almacenado exitosamente.');
    }

    public function edit($id)
    {
        $almacenaProducto = AlmacenaProducto::findOrFail($id);
        return view('almacena_producto.edit', compact('almacenaProducto'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_puesto' => 'required|integer|exists:puestos,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad_disponible' => 'required|integer|min:1',
        ]);

        $almacenaProducto = AlmacenaProducto::findOrFail($id);
        $almacenaProducto->update($validated);

        return redirect()->route('almacena_producto.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $almacenaProducto = AlmacenaProducto::findOrFail($id);
        $almacenaProducto->delete();

        return redirect()->route('almacena_producto.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
