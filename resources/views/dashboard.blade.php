@extends('layouts.app')

@section('custom_styles')
    <style>
        body {
            background-image: url('{{ asset("images/fondo2.jpg") }}'); /* Ruta de la imagen de fondo específica para el dashboard */
        }
    </style>
@endsection

@section('header')
    <!-- Encabezado específico del dashboard -->
    <header class="py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <p class="ml-40"><a href="{{ route('dashboard') }}" class="text-pink-300 hover:text-peach-200">Dashboard</a></p>
            <ul class="flex">
                <li class="mx-2"><a href="{{ route('login') }}" class="text-pink-300 hover:text-peach-200">Login</a></li>
                <li class="mx-2"><a href="{{ route('register') }}" class="text-pink-300 hover:text-peach-200">Register</a></li>
            </ul>
        </nav>
    </header>
@endsection

@section('content')
<div id="app" class="flex justify-center items-center h-screen">
    <div class="container rounded-lg p-4 flex flex-col text-center">
        <h1 class="text-2xl font-bold mb-4 text-pink-300">¡CONTACTA Y JUEGA</h1>
        <h1 class="text-2xl font-bold mb-4 text-pink-300">DÓNDE QUIERAS!.</h1>
        <div class="flex justify-center items-center">
            <button class="bg-white border text-pink-300 font-bold py-1 px-2 rounded-full">¡Comunícate!</button>
        </div>
    </div>
</div>




@endsection
