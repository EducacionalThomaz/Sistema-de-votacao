<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style-config.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/votation.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('./js/jquery-3.6.0.js') }}"></script>
        <title>Vottation</title>
    </head>
    <body>
        <header>
            <div class="header-items">
                <div class="logo">
                    <h1><a href="/enquetes">Vottation</a></h1>
                </div>
                <div class="links">
                    <ul class="links-list">
                        <a href="/enquetes"><li id="active">
                            <form action="{{ route('user.logout') }}" method="POST">
                                @csrf
                                <button id="button-logout" type="submit">Desconectar</button>
                            </form></li></a>
                        <a onclick="openModal('modal-criar')"><li>Nova Enquete</li></a>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &copy; Eduspace
        </footer>
        <script type="text/javascript" src="{{ asset('./js/script.js') }}"></script>
    </body>
</html>