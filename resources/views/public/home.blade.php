@extends('public.app')

@section('title', 'Inicio')

@section('content')
<div class="text-center">
    <h1 class="display-4">Bienvenido al Sistema Escolar</h1>
    <p class="lead mt-3">
        Plataforma académica para estudiantes, docentes y administración.
    </p>

    <a href="/student/login" class="btn btn-primary btn-lg mt-3">
        Acceso Estudiantes
    </a>
</div>
@endsection
