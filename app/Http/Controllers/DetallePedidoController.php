<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        $detallePedidos = DetallePedido::all();
        return view('detalle_pedido.index', compact('detallePedidos'));
    }

    public function show($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        return view('detalle_pedido.show', compact('detallePedido'));
    }

    public function create()
    {
        return view('detalle_pedido.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pedido' => 'required|integer|exists:pedidos,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01',
        ]);

        DetallePedido::create($validated);

        return redirect()->route('detalle_pedido.index')->with('success', 'Detalle de pedido creado exitosamente.');
    }

    public function edit($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        return view('detalle_pedido.edit', compact('detallePedido'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_pedido' => 'required|integer|exists:pedidos,id',
            'id_producto' => 'required|integer|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0.01',
        ]);

        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->update($validated);

        return redirect()->route('detalle_pedido.index')->with('success', 'Detalle de pedido actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->delete();

        return redirect()->route('detalle_pedido.index')->with('success', 'Detalle de pedido eliminado exitosamente.');
    }
}
