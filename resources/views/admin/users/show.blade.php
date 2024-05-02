@extends('admin.layouts.app')

@section('title', 'Detalhes')
@section('content')


<h1 class="mb-5 text-4xl font-extrabold leading-none tracking-tight text-center text-gray-900 dark:text-white">Detalhes do usuário</h1>

<div class="text-center">
    <x-alert/>
<ul class="w-full space-y-1 text-center text-gray-500 list-disc dark:text-gray-400">
    <li>
        <span class="font-semibold text-gray-900 dark:text-white">Nome: {{$user->name}}</span>
    </li>
    <li>
        <span class="font-semibold text-gray-900 dark:text-white">E-mail: {{$user->email}}</span>
    </li>
    <li>
        <form class="mt-4" action="{{route('users.destroy', $user->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Excluir</button>
        </form>
    </li>
</ul>
</div>



@endsection
