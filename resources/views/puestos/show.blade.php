@extends('layouts.app')

@section('content')
    <h1>Detalles del Puesto</h1>
    <p><strong>ID:</strong> {{ $puesto->id }}</p>
    <p><strong>Nombre:</strong> {{ $puesto->nombre }}</p>
    <p><strong>Ubicación:</strong> {{ $puesto->ubicacion }}</p>
    <p><strong>Descripción:</strong> {{ $puesto->descripcion }}</p>
    <p><strong>Sector:</strong> {{ $puesto->sector }}</p>
    <p><strong>ID Usuario:</strong> {{ $puesto->id_usuario }}</p>
    <a href="{{ route('puestos.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
