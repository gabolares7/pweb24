<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_productos_proyecto.css') }}">
    <title>Lista de Productos</title>
</head>
<body>
    @include('Parciales.headproyecto') {{-- Incluye el encabezado --}}

    <div class="container">
        <h1>Lista de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Crear Producto</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @include('Parciales.footerproyecto') {{-- Incluye el pie de página --}}
</body>
</html>
