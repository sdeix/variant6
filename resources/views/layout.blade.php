<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0 0 10px 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
    <title>Картотека автомагазина</title>
</head>

<body>
    <ul>

        @if (Auth::user())


            
            
            <li><a href="/subscribers">Абоненты</a></li>
            <li><a href="/debts">Задолженности</a></li>
            <li><a href="/addDebt">Добавить задолженность</a></li>
            <li><a href="/addSub">Добавить Абонента</a></li>
            <li><a href="/logout">Выйти</a></li>
        @else
            <li> <a href="/register">Регистрация</a></li>
            <li> <a href="/login">Войти</a></li>


        @endif

    </ul>
    @yield('content')
</body>

</html>