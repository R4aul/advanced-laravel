@extends('admin.layouts.app')
@section('title', 'Crear Estudiante')
@section('content')
    <div class="p-4 sm:ml-64 mt-14">

        <div class="p-4 border-2 border-default border-dashed rounded-base">

            <h2 class="mb-4 text-xl font-bold text-gray-900">Crear un nuevo estudiante</h2>
            <form action="{{route('admin.students.store')}}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="Escribe el nombre">
                        @error('name')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">Matricula</label>
                        <input type="text" name="matricula" id="brand"
                            value="{{old('matricula')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Escribe la matricula">
                        @error('matricula')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="price"
                            value="{{old('email')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="test@example.com">
                        @error('email')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                        <input type="password" name="password" id="price"
                            value="{{old('password')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Contraseña">
                        @error('password')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Telefono</label>
                        <input type="text" name="phone" id="price"
                            value="{{old('phone')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Telefono del estudiante">
                        @error('phone')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Direccion</label>
                        <input type="text" name="address" id="price"
                            value="{{old('address')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Direccion">
                        @error('address')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Fecha de nacimiento</label>
                        <input type="date" name="birth_date" id="price"
                            value="{{old('birth_date')}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Fecha de nacimiento">
                        @error('birth_date')
                            <p class="text-red-700 p-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="pt-4">

                    <button type="submit"
                        class="text-white bg-dark box-border border border-transparent hover:bg-dark-strong focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Crear nuevo estudiante</button>
                </div>
            </form>
        </div>
    </div>
@endsection
