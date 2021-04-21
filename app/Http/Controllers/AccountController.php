<?php

namespace App\Http\Controllers;

use App\Models\Account;
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
            'nome'=>'required|max:15|alpha_num|max:15',
            'email'=>'required|email|max:30|unique:naccounts',
            'senha'=>'required|min:8|confirmed'
        ], [
            '*.required'=> ':Attribute é um campo obrigatório',
            'email.email'=>'Informe um email válido',
            'senha.min'=>'A senha deve ter no minimo :min caracteres',
            '*.max'=>'Permitido no maximo :max caracteres',
            'senha.confirmed'=>'A senha confirmação da senha não confere.',
            'nome.alpha_num'=>'Permitido somente letras e numeros',
            '*.unique'=>'Este :attribute já está em uso'
        ]);

        $data = request()->only(['nome','email','senha']);

        $data['password'] = md5($data['senha']);

        Account::create($data);

        return view('account.finish');
    }
}
