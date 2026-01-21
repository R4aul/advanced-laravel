@extends('auth.auth')

@section('title', 'Login | Administradores')
@section('heading', 'Acceso Administradores / Docentes')

@section('content')
    <form method="POST" action="{{route('admin.login')}}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" name="email" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
            @error('email')
                <p class="text-red-700">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Contraseña</label>
            <input type="password" name="password" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Iniciar sesión
        </button>

        <p class="text-center text-sm text-gray-500 mt-4">
            ¿Eres estudiante?
            <a href="{{ route('student.login.form') }}" class="text-blue-600 hover:underline">
                Ingresa aquí
            </a>
        </p>
    </form>
@endsection
