<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout/{destino?}', function ($destino = 'home') {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    $destino='/'.$destino;
    return redirect( $destino );
})->where('destino', '.*')->name('Logout');

Route::get('/dashboard', function () {
 return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/simpleCMS/{slug?}', function ($slug = 'home')
{
    if ($slug==null) { $slug='home';}
    $page = \Tobiasla78\FilamentSimplePages\Models\SimplePage::where('slug', $slug)->first();
    if (!$page) {
        abort(404);
    }
    if (!$page->is_public) {
        abort(403);
    }
    return view('vendor/filament-simple-pages/simpleCMS-page', compact('page'));
    return view('filament-simple-pages::filament.pages.simple-page', compact('page'));
})->where('slug', '.*');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Ruta para Carlos
Route::get('/carlos', function () {
    return redirect('CarlosPublico.html');
    // return include(public_path('CarlosPublico.html'));
});

// Ruta para Francisco
Route::get('/francisco', function () {
    return redirect('francisco.html');
    // return include(public_path('FranciscoPublico.html'));
});

// Ruta para Gabriel
Route::get('/gabriel', function () {
    return redirect('gabriellares.html');
    // return include(public_path('GabrielPublico.html'));
});


Route::get('/gabrielprivado', function () {
    // Ruta al archivo HTML dentro de la carpeta "practica"
    $path = base_path('practica/gabriellaresprivado.html');

    // Verificamos si el archivo existe
    if (!file_exists($path)) {
        abort(404); // Retorna una página de error 404 si no existe
    }
    // Retornamos el archivo HTML
    return response()->file($path);
});


Route::get('/CarlosPrivado', function () {
    // Ruta al archivo HTML dentro de la carpeta "practica"
    $path = base_path('practica/CarlosPrivado.html');
    // Verificamos si el archivo existe
    if (!file_exists($path)) {
        abort(404); // Retorna una página de error 404 si no existe
    }
    // Retornamos el archivo HTML
    return response()->file($path);
});




Route::get('/paginaPersonal/{nombre}', function ($nombre) {
    if (!preg_match('/^[a-zA-Z]+$/', $nombre)) {
        abort(404, 'Nombre inválido');
    }
    return view('paginaPersonal_Grupo2', ['nombre' => $nombre]);
});



//Ruta para la página del grupo 
Route::get('/elGrupo', function () {
    return view('paginagrupo2');
});

//Rutas para acceder al Home del Portal
Route::get('/miPortal', function () {
    return view('/proyectofinal/home');
});

Route::get('/miPortal/home', function () {
    return view('/proyectofinal/home');
});


//Ruta para presentar a los miembros del grupo general para el Proyecto final
Route::get('/elGrupo2', function() {
    return view('proyectofinal.nuestrogrupo');
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\FacturaController;
//use App\Http\Controllers\SensorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\AlmacenaProductoController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\PruebaController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('/miPortal/Puestos', PuestoController::class);



Route::resource('/miPortal/productos', ProductoController::class);




Route::resource('proveedors', ProveedorController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('stocks', StockController::class);
Route::resource('historicos', HistoricoController::class);
Route::resource('detalle_pedido', DetallePedidoController::class);
Route::resource('almacena_producto', AlmacenaProductoController::class);
Route::resource('detalle_factura', DetalleFacturaController::class);


Route::get('pepe', PruebaController::class);


////////////////////////////////////////////////////////////////////////////////////////////////////



require __DIR__.'/auth.php';
