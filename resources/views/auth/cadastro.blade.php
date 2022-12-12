<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Cadastro</title>
</head>
<body>
<main class="container">
    <h2>Cadastro</h2>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="" class="form-label">Úsuario</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div>
            <label for="" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div>
            <label for="" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <a href="{{ route('user.login') }}">Já tem uma conta? Clique aqui</a>
        <input class="button" type="submit">
    </form>
</main>
</body>
</html>