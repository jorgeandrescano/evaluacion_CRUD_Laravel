@extends('principal')

@section('contenido')
<div class="row">
    <div class="col-lg-11">
        <h3>Editar información del paciente</h3>
    </div>
    <div class="col-lg-1">
        <a class="btn btn-success" href="/pacientes">Volver</a>
    </div>
</div>
<form action="{{ url('/pacientes/actualizar', $paciente->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid">
        <div class="form-group">
            <label for="tipoDocumento">Tipo de documento</label>
            <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento" placeholder="Ingrese: CC, TI, CE, Pasaporte, Otro" value="{{ $paciente->tipoDocumento }}">
        </div>
        <div class="form-group">
            <label for="documento"># Documento</label>
            <input type="text" class="form-control" id="documento" name="documento" placeholder="Ingrese el número del documento de identificación" value="{{ $paciente->documento }}">
        </div>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombre completo" value="{{ $paciente->nombres }}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" value="{{ $paciente->apellidos }}">
        </div>
        <div class="form-group">
            <label for="fechaNacimiento">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Ingrese fecha de nacimiento DD/MM/AAAA" value="{{ $paciente->fechaNacimiento }}">
        </div>
        <div class="form-group">
            <label for="genero">Genero</label>
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Ingrese genero" value="{{ $paciente->genero }}">
        </div>
        <div class="form-group">
            <label for="estadoCivil">Estado civil</label>
            <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Ingrese estado civil" value="{{ $paciente->estadoCivil }}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese dirección de residencia" value="{{ $paciente->direccion }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese número de contacto" value="{{ $paciente->telefono }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>
</form>
@endsection