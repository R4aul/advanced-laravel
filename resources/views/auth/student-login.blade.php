@extends('auth.auth')

@section('title', 'Login | Estudiantes')
@section('heading', 'Acceso Estudiantes')

@section('content')
    <form method="POST" action="{{route('student.login')}}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Matrícula</label>
            <input type="text" name="matricula" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-green-200">
            @error('matricula')
                <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Contraseña</label>
            <input type="password" name="password" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-green-200">
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Iniciar sesión
        </button>

        <p class="text-center text-sm text-gray-500 mt-4">
            ¿Eres docente o administrador?
            <a href="{{ route('admin.login.form') }}" class="text-green-600 hover:underline">
                Ingresa aquí
            </a>
        </p>
    </form>
@endsection
