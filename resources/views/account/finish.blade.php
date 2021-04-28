<!doctype html>
<html lang='pt-br'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class='font-sans'>
    <main class='border border-gray-300 rounded m-5 p-5 max-w-screen-sm mx-auto'>
        <h1 class="text-2xl font-bold text-color-gray-800">Parabéns!</h1>
        <p class="mt-2">Conta criada com sucesso</p>

        <p class="mt-8">
            <a href="{{ route('account.create') }}" class="rounded mt-10 py-2 bg-blue-500 px-10 text-white"> ←
                Voltar</a>
        </p>
    </main>
</body>

</html>