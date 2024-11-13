<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmacenaProducto extends Model
{
    use HasFactory;

    protected $fillable = ['id_puesto', 'id_producto', 'cantidad_disponible'];
    public $timestamps = false; // Desactiva los timestamps automáticos

    // Validaciones
    public static function reglas()
    {
        return [
            'cantidad_disponible' => 'required|integer|min:1'
        ];
    }
}
