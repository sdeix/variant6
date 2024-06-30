@extends('layout')
@section('content')
<body>
    <h1>Абоненты</h1>
    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Номер</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribers as $subscriber)
            <tr>
                <td>{{ $subscriber->name }}</td>
                <td>{{ $subscriber->phone }}</td>
                <td>
                    <form method="POST" action="{{ route('deleteSubscriber', $subscriber->id) }}">
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

@endsection

