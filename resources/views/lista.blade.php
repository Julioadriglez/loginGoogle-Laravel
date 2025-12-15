@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')
    <h1 class="container-md text-center mx-auto fs-3 text-bg-primary text-black display-1">Alumnos</h1>
    <div class="d-flex justify-content-center input-group  mb-3 px-p4 mx-auto m-5">
        <table class="table table-success table-striped w-auto p-3 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Lenguaje de programacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $student)
                    @if (is_array($student))

                        <tr>
                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['name'] }}</td>
                            <td>{{ $student['email'] }}</td>
                            <td>{{ $student['phone'] }}</td>
                            <td>{{ $student['language'] }}</td>
                            <td>
                                <a href="{{ route('students.view', ['id' => $student['id']]) }}"
                                    class="btn btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('students.delete', ['id' => $student['id']]) }}"
                                    class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="6" class="text-center">No hay registros disponibles.</td>
                        </tr>
                        @break

                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
@endsection