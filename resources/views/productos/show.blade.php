@extends('layouts.app')

@section('content')
<h1>Detalles del Producto</h1>
<p>Nombre: {{ $producto->nombre }}</p>
<p>Categoría: {{ $producto->categoria }}</p>
<p>Descripción: {{ $producto->descripcion }}</p>
<a href="{{ route('productos.index') }}">Volver a la lista</a>
@endsection
