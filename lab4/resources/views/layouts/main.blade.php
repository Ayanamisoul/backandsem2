<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px 30px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        nav ul li a:hover { text-decoration: underline; }
        .signin-form {
            max-width: 400px;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .signin-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .signin-form button:hover {
            background-color: #555;
        }
        .errors {
            background-color: #fdd;
            border: 1px solid #f99;
            padding: 10px 15px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .errors ul {
            margin: 0;
            padding-left: 20px;
        }
        .articles-table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        .articles-table th,
        .articles-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        .articles-table th {
            background-color: #f4f4f4;
        }
        .articles-table img {
            display: block;
            max-width: 150px;
            height: auto;
        }
        .articles-table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        .articles-table th,
        .articles-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        .articles-table th {
            background-color: #f4f4f4;
        }
        .articles-table img {
            display: block;
            max-width: 150px;
            height: auto;
        }
        main { flex: 1; padding: 30px; }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('about') }}">О нас</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                <li><a href="{{ route('signin') }}">Регистрация</a></li>
                <li><a href="{{ route('articles') }}">Новости (БД)</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Жарникова Мария Александровна, группа 251-321</p>
    </footer>
</body>
</html>