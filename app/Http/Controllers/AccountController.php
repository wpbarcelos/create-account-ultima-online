<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountSphere;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create(Request $request)
    {
        return view('account.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'nome'=>'required|max:15|alpha_num|max:15|unique:users_all,usersName',
            'email'=>'required|email|max:30|unique:users_all,usersEmail',
            'senha'=>'required|min:8|confirmed'
        ], [
            '*.required'=> ':Attribute é um campo obrigatório',
            'email.email'=>'Informe um email válido',
            'senha.min'=>'A senha deve ter no minimo :min caracteres',
            '*.max'=>'Permitido no maximo :max caracteres',
            'senha.confirmed'=>'Favor confirmar a senha.',
            'nome.alpha_num'=>'Permitido somente letras e numeros',
            '*.unique'=>'Este :attribute já está em uso'
        ]);

        $data = request()->only(['nome','email','senha']);

        $data['password'] = md5($data['senha']);

        Account::create([
            'usersname'=> $data['nome'],
            'usersemail'=> $data['email'],
            'userspassword'=> $data['password']
        ]);

        AccountSphere::create([
            'usersname'=> $data['nome'],
            'usersemail'=> $data['email'],
            'userspassword'=> $data['password']
        ]);

        return view('account.finish');
    }
}
