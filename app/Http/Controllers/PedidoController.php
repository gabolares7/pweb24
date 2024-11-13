<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'estado' => 'required|in:pendiente,pagado,anulado',
            'id_usuario' => 'required|integer|exists:usuarios,id',
            'id_puesto' => 'required|integer|exists:puestos,id',
        ]);

        Pedido::create($validated);

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'estado' => 'required|in:pendiente,pagado,anulado',
            'id_usuario' => 'required|integer|exists:usuarios,id',
            'id_puesto' => 'required|integer|exists:puestos,id',
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($validated);

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
