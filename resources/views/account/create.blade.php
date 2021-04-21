<!doctype html>
<html lang='pt-br'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class='font-sans'>
    <main class='border border-gray-300 rounded m-5 p-5 max-w-screen-sm mx-auto'>
        <h1 class='text-2xl font-semibold mb-4'>Cadastro de Nova Conta</h1>
        <form action="{{ route('account.store')}}" method='post'>
            @csrf
            <fieldset class='mb-5'>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value='{{ old("nome")}}' placeholder="Informe o seu nome"
                    class="w-full p-3 py-2 bg-gray-50 border-gray-300 focus:border-gray-500 placeholder-gray-600 focus:placeholder-gray-300  outline-none rounded 
                    @error('nome') border-2 border-red-500 bg-red-50 @else border  @enderror">
                @error('nome')
                <p class='p-2 text-red-500'>{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class='mb-5'>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value='{{ old("email")}}' placeholder="Informe o seu email"
                    class="w-full p-3 py-2 bg-gray-50 border-gray-300 focus:border-gray-500 placeholder-gray-600 focus:placeholder-gray-300  outline-none rounded 
                    @error('email') border-2 border-red-500 bg-red-50 @else border  @enderror">
                @error('email')
                <p class='p-2 text-red-500'>{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class='mb-5'>
                <label for="senha">Senha <span class='text-gray-700'>(No mínimo 8 caracteres)</span></label>
                <input type="password" name="senha" id="senha" value=''
                    placeholder="Informe o seu senha, no minimo 8 caracteres" class="w-full p-3 py-2 bg-gray-50 border-gray-300 focus:border-gray-500 placeholder-gray-600 focus:placeholder-gray-300  outline-none rounded 
                    @error('senha') border-2 border-red-500 bg-red-50 @else border  @enderror">
                @error('senha')
                <p class='p-2 text-red-500'>{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class='mb-5'>
                <label for="senha_confirmation">Confirma senha</label>
                <input type="password" name="senha_confirmation" id="senha_confirmation"
                    placeholder="Repita a senha para confirmar" min=8
                    class='w-full p-3 py-2 bg-gray-50 border-gray-300 focus:border-gray-500 placeholder-gray-600 focus:placeholder-gray-300 border outline-none rounded'>
            </fieldset>

            <button type="submit" class='my-4 bg-blue-500 font-bold text-white py-3 px-10 rounded'>Criar Conta</button>
        </form>
    </main>
</body>

</html>