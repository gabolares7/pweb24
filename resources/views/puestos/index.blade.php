@extends('layouts.app')

@section('content')
    <h1>Puestos</h1>
    <a href="{{ route('puestos.create') }}" class="btn btn-primary">Crear Puesto</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Sector</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($puestos as $puesto)
            <tr>
                <td>{{ $puesto->id }}</td>
                <td>{{ $puesto->nombre }}</td>
                <td>{{ $puesto->ubicacion }}</td>
                <td>{{ $puesto->descripcion }}</td>
                <td>{{ $puesto->sector }}</td>
                <td>
                    <a href="{{ route('puestos.show', $puesto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('puestos.edit', $puesto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('puestos.destroy', $puesto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
