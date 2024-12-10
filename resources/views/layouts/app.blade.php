<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'JobFinding')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <x-header />
        <main>
            @yield('content')
        </main>
        <x-footer />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<footer>
    <table>
        <tr>
            <a href="https://www.linkedin.com/in/miguel-garcía-lópez-609136284" target="_blank">
                <img src="https://res.cloudinary.com/del1j3jge/image/upload/v1733839201/csrdiruuofgnk4zulpdq.webp" alt="linkedIn">
            </a>
            <a href="https://github.com/Mangel111111111" target="_blank">
                <img src="https://res.cloudinary.com/del1j3jge/image/upload/v1733839332/rwotr7xaslcpz3dv5vkg.png" alt="github">
            </a>
        </tr>
        <tr>
            <h2>Made by: Miguel Ángel García López</h2>
        </tr>
    </table>
</footer>
</html>