@extends('layout')
@section('content')


<body>
    <h1>добавить задолженность</h1>
    <form method="POST" >
        @csrf
        <label for="subscriber_id">Абонент:</label>
        <select name="subscriber_id" required>
            @foreach ($subscribers as $subscriber)
            <option value="{{ $subscriber->id }}">{{ $subscriber->name }}</option>
            @endforeach
        </select>
        <label for="subscription_fee">Абонентская плата:</label>
        <input type="number" step="0.01" name="subscription_fee" required>
        <label for="per_minute_fee">Повременная плата:</label>
        <input type="number" step="0.01" name="per_minute_fee" required>
        <button type="submit">Add Debt</button>
    </form>

</body>
</html>
@endsection