@extends('layout')
@section('content')


<body>
    <h1>добавить абонента</h1>
    <form method="POST" >
        @csrf
        <label for="name">Имя</label>
        <input type="text"  name="name" required>
        <label for="phone">Повременная плата:</label>
        <input type="number" min="80000000000" max="89999999999" name="phone" required>
        <button type="submit">Добавить абонента</button>
    </form>

</body>
</html>
@endsection