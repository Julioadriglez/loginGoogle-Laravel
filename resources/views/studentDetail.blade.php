@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')
    <h1 class="container-md text-center mx-auto fs-3">Detalles del Estudiante</h1>

    <div class="d-flex justify-content-center input-group  mb-3 px-p4 mx-auto m-5 w-auto p-3">


        <form action="{{ route('student.update') }}" method="POST">
            @csrf
            <div class="input-group mx-auto">
                <input type="hidden" name="id" id="id" value="{{ $student['id'] }}">
                <label class="input-group-text text-center" for="name">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $student['name'] }}" required>

                <label class="input-group-text text-center" for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $student['email'] }}" required>

                <label class="input-group-text text-center" for="phone">Teléfono:</label>
                <input type="text" name="phone" id="phone" value="{{ $student['phone'] }}">

                <label class="input-group-text text-center" for="language">Idioma:</label>
                <input type="text" name="language" id="language" value="{{ $student['language'] }}">

            </div>
            <button class="btn btn-primary mx-auto d-flex justify-content-center m-3" type="submit">Actualizar</button>

        </form>


    </div>
@endsection