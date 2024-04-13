@extends('layouts.template')

@section('contenido')
<main>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Buscar Alumno con axios</h2>
                <form action="{{ route('alumnos.index') }}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="texto" id="searchInput" placeholder="Buscar" value="{{$texto ?? ''}}">
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary" id="searchButton">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <h2>Registrar Nuevo Alumno</h2>
                <a href="{{ url('alumnos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
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
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="resultsTable">
                <!-- Aquí se mostrarán los resultados de la búsqueda -->
            </tbody>
        </table>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('searchButton').addEventListener('click', function () {
            var searchText = document.getElementById('searchInput').value;

            axios.get('{{ route("buscar-alumnos") }}', {
                params: {
                    texto: searchText
                }
            })
            .then(function (response) {
                // Manejar la respuesta aquí, por ejemplo, actualizar la tabla con los resultados
                console.log(response.data);
                var tbody = document.getElementById('resultsTable');
                tbody.innerHTML = ''; // Limpiar el contenido actual de la tabla

                response.data.data.forEach(function(alumno) {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${alumno.id}</td>
                        <td>${alumno.matricula}</td>
                        <td>${alumno.nombre}</td>
                        <td>${alumno.fecha_nacimiento}</td>
                        <td>${alumno.telefono}</td>
                        <td>${alumno.email}</td>
                        <td><a href="{{ url('alumnos') }}/${alumno.id}/edit" class="btn btn-primary btn-sm">Editar</a></td>
                        <td>
                            <form id="formEliminar${alumno.id}" action="{{ url('alumnos') }}/${alumno.id}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion(${alumno.id}, '${alumno.nombre}')">Eliminar</button>
                            </form>
                        </td>
                    `;
                    tbody.appendChild(row);
                });
            })
            .catch(function (error) {
                console.error(error);
            });
        });
    });

    function confirmarEliminacion(alumnoId, nombreAlumno) {
        if (confirm(`¿Está seguro de eliminar el registro del alumno "${nombreAlumno}"?`)) {
            document.getElementById(`formEliminar${alumnoId}`).submit();
        }
    }
</script>


@endsection
