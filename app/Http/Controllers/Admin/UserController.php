<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request) {
        User::create($request->validated());
        return redirect()->route('users.index')
        ->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(string $id) {
        // $user = User::where('id', $id)->first();
        if(! $user = User::find($id)) {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, string $id) {
        if(! $user = User::find($id)) {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }

        $data = $request->only('name', 'email');

        if($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update();

    return redirect()->route('users.index')
        ->with('success', 'Usuário editado com sucesso!');
    }

    public function show(string $id) {
        if(!$user = User::find($id)) {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado');
        }

        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id) {
        if(!$user = User::find($id)) {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado');
        }

    if(Auth::user()->id === $user->id) {
            return redirect()->back()->with('error', 'Você não pode deletar seu próprio perfil');
        }

        $user->delete();

        return redirect()->route('users.index')
        ->with('success', 'Usuário deletado com sucesso!');
    }
}
