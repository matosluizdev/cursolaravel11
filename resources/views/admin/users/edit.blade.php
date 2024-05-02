@extends('admin.layouts.app')

@section('title', 'Edição')
@section('content')
<form class="max-w-sm mx-auto mt-10" method="POST" action="{{ route('users.update', $user->id) }}">
    @method('PUT')
    <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">Editar usuário {{$user->name}}</h1>
        @include('admin.users.partials.form')
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
  </form>

@endsection
