@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')
    <h1 class="container-md text-center mx-auto fs-3">Nuevo Estudiante</h1>

    <div class="d-flex justify-content-center input-group  mb-3 px-p4 mx-auto m-5">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="input-group mx-auto">
                <label class="input-group-text text-center" for="name">Nombre:</label>
                <input class="col" type="text" id="name" name="name" required><br>

                <label class="input-group-text" for="email">Email:</label>
                <input class="col" type="email" id="email" name="email" required><br>

                <label class="input-group-text" for="phone">Teléfono:</label>
                <input class="col" type="text" id="phone" name="phone" required><br>

                <label class="input-group-text" for="language">Lenguaje</label>
                <input class="col" type="text" id="language" name="language" required>
           
            
       </div> <button class="btn btn-primary mx-auto d-flex justify-content-center m-3" type="submit">Guardar</button>
    </form> 
    </div>

@endsection