<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мои долги</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('/css/layouts/main_layout.css') }}">
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}"></script>

    @yield('css')
</head>
<body>
    {{-- NAVIGATION --}}
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="/">
                {{-- <img src="{{ asset('/img/logo.svg') }}" alt="" height="35" class="d-inline-block align-text-top"> --}}
                <span class="blue">Мои</span><span class="red">Долги</span>
            </a>
        
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline">
                        Личный кабинет
                    </span>
        
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill"
                        viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="login">Вход</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row bg-primary pr-0">
            <a href="/" class="col-12 col-md-4 py-2 text-center text-light text-decoration-none fw-bold nav-link">
                <img src="{{ asset('/img/logo/fssp.svg') }}" alt="" height="23" class="d-inline-block align-text-top">
                Поиск долгов физлиц РФ
            </a>
            <a href="company" class="col-12 col-md-4 py-2 text-center text-light text-decoration-none fw-bold nav-link">
                <img src="{{ asset('/img/logo/fssp.svg') }}" alt="" height="23" class="d-inline-block align-text-top">
                Поиск долгов юрлиц РФ
            </a>
            <a href="gibdd" class="col-12 col-md-4 py-2 text-center text-light text-decoration-none fw-bold nav-link">
                <img src="{{ asset('/img/logo/gibdd.png') }}" alt="" height="27" class="d-inline-block align-text-top">
                Поиск штрафов ГИБДД
            </a>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="content-background pt-5">
        <div class="container py-3 px-3 shadow bg-white">
            @yield('content')
        </div>
    </div>

    <div class="container">
        <div class="row text-center mt-5">
            <a href="contacts">Контакты и реквизиты</a>
            <a href="tariffs">Тарифы</a>
        </div>
    </div>
    
    @yield('js')

</body>
</html>