<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['estado', 'id_usuario', 'id_puesto'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'id_puesto');
    }

    public function productos()
    {
        return $this->hasMany(DetallePedido::class, 'id_pedido');
    }

    // Validaciones
    public static function reglas()
    {
        return [
            'estado' => 'required|in:pendiente,procesado,entregado,cancelado'
        ];
    }
}
