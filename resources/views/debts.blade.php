@extends('layout')
@section('content')


<body>
    <h1>Задолженности</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Абонента</th>
                <th>Абонентская плата</th>
                <th>Повременная плата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($debts as $debt)
            <tr>
                <td>{{ $debt->subscriber->name }}</td>
                <td>{{ $debt->subscription_fee }}</td>
                <td>{{ $debt->per_minute_fee }}</td>
                <td>
                    <form method="POST" action="{{ route('deleteDebt', $debt->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
@endsection
