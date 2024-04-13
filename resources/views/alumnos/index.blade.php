@extends('layout/template')

@section('title', 'Alumnos | Escuela')

@section('contenido')
<main>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                
                <h2>Buscar Alumno con axios</h2>
                <form action="{{ route('alumnos.index') }}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="texto" id="searchInput" placeholder="Buscar" value="{{$texto}}">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-primary" id="searchButton" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6 text-right">
                <h2>Listado de Alumnos</h2>
                <a href="{{url('alumnos/create')}}" class="btn btn-primary btn-sm">Nuevo Registro</a>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="resultsTable">
                
            </tbody>
        </table>
    </div>
</main>
@endsection





