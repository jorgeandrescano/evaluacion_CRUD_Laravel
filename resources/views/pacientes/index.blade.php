@extends('principal')

@section('contenido')
<div class="row">
    <div class="col-lg-11">
        <h4>Listado de pacientes</h4>
    </div>
    <div class="col-lg-2">
        <a class="btn btn-success" href="pacientes/crear">+ Registrar paciente</a>
    </div>
</div>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 1%">
                Código
            </th>
            <th style="width: 2%">
                Tipo de documento
            </th>
            <th style="width: 5%">
                # Documento
            </th>
            <th style="width: 10%">
                Nombres
            </th>
            <th style="width: 10%">
                Apellidos
            </th>
            <th style="width: 10%">
                Fecha de nacimiento
            </th>
            <th style="width: 5%">
                Género
            </th>
            <th style="width: 10%">
                Estado civil
            </th>
            <th style="width: 20%">
                Dirección
            </th>
            <th style="width: 10%">
                Teléfono
            </th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id }}</td>
            <td>{{$paciente->tipoDocumento }}</td>
            <td>{{$paciente->documento }}</td>
            <td>{{$paciente->nombres }}</td>
            <td>{{$paciente->apellidos }}</td>
            <td>{{$paciente->fechaNacimiento }}</td>
            <td>{{$paciente->genero }}</td>
            <td>{{$paciente->estadoCivil }}</td>
            <td>{{$paciente->direccion }}</td>
            <td>{{$paciente->telefono }}</td>
            <td class="project-actions text-right">
                <form action="{{ url('/pacientes/eliminar', $paciente) }}" method="POST">
                    @csrf
                <a class="btn btn-warning btn-sm" href="{{ url('/pacientes/editar', $paciente->id) }}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Editar
                </a>
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                    Eliminar
                </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection