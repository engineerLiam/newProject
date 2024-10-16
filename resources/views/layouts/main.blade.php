<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <img src="/images/logo.svg" alt="logo" width="100" height="100">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('array') }}">Массивы</a></li>
            <li><a href="{{ route('report.index') }}">Заявки</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>
            &#169; Домбровская В.Д. 2024
        </p>
    </footer>
</body>

</html>