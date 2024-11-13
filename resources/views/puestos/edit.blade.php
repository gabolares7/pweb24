@extends('layouts.app')

@section('content')
    <h1>Editar Puesto</h1>
    <form action="{{ route('puestos.update', $puesto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $puesto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ $puesto->ubicacion }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $puesto->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="sector">Sector</label>
            <input type="text" name="sector" class="form-control" value="{{ $puesto->sector }}" required>
        </div>
        <div class="form-group">
            <label for="id_usuario">ID Usuario</label>
            <input type="number" name="id_usuario" class="form-control" value="{{ $puesto->id_usuario }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Puesto</button>
    </form>
@endsection
