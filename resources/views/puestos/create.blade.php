@extends('layouts.app')

@section('content')
    <h1>Crear Puesto</h1>
    <form action="{{ route('puestos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="sector">Sector</label>
            <input type="text" name="sector" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_usuario">ID Usuario</label>
            <input type="number" name="id_usuario" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Puesto</button>
    </form>
@endsection
