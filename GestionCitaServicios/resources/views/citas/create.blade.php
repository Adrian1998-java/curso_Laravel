@extends('layouts.app')

@section('content')

<form action="{{ route('note.store') }}" method="post">
    <div class="mb-3">
        @csrf
        <<div class="form-group mb-3">
            <label for="nombreCliente">Nombre del Cliente</label>
            <input type="text" name="nombreCliente" class="form-control" value="{{ old('nombreCliente') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="FechaHoraCita">Fecha y Hora de la Cita</label>
            <input type="datetime-local" name="FechaHoraCita" class="form-control" value="{{ old('FechaHoraCita') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="Motivo">Motivo</label>
            <textarea name="Motivo" class="form-control" rows="3" required>{{ old('Motivo') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="EstadoCita">Estado de la Cita</label>
            <select name="EstadoCita" class="form-control" required>
                <option value="pendiente" {{ old('EstadoCita') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="confirmada" {{ old('EstadoCita') == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                <option value="cancelada" {{ old('EstadoCita') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cita</button>
    </div>
</form>


@endsection