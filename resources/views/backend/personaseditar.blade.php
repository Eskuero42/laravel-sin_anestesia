@extends('backend.principal')
@section('titulo', 'Admin')

@section('content')
<form action="{{ route('personas.editar', $persona->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="carnet" class="form-label">Carnet</label>
        <input type="text" name="carnet" class="form-control" value="{{ $persona->carnet }}" required />
    </div>

    <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text" name="nombres" class="form-control" value="{{ $persona->nombres }}" required />
    </div>

    <!-- Otros campos aquí -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>

@endsection