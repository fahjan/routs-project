@extends('layouts.template')

@section('content')
    <h1>Calculate my age</h1>

    <form action=" {{ route('calculate_age') }} " method="post">
        @csrf
        <input type="date" name="date_of_birth" value="">

        <input type="text" name="your_name">
        <br< <button type="submit">Calculate</button>
    </form>

@endsection