@extends('admin.layouts.app')

@section('title', 'Detalhes')
@section('content')

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                      </svg>
                  Home
                </a>
              </li>
              <li class="inline-flex items-center">
                <a href="{{ route('users.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                      </svg>
                  Usuários
                </a>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-3 h-3 me-2.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                      </svg>
                  <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">{{ $user->name }}</span>
                </div>
              </li>

            </ol>
          </nav>
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="mb-5 text-3xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">Detalhes do usuário</h1>
                <div>
                    <x-alert/>
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-900 dark:text-white">Nome: {{$user->name}}</span>
                        <span class="font-semibold text-gray-900 dark:text-white">E-mail: {{$user->email}}</span>
                    </div>
                        <form class="mt-4" action="{{route('users.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Excluir</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
