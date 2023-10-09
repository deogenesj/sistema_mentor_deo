<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Mentor</title>
</head>
<body>
    <h1>Sistema Mentor</h1>
    <div>
        <h2>Faça seu login: </h2>
        <form action="/logar" method="POST">
            <input type="text" name="login">
            <input type="text" name="senha">
            <button>Logar</button>
        </form>
    </div>

    <div>
        <h2>Faça seu cadastro</h2>
        <form action="/cadastrar" method="POST">
            @csrf
            <label for="cadastro-login">Login:</label>
            <input value="{{old('nome')}}" type="text" name="nome" id="cadastro-login">
            @error('nome')
                <p>{{$message}}</p>
            @enderror

            <label for="cadastro-email">Email:</label>
            <input value="{{old('email')}}" type="text" name="email" id="cadastro-email">
            @error('email')
                <p>{{$message}}</p>
            @enderror

            <label for="cadastro-senha">Senha:</label>
            <input type="password" name="senha" id="cadastro-senha">
            @error('senha')
                <p>{{$message}}</p>
            @enderror

            <label for="cadastro-senha-confirmacao">Confirme:</label>
            <input type="password" name="senha_confirmation" id="cadastro-senha-confirmation">
            @error('senha_confirmation')
                <p>{{$message}}</p>
            @enderror

            <button >Cadastrar</button>
        </form>
    </div>
</body>
</html>

