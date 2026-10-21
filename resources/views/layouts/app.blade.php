<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Matadora')</title>
    <style>
        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav div a {
            margin-right: 15px;
            color: #ddd;
            text-decoration: none;
            font-size: 24px;
        }

        header nav div a:hover {
            color: #fff;
        }
    </style>
</head>

<body style="min-height: 100vh;margin:0;">
    <div>
        <header style="color:#ddd;background-color: #3c4752; padding: 15px;">
            <nav>
                <div>
                    <a href="{{ route('index') }}">Matodora</a>
                </div>
                <div>
                    @guest
                    <a href="{{ route('loginForm') }}">Вход</a>
                    @else
                    <a href="{{ route('profile') }}">Профиль</a>
                    @if(auth()->user() && auth()->user()->login === 'Admin26')
                    <a href="{{ route('admin.panel') }}">Админ-панель</a>
                    @else
                    fflush
                    @endif


                    @endguest
                </div>
            </nav>
        </header>

        <main style="padding: 20px;">
            @yield('content')
        </main>
    </div>
</body>

</html>