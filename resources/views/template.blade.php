<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="/user/create">Utilisateur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="/news/create">News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            @yield('content')
        </div>
    </body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>
