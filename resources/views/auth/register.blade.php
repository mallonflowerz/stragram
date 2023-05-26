@extends('layout.app')

@section('titulo')
    Registrate
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-8/12 p-5">
            <img src="{{ asset('img/usandopc.jpg') }}" alt="Registro IMG" srcset="">
        </div>
        <div class="md:w.1/2 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('crearCuenta') }}" method="POST">
                @csrf
                <div>
                    <label id="name" for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" name="name" id="name" placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg
                    @error('name')
                        border-red-500
                    @enderror" value="{{old("name")}}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label id="username" for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" name="username" id="username" placeholder="Tu username"
                        class="border p-3 w-full rounded-lg
                    @error('username')
                        border-red-500
                    @enderror" value="{{old("username")}}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label id="email" for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Tu email"
                        class="border p-3 w-full rounded-lg @error('email')
                        border-red-500
                    @enderror" value="{{old("email")}}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label id="password" for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password')
                        border-red-500
                    @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label id="password_confirmation" for="password_confirmation"
                        class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Repetir contraseña" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Crear cuenta"
                    class=" mt-3 bg-sky-600 hover:bg-sky-700 trasition-colors cursor-pointer uppercase font-bold w-full p-3 text-white
                rounded-lg">
            </form>
        </div>
    </div>
@endsection
