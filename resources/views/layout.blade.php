<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0f0f18">
    <meta name="msapplication-TileColor" content="#0f0f18">
    <meta name="theme-color" content="#0f0f18">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Cody Potter @yield('title', '')</title>
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
                <a href="/" class="navbar-brand">Cody Potter</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About me</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                        @auth()
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input class="btn nav-link" type="submit" value="logout">
                                </form>
                            </li>

                        @endauth
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

    </div>
    <footer>
        @include('partials.footer')
    </footer>
</div>
</body>
</html>