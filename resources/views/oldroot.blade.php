<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acelera</title>
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="{{ route('project.list.page') }}">Lista de Projetos</a>
        </li>
        <li>
            <a href="{{ route('project.create.page') }}">Criar Projeto</a>
        </li>
    </ul>
</nav>
@yield('main')
</body>
</html>
