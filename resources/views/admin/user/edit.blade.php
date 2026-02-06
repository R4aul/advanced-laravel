@extends('admin.layouts.app')
@section('title', 'Usuarios | Editar')
@section('content')
    <div class="p-4 sm:ml-64 mt-14">

        <div class="p-4 border-2 border-default border-solid rounded-base">

            <h2 class="mb-4 text-xl font-bold text-gray-900">Actualizar Usuario</h2>
            <form action="{{ route('admin.users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" 
                            name="name" 
                            id="name" 
                            value="{{ old('name',$user->name) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="Escribe el nombre completo">
                        @error('name')
                            <p class="text-red-700 p-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input 
                            type="text" 
                            name="email" 
                            value="{{ old('email',$user->email) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Escribe el email">
                        @error('email')
                            <p class="text-red-700 p-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Especialidad</label>
                        <input 
                            type="text" 
                            name="specialty" 
                            value="{{ old('specialty', $user->teacher->specialty) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Escirbe la especialidad">
                        @error('specialty')
                            <p class="text-red-700 p-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Fecha de registro</label>
                        <input 
                            type="date" 
                            name="hire_date" 
                            value="{{ old('hire_date', $user->teacher->hire_date) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        @error('hire_date')
                            <p class="text-red-700 p-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="pt-4">

                    <button type="submit"
                        class="text-white bg-dark box-border border border-transparent hover:bg-dark-strong focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Crear
                        nuevo usuario</button>
                </div>
            </form>
        </div>
    </div>
@endsection
