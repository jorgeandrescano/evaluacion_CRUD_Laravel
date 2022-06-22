@extends('principal')

@section('contenido')
 <div class="row">
    <div class="col-lg-11">
        <h3>Registrar paciente</h3>
    </div>
    <div class="col-lg-1">
        <a class="btn btn-success" href="/pacientes">Atrás</a>
    </div>
</div>
<form action="{{ url('/pacientes/guardar') }}" method="POST">
@csrf
<div class="container-fluid">
<div class="form-group">
    <label for="tipoDocumento">Tipo de documento</label>
    <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento" placeholder="Ingrese: CC, TI, CE, Pasaporte, Otro">
</div>
<div class="form-group">
    <label for="documento"># Documento</label>
    <input type="text" class="form-control" id="documento" name="documento" placeholder="Ingrese el número del documento de identificación">
</div>
<div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombre completo">
</div>
<div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos">
</div>
<div class="form-group">
    <label for="fechaNacimiento">Fecha de nacimiento</label>
    <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Ingrese fecha de nacimiento DD/MM/AAAA">
</div>
<div class="form-group">
    <label for="genero">Genero</label>
    <input type="text" class="form-control" id="genero" name="genero" placeholder="Ingrese genero">
</div>
<div class="form-group">
    <label for="estadoCivil">Estado civil</label>
    <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Ingrese estado civil">
</div>
<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese dirección de residencia">
</div>
<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese número de contacto">
</div>
<button type="submit" class="btn btn-success">Registrar</button>
</div>
</form>
@endsection